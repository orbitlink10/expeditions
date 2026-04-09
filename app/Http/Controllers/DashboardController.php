<?php

namespace App\Http\Controllers;

use App\Support\HomepageContentManager;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(Request $request, HomepageContentManager $homepageContentManager): View
    {
        return view('dashboard', [
            'title' => 'Caracal Expeditions | Safari Operations Dashboard',
            'description' => 'Live safari operations dashboard covering departures, lodge load, guest service and booking pace across Caracal Expeditions.',
            'dashboardUser' => (string) $request->session()->get('dashboard_username', config('dashboard.username')),
            ...$homepageContentManager->getDashboardEditorData(),
            'navLinks' => [
                ['label' => 'Home', 'href' => '#overview', 'code' => 'HM'],
                ['label' => 'Departures', 'href' => '#departures', 'code' => 'DP'],
                ['label' => 'Regions', 'href' => '#regions', 'code' => 'RG'],
                ['label' => 'Concierge', 'href' => '#concierge', 'code' => 'CQ'],
                ['label' => 'Content', 'href' => '#content-editor', 'code' => 'CT'],
            ],
            'hero' => [
                'eyebrow' => 'Safari operations dashboard',
                'title' => 'Keep every safari in motion.',
                'subtitle' => 'One control room for active guests, lead pace, departure readiness and lodge load across Kenya and coast extensions.',
                'image' => 'images/mara-sunset.jpg',
                'spotlight' => [
                    'eyebrow' => 'Field signal',
                    'title' => '14 departures, 48 guests and 2 charter calls need a decision window.',
                    'body' => "Most operational pressure sits on the Mara-Lewa circuit before tomorrow morning's bush-flight bank and two coast extensions closing after lunch.",
                    'stats' => [
                        ['label' => 'On time', 'value' => '91%'],
                        ['label' => 'In transit', 'value' => '7 groups'],
                        ['label' => 'At camp', 'value' => '19 parties'],
                    ],
                ],
            ],
            'summaryMetrics' => [
                [
                    'label' => 'Active guests',
                    'value' => '48',
                    'delta' => '+6 since last departure cycle',
                    'detail' => 'Spread across 12 camps and conservancies today.',
                    'tone' => 'up',
                ],
                [
                    'label' => 'Open pipeline',
                    'value' => 'USD 184k',
                    'delta' => '23 trips in proposal or hold',
                    'detail' => '71% of enquiry value is already qualified.',
                    'tone' => 'neutral',
                ],
                [
                    'label' => 'Departure readiness',
                    'value' => '92%',
                    'delta' => '3 files need documents',
                    'detail' => 'Visa checks and dietary reconfirmations remain open.',
                    'tone' => 'alert',
                ],
                [
                    'label' => 'Guest sentiment',
                    'value' => '4.8/5',
                    'delta' => '16 fresh post-trip notes',
                    'detail' => 'Photography and honeymoon journeys lead satisfaction.',
                    'tone' => 'up',
                ],
            ],
            'departures' => [
                [
                    'party' => 'Nolan Family',
                    'guests' => '5 guests',
                    'route' => 'Wilson -> Lewa -> Mara',
                    'window' => '06:40 to 11:15',
                    'lead' => 'Joseph Nderitu',
                    'status' => 'Ready',
                    'tone' => 'ready',
                ],
                [
                    'party' => 'Singh Honeymoon',
                    'guests' => '2 guests',
                    'route' => 'Mara -> Diani extension',
                    'window' => '09:10 to 14:20',
                    'lead' => 'Miriam Achieng',
                    'status' => 'Needs charter call',
                    'tone' => 'alert',
                ],
                [
                    'party' => 'Hartwell Photo Camp',
                    'guests' => '6 guests',
                    'route' => 'Samburu -> Lewa',
                    'window' => '11:30 to 16:00',
                    'lead' => 'Peter Lemuya',
                    'status' => 'Tracking',
                    'tone' => 'tracking',
                ],
                [
                    'party' => 'Okafor Family',
                    'guests' => '4 guests',
                    'route' => 'Amboseli -> Tsavo',
                    'window' => '12:20 to 17:40',
                    'lead' => 'Faith Muli',
                    'status' => 'Ready',
                    'tone' => 'ready',
                ],
                [
                    'party' => 'Meyer Private Guide',
                    'guests' => '3 guests',
                    'route' => 'Nairobi -> Mara conservancy',
                    'window' => '15:05 to 18:10',
                    'lead' => 'Daniel Kibet',
                    'status' => 'Awaiting dietary check',
                    'tone' => 'alert',
                ],
            ],
            'pipeline' => [
                ['stage' => 'Fresh enquiries', 'count' => '8 trips', 'value' => 'USD 38k', 'share' => 24],
                ['stage' => 'Proposal sent', 'count' => '7 trips', 'value' => 'USD 56k', 'share' => 35],
                ['stage' => 'Hold placed', 'count' => '5 trips', 'value' => 'USD 41k', 'share' => 26],
                ['stage' => 'Deposit pending', 'count' => '3 trips', 'value' => 'USD 49k', 'share' => 31],
            ],
            'regions' => [
                [
                    'name' => 'Mara conservancies',
                    'load' => 86,
                    'camps' => '5 camps active',
                    'focus' => 'Migration preview and honeymoon demand',
                ],
                [
                    'name' => 'Samburu and Lewa',
                    'load' => 68,
                    'camps' => '4 camps active',
                    'focus' => 'Strong photography and family pacing',
                ],
                [
                    'name' => 'Amboseli and Tsavo',
                    'load' => 57,
                    'camps' => '3 camps active',
                    'focus' => 'Elephant viewing and road-air combos',
                ],
                [
                    'name' => 'Coast extensions',
                    'load' => 74,
                    'camps' => '6 beach nights booked',
                    'focus' => 'Post-safari wind-down demand holding firm',
                ],
            ],
            'conciergeTasks' => [
                [
                    'priority' => 'Critical',
                    'task' => 'Confirm charter timing for the Singh honeymoon handoff.',
                    'owner' => 'Air desk',
                    'due' => 'Due in 45 min',
                    'tone' => 'critical',
                ],
                [
                    'priority' => 'High',
                    'task' => 'Collect two final dietary sheets for the Meyer party before camp check-in.',
                    'owner' => 'Guest experience',
                    'due' => 'Due by 13:00',
                    'tone' => 'high',
                ],
                [
                    'priority' => 'Medium',
                    'task' => 'Release unused Mara hold space if the Hartwell edit session stays in Lewa.',
                    'owner' => 'Reservations',
                    'due' => 'Due by 16:30',
                    'tone' => 'medium',
                ],
                [
                    'priority' => 'Watch',
                    'task' => 'Prepare low-season pricing notes for five coast add-on proposals.',
                    'owner' => 'Sales',
                    'due' => 'Next review at 18:00',
                    'tone' => 'watch',
                ],
            ],
            'highlights' => [
                [
                    'metric' => 'Demand hotspot',
                    'title' => 'Mara requests are arriving faster than northern circuits this week.',
                    'summary' => 'Proposal demand is clustering around quick fly-in itineraries with strong honeymoon pacing and one coast finale.',
                    'image' => 'images/mara-jeep.jpg',
                ],
                [
                    'metric' => 'Guide momentum',
                    'title' => 'Northern Kenya photo departures are delivering the strongest guest notes.',
                    'summary' => 'Samburu and Lewa itineraries are outperforming on guiding depth, special sightings and private-vehicle satisfaction.',
                    'image' => 'images/samburu-elephant.jpg',
                ],
                [
                    'metric' => 'Extension mix',
                    'title' => 'Coast nights are now attached to 43% of confirmed safari files.',
                    'summary' => 'Beach finishes continue to lift average booking value without adding much operational drag when bush flights are sequenced early.',
                    'image' => 'images/safari-air.jpg',
                ],
            ],
            'timeline' => [
                [
                    'window' => 'Tonight | 19:30',
                    'title' => 'Camp arrival reset',
                    'summary' => 'Mara lodge team needs a revised dinner hold for one delayed charter arrival.',
                ],
                [
                    'window' => 'Tomorrow | 05:45',
                    'title' => 'Photo vehicles stage out',
                    'summary' => 'Two specialist vehicles leave before sunrise for the Hartwell photography circuit.',
                ],
                [
                    'window' => 'Tomorrow | 12:10',
                    'title' => 'Coast paperwork closes',
                    'summary' => 'Three Zanzibar and Diani extension files need final passport reconfirmation before ticketing.',
                ],
                [
                    'window' => 'Next 48h',
                    'title' => 'Proposal conversion window',
                    'summary' => 'Five high-value itinerary holds are most likely to move if pricing remains unchanged through the weekend.',
                ],
            ],
        ]);
    }
}
