<?php

namespace App\Support;

use App\Models\HomepageContent;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HomepageContentManager
{
    private const PAGE_KEY = 'home';

    public function getHomeViewData(): array
    {
        $record = $this->getRecord();
        $content = $this->getContent($record);
        $brand = $this->buildBrandData($content, $record?->logo_path);

        return [
            'title' => $content['seo']['title'],
            'description' => $content['seo']['description'],
            'brand' => $brand,
            'menuLinks' => [
                ['label' => 'Destinations', 'href' => '#destinations'],
                ['label' => 'Journeys', 'href' => '#journeys'],
                ['label' => 'Experiences', 'href' => '#experiences'],
                ['label' => 'FAQ', 'href' => '#faq'],
                ['label' => 'Enquire', 'href' => '#enquire'],
                ['label' => 'Dashboard', 'href' => route('login')],
            ],
            'menuDrawer' => $content['menuDrawer'],
            'hero' => $content['hero'],
            'featured' => $content['featured'],
            'story' => $content['story'],
            'journeysSection' => $content['journeysSection'],
            'experiencesSection' => $content['experiencesSection'],
            'tailorBand' => $content['tailorBand'],
            'faqSection' => $content['faqSection'],
            'footer' => $content['footer'],
            'destinations' => $content['destinations'],
            'signatureJourneys' => $content['signatureJourneys'],
            'experiences' => $content['experiences'],
            'faqs' => $content['faqs'],
            'footerGroups' => [
                [
                    'title' => 'Connect',
                    'items' => [
                        ['label' => 'Travel Journal', 'href' => '#'],
                        ['label' => 'Wildlife Notes', 'href' => '#'],
                        ['label' => 'Traveller Stories', 'href' => '#'],
                    ],
                ],
                [
                    'title' => 'Discover',
                    'items' => [
                        ['label' => 'Signature Journeys', 'href' => '#journeys'],
                        ['label' => 'Safari Regions', 'href' => '#destinations'],
                        ['label' => 'Kenya + Coast', 'href' => '#journeys'],
                    ],
                ],
                [
                    'title' => 'Explore',
                    'items' => [
                        ['label' => 'About Caracal', 'href' => '#'],
                        ['label' => 'Conservation', 'href' => '#'],
                        ['label' => 'Why Kenya', 'href' => '#faq'],
                        ['label' => 'Operations Dashboard', 'href' => route('login')],
                    ],
                ],
                [
                    'title' => 'Travel Notes',
                    'items' => [
                        ['label' => 'Visa & Entry', 'href' => '#faq'],
                        ['label' => 'Packing Advice', 'href' => '#faq'],
                        ['label' => 'Enquiry Form', 'href' => '#enquire'],
                    ],
                ],
            ],
        ];
    }

    public function getDashboardEditorData(): array
    {
        $record = $this->getRecord();
        $content = $this->getContent($record);

        return [
            'homepageContent' => $content,
            'homepageBrand' => $this->buildBrandData($content, $record?->logo_path),
            'homepageLastUpdatedAt' => $record?->updated_at?->format('d M Y, H:i'),
        ];
    }

    public function save(array $content, ?UploadedFile $logo = null, bool $removeLogo = false): HomepageContent
    {
        $record = HomepageContent::query()->firstOrNew([
            'page' => self::PAGE_KEY,
        ]);

        $currentLogoPath = $record->logo_path;

        if ($removeLogo && $currentLogoPath !== null) {
            $this->deleteLogo($currentLogoPath);
            $currentLogoPath = null;
        }

        if ($logo !== null) {
            $this->deleteLogo($currentLogoPath);
            $currentLogoPath = $this->storeLogo($logo);
        }

        $record->fill([
            'content' => $content,
            'logo_path' => $currentLogoPath,
        ])->save();

        return $record;
    }

    private function getRecord(): ?HomepageContent
    {
        return HomepageContent::query()->firstWhere('page', self::PAGE_KEY);
    }

    private function getContent(?HomepageContent $record): array
    {
        return array_replace_recursive($this->defaults(), $record?->content ?? []);
    }

    private function buildBrandData(array $content, ?string $logoPath): array
    {
        $name = trim((string) Arr::get($content, 'brand.name', 'Caracal'));
        $subtitle = trim((string) Arr::get($content, 'brand.subtitle', 'Expeditions'));

        return [
            'name' => $name,
            'subtitle' => $subtitle,
            'full_name' => trim($name.' '.$subtitle),
            'logo_path' => $logoPath,
            'logo_url' => $logoPath !== null ? asset($logoPath) : null,
        ];
    }

    private function storeLogo(UploadedFile $logo): string
    {
        $directory = public_path('uploads/logos');

        if (! File::isDirectory($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $extension = strtolower((string) $logo->getClientOriginalExtension());
        $filename = Str::uuid()->toString().($extension !== '' ? '.'.$extension : '');

        $logo->move($directory, $filename);

        return 'uploads/logos/'.$filename;
    }

    private function deleteLogo(?string $logoPath): void
    {
        if ($logoPath === null || ! str_starts_with($logoPath, 'uploads/logos/')) {
            return;
        }

        $absolutePath = public_path($logoPath);

        if (File::exists($absolutePath)) {
            File::delete($absolutePath);
        }
    }

    private function defaults(): array
    {
        return [
            'brand' => [
                'name' => 'Caracal',
                'subtitle' => 'Expeditions',
            ],
            'seo' => [
                'title' => 'Caracal Expeditions | Luxury Kenya Safaris',
                'description' => 'Caracal Expeditions crafts private Kenya safaris with seamless air transfers, elegant camps, conservation-led guiding and Indian Ocean extensions.',
            ],
            'menuDrawer' => [
                'kicker' => 'Travel Design Desk',
                'title' => 'Private Kenya safaris, built around your pace.',
                'body' => 'Tell us when you want to travel, how you prefer to move, and what kind of camps feel right.',
                'buttonLabel' => 'Start planning',
            ],
            'hero' => [
                'eyebrow' => 'Privately tailored safaris across Kenya',
                'title' => 'Caracal Expeditions',
                'subtitle' => 'Luxury journeys through the Masai Mara, Laikipia, Amboseli, Samburu and the Swahili coast, designed around wildlife, stillness and effortless logistics.',
                'image' => 'images/hero-samburu.jpg',
                'breadcrumbs' => ['Kenya', 'Luxury Safaris', 'Bespoke Itineraries'],
                'buttons' => [
                    'primary' => 'Plan My Safari',
                    'secondary' => 'View Signature Tours',
                ],
                'stats' => [
                    ['value' => 'Private', 'label' => 'Guides, vehicles and pacing'],
                    ['value' => 'Fly-In', 'label' => 'Bush circuits that cut road time'],
                    ['value' => 'Coast+', 'label' => 'Safari and Indian Ocean extensions'],
                ],
            ],
            'featured' => [
                'badgeTop' => 'WILD LUXE',
                'badgeYear' => '2026',
                'title' => 'Designed for travellers who want Kenya with depth, polish and room to breathe.',
                'subtitle' => 'Caracal Expeditions combines conservation-led guiding, elegant camps and seamless air connections for journeys that feel cinematic without becoming hectic.',
            ],
            'story' => [
                'eyebrow' => 'Kenya without compromise',
                'title' => 'Classic safari energy, translated into a calmer, more tailored pace.',
                'paragraphs' => [
                    'From dawn game drives in the Masai Mara to conservation-led stays in Laikipia and soft landings on the Swahili coast, every itinerary is shaped around how you like to travel.',
                    "We focus on privately guided journeys, handpicked camps and flight connections that reduce transit time, so more of your holiday is spent in the wild, at the lodge or under Kenya's vast evening skies.",
                ],
                'panelKicker' => 'Planning lens',
                'panelTitle' => 'What we design best',
                'panelItems' => [
                    'Private safari vehicles and highly rated local guides',
                    'Bush flights between key regions and camps',
                    'Family, honeymoon and photography itineraries',
                    'Kenya-only or safari-and-beach combinations',
                ],
            ],
            'journeysSection' => [
                'kicker' => 'Signature journeys',
                'title' => 'Safari itineraries with lift, texture and breathing room.',
                'intro' => 'Each route is a starting point. We tune camp style, guiding depth, pace and region mix around how you want the trip to feel.',
            ],
            'experiencesSection' => [
                'kicker' => 'Experiences',
                'title' => 'Moments we use to shape the tone of a trip.',
                'intro' => 'Wildlife is the anchor, but pacing, access and mood are what turn a strong safari into a memorable one.',
            ],
            'tailorBand' => [
                'kicker' => 'Tailormake your stay',
                'title' => 'Talk to a travel specialist to tailor your time in Kenya from bush airstrips to barefoot coastlines.',
                'body' => 'Tell us your travel window, pace, style of camp and whether you want classic wildlife, family time, photography or a slower honeymoon rhythm.',
                'buttonLabel' => 'Enquire Now',
            ],
            'faqSection' => [
                'kicker' => 'Frequently asked questions',
                'title' => 'A few of the planning questions we hear most.',
                'intro' => "Start here if you're comparing seasons, routing or whether Kenya is right for a first safari.",
            ],
            'footer' => [
                'intro' => 'Caracal Expeditions crafts Kenya safaris with private guides, bush flights and Indian Ocean extensions for travellers who want the wild to feel polished, not packaged.',
                'chatTitle' => "We're online.",
                'chatBody' => 'Start planning your Kenya journey',
            ],
            'destinations' => [
                [
                    'title' => 'Masai Mara',
                    'region' => 'Predator country',
                    'summary' => 'Open plains, golden light and a rhythm of game drives tuned for lion, leopard, migration drama and long sundowners.',
                    'image' => 'images/safari-giraffe.jpg',
                    'cta' => 'Explore the Mara',
                ],
                [
                    'title' => 'Samburu & Lewa',
                    'region' => 'Northern Kenya',
                    'summary' => 'Drier, moodier landscapes with striking wildlife, conservation stories and a stronger sense of space and solitude.',
                    'image' => 'images/samburu-elephant.jpg',
                    'cta' => 'See the North',
                ],
                [
                    'title' => 'Amboseli & Tsavo',
                    'region' => 'Big skies',
                    'summary' => 'Elephant country framed by dramatic horizons, with photogenic sightings and easy add-ons to the coast.',
                    'image' => 'images/tsavo-giraffes.jpg',
                    'cta' => 'Discover the South',
                ],
            ],
            'signatureJourneys' => [
                [
                    'tag' => 'Best Seller',
                    'meta' => 'USD 8,950 per person',
                    'duration' => '8 nights',
                    'title' => 'Mara, Laikipia and a private bush flight circuit',
                    'summary' => 'A smooth aerial hop between marquee conservancies, combining classic sightings with quieter landscapes and deeply personal guiding.',
                    'image' => 'images/safari-air.jpg',
                    'cta' => 'View Journey',
                ],
                [
                    'tag' => 'Bush + Beach',
                    'meta' => 'USD 10,400 per person',
                    'duration' => '10 nights',
                    'title' => 'Kenya safari with a Zanzibar ocean wind-down',
                    'summary' => "Split your time between Kenya's game-rich plains and the Indian Ocean, with every transfer handled from lodge deck to barefoot beach.",
                    'image' => 'images/safari-lion-drive.jpg',
                    'cta' => 'View Journey',
                ],
            ],
            'experiences' => [
                [
                    'title' => 'Open-vehicle sunrise drives',
                    'region' => 'Masai Mara',
                    'summary' => 'Leave camp at first light with your private guide and track the morning where wildlife movement is at its sharpest.',
                    'image' => 'images/mara-jeep.jpg',
                    'cta' => 'View Experience',
                ],
                [
                    'title' => 'Fly-in lodge circuits',
                    'region' => 'Across Kenya',
                    'summary' => 'Trade long road transfers for intimate flights that turn the movement between regions into part of the adventure.',
                    'image' => 'images/safari-air.jpg',
                    'cta' => 'View Experience',
                ],
                [
                    'title' => 'Golden-hour wildlife photography',
                    'region' => 'Tsavo & Amboseli',
                    'summary' => 'Build game drives around light, mood and clean sightlines for travellers who care about the frame as much as the sighting.',
                    'image' => 'images/giraffe-herd.jpg',
                    'cta' => 'View Experience',
                ],
                [
                    'title' => 'Samburu elephant encounters',
                    'region' => 'Northern Conservancies',
                    'summary' => "Explore Kenya's textured northern reserves where elephants, special species and big landscapes tell a different safari story.",
                    'image' => 'images/safari-elephant.jpg',
                    'cta' => 'View Experience',
                ],
            ],
            'faqs' => [
                [
                    'question' => 'When should I visit Kenya?',
                    'answer' => 'Kenya works beautifully year-round. We usually match your timing to green-season light, migration goals, school calendars or quieter shoulder months.',
                    'image' => 'images/giraffe-herd.jpg',
                ],
                [
                    'question' => 'How do I move between camps and regions?',
                    'answer' => 'Most journeys combine private road transfers with scheduled or chartered bush flights, which keeps the experience smooth and maximises time in camp.',
                    'image' => 'images/safari-air.jpg',
                ],
                [
                    'question' => 'Is Kenya good for families and first-time safari travellers?',
                    'answer' => 'Yes. Kenya is one of the strongest first-safari destinations in Africa, and we tailor camp style, guiding depth and downtime around your group.',
                    'image' => 'images/mara-sunset.jpg',
                ],
            ],
        ];
    }
}
