<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Site-wide SEO identity
    |--------------------------------------------------------------------------
    | Used for canonical URLs, Open Graph defaults and Organization schema.
    */

    'site' => [
        'name' => 'Caracal Expeditions',
        'legal_name' => 'Caracal Expeditions',
        'url' => rtrim(env('SEO_SITE_URL', 'https://caracalexpeditions.co.ke'), '/'),
        'logo' => 'images/caracal-expeditions-profile.jpg',
        'default_image' => 'images/mara-sunset.jpg',
        'description' => 'Kenya-based luxury safari specialists designing private, tailor-made safari journeys for international travellers across the Masai Mara, Laikipia, Amboseli, Samburu and the Kenyan coast.',
        'country' => 'KE',
        'area_served' => 'Kenya',
        'price_currency' => 'USD',
        // Only verified profiles should be listed. Left empty intentionally.
        'same_as' => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Primary navigation for SEO pages (matches the approved theme styling)
    |--------------------------------------------------------------------------
    | Each item points at a registry key defined in "pages" below.
    */

    'nav' => [
        [
            'label' => 'Destinations',
            'items' => [
                ['label' => 'Masai Mara', 'page' => 'destinations/masai-mara'],
                ['label' => 'Amboseli', 'page' => 'destinations/amboseli'],
                ['label' => 'Laikipia', 'page' => 'destinations/laikipia'],
                ['label' => 'Samburu', 'page' => 'destinations/samburu'],
                ['label' => 'Lewa', 'page' => 'destinations/lewa'],
                ['label' => 'Ol Pejeta', 'page' => 'destinations/ol-pejeta'],
                ['label' => 'Tsavo', 'page' => 'destinations/tsavo'],
                ['label' => 'Diani Beach', 'page' => 'destinations/diani-beach'],
                ['label' => 'Watamu', 'page' => 'destinations/watamu'],
                ['label' => 'Nairobi', 'page' => 'destinations/nairobi'],
                ['label' => 'View All Destinations', 'page' => 'destinations'],
            ],
        ],
        [
            'label' => 'Journeys',
            'items' => [
                ['label' => 'Private Safaris', 'page' => 'private-safaris-kenya'],
                ['label' => 'Bespoke Safaris', 'page' => 'bespoke-luxury-safaris-kenya'],
                ['label' => 'Ultra-Luxury Safaris', 'page' => 'ultra-luxury-safaris-kenya'],
                ['label' => 'Fly-In Safaris', 'page' => 'fly-in-safaris-kenya'],
                ['label' => 'Tailor-Made Safaris', 'page' => 'tailor-made-safaris-kenya'],
                ['label' => 'Luxury Safari Packages', 'page' => 'kenya-luxury-safari-packages'],
                ['label' => 'Safari & Beach', 'page' => 'luxury-safari-and-beach-kenya'],
                ['label' => 'Honeymoon Safaris', 'page' => 'luxury-honeymoon-safaris-kenya'],
                ['label' => 'Family Safaris', 'page' => 'luxury-family-safaris-kenya'],
            ],
        ],
        [
            'label' => 'Experiences',
            'items' => [
                ['label' => 'Great Migration', 'page' => 'great-migration-safaris-kenya'],
                ['label' => 'Photographic Safaris', 'page' => 'photographic-safaris-kenya'],
                ['label' => 'Private Conservancies', 'page' => 'private-conservancy-safaris-kenya'],
                ['label' => 'Walking Safaris', 'page' => 'walking-safaris-kenya'],
                ['label' => 'Balloon Safaris', 'page' => 'hot-air-balloon-safari-masai-mara'],
                ['label' => 'Conservation Safaris', 'page' => 'conservation-safaris-kenya'],
                ['label' => 'Private Charters', 'page' => 'private-charter-safaris-kenya'],
            ],
        ],
        [
            'label' => 'Plan',
            'items' => [
                ['label' => 'Plan My Safari', 'page' => 'plan-my-safari'],
                ['label' => 'Booking & Payment', 'page' => 'booking-payment-process'],
                ['label' => 'Safari FAQ', 'page' => 'kenya-safari-faq'],
            ],
        ],
        [
            'label' => 'About',
            'items' => [
                ['label' => 'About Caracal', 'page' => 'about'],
                ['label' => 'Meet the Safari Guides', 'page' => 'meet-our-safari-guides'],
                ['label' => 'Why Caracal', 'page' => 'why-caracal-expeditions'],
                ['label' => 'Guest Reviews', 'page' => 'guest-reviews'],
                ['label' => 'Traveller Stories', 'page' => 'traveller-stories'],
                ['label' => 'Travel Advisors', 'page' => 'travel-advisors'],
                ['label' => 'Booking Terms', 'page' => 'safari-booking-terms'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | International / regional locale hubs
    |--------------------------------------------------------------------------
    | Only locales with live hub pages are rendered in the language selector.
    | Regional clusters (/us/, /uk/, /fr/, /ru/) are added in later phases.
    */

    'locales' => [
        'en' => ['label' => 'International', 'path' => ''],
        'en-us' => ['label' => 'USA', 'path' => 'us'],
        'en-gb' => ['label' => 'UK', 'path' => 'uk'],
        'fr-fr' => ['label' => 'France', 'path' => 'fr'],
        'ru-ru' => ['label' => 'Россия', 'path' => 'ru'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Page registry
    |--------------------------------------------------------------------------
    | All Phase 1 SEO landing pages. Content is intentionally editorial and
    | premium in tone. "group" is used to build hreflang clusters.
    */

    'pages' => [

        'luxury-kenya-safaris' => [
            'locale' => 'en',
            'group' => 'luxury-kenya-safaris',
            'eyebrow' => 'Private, tailor-made journeys',
            'h1' => 'Luxury Kenya Safaris',
            'title' => 'Luxury Safari Kenya | Private Tailor-Made Safaris | Caracal',
            'description' => 'Discover private luxury safaris in Kenya with expert guides, bush flights, handpicked camps and tailor-made journeys across the Mara, Laikipia and beyond.',
            'subtitle' => 'Caracal Expeditions designs private, tailor-made luxury safaris in Kenya — expert guiding, handpicked camps and bush flights that keep the journey calm, cinematic and entirely your own.',
            'hero_image' => 'images/mara-sunset.jpg',
            'hero_alt' => 'Golden-hour safari sunset on the Masai Mara plains',
            'stats' => [
                ['value' => 'Private', 'label' => 'Guides, vehicles and pacing'],
                ['value' => 'Fly-In', 'label' => 'Bush circuits that cut road time'],
                ['value' => 'Bespoke', 'label' => 'Design-led Kenya itineraries'],
            ],
            'sections' => [
                [
                    'kicker' => 'Why Caracal',
                    'title' => 'A Kenya safari built around you, not a fixed departure',
                    'paragraphs' => [
                        'We are Kenya-based safari specialists. Every journey begins with a conversation about how you like to travel — the pace, the privacy, the kind of camps that feel right — and ends with an itinerary shaped entirely around it.',
                        'There are no group departures and no recycled packages. Your safari is designed once, for you, by people who live and guide in the regions you are visiting.',
                    ],
                    'bullets' => [
                        'Private safari vehicle and dedicated guide throughout',
                        'Handpicked luxury camps and private conservancies',
                        'Bush flights between regions to maximise time in the wild',
                        'One planning contact from first idea to final transfer',
                    ],
                ],
                [
                    'kicker' => 'What defines luxury here',
                    'title' => 'Exclusivity, expertise and effortless logistics',
                    'paragraphs' => [
                        'Luxury in Kenya is less about marble and more about access. It is the quiet conservancy where you share a sighting with almost no one else, the guide who reads a track at dawn, and the bush flight that removes an entire day of driving.',
                        'We focus on privacy, thoughtful itinerary design and seamless movement between camp, airstrip and coast — so the trip feels spacious rather than scheduled.',
                    ],
                    'bullets' => [
                        'Private conservancies with low vehicle densities',
                        'Expert Kenya-based guides with deep regional knowledge',
                        'Considered pacing with genuine downtime in camp',
                        'Seamless air, road and coastal transfers',
                    ],
                ],
                [
                    'kicker' => 'Where you can travel',
                    'title' => 'The regions that define a luxury Kenya safari',
                    'paragraphs' => [
                        'Most exceptional itineraries combine two or three contrasting regions. The Masai Mara delivers predator drama and the Great Migration; Laikipia and Lewa offer privacy and conservation; Amboseli and Samburu bring elephants and big skies; the Kenyan coast closes the trip on the Indian Ocean.',
                    ],
                    'bullets' => [
                        'Masai Mara — year-round big cats and the Great Migration',
                        'Laikipia, Lewa & Ol Pejeta — private conservancies and rhino',
                        'Amboseli & Tsavo — elephant country and dramatic horizons',
                        'Samburu — arid, photogenic and quietly exclusive',
                        'Diani & Watamu — barefoot luxury on the Swahili coast',
                    ],
                ],
                [
                    'kicker' => 'How we design it',
                    'title' => 'A considered process from idea to departure',
                    'paragraphs' => [
                        'We match your travel window to the best wildlife, light and climate, then choose camps and routing that suit your group. Flights, transfers, guides and activities are arranged around that plan, not the other way around.',
                        'You receive a clear, itemised itinerary with realistic pacing and honest advice about what is and is not worth including.',
                    ],
                ],
                [
                    'kicker' => 'When to travel',
                    'title' => 'Kenya works beautifully year-round',
                    'paragraphs' => [
                        'July to October is peak season for the Great Migration and classic dry-season game viewing. January to March is warm and excellent for predators and photography. November and the long rains bring green landscapes, lower rates and superb birdlife.',
                        'We will advise honestly on the trade-offs between crowds, wildlife, climate and value for your specific dates.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'What makes a Kenya safari "luxury"?', 'a' => 'For us, luxury means private guiding, exclusive camps and conservancies, considered pacing and seamless logistics — not simply a higher price. You travel in your own vehicle, with a guide chosen for your interests, staying in small properties with excellent service.'],
                ['q' => 'How much does a luxury Kenya safari cost?', 'a' => 'Tailor-made luxury safaris typically start around USD 8,000 per person for a private 7-day journey and rise with length, season, camp tier and the use of private charters. We build an itemised proposal so you can see exactly where the budget goes.'],
                ['q' => 'Is a luxury safari private or shared?', 'a' => 'Ours are private by default. You have a dedicated vehicle and guide, and we avoid adding strangers unless you specifically request a shared experience.'],
                ['q' => 'Can you combine a safari with the Kenyan coast?', 'a' => 'Yes. A safari-and-beach itinerary is one of our most requested journeys, linking the Mara or Amboseli with Diani or Watamu for a seamless wild-to-ocean finish.'],
                ['q' => 'Do you work with travellers from the USA, UK, France and Russia?', 'a' => 'Yes. We design journeys for international travellers worldwide and can advise on routing, flights and timing from each market.'],
            ],
            'related' => ['private-safaris-kenya', 'fly-in-safaris-kenya', 'kenya-luxury-safari-packages', 'luxury-honeymoon-safaris-kenya'],
        ],

        'private-safaris-kenya' => [
            'locale' => 'en',
            'group' => 'private-safaris-kenya',
            'eyebrow' => 'Your vehicle, your guide, your pace',
            'h1' => 'Private Safaris in Kenya',
            'title' => 'Private Safari Kenya | Bespoke Guided Game Drives | Caracal',
            'description' => 'Private safaris in Kenya with your own guide and vehicle, tailor-made routing, exclusive conservancies and flexible daily game drives. Designed by Kenya-based specialists.',
            'subtitle' => 'A private Kenya safari gives you a dedicated guide, your own vehicle and total flexibility — the freedom to follow a sighting, change the plan and travel entirely on your own terms.',
            'hero_image' => 'images/mara-jeep.jpg',
            'hero_alt' => 'Private safari vehicle and guide on a game drive in Kenya',
            'stats' => [
                ['value' => '1:1', 'label' => 'Dedicated guide and vehicle'],
                ['value' => 'Flexible', 'label' => 'Daily pace set by you'],
                ['value' => 'Exclusive', 'label' => 'Low-density conservancies'],
            ],
            'sections' => [
                [
                    'kicker' => 'What private means',
                    'title' => 'The freedom to travel entirely on your own terms',
                    'paragraphs' => [
                        'On a private safari there is no shared minibus and no fixed schedule. Your guide works for you alone, which means you can linger at a leopard sighting, return to camp early for a long lunch, or set out before dawn for the best light.',
                        'It is the single biggest upgrade to the quality of a safari, and it is the default on every Caracal journey.',
                    ],
                    'bullets' => [
                        'Dedicated guide and private 4x4 throughout',
                        'Flexible game-drive timings and route changes',
                        'Activities tailored to photography, families or honeymoons',
                        'No fixed group size or shared departures',
                    ],
                ],
                [
                    'kicker' => 'Private conservancies',
                    'title' => 'Exclusive access away from the crowds',
                    'paragraphs' => [
                        'Kenya\'s private conservancies border the national reserves but limit visitor numbers. You can drive off-road where permitted, enjoy night game drives, and share the landscape with far fewer vehicles.',
                        'We combine conservancies with the classic reserves so you get both the iconic wildlife and the privacy.',
                    ],
                ],
                [
                    'kicker' => 'Guiding',
                    'title' => 'Expert Kenya-based guides who make the difference',
                    'paragraphs' => [
                        'A private safari is only as good as its guide. We match you with guides chosen for their region, their knowledge and their manner — whether that is tracking big cats, interpreting birdlife or keeping children engaged.',
                    ],
                ],
                [
                    'kicker' => 'Design',
                    'title' => 'How we build your private journey',
                    'paragraphs' => [
                        'Tell us your dates, your interests and how you like to travel. We propose regions, camps and routing, then refine it with you until the journey feels right. Everything is arranged around your private vehicle and guide.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'Is a private safari more expensive?', 'a' => 'There is a premium because the vehicle and guide are yours alone, but for two or more travellers the uplift is often smaller than expected. We will show you the difference against a shared option on request.'],
                ['q' => 'Can we have the same guide for the whole trip?', 'a' => 'Yes, wherever logistics allow we keep the same guide throughout, and only switch where a regional specialist adds real value.'],
                ['q' => 'Can we include our children?', 'a' => 'Absolutely. Private guiding is ideal for families because you control the pace and can tailor activities. See our luxury family safaris for details.'],
                ['q' => 'Can we do a private photo safari?', 'a' => 'Yes. Many of our private safaris are built around photography, with early starts, extended golden-hour drives and off-road positioning where permitted.'],
            ],
            'related' => ['luxury-kenya-safaris', 'tailor-made-safaris-kenya', 'fly-in-safaris-kenya', 'luxury-family-safaris-kenya'],
        ],

        'fly-in-safaris-kenya' => [
            'locale' => 'en',
            'group' => 'fly-in-safaris-kenya',
            'eyebrow' => 'More time in the wild, less time on the road',
            'h1' => 'Fly-In Safaris in Kenya',
            'title' => 'Fly-In Safari Kenya | Luxury Bush Flights & Circuits | Caracal',
            'description' => 'Fly-in safaris in Kenya using scheduled and private bush flights between the Masai Mara, Laikipia, Amboseli and Samburu. More time in camp, less time on the road.',
            'subtitle' => 'Bush flights turn long road transfers into part of the adventure, linking Kenya\'s finest regions by air so more of your journey is spent in the wild.',
            'hero_image' => 'images/safari-air.jpg',
            'hero_alt' => 'Light aircraft on a bush airstrip in Kenya',
            'stats' => [
                ['value' => 'By Air', 'label' => 'Between camps and regions'],
                ['value' => 'Time+', 'label' => 'More hours in the bush'],
                ['value' => 'Scenic', 'label' => 'Kenya from above'],
            ],
            'sections' => [
                [
                    'kicker' => 'Why fly',
                    'title' => 'Cut the driving and keep the safari',
                    'paragraphs' => [
                        'Kenya is vast. A road transfer between the Mara and Laikipia can consume a full day. A bush flight does it in under an hour, arriving at an airstrip minutes from camp.',
                        'Fly-in circuits are the most efficient way to combine several regions without sacrificing comfort or wildlife time.',
                    ],
                    'bullets' => [
                        'Scheduled and private charter options',
                        'Airstrip-to-camp transfers included',
                        'Combine two, three or four contrasting regions',
                        'Scenic low-level views of the Rift Valley and savannah',
                    ],
                ],
                [
                    'kicker' => 'Classic circuits',
                    'title' => 'The fly-in routes we design most',
                    'paragraphs' => [
                        'Our most requested aerial itineraries link the Masai Mara with Laikipia or Lewa, add Amboseli for elephants, or pair the Mara with Samburu in the north.',
                    ],
                    'bullets' => [
                        'Masai Mara + Laikipia',
                        'Masai Mara + Amboseli',
                        'Samburu + Laikipia + Masai Mara',
                        'Mara + Amboseli + Diani or Zanzibar',
                    ],
                ],
                [
                    'kicker' => 'Logistics',
                    'title' => 'Effortless movement, handled for you',
                    'paragraphs' => [
                        'We coordinate every flight, transfer and bag allowance around your itinerary so the day flows. Light-aircraft luggage guidance is provided in advance, and a representative meets you on the ground.',
                    ],
                ],
                [
                    'kicker' => 'Comfort',
                    'title' => 'Airborne safari, without the stress',
                    'paragraphs' => [
                        'Bush flights are simple, safe and scenic. We choose departure times that protect your game drives and avoid unnecessary early starts, and we always build in a buffer for weather.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'Are bush flights safe?', 'a' => 'Yes. We use established Kenyan operators flying well-maintained aircraft with experienced pilots on routes they fly daily.'],
                ['q' => 'How much luggage can I take?', 'a' => 'Light-aircraft baggage is usually limited to around 15kg in a soft bag. We provide exact allowances with your itinerary and can arrange storage for extra luggage.'],
                ['q' => 'Can we fly privately instead of scheduled?', 'a' => 'Yes. Private charters offer full flexibility on timing and routing and are a popular upgrade for families and groups.'],
                ['q' => 'Do fly-in safaris cost more?', 'a' => 'There is a flight cost, but it is often offset by staying in higher-value regions and spending more time in camp. We always show the trade-off clearly.'],
            ],
            'related' => ['luxury-kenya-safaris', 'private-safaris-kenya', 'kenya-luxury-safari-packages', 'luxury-safari-and-beach-kenya'],
        ],

        'tailor-made-safaris-kenya' => [
            'locale' => 'en',
            'group' => 'tailor-made-safaris-kenya',
            'eyebrow' => 'Designed once, for you',
            'h1' => 'Tailor-Made Safaris in Kenya',
            'title' => 'Tailor Made Safari Kenya | Bespoke Itinerary Design | Caracal',
            'description' => 'Tailor-made Kenya safaris designed around your dates, interests and pace. Private guiding, handpicked camps and itineraries built from scratch by Kenya specialists.',
            'subtitle' => 'No templates, no fixed departures. We design your Kenya safari from a blank page, shaped around your dates, your interests and the way you like to travel.',
            'hero_image' => 'images/safari-lion-drive.jpg',
            'hero_alt' => 'Tailor-made private game drive in Kenya',
            'stats' => [
                ['value' => 'Bespoke', 'label' => 'Built from a blank page'],
                ['value' => 'Flexible', 'label' => 'Dates and pacing'],
                ['value' => 'Personal', 'label' => 'One planning contact'],
            ],
            'sections' => [
                [
                    'kicker' => 'The difference',
                    'title' => 'Your itinerary, not someone else\'s',
                    'paragraphs' => [
                        'A tailor-made safari starts with listening. We ask about your travel style, your interests and the moments you want to remember, then design a journey that fits.',
                        'Every element — region mix, camp style, guide, pace and activities — is chosen for you rather than taken from a catalogue.',
                    ],
                    'bullets' => [
                        'Itinerary created from scratch for your group',
                        'Choice of camp style, location and tier',
                        'Pacing matched to energy, family or photography goals',
                        'Honest advice on what is worth including',
                    ],
                ],
                [
                    'kicker' => 'The process',
                    'title' => 'Four calm steps to a confirmed safari',
                    'paragraphs' => [
                        'We keep planning simple and human: a short conversation, a first proposal, a refinement round, and confirmation.',
                    ],
                    'bullets' => [
                        '1. Discovery — share dates, group and interests',
                        '2. Proposal — a clear, itemised draft itinerary',
                        '3. Refinement — adjust regions, camps and pace',
                        '4. Confirmation — booking, payments and pre-travel briefing',
                    ],
                ],
                [
                    'kicker' => 'Flexibility',
                    'title' => 'Plans that bend when you want them to',
                    'paragraphs' => [
                        'Because your journey is private, daily plans can shift with wildlife, weather or mood. That flexibility is built in from the start, not treated as an exception.',
                    ],
                ],
                [
                    'kicker' => 'Who it suits',
                    'title' => 'Ideal for travellers with particular expectations',
                    'paragraphs' => [
                        'Tailor-made design suits honeymooners, families, photographers and first-time safari travellers who want a considered introduction without joining a group.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'How far in advance should we plan?', 'a' => 'For peak season (July to October) we recommend 6 to 12 months. Outside peak dates, 3 to 6 months is usually comfortable, though we can sometimes work faster.'],
                ['q' => 'Is there a fee to design our itinerary?', 'a' => 'Planning and proposals are complimentary. You only pay when you decide to confirm your safari.'],
                ['q' => 'Can we change the itinerary later?', 'a' => 'Yes, we refine together until it is right, and remain flexible on the ground subject to availability.'],
                ['q' => 'Do you handle flights?', 'a' => 'We arrange internal bush flights and transfers and advise on international routing, though international tickets are usually booked on your side.'],
            ],
            'related' => ['luxury-kenya-safaris', 'private-safaris-kenya', 'kenya-luxury-safari-packages', 'luxury-honeymoon-safaris-kenya'],
        ],

        'kenya-luxury-safari-packages' => [
            'locale' => 'en',
            'group' => 'kenya-luxury-safari-packages',
            'eyebrow' => 'Curated journeys, fully arranged',
            'h1' => 'Kenya Luxury Safari Packages',
            'title' => 'Kenya Luxury Safari Packages | Private Tailor-Made Tours',
            'description' => 'Luxury Kenya safari packages combining handpicked camps, private guides and bush flights. Compare 7, 10, 12 and 14-day tailor-made itineraries.',
            'subtitle' => 'Our luxury Kenya safari packages are starting points — fully private, entirely adjustable and arranged end to end by Kenya-based specialists.',
            'hero_image' => 'images/giraffe-herd.jpg',
            'hero_alt' => 'Giraffes on the savannah during a luxury Kenya safari',
            'stats' => [
                ['value' => '7–14', 'label' => 'Day itinerary options'],
                ['value' => 'All-In', 'label' => 'Camps, guides and flights'],
                ['value' => 'Private', 'label' => 'No group departures'],
            ],
            'sections' => [
                [
                    'kicker' => 'What\'s included',
                    'title' => 'Complete journeys, arranged end to end',
                    'paragraphs' => [
                        'Our packages bundle the elements that make a safari effortless: handpicked luxury camps, private guiding, internal bush flights, park fees and all transfers.',
                        'Each package is a foundation we tailor to your dates, budget and interests — never a fixed departure.',
                    ],
                    'bullets' => [
                        'Accommodation in handpicked luxury camps',
                        'Private guide and 4x4 vehicle throughout',
                        'Internal bush flights and airstrip transfers',
                        'Park and conservancy fees',
                        'Full-board meals and daily game activities',
                    ],
                ],
                [
                    'kicker' => 'Duration guide',
                    'title' => 'Choosing between 7, 10, 12 and 14 days',
                    'paragraphs' => [
                        'Seven days suits a single-region focus such as the Masai Mara. Ten days allows two regions or a safari-and-beach finish. Twelve to fourteen days open up the classic multi-region circuit with time to slow down.',
                    ],
                    'bullets' => [
                        '7 days — one region, deep immersion',
                        '10 days — two regions or safari + coast',
                        '12 days — three regions with breathing room',
                        '14 days — the full Kenya journey, unhurried',
                    ],
                ],
                [
                    'kicker' => 'Camp tiers',
                    'title' => 'Matching camps to the way you travel',
                    'paragraphs' => [
                        'Kenya\'s luxury range runs from intimate tented camps to iconic lodges and exclusive-use villas. We match style, location and service to your preferences.',
                    ],
                ],
                [
                    'kicker' => 'Value',
                    'title' => 'Transparent pricing and honest advice',
                    'paragraphs' => [
                        'You receive an itemised proposal showing exactly where the budget goes, so you can adjust tier, season or length with full clarity.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'What is included in the package price?', 'a' => 'Luxury accommodation, private guiding and vehicle, internal bush flights, park fees, full-board meals and transfers are included. International flights, visas, travel insurance and premium drinks are typically excluded.'],
                ['q' => 'Can we customise a package?', 'a' => 'Yes. Every package is a template. We adjust regions, camps, length and pace until it fits you.'],
                ['q' => 'Do you offer safari and beach packages?', 'a' => 'Yes, combining the Mara or Amboseli with Diani, Watamu or Zanzibar is a signature option.'],
                ['q' => 'What deposit is required?', 'a' => 'We usually ask for a deposit to confirm, with the balance due before travel. Full details are provided with your proposal.'],
            ],
            'related' => ['luxury-kenya-safaris', 'fly-in-safaris-kenya', 'luxury-safari-and-beach-kenya', 'private-safaris-kenya'],
        ],

        'luxury-safari-and-beach-kenya' => [
            'locale' => 'en',
            'group' => 'luxury-safari-and-beach-kenya',
            'eyebrow' => 'Wilderness, then ocean',
            'h1' => 'Luxury Kenya Safari & Beach Holidays',
            'title' => 'Luxury Kenya Safari and Beach Holiday | Bush to Coast | Caracal',
            'description' => 'Combine a luxury Kenya safari with an Indian Ocean beach escape. Private guiding in the Mara, Amboseli or Laikipia, then Diani, Watamu or Zanzibar.',
            'subtitle' => 'Pair the drama of a private Kenya safari with the calm of the Indian Ocean — a seamless journey from savannah sunrise to barefoot coastline.',
            'hero_image' => 'images/tsavo-giraffes.jpg',
            'hero_alt' => 'Safari and beach holiday combination in Kenya',
            'stats' => [
                ['value' => 'Bush', 'label' => 'Private safari first'],
                ['value' => 'Beach', 'label' => 'Indian Ocean finish'],
                ['value' => 'Seamless', 'label' => 'Flights and transfers arranged'],
            ],
            'sections' => [
                [
                    'kicker' => 'The rhythm',
                    'title' => 'Why safari and beach work so well together',
                    'paragraphs' => [
                        'After days of early drives and big wildlife, the coast offers a gentle counterpoint: warm water, white sand and unhurried days. The contrast makes both halves feel more memorable.',
                        'We sequence the trip so the safari comes first and the beach restores you before the journey home.',
                    ],
                    'bullets' => [
                        'Safari first, then ocean relaxation',
                        'Internal flights link bush airstrips to the coast',
                        'Beach properties matched to your style',
                        'Ideal for honeymoons and family trips',
                    ],
                ],
                [
                    'kicker' => 'Coast choices',
                    'title' => 'Diani, Watamu and Zanzibar',
                    'paragraphs' => [
                        'Diani Beach offers long white sands and easy access, Watamu brings reef and marine life, and Zanzibar adds a different culture and spice-island atmosphere.',
                    ],
                    'bullets' => [
                        'Diani Beach — classic white sand and coral reef',
                        'Watamu — marine park, diving and quiet luxury',
                        'Zanzibar — Swahili culture and romantic finish',
                    ],
                ],
                [
                    'kicker' => 'Safari choices',
                    'title' => 'Choosing the perfect safari lead-in',
                    'paragraphs' => [
                        'The Masai Mara is the most popular pre-beach safari, while Amboseli offers elephants against Kilimanjaro and Laikipia suits travellers seeking privacy.',
                    ],
                ],
                [
                    'kicker' => 'Logistics',
                    'title' => 'One seamless itinerary, from camp to coast',
                    'paragraphs' => [
                        'We coordinate every flight, transfer and check-in so the transition from bush to beach is effortless, with no planning left to you.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'How many nights should we spend on the coast?', 'a' => 'Most travellers combine 4 to 6 safari nights with 4 to 7 beach nights. We tune the split to your flights and stamina.'],
                ['q' => 'Is Zanzibar included?', 'a' => 'Yes. Kenya safari with a Zanzibar extension is a popular option, and our Kenya Zanzibar journey shows how it works.'],
                ['q' => 'When is the best time for safari and beach?', 'a' => 'The coast is warm year-round. January to March and July to October offer the best combination of dry-season safari and pleasant beach weather.'],
                ['q' => 'Is the coast good for families?', 'a' => 'Yes, the calm, shallow Indian Ocean is ideal for children, and we choose family-friendly beach properties.'],
            ],
            'related' => ['luxury-kenya-safaris', 'luxury-honeymoon-safaris-kenya', 'kenya-luxury-safari-packages', 'luxury-family-safaris-kenya'],
        ],

        'luxury-honeymoon-safaris-kenya' => [
            'locale' => 'en',
            'group' => 'luxury-honeymoon-safaris-kenya',
            'eyebrow' => 'Romance in the wild',
            'h1' => 'Luxury Kenya Honeymoon Safaris',
            'title' => 'Kenya Honeymoon Safari | Luxury Romantic Safari & Beach',
            'description' => 'Romantic luxury Kenya honeymoon safaris with private guides, intimate camps, sundowners in the bush and optional Indian Ocean beach escapes.',
            'subtitle' => 'A honeymoon safari designed for two: private game drives, intimate camps, candlelit dinners under the stars and the option of an Indian Ocean finish.',
            'hero_image' => 'images/mara-sunset.jpg',
            'hero_alt' => 'Romantic sundowner on honeymoon safari in Kenya',
            'stats' => [
                ['value' => 'For Two', 'label' => 'Entirely private'],
                ['value' => 'Romantic', 'label' => 'Intimate camps and sundowners'],
                ['value' => 'Bush+Beach', 'label' => 'Optional ocean finish'],
            ],
            'sections' => [
                [
                    'kicker' => 'Designed for two',
                    'title' => 'Privacy, romance and unhurried days',
                    'paragraphs' => [
                        'Honeymoons should feel personal. Your safari is private throughout, with intimate camps, thoughtful touches and the freedom to move at your own pace.',
                        'From a private sundowner on the plains to a candlelit dinner below the stars, we build the moments that make the trip feel like yours alone.',
                    ],
                    'bullets' => [
                        'Private vehicle and guide throughout',
                        'Intimate, romantic luxury camps',
                        'Private sundowners and bush dinners',
                        'Optional couples\' spa and pool suites',
                    ],
                ],
                [
                    'kicker' => 'The ideal itinerary',
                    'title' => 'Safari first, ocean after',
                    'paragraphs' => [
                        'Most couples spend four to six nights on safari and four to six nights on the coast, ending relaxed and sunkissed before flying home.',
                    ],
                    'bullets' => [
                        'Masai Mara for big cats and romance',
                        'Laikipia for privacy and conservation',
                        'Diani or Zanzibar for the beach finale',
                    ],
                ],
                [
                    'kicker' => 'Special touches',
                    'title' => 'The details that make a honeymoon',
                    'paragraphs' => [
                        'We can arrange honeymoon turndowns, private dinners, couples\' treatments and surprise moments, coordinated discreetly with your camps.',
                    ],
                ],
                [
                    'kicker' => 'Timing',
                    'title' => 'When to honeymoon in Kenya',
                    'paragraphs' => [
                        'The dry seasons offer dependable wildlife and weather, while the green season brings lower rates and dramatic skies for couples who prize atmosphere and value.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'Is Kenya a good honeymoon destination?', 'a' => 'Yes. Kenya combines exceptional wildlife, intimate luxury camps and the Indian Ocean, making it one of the world\'s most romantic safari honeymoon destinations.'],
                ['q' => 'Should we choose Kenya or another country?', 'a' => 'Kenya offers some of Africa\'s best big-cat viewing, superb guiding and easy beach extensions, and our specialists can advise on alternatives if you are comparing.'],
                ['q' => 'Can you arrange a private beach villa?', 'a' => 'Yes, from boutique beach hotels to fully private villas, we match the coast stay to your honeymoon style.'],
                ['q' => 'What is a romantic honeymoon budget?', 'a' => 'A private luxury honeymoon safari with beach typically starts around USD 10,000 per person, depending on season, length and camp tier.'],
            ],
            'related' => ['luxury-kenya-safaris', 'luxury-safari-and-beach-kenya', 'private-safaris-kenya', 'kenya-luxury-safari-packages'],
        ],

        'luxury-family-safaris-kenya' => [
            'locale' => 'en',
            'group' => 'luxury-family-safaris-kenya',
            'eyebrow' => 'Adventure for all ages',
            'h1' => 'Luxury Family Safaris in Kenya',
            'title' => 'Luxury Family Safari Kenya | Private Family Safaris | Caracal',
            'description' => 'Luxury family safaris in Kenya with private guides, child-friendly camps and flexible pacing. Wildlife adventures for all ages, plus optional beach time.',
            'subtitle' => 'A private family safari designed around your children\'s ages and energy — expert guides, child-friendly camps and the flexibility to slow down or speed up.',
            'hero_image' => 'images/safari-elephant.jpg',
            'hero_alt' => 'Family safari watching elephants in Kenya',
            'stats' => [
                ['value' => 'All Ages', 'label' => 'Tailored to your family'],
                ['value' => 'Flexible', 'label' => 'Pace set by the children'],
                ['value' => 'Educational', 'label' => 'Guides who inspire kids'],
            ],
            'sections' => [
                [
                    'kicker' => 'Family-first design',
                    'title' => 'A safari that works for every age',
                    'paragraphs' => [
                        'Children experience the bush differently, and a great family safari respects that. We choose camps with family suites, pools and flexible meal times, and guides who are brilliant with young travellers.',
                        'Because your vehicle is private, you can shorten game drives, return for naps and find the rhythm that keeps everyone happy.',
                    ],
                    'bullets' => [
                        'Child-friendly luxury camps and family suites',
                        'Private guiding with patient, engaging hosts',
                        'Shorter drives and built-in downtime',
                        'Interconnecting rooms and private dining',
                    ],
                ],
                [
                    'kicker' => 'Where to go',
                    'title' => 'The best regions for a family safari',
                    'paragraphs' => [
                        'The Masai Mara delivers prolific wildlife and easy logistics, Laikipia offers hands-on conservation experiences, and the coast is perfect for an ocean finish.',
                    ],
                    'bullets' => [
                        'Masai Mara — abundant wildlife, short transfers',
                        'Laikipia & Lewa — conservation and rhino tracking',
                        'Diani — calm seas and beach activities',
                    ],
                ],
                [
                    'kicker' => 'Experiences',
                    'title' => 'Memories that families talk about for years',
                    'paragraphs' => [
                        'Beyond game drives we can arrange bush breakfasts, junior ranger programmes, cultural visits and gentle nature walks suited to children.',
                    ],
                ],
                [
                    'kicker' => 'Practicalities',
                    'title' => 'Travelling to Kenya with children',
                    'paragraphs' => [
                        'We advise on health, visas, flights and camp age policies, and we keep transfers short by using bush flights where it helps.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'What age is suitable for a family safari?', 'a' => 'Most camps welcome children from around six years, and some offer dedicated family programmes for younger guests. We match camps to your children\'s ages.'],
                ['q' => 'Is a safari safe for children?', 'a' => 'Yes, with sensible guidance. We choose secure camps, brief children on bush safety and keep activities age-appropriate.'],
                ['q' => 'Can we combine safari with a beach?', 'a' => 'Yes, a safari-and-beach holiday is one of the easiest family combinations, with a calm Indian Ocean finish.'],
                ['q' => 'Do children pay less?', 'a' => 'Many camps offer reduced child rates, and sharing a family room lowers costs. We will show the family pricing clearly in your proposal.'],
            ],
            'related' => ['luxury-kenya-safaris', 'luxury-safari-and-beach-kenya', 'private-safaris-kenya', 'kenya-luxury-safari-packages'],
        ],

        'destinations/masai-mara' => [
            'locale' => 'en',
            'group' => 'destinations/masai-mara',
            'eyebrow' => 'Predator country',
            'h1' => 'Luxury Masai Mara Safari',
            'title' => 'Luxury Masai Mara Safari | Private Mara Guide & Camps',
            'description' => 'Luxury Masai Mara safaris with private guides, exclusive conservancies and front-row access to the Great Migration. Design your Mara journey with Caracal.',
            'subtitle' => 'The Masai Mara is Kenya\'s most celebrated wilderness — golden plains, abundant big cats and, from July to October, the spectacle of the Great Migration.',
            'hero_image' => 'images/safari-giraffe.jpg',
            'hero_alt' => 'Giraffe on the open plains of the Masai Mara',
            'stats' => [
                ['value' => 'Big Cats', 'label' => 'Lion, leopard and cheetah'],
                ['value' => 'Migration', 'label' => 'July to October'],
                ['value' => 'Fly-In', 'label' => '45 minutes from Nairobi'],
            ],
            'sections' => [
                [
                    'kicker' => 'Overview',
                    'title' => 'Why the Masai Mara is the benchmark safari',
                    'paragraphs' => [
                        'The Mara is a vast, open ecosystem where wildlife is abundant and easy to see. Its grasslands support exceptional densities of lion, cheetah and leopard, alongside elephant, buffalo and plains game.',
                        'A well-planned Mara safari balances the legendary reserve with quieter private conservancies that border it.',
                    ],
                    'bullets' => [
                        'World-class predator viewing year-round',
                        'The Great Migration from July to October',
                        'Classic reserve plus low-density conservancies',
                        'Quick bush flights from Nairobi',
                    ],
                ],
                [
                    'kicker' => 'Conservancies',
                    'title' => 'Reserve fame, conservancy privacy',
                    'paragraphs' => [
                        'The conservancies adjoining the Mara allow off-road driving, night game drives and walking, with far fewer vehicles. They offer a more exclusive and flexible safari than the reserve alone.',
                    ],
                ],
                [
                    'kicker' => 'Best time',
                    'title' => 'When to visit the Masai Mara',
                    'paragraphs' => [
                        'July to October brings the Great Migration and superb dry-season viewing. January to March offers warm, clear conditions and excellent predator sightings with fewer visitors.',
                    ],
                ],
                [
                    'kicker' => 'Where to stay',
                    'title' => 'Luxury camps in and around the Mara',
                    'paragraphs' => [
                        'From intimate tented camps on private conservancies to iconic riverside lodges, we match accommodation to your style, budget and wildlife priorities.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'What is the best time to visit the Masai Mara?', 'a' => 'July to October for the Great Migration and dry-season game viewing, or January to March for warm weather and excellent big-cat sightings with fewer crowds.'],
                ['q' => 'How do I get to the Masai Mara?', 'a' => 'Most travellers fly from Nairobi to a Mara airstrip in around 45 minutes. Road transfers are possible but far longer.'],
                ['q' => 'Should I stay in the reserve or a conservancy?', 'a' => 'Conservancies offer more privacy, flexible activities and lower vehicle density. Many itineraries combine both, and we will advise based on your priorities.'],
                ['q' => 'Will I see the Great Migration?', 'a' => 'River crossings are dramatic but not guaranteed. The migrating herds are present from roughly July to October, and we time and position your stay to maximise your chances.'],
            ],
            'related' => ['luxury-kenya-safaris', 'fly-in-safaris-kenya', 'destinations/laikipia', 'destinations/amboseli'],
        ],

        'destinations/amboseli' => [
            'locale' => 'en',
            'group' => 'destinations/amboseli',
            'eyebrow' => 'Big skies and elephants',
            'h1' => 'Luxury Amboseli Safari',
            'title' => 'Luxury Amboseli Safari | Elephants & Kilimanjaro Views',
            'description' => 'Luxury Amboseli safaris with private guides, iconic elephant herds and Mount Kilimanjaro views. Combine Amboseli with the Mara or the Kenyan coast.',
            'subtitle' => 'Amboseli is elephant country framed by Africa\'s highest mountain — vast skies, photogenic herds and a landscape that feels timeless.',
            'hero_image' => 'images/safari-elephant.jpg',
            'hero_alt' => 'Elephants beneath Mount Kilimanjaro in Amboseli',
            'stats' => [
                ['value' => 'Elephants', 'label' => 'Legendary herds'],
                ['value' => 'Kilimanjaro', 'label' => 'Iconic mountain views'],
                ['value' => 'Photogenic', 'label' => 'Big skies and light'],
            ],
            'sections' => [
                [
                    'kicker' => 'Overview',
                    'title' => 'The classic image of Kenya',
                    'paragraphs' => [
                        'Amboseli\'s open plains, dusty horizons and huge elephant families create the safari imagery most people imagine. On clear mornings, Kilimanjaro rises behind the herds.',
                        'The park is smaller and easier to explore than the Mara, making it a rewarding addition to a multi-region itinerary.',
                    ],
                    'bullets' => [
                        'Some of Africa\'s best elephant viewing',
                        'Mount Kilimanjaro backdrops',
                        'Excellent photography light',
                        'Easy add-on to the coast or Rift Valley',
                    ],
                ],
                [
                    'kicker' => 'Wildlife',
                    'title' => 'Elephants first, but far more besides',
                    'paragraphs' => [
                        'Beyond elephants you will find lion, cheetah, buffalo, hippo, wildebeest and prolific birdlife in the surrounding wetlands fed by Kilimanjaro\'s snows.',
                    ],
                ],
                [
                    'kicker' => 'Best time',
                    'title' => 'When to visit Amboseli',
                    'paragraphs' => [
                        'The dry seasons (June to October and January to February) offer the clearest mountain views and the best game concentration around water.',
                    ],
                ],
                [
                    'kicker' => 'Combinations',
                    'title' => 'Pairing Amboseli with the rest of Kenya',
                    'paragraphs' => [
                        'Amboseli pairs beautifully with the Masai Mara, Laikipia, Tsavo or a beach finish in Diani, all linked by easy bush flights.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'Will I see Mount Kilimanjaro?', 'a' => 'On clear mornings, yes. Cloud can obscure the summit, especially in the wetter months, so we build in multiple viewing opportunities where possible.'],
                ['q' => 'How does Amboseli compare to the Masai Mara?', 'a' => 'Amboseli is smaller and more focused on elephants and landscapes; the Mara offers greater predator density and the Migration. Many travellers visit both.'],
                ['q' => 'How do I get to Amboseli?', 'a' => 'There are short scheduled bush flights from Nairobi (Wilson Airport) and other regions, or road transfers via the Nairobi–Mombasa highway.'],
                ['q' => 'Is Amboseli good for families?', 'a' => 'Yes. The open terrain, abundant elephants and shorter driving distances make it a rewarding destination for children.'],
            ],
            'related' => ['luxury-kenya-safaris', 'destinations/masai-mara', 'destinations/tsavo', 'luxury-safari-and-beach-kenya'],
        ],

        'destinations/laikipia' => [
            'locale' => 'en',
            'group' => 'destinations/laikipia',
            'eyebrow' => 'Private wilderness',
            'h1' => 'Luxury Laikipia Safari',
            'title' => 'Luxury Laikipia Safari | Private Conservancy Kenya',
            'description' => 'Luxury Laikipia safaris in Kenya\'s private conservancies — conservation-led, low-density and ideal for exclusive game viewing, walking and rhino.',
            'subtitle' => 'Laikipia is Kenya\'s great private wilderness: vast conservancies, conservation-led guiding and a level of exclusivity the national parks cannot match.',
            'hero_image' => 'images/samburu-elephant.jpg',
            'hero_alt' => 'Elephant in a Laikipia conservancy in Kenya',
            'stats' => [
                ['value' => 'Private', 'label' => 'Vast conservancies'],
                ['value' => 'Rhino', 'label' => 'Conservation strongholds'],
                ['value' => 'Low Density', 'label' => 'Fewer vehicles, more space'],
            ],
            'sections' => [
                [
                    'kicker' => 'Overview',
                    'title' => 'The most exclusive safari landscape in Kenya',
                    'paragraphs' => [
                        'Laikipia is a patchwork of private conservancies and ranches covering a plateau north of Mount Kenya. Low visitor numbers and strict land management make it ideal for travellers who value space.',
                        'It is also a conservation success story, home to significant populations of black and white rhino, elephant and wild dog.',
                    ],
                    'bullets' => [
                        'Private conservancies with off-road and night drives',
                        'Rhino, elephant, big cats and wild dog',
                        'Walking safaris and camel treks',
                        'Some of Kenya\'s most exclusive luxury camps',
                    ],
                ],
                [
                    'kicker' => 'Experiences',
                    'title' => 'More than game drives',
                    'paragraphs' => [
                        'Laikipia invites active days — guided walks, horseback and camel-riding, lion-tracking with researchers, and conservation encounters that go deeper than a standard drive.',
                    ],
                ],
                [
                    'kicker' => 'Best time',
                    'title' => 'When to visit Laikipia',
                    'paragraphs' => [
                        'Laikipia is a strong year-round destination, with the dry seasons offering the most reliable wildlife concentrations and the green season bringing lush beauty and excellent value.',
                    ],
                ],
                [
                    'kicker' => 'Combinations',
                    'title' => 'Pairing Laikipia with the Mara',
                    'paragraphs' => [
                        'A Laikipia and Masai Mara combination is one of the finest safaris in Africa, contrasting quiet private conservancies with the wildlife drama of the Mara.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'What makes Laikipia special?', 'a' => 'Its private conservancies, low visitor density and conservation focus create a more exclusive, flexible and active safari than the crowded reserves.'],
                ['q' => 'Can I do a walking safari in Laikipia?', 'a' => 'Yes. Laikipia is one of the best places in Kenya for guided walking safaris and other active experiences.'],
                ['q' => 'Will I see the Big Five?', 'a' => 'Laikipia offers excellent rhino, elephant, lion, leopard and buffalo viewing, especially on the conservancies, though sightings are always wild and never guaranteed.'],
                ['q' => 'Is Laikipia suitable for families?', 'a' => 'Very much so. The conservation experiences, horse-riding and hands-on activities are a hit with children.'],
            ],
            'related' => ['luxury-kenya-safaris', 'destinations/lewa', 'destinations/masai-mara', 'private-safaris-kenya'],
        ],

        'destinations/samburu' => [
            'locale' => 'en',
            'group' => 'destinations/samburu',
            'eyebrow' => 'Northern frontier',
            'h1' => 'Luxury Samburu Safari',
            'title' => 'Luxury Samburu Safari | Semi-Arid Kenya Wilderness',
            'description' => 'Luxury Samburu safaris in Kenya\'s dramatic northern frontier — special species, rich culture and quiet, exclusive camps along the Ewaso Ng\'iro river.',
            'subtitle' => 'Samburu is Kenya at its most atmospheric — arid, photogenic and home to species found nowhere else in the country.',
            'hero_image' => 'images/samburu-elephant.jpg',
            'hero_alt' => 'Elephant by the Ewaso Ng\'iro river in Samburu',
            'stats' => [
                ['value' => 'Special 5', 'label' => 'Unique northern species'],
                ['value' => 'Cultural', 'label' => 'Rich Samburu heritage'],
                ['value' => 'Quiet', 'label' => 'Fewer visitors than the south'],
            ],
            'sections' => [
                [
                    'kicker' => 'Overview',
                    'title' => 'A different, wilder side of Kenya',
                    'paragraphs' => [
                        'Samburu\'s rugged, semi-arid landscape is cut by the Ewaso Ng\'iro river, drawing wildlife to its banks. The reserve is famous for the "Special Five": Grevy\'s zebra, reticulated giraffe, gerenuk, Beisa oryx and Somali ostrich.',
                        'With fewer visitors than the southern parks, Samburu feels remote and exclusive.',
                    ],
                    'bullets' => [
                        'The Special Five species',
                        'Dramatic arid scenery and river wildlife',
                        'Low visitor numbers and quiet camps',
                        'Rich Samburu culture and community visits',
                    ],
                ],
                [
                    'kicker' => 'Wildlife',
                    'title' => 'The Special Five and classic big game',
                    'paragraphs' => [
                        'Alongside its signature species, Samburu supports lion, leopard, elephant and a dazzling array of birdlife, all set against striking red-earth backdrops.',
                    ],
                ],
                [
                    'kicker' => 'Best time',
                    'title' => 'When to visit Samburu',
                    'paragraphs' => [
                        'The dry seasons are best for wildlife as animals gather along the river. The green season transforms the landscape and offers superb photography and value.',
                    ],
                ],
                [
                    'kicker' => 'Combinations',
                    'title' => 'Samburu, Laikipia and the Mara',
                    'paragraphs' => [
                        'Samburu combines naturally with neighbouring Laikipia and the Masai Mara to create a rich, varied northern-to-southern safari.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'What are the Special Five of Samburu?', 'a' => 'Grevy\'s zebra, reticulated giraffe, gerenuk, Beisa oryx and Somali ostrich — species adapted to Kenya\'s arid north.'],
                ['q' => 'Is Samburu worth visiting?', 'a' => 'Absolutely. It offers a distinct landscape and wildlife mix and a quieter, more exclusive atmosphere than the southern reserves.'],
                ['q' => 'How do I reach Samburu?', 'a' => 'Scheduled bush flights from Nairobi (Wilson Airport) take around an hour, with airstrip transfers to camp included.'],
                ['q' => 'Can I visit Samburu communities?', 'a' => 'Yes, we can arrange respectful, genuinely beneficial cultural visits if you would like to include one.'],
            ],
            'related' => ['luxury-kenya-safaris', 'destinations/laikipia', 'destinations/masai-mara', 'fly-in-safaris-kenya'],
        ],

        'destinations/lewa' => [
            'locale' => 'en',
            'group' => 'destinations/lewa',
            'eyebrow' => 'Conservation flagship',
            'h1' => 'Luxury Lewa Safari',
            'title' => 'Luxury Lewa Conservancy Safari | Kenya Rhino & Big Cats',
            'description' => 'Luxury Lewa Conservancy safaris in northern Kenya — a UNESCO-listed conservation success with exceptional rhino, big cats and exclusive low-density game viewing.',
            'subtitle' => 'Lewa is one of Africa\'s great conservation success stories — a UNESCO World Heritage site where rhino, lion and Grevy\'s zebra thrive on a vast private conservancy.',
            'hero_image' => 'images/safari-air.jpg',
            'hero_alt' => 'Lewa Conservancy landscape in northern Kenya',
            'stats' => [
                ['value' => 'UNESCO', 'label' => 'World Heritage site'],
                ['value' => 'Rhino', 'label' => 'Sanctuary stronghold'],
                ['value' => 'Exclusive', 'label' => 'Limited visitor numbers'],
            ],
            'sections' => [
                [
                    'kicker' => 'Overview',
                    'title' => 'A conservation icon you can visit',
                    'paragraphs' => [
                        'Lewa Wildlife Conservancy protects a huge expanse of northern Kenya and is famed for its rhino conservation. Visitor numbers are deliberately limited, so sightings feel private.',
                        'It is also a leader in community conservation, with tourism funding protection and local livelihoods.',
                    ],
                    'bullets' => [
                        'Outstanding black and white rhino viewing',
                        'Lion, cheetah, leopard and elephant',
                        'Grevy\'s zebra and other northern species',
                        'Exclusive, low-density luxury camps',
                    ],
                ],
                [
                    'kicker' => 'Experiences',
                    'title' => 'Conservation-led activities',
                    'paragraphs' => [
                        'Beyond game drives, Lewa offers rhino-tracking with rangers, guided walks, camel safaris and behind-the-scenes conservation insights for interested travellers.',
                    ],
                ],
                [
                    'kicker' => 'Best time',
                    'title' => 'When to visit Lewa',
                    'paragraphs' => [
                        'Lewa is rewarding year-round. The dry seasons concentrate wildlife, while the green season brings lush scenery, newborn animals and excellent value.',
                    ],
                ],
                [
                    'kicker' => 'Combinations',
                    'title' => 'Lewa and the Masai Mara',
                    'paragraphs' => [
                        'A Lewa and Masai Mara combination pairs conservation-led exclusivity with the legendary wildlife and Migration drama of the Mara.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'What is Lewa famous for?', 'a' => 'Lewa is renowned for its rhino conservation and was inscribed as a UNESCO World Heritage site, alongside exceptional big-cat and Grevy\'s zebra viewing.'],
                ['q' => 'Is Lewa a national park?', 'a' => 'No. Lewa is a private, non-profit conservancy, which is why visitor numbers are limited and the experience feels exclusive.'],
                ['q' => 'How do I get to Lewa?', 'a' => 'Lewa has its own airstrip served by scheduled and private flights from Nairobi, with transfers arranged to your camp.'],
                ['q' => 'Can children visit Lewa?', 'a' => 'Yes, many camps welcome families and offer conservation activities that engage children. We match properties to your group.'],
            ],
            'related' => ['luxury-kenya-safaris', 'destinations/laikipia', 'destinations/samburu', 'private-safaris-kenya'],
        ],

        'why-caracal-expeditions' => [
            'locale' => 'en',
            'group' => 'why-caracal-expeditions',
            'eyebrow' => 'Why travel with us',
            'h1' => 'Why Caracal Expeditions',
            'title' => 'Why Caracal Expeditions | Kenya Safari Specialists',
            'description' => 'Why choose Caracal Expeditions: Kenya-based safari specialists, private guiding, handpicked camps, honest advice and seamless logistics for international travellers.',
            'subtitle' => 'We are Kenya-based specialists designing private, tailor-made safaris for international travellers who want expertise, privacy and a journey that feels entirely their own.',
            'hero_image' => 'images/mara-jeep.jpg',
            'hero_alt' => 'Caracal Expeditions private safari guide in Kenya',
            'stats' => [
                ['value' => 'Kenya-Based', 'label' => 'Local knowledge and access'],
                ['value' => 'Private', 'label' => 'Tailor-made, never group'],
                ['value' => 'End-to-End', 'label' => 'One team, one point of contact'],
            ],
            'sections' => [
                [
                    'kicker' => 'Specialisation',
                    'title' => 'Kenya only, and deliberately so',
                    'paragraphs' => [
                        'We focus exclusively on Kenya. That depth of specialisation means we know the camps, the guides, the seasons and the small details that turn a good safari into an exceptional one.',
                        'Rather than selling a catalogue of destinations, we design journeys in the country we know best.',
                    ],
                    'bullets' => [
                        'Deep, current knowledge of Kenyan camps and regions',
                        'Relationships with guides and properties built over years',
                        'Honest advice on seasons, crowds and value',
                    ],
                ],
                [
                    'kicker' => 'Approach',
                    'title' => 'Tailor-made by default, private by design',
                    'paragraphs' => [
                        'Every journey is private and built around you. No group departures, no fixed schedules and no pressure — just thoughtful design and clear guidance.',
                    ],
                ],
                [
                    'kicker' => 'Service',
                    'title' => 'One planning contact, start to finish',
                    'paragraphs' => [
                        'From your first enquiry to your final transfer, you work with people who know your itinerary personally. That continuity is what makes the logistics feel effortless.',
                    ],
                ],
                [
                    'kicker' => 'Responsibility',
                    'title' => 'Conservation-minded travel',
                    'paragraphs' => [
                        'We favour conservancies and camps that protect wildlife and support communities, so your safari contributes to the places and people that make it possible.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'Where is Caracal Expeditions based?', 'a' => 'We are a Kenya-based safari specialist, which gives us direct, on-the-ground knowledge of the country and its camps.'],
                ['q' => 'Do you work with international travellers?', 'a' => 'Yes, we design safaris for clients worldwide, including the United States, United Kingdom, France and Russia, and advise on routing and timing from each market.'],
                ['q' => 'What makes you different?', 'a' => 'Kenya specialisation, private tailor-made design, honest advice and a single planning contact throughout. We focus on quality and fit rather than volume.'],
                ['q' => 'Can you handle complex itineraries?', 'a' => 'Yes. Multi-region fly-in circuits, safari-and-beach combinations and family or photography-focused trips are all well within our expertise.'],
            ],
            'related' => ['about', 'luxury-kenya-safaris', 'private-safaris-kenya', 'plan-my-safari'],
        ],

        'about' => [
            'locale' => 'en',
            'group' => 'about',
            'eyebrow' => 'About us',
            'h1' => 'About Caracal Expeditions',
            'title' => 'About Caracal Expeditions | Kenya Luxury Safari Designers',
            'description' => 'Caracal Expeditions is a Kenya-based luxury safari company designing private, tailor-made journeys for international travellers who value expertise and exclusivity.',
            'subtitle' => 'A Kenya-based safari company built around one belief: a great safari should be private, personal and designed by people who know the country intimately.',
            'hero_image' => 'images/caracal-expeditions-profile.jpg',
            'hero_alt' => 'Caracal Expeditions luxury safari team in Kenya',
            'stats' => [
                ['value' => 'Kenya', 'label' => 'Our home and our focus'],
                ['value' => 'Private', 'label' => 'Every journey tailor-made'],
                ['value' => 'Expert', 'label' => 'Guiding and logistics'],
            ],
            'sections' => [
                [
                    'kicker' => 'Who we are',
                    'title' => 'Specialists in private, luxury Kenya safaris',
                    'paragraphs' => [
                        'Caracal Expeditions designs bespoke safaris for discerning international travellers. We are based in Kenya, work only here, and build every journey from scratch around the people taking it.',
                        'Our name comes from the caracal, the elusive and elegant wild cat of Kenya\'s wild places — a fitting symbol for the quiet, refined experiences we create.',
                    ],
                    'bullets' => [
                        'Kenya-based, Kenya-focused safari specialists',
                        'Private and tailor-made by default',
                        'Handpicked camps, conservancies and guides',
                        'Considered, honest itinerary design',
                    ],
                ],
                [
                    'kicker' => 'Our philosophy',
                    'title' => 'Privacy, expertise and effortless travel',
                    'paragraphs' => [
                        'We believe luxury in a safari is measured in access, expertise and ease. The quiet conservancy, the guide who reads the bush, the transfer that simply works — these are what we obsess over.',
                    ],
                ],
                [
                    'kicker' => 'What we do',
                    'title' => 'From first idea to final sundowner',
                    'paragraphs' => [
                        'We advise on regions and seasons, select camps, arrange private guides and bush flights, and coordinate every transfer. You plan once, with one team, and then simply travel.',
                    ],
                ],
                [
                    'kicker' => 'Travellers',
                    'title' => 'Who we work with',
                    'paragraphs' => [
                        'Our travellers include honeymooners, families, photographers and seasoned safari-goers from the USA, UK, Europe and beyond. What they share is a desire for a Kenya journey that is considered, private and genuinely memorable.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'Is Caracal Expeditions a tour operator?', 'a' => 'We are a Kenya-based safari company that designs and arranges private, tailor-made journeys, working with trusted camps, guides and flight operators.'],
                ['q' => 'Where in Kenya are you based?', 'a' => 'We are based in Kenya, which allows us to maintain direct relationships with camps and guides across the country.'],
                ['q' => 'Do you offer group tours?', 'a' => 'Our focus is private, tailor-made safaris rather than fixed group departures.'],
                ['q' => 'How do I get started?', 'a' => 'Send us an enquiry with your dates and interests, and one of our safari specialists will begin designing your journey.'],
            ],
            'related' => ['why-caracal-expeditions', 'luxury-kenya-safaris', 'plan-my-safari', 'kenya-safari-faq'],
        ],

        'booking-payment-process' => [
            'locale' => 'en',
            'group' => 'booking-payment-process',
            'eyebrow' => 'How booking works',
            'h1' => 'Booking & Payment Process',
            'title' => 'Booking & Payment Process | Caracal Expeditions Safari',
            'description' => 'How booking a Caracal Expeditions safari works: proposals, confirmation, deposits, payments and pre-travel planning, explained clearly and simply.',
            'subtitle' => 'A clear, calm path from first enquiry to confirmed safari — with transparent steps, itemised pricing and no surprises.',
            'hero_image' => 'images/safari-lion-drive.jpg',
            'hero_alt' => 'Planning and booking a luxury Kenya safari',
            'stats' => [
                ['value' => 'Simple', 'label' => 'Four clear steps'],
                ['value' => 'Transparent', 'label' => 'Itemised proposal'],
                ['value' => 'Secure', 'label' => 'Confirmed arrangements'],
            ],
            'sections' => [
                [
                    'kicker' => 'Step one',
                    'title' => 'Enquiry and conversation',
                    'paragraphs' => [
                        'It begins with your dates, group and interests. We ask a few questions so we can design something genuinely suited to you, and there is no obligation at this stage.',
                    ],
                ],
                [
                    'kicker' => 'Step two',
                    'title' => 'Your tailored proposal',
                    'paragraphs' => [
                        'We send a clear, itemised draft itinerary showing regions, camps, inclusions and pricing. You can adjust anything you like before confirming.',
                    ],
                    'bullets' => [
                        'Day-by-day draft itinerary',
                        'Accommodation and guide recommendations',
                        'Transparent inclusion and exclusion list',
                        'Indicative pricing in your preferred currency',
                    ],
                ],
                [
                    'kicker' => 'Step three',
                    'title' => 'Confirmation and deposit',
                    'paragraphs' => [
                        'Once you are happy, a deposit confirms your safari and secures the camps and flights. Availability is checked and held before any payment is requested.',
                    ],
                    'bullets' => [
                        'Availability confirmed before payment',
                        'Deposit secures your arrangements',
                        'Balance payable before travel',
                    ],
                ],
                [
                    'kicker' => 'Step four',
                    'title' => 'Pre-travel planning and support',
                    'paragraphs' => [
                        'Before departure you receive your final documents, packing and visa guidance, and a direct contact for any questions. We remain available throughout your journey.',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'How do I pay for my safari?', 'a' => 'We accept bank transfer and other agreed methods. Full payment instructions are provided with your confirmation and invoice.'],
                ['q' => 'What deposit is required?', 'a' => 'The deposit amount depends on your itinerary and travel dates. It is always stated clearly in your proposal before you commit.'],
                ['q' => 'When is the balance due?', 'a' => 'The balance is typically due before travel, with the exact date confirmed in your booking terms.'],
                ['q' => 'Are prices guaranteed once booked?', 'a' => 'Once your safari is confirmed and paid as agreed, your quoted arrangements are secured, subject to the terms provided at booking.'],
            ],
            'related' => ['plan-my-safari', 'kenya-safari-faq', 'about', 'why-caracal-expeditions'],
        ],

        'kenya-safari-faq' => [
            'locale' => 'en',
            'group' => 'kenya-safari-faq',
            'eyebrow' => 'Planning questions, answered',
            'h1' => 'Kenya Safari FAQ',
            'title' => 'Kenya Safari FAQ | Planning, Costs, Seasons & Safety',
            'description' => 'Answers to common Kenya safari questions: best time to visit, costs, safety, visas, family travel, fly-in safaris and what to expect on a luxury safari.',
            'subtitle' => 'Answers to the questions we hear most from travellers planning a luxury Kenya safari — from seasons and costs to safety, visas and family travel.',
            'hero_image' => 'images/giraffe-herd.jpg',
            'hero_alt' => 'Planning a luxury Kenya safari — frequently asked questions',
            'stats' => [
                ['value' => 'Seasons', 'label' => 'When to travel'],
                ['value' => 'Costs', 'label' => 'What to budget'],
                ['value' => 'Practical', 'label' => 'Visas, safety and health'],
            ],
            'sections' => [],
            'faqs' => [
                ['q' => 'What is the best time to visit Kenya for a safari?', 'a' => 'July to October is peak season for the Great Migration and dry-season game viewing. January to March offers warm weather and excellent big-cat sightings with fewer visitors. The green season (November and April to May) brings lush scenery, lower rates and superb birdlife.'],
                ['q' => 'How much does a luxury Kenya safari cost?', 'a' => 'Private luxury safaris typically start around USD 8,000 per person for a 7-day journey and increase with length, season, camp tier and private charters. We provide an itemised proposal so you can see exactly where the budget goes.'],
                ['q' => 'Is Kenya safe for tourists?', 'a' => 'Kenya\'s safari regions and coastal resorts are well established and host travellers year-round. We arrange trusted transfers, guides and camps, and provide sensible travel guidance for your itinerary.'],
                ['q' => 'Do I need a visa to visit Kenya?', 'a' => 'Most visitors require an authorisation to enter Kenya. Requirements vary by nationality, so we recommend checking the latest official guidance before travel and are happy to point you in the right direction.'],
                ['q' => 'What vaccinations do I need?', 'a' => 'Vaccination requirements depend on your nationality, previous travel and medical history. We recommend consulting a travel health professional for personalised advice.'],
                ['q' => 'How do I get between camps and regions?', 'a' => 'Most luxury itineraries combine private road transfers with scheduled or chartered bush flights, keeping travel time short and maximising time in the wild.'],
                ['q' => 'What should I pack for a safari?', 'a' => 'Neutral, comfortable layers, a sun hat, sun protection, binoculars and a camera. Light-aircraft baggage on fly-in safaris is usually limited to around 15kg in a soft bag, and we provide a full packing list before departure.'],
                ['q' => 'Is Kenya good for families and first-time safari travellers?', 'a' => 'Yes. Kenya is one of the best first-safari destinations, with prolific wildlife, excellent guiding and family-friendly camps. We tailor pace, camps and activities to your group.'],
                ['q' => 'Can I combine a safari with the beach?', 'a' => 'Absolutely. A safari and beach holiday combining the Masai Mara or Amboseli with Diani, Watamu or Zanzibar is one of our most popular journeys.'],
                ['q' => 'How far in advance should I book?', 'a' => 'For peak season we recommend 6 to 12 months ahead. Outside peak dates, 3 to 6 months is usually comfortable, though we can sometimes arrange trips at shorter notice.'],
            ],
            'related' => ['luxury-kenya-safaris', 'plan-my-safari', 'booking-payment-process', 'why-caracal-expeditions'],
        ],

        'plan-my-safari' => [
            'locale' => 'en',
            'group' => 'plan-my-safari',
            'template' => 'plan',
            'eyebrow' => 'Start planning',
            'h1' => 'Plan My Safari',
            'title' => 'Plan My Safari | Start Your Tailor-Made Kenya Safari',
            'description' => 'Start planning your tailor-made Kenya safari with Caracal Expeditions. Share your dates, group and interests and a safari specialist will design your journey.',
            'subtitle' => 'Tell us a little about your travel plans and one of our Kenya-based safari specialists will design a private, tailor-made journey around you.',
            'hero_image' => 'images/mara-sunset.jpg',
            'hero_alt' => 'Planning a tailor-made luxury Kenya safari',
            'stats' => [
                ['value' => 'Free', 'label' => 'Planning and proposal'],
                ['value' => 'No Obligation', 'label' => 'Until you confirm'],
                ['value' => 'Personal', 'label' => 'One specialist, start to finish'],
            ],
            'sections' => [
                [
                    'kicker' => 'What happens next',
                    'title' => 'A calm, personal planning process',
                    'paragraphs' => [
                        'Once you send your enquiry, a safari specialist reviews it and replies with questions and initial ideas. We then prepare a tailored, itemised proposal for you to refine at your leisure.',
                    ],
                    'bullets' => [
                        'We review your dates, group and interests',
                        'A specialist replies with initial recommendations',
                        'You receive a tailored, itemised proposal',
                        'We refine together until it is right',
                    ],
                ],
            ],
            'faqs' => [
                ['q' => 'Is planning a safari with you free?', 'a' => 'Yes. Consultation and proposals are complimentary and there is no obligation until you decide to confirm.'],
                ['q' => 'How quickly will you respond?', 'a' => 'We aim to reply to every enquiry within one business day.'],
                ['q' => 'What details should I include?', 'a' => 'Your travel dates, group size and ages, interests, preferred pace and any budget guidance you would like to share.'],
            ],
            'related' => ['luxury-kenya-safaris', 'why-caracal-expeditions', 'booking-payment-process', 'kenya-safari-faq'],
        ],

    ],

];
