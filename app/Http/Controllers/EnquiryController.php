<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EnquiryController extends Controller
{
    public function __invoke(): View
    {
        return view('enquire', [
            'title' => 'Enquire | Caracal Expeditions',
            'description' => 'Send a safari enquiry to Caracal Expeditions or call the team directly.',
            'brand' => [
                'name' => 'Caracal',
                'subtitle' => 'Expeditions',
                'full_name' => 'Caracal Expeditions',
                'logo_url' => asset('images/caracal-expeditions-profile.svg'),
            ],
            'companyEmail' => 'info@caracalexpeditions.co.ke',
            'companyPhone' => '+254701942724',
            'companyPhoneLabel' => '+254 701 942 724',
        ]);
    }
}
