<?php

namespace App\Http\Controllers;

use App\Support\HomepageContentManager;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(HomepageContentManager $homepageContentManager): View
    {
        $data = $homepageContentManager->getHomeViewData();

        $data['canonical'] = url('/').'/';
        $data['ogType'] = 'website';
        $data['ogImage'] = asset($data['hero']['image'] ?? config('seo.site.default_image'));

        return view('home', $data);
    }
}
