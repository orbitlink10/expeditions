<?php

namespace App\Http\Controllers;

use App\Support\HomepageContentManager;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(HomepageContentManager $homepageContentManager): View
    {
        return view('home', $homepageContentManager->getHomeViewData());
    }
}
