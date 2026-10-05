<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\SeoPageContent;
use App\Support\EnquiryNotifier;
use App\Support\HomepageContentManager;
use App\Support\SeoPageRegistry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class DashboardManagementController extends Controller
{
    private function viewData(Request $request, string $activeMenu): array
    {
        return [
            ...app(HomepageContentManager::class)->getDashboardEditorData(),
            'dashboardUser' => $request->session()->get('dashboard_username', config('dashboard.username')),
            'activeMenu' => $activeMenu,
            'navLinks' => [
                ['label' => 'Home', 'href' => route('dashboard'), 'code' => 'HM'],
                ['label' => 'Departures', 'href' => route('dashboard').'#departures', 'code' => 'DP'],
                ['label' => 'Regions', 'href' => route('dashboard').'#regions', 'code' => 'RG'],
                ['label' => 'Concierge', 'href' => route('dashboard').'#concierge', 'code' => 'CQ'],
                ['label' => 'Homepage Content', 'href' => route('dashboard.homepage.edit'), 'code' => 'HC'],
                ['label' => 'Published Pages', 'href' => route('dashboard.pages.index'), 'code' => 'PG'],
                ['label' => 'Enquiries', 'href' => route('dashboard.enquiries.index'), 'code' => 'EQ'],
                ['label' => 'Settings', 'href' => route('dashboard.settings.edit'), 'code' => 'ST'],
            ],
        ];
    }

    public function pages(Request $request, SeoPageRegistry $registry)
    {
        $pages = [];

        foreach (array_keys($registry->pages()) as $path) {
            $page = $registry->find($path);

            if ($page === null) {
                continue;
            }

            $page['type'] = $page['template'] ?? (isset($page['itinerary']) ? 'itinerary' : 'page');
            $pages[] = $page;
        }

        $localeLabels = collect(config('seo.locales', []))->map(fn ($locale) => $locale['label']);

        $groups = collect($pages)
            ->groupBy(fn ($page) => $page['hreflang'] ?? ($page['locale'] ?? 'en'))
            ->sortKeys();

        return view('dashboard-pages', [
            ...$this->viewData($request, 'PG'),
            'title' => 'Published Pages | Caracal Expeditions',
            'groups' => $groups,
            'localeLabels' => $localeLabels,
            'totalPages' => count($pages),
            'totalLocales' => $groups->count(),
            'overridden' => array_keys($registry->overrides()),
        ]);
    }

    public function editPage(Request $request, SeoPageRegistry $registry)
    {
        $path = (string) $request->query('path', '');
        $base = $registry->basePages();

        abort_unless(isset($base[$path]), 404);

        return view('dashboard-pages-edit', [
            ...$this->viewData($request, 'PG'),
            'title' => 'Edit page | Caracal Expeditions',
            'page' => $registry->find($path),
            'pagePath' => $path,
            'hasOverride' => $registry->overrideFor($path) !== null,
            'basePage' => $base[$path],
            'pageKeys' => array_keys($base),
        ]);
    }

    public function updatePage(Request $request, SeoPageRegistry $registry)
    {
        $path = (string) $request->query('path', '');
        $base = $registry->basePages();

        abort_unless(isset($base[$path]), 404);

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:400'],
            'h1' => ['required', 'string', 'max:255'],
            'eyebrow' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:1000'],
            'hero_image' => ['nullable', 'string', 'max:255'],
            'hero_alt' => ['nullable', 'string', 'max:255'],
        ]);

        $basePage = $base[$path];
        $content = [];

        foreach (['eyebrow', 'h1', 'title', 'description', 'subtitle', 'hero_image', 'hero_alt'] as $key) {
            $value = $request->input($key);

            if (is_string($value) && trim($value) !== '') {
                $content[$key] = trim($value);
            }
        }

        foreach (['stats' => ['value', 'label'], 'facts' => ['label', 'value']] as $key => $fields) {
            if (array_key_exists($key, $basePage) && $request->boolean($key.'_present')) {
                $content[$key] = $this->collectList($request->input($key, []), $fields);
            }
        }

        if (array_key_exists('sections', $basePage) && $request->boolean('sections_present')) {
            $content['sections'] = collect($request->input('sections', []))
                ->map(function ($section) {
                    $paragraphs = $this->linesToArray($section['paragraphs'] ?? '');
                    $bullets = $this->linesToArray($section['bullets'] ?? '');
                    $built = [
                        'title' => trim((string) ($section['title'] ?? '')),
                        'paragraphs' => $paragraphs,
                    ];

                    if (! empty($section['kicker'])) {
                        $built['kicker'] = trim((string) $section['kicker']);
                    }

                    if ($bullets !== []) {
                        $built['bullets'] = $bullets;
                    }

                    return $built;
                })
                ->filter(fn ($section) => $section['title'] !== '' || $section['paragraphs'] !== [])
                ->values()
                ->all();
        }

        if (array_key_exists('itinerary', $basePage) && $request->boolean('itinerary_present')) {
            $content['itinerary'] = $this->collectList($request->input('itinerary', []), ['day', 'title', 'text']);
        }

        foreach (['inclusions', 'exclusions'] as $key) {
            if (array_key_exists($key, $basePage) && $request->boolean($key.'_present')) {
                $content[$key] = $this->linesToArray($request->input($key, ''));
            }
        }

        if (array_key_exists('faqs', $basePage) && $request->boolean('faqs_present')) {
            $content['faqs'] = collect($request->input('faqs', []))
                ->map(fn ($faq) => [
                    'q' => trim((string) ($faq['q'] ?? '')),
                    'a' => trim((string) ($faq['a'] ?? '')),
                ])
                ->filter(fn ($faq) => $faq['q'] !== '' || $faq['a'] !== '')
                ->values()
                ->all();
        }

        if (array_key_exists('related', $basePage) && $request->boolean('related_present')) {
            $content['related'] = collect($request->input('related', []))
                ->map(fn ($key) => trim((string) $key))
                ->filter()
                ->values()
                ->all();
        }

        SeoPageContent::updateOrCreate(['path' => $path], ['content' => $content]);

        return redirect()
            ->route('dashboard.pages.edit', ['path' => $path])
            ->with('status', 'Page saved. Your changes are now live on the public website.');
    }

    public function resetPage(Request $request)
    {
        $path = (string) $request->query('path', '');

        SeoPageContent::where('path', $path)->delete();

        return redirect()
            ->route('dashboard.pages.edit', ['path' => $path])
            ->with('status', 'Page reset to the original content.');
    }

    private function collectList($rows, array $fields): array
    {
        return collect(is_array($rows) ? $rows : [])
            ->map(function ($row) use ($fields) {
                $item = [];

                foreach ($fields as $field) {
                    $item[$field] = trim((string) ($row[$field] ?? ''));
                }

                return $item;
            })
            ->filter(fn ($item) => implode('', $item) !== '')
            ->values()
            ->all();
    }

    private function linesToArray($value): array
    {
        return collect(preg_split('/\r\n|\r|\n/', (string) $value))
            ->map(fn ($line) => trim($line))
            ->filter()
            ->values()
            ->all();
    }

    public function enquiries(Request $request)
    {
        $request->validate(['status' => ['nullable', Rule::in(['new', 'contacted', 'closed'])]]);
        return view('dashboard-enquiries', [
            ...$this->viewData($request, 'EQ'),
            'title' => 'Enquiries | Caracal Expeditions',
            'enquiries' => Enquiry::query()->when($request->filled('status'), fn ($query) => $query->where('status', $request->status))->latest('id')->paginate(15)->withQueryString(),
            'newCount' => Enquiry::where('status', 'new')->count(),
        ]);
    }

    public function updateEnquiry(Request $request, Enquiry $enquiry)
    {
        $enquiry->update($request->validate(['status' => ['required', Rule::in(['new', 'contacted', 'closed'])]]));
        return back()->with('status', 'Enquiry status updated.');
    }

    public function notify(Enquiry $enquiry, EnquiryNotifier $notifier)
    {
        abort_if($enquiry->notification_status === 'sent', 422, 'This notification has already been sent.');
        $sent = $notifier->send($enquiry);
        return back()->with($sent ? 'status' : 'error', $sent ? 'Notification sent.' : 'Notification was not sent. Check notification settings and the server mail configuration.');
    }

    public function settings(Request $request)
    {
        return view('dashboard-settings', [...$this->viewData($request, 'ST'), 'title' => 'Settings | Caracal Expeditions']);
    }

    public function saveSettings(Request $request)
    {
        $settings = $request->validate([
            'notification_email' => ['required', 'email', 'max:160'],
            'notifications_enabled' => ['required', 'boolean'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['required', 'regex:/^\+?[0-9]{7,15}$/'],
            'phone_label' => ['required', 'string', 'max:60'],
            'whatsapp_phone' => ['required', 'regex:/^[0-9]{7,15}$/'],
        ]);
        DB::transaction(function () use ($settings) {
            foreach ($settings as $key => $value) {
                DB::table('site_settings')->updateOrInsert(['key' => $key], ['value' => (string) $value, 'updated_at' => now(), 'created_at' => now()]);
            }
        });
        return back()->with('status', 'Settings saved.');
    }
}
