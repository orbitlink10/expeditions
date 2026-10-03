<?php

namespace App\Http\Controllers;

use App\Support\SeoPageRegistry;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SeoPageController extends Controller
{
    public function __invoke(Request $request, SeoPageRegistry $registry): View
    {
        $page = $registry->find($request->path());

        abort_if($page === null, 404);

        $related = collect($page['related'] ?? [])
            ->map(fn (string $relatedPath) => $registry->find($relatedPath))
            ->filter()
            ->values()
            ->all();

        $viewData = [
            'title' => $page['title'],
            'description' => $page['description'],
            'htmlLang' => explode('-', $page['locale'] ?? 'en')[0],
            'canonical' => $page['canonical'],
            'alternates' => $registry->alternates($page),
            'ogImage' => asset($page['hero_image'] ?? $registry->site()['default_image']),
            'ogType' => 'website',
            'schemas' => $registry->schema($page),
            'page' => $page,
            'nav' => $registry->nav(),
            'locales' => $registry->localeOptions($page),
            'breadcrumbs' => $registry->breadcrumbs($page),
            'relatedPages' => $related,
            'hubChildren' => isset($page['hub']) ? $registry->children($page['hub']) : [],
            'brand' => [
                'name' => 'Caracal',
                'subtitle' => 'Expeditions',
                'full_name' => 'Caracal Expeditions',
                'logo_url' => asset('images/caracal-expeditions-profile.jpg'),
            ],
            'companyEmail' => config('company.email'),
            'companyDirectEmailUrl' => config('company.direct_email_url'),
            'companyPhone' => config('company.phone'),
            'companyPhoneLabel' => config('company.phone_label'),
            'companyWhatsapp' => config('company.whatsapp_phone'),
        ];

        $template = $page['template'] ?? 'page';

        return view('seo.'.$template, $viewData);
    }
}
