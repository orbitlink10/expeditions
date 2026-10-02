<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Support\EnquiryNotifier;
use App\Support\HomepageContentManager;
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
                ['label' => 'Enquiries', 'href' => route('dashboard.enquiries.index'), 'code' => 'EQ'],
                ['label' => 'Settings', 'href' => route('dashboard.settings.edit'), 'code' => 'ST'],
            ],
        ];
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
