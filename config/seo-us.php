<?php

/*
|--------------------------------------------------------------------------
| Phase 4 — USA market cluster
|--------------------------------------------------------------------------
| Merged into the main SEO page registry by App\Support\SeoPageRegistry.
| Pages are written in American English and share hreflang groups with the
| equivalent global English pages so they form true locale clusters.
*/

$inclusions = [
    'Private safari guide and 4x4 vehicle throughout',
    'Handpicked luxury camps and lodges',
    'Internal bush flights between regions',
    'Park, conservancy and concession fees',
    'Full-board meals as per itinerary',
    'All airport and airstrip transfers',
    'Drinking water in the safari vehicle',
    'Emergency evacuation cover',
];

$exclusions = [
    'International flights and visas',
    'Travel and medical insurance',
    'Premium wines, spirits and champagne',
    'Optional balloon safari and spa treatments',
    'Gratuities for guides and camp staff',
    'Items of a personal nature',
];

return [

    'us' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'us',
        'eyebrow' => 'Planning from the United States',
        'h1' => 'Kenya Safaris from the USA',
        'title' => 'Kenya Safaris from the USA | Luxury Safari Planning | Caracal',
        'description' => 'Plan a luxury Kenya safari from the USA with Caracal Expeditions — private guides, customized itineraries and seamless connections from New York, Los Angeles and beyond.',
        'subtitle' => 'Caracal Expeditions designs private, customized Kenya safaris for American travelers, with USD pricing, honest advice and seamless connections from major US cities.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Luxury Kenya safari planned from the USA',
        'stats' => [
            ['value' => '~16h', 'label' => 'Flight time from the US East Coast'],
            ['value' => 'Private', 'label' => 'Customized, never group'],
            ['value' => 'USD', 'label' => 'Clear, itemized pricing'],
        ],
        'sections' => [
            [
                'kicker' => 'Why Kenya',
                'title' => 'The ultimate first safari for American travelers',
                'paragraphs' => [
                    'Kenya delivers the safari most travelers imagine: lions on open plains, elephants beneath Kilimanjaro, and the Great Migration thundering through the Masai Mara. It is English-speaking, easy to navigate and superbly served by bush flights.',
                    'We handle every detail on the ground, so you simply fly in and experience it.',
                ],
                'bullets' => [
                    'World-class wildlife and guiding',
                    'English-speaking, traveler-friendly',
                    'Direct or one-stop flights from major US hubs',
                    'Safari-and-beach vacations in one trip',
                ],
            ],
            [
                'kicker' => 'Flights and timing',
                'title' => 'Getting to Kenya from the United States',
                'paragraphs' => [
                    'Most US travelers reach Nairobi via a direct or single connection from New York, Washington, Atlanta, Chicago or the West Coast. We advise on routing and build your safari around your arrival times.',
                    'For the best combination of wildlife and weather, aim for July to October or January to March.',
                ],
            ],
            [
                'kicker' => 'How we work',
                'title' => 'Customized itineraries, not group tours',
                'paragraphs' => [
                    'Every Caracal safari is private and built around you. We propose regions, camps and pacing, then refine together until it is right — with no obligation until you confirm.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How long is the flight to Kenya from the USA?', 'a' => 'From the US East Coast it is roughly 14 to 16 hours including a connection; from the West Coast, a little longer. Several airlines offer one-stop service to Nairobi.'],
            ['q' => 'Do you price in USD?', 'a' => 'Yes. US travelers receive clear, itemized proposals in US dollars, with no hidden extras.'],
            ['q' => 'What is the best time to visit Kenya from the USA?', 'a' => 'July to October for the Great Migration and dry-season game viewing, or January to March for warm weather and excellent big-cat sightings.'],
            ['q' => 'Do US citizens need a visa for Kenya?', 'a' => 'US citizens require an entry authorization. Requirements can change, so we recommend checking the latest official guidance before travel.'],
        ],
        'related' => ['us/kenya-luxury-safaris', 'us/kenya-safari-packages', 'us/kenya-safari-cost', 'us/flying-to-kenya-from-usa'],
    ],

    'us/kenya-luxury-safaris' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'luxury-kenya-safaris',
        'eyebrow' => 'Private, customized journeys',
        'h1' => 'Luxury Kenya Safaris from the USA',
        'title' => 'Luxury Kenya Safari from USA | Private Tailor-Made Tours',
        'description' => 'Luxury Kenya safaris from the USA with private guides, customized itineraries and handpicked camps. USD pricing and seamless connections from major US cities.',
        'subtitle' => 'A private, customized luxury safari in Kenya — expert guides, handpicked camps and bush flights, arranged end to end for American travelers.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Luxury Kenya safari from the USA at sunset',
        'stats' => [
            ['value' => 'Private', 'label' => 'Guides and vehicles'],
            ['value' => 'Customized', 'label' => 'Built around you'],
            ['value' => 'USD', 'label' => 'Transparent pricing'],
        ],
        'sections' => [
            [
                'kicker' => 'The Caracal difference',
                'title' => 'A luxury safari designed for you',
                'paragraphs' => [
                    'We are Kenya-based specialists who work only here. That focus means better camps, better guides and better routing — and a safari that fits how you like to travel.',
                    'There are no group departures. Your journey is private and built once, for you.',
                ],
                'bullets' => [
                    'Private guide and vehicle throughout',
                    'Handpicked luxury camps and conservancies',
                    'Bush flights to maximize time in the wild',
                    'One planning contact from start to finish',
                ],
            ],
            [
                'kicker' => 'Regions',
                'title' => 'Where you can travel',
                'paragraphs' => [
                    'Most American travelers combine two or three regions: the Masai Mara for big cats and the Migration, Laikipia or Lewa for private conservancies, Amboseli for elephants, Samburu for the wild north, and the coast for a beach finish.',
                ],
            ],
            [
                'kicker' => 'Practical',
                'title' => 'Planning from the USA',
                'paragraphs' => [
                    'We advise on flights, timing, visas and packing, and build your itinerary around your arrival city and schedule. Proposals are in USD and clearly itemized.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How much does a luxury Kenya safari cost from the USA?', 'a' => 'Private luxury safaris typically start around USD 8,000 per person for 7 days and rise with length, season, camp tier and private charters. We provide an itemized USD proposal.'],
            ['q' => 'Can you work around our US flight times?', 'a' => 'Yes. We design routing around your arrival and departure so you maximize time on safari and avoid unnecessary nights.'],
            ['q' => 'Is a private safari worth it for two people?', 'a' => 'For most travelers, yes. The uplift over a shared safari is smaller than expected and the flexibility transforms the experience.'],
            ['q' => 'Do you handle internal flights?', 'a' => 'Yes, we arrange all internal bush flights and transfers; international tickets are usually booked on your side with our guidance.'],
        ],
        'related' => ['us/kenya-safari-packages', 'us/private-kenya-safari', 'us/kenya-safari-cost', 'luxury-kenya-safaris'],
    ],

    'us/kenya-safari-packages' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'kenya-luxury-safari-packages',
        'eyebrow' => 'Curated, all-inclusive journeys',
        'h1' => 'Kenya Safari Packages from the USA',
        'title' => 'Kenya Safari Packages from USA | Custom Luxury Itineraries',
        'description' => 'Custom Kenya safari packages from the USA — 7 to 14-day private itineraries with guides, camps and flights, priced clearly in USD.',
        'subtitle' => 'Ready-to-tailor safari packages for American travelers, priced in USD and fully customizable — from a 7-day Mara escape to a 14-day safari-and-beach vacation.',
        'hero_image' => 'images/giraffe-herd.jpg',
        'hero_alt' => 'Kenya safari package from the USA',
        'stats' => [
            ['value' => '7–14', 'label' => 'Day options'],
            ['value' => 'All-In', 'label' => 'Camps, guides, flights'],
            ['value' => 'USD', 'label' => 'Itemized proposals'],
        ],
        'sections' => [
            [
                'kicker' => 'What\'s included',
                'title' => 'Complete packages, fully arranged',
                'paragraphs' => [
                    'Our packages include handpicked luxury camps, private guiding, internal bush flights, park fees and all transfers, so your trip is effortless from arrival to departure.',
                    'Each package is a starting point we customize to your dates, budget and interests.',
                ],
                'bullets' => [
                    'Luxury camps and lodges',
                    'Private guide and 4x4 throughout',
                    'Internal bush flights and transfers',
                    'Park fees and full-board meals',
                ],
            ],
            [
                'kicker' => 'Duration',
                'title' => 'Choosing your length',
                'paragraphs' => [
                    'Seven days suits a single region such as the Masai Mara. Ten days allows two regions or a beach finish. Twelve to fourteen days opens up the full multi-region circuit at a relaxed pace.',
                ],
                'bullets' => [
                    '7 days — one region, deep focus',
                    '10 days — two regions or safari + beach',
                    '12 days — three regions, relaxed',
                    '14 days — the complete Kenya journey',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Are these group tours?', 'a' => 'No. Every package is private and fully customized to your group; there are no fixed departures with strangers.'],
            ['q' => 'Can we book for a family?', 'a' => 'Yes. Family suites, kid-friendly camps and flexible pacing are all part of our family safari packages.'],
            ['q' => 'What is not included?', 'a' => 'International flights, visas, travel insurance, premium drinks, optional balloon safaris and gratuities are typically excluded.'],
            ['q' => 'How far ahead should we book?', 'a' => 'For peak season we recommend 6 to 12 months; outside peak dates, 3 to 6 months is usually comfortable.'],
        ],
        'related' => ['us/kenya-luxury-safaris', 'us/10-day-kenya-luxury-safari', 'us/12-day-kenya-luxury-safari', 'kenya-luxury-safari-packages'],
    ],

    'us/private-kenya-safari' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'private-safaris-kenya',
        'eyebrow' => 'Your guide, your vehicle',
        'h1' => 'Private Kenya Safaris from the USA',
        'title' => 'Private Kenya Safari from USA | Your Own Guide & Vehicle',
        'description' => 'A private Kenya safari from the USA with your own guide and vehicle, customized routing and flexible daily game drives. Priced in USD.',
        'subtitle' => 'A private Kenya safari gives you a dedicated guide, your own vehicle and total flexibility — the freedom to follow a sighting and travel on your own terms.',
        'hero_image' => 'images/mara-jeep.jpg',
        'hero_alt' => 'Private safari vehicle and guide in Kenya',
        'stats' => [
            ['value' => 'Private', 'label' => 'Guide and 4x4'],
            ['value' => 'Flexible', 'label' => 'Daily pace set by you'],
            ['value' => 'US-ready', 'label' => 'USD and US flight timing'],
        ],
        'sections' => [
            [
                'kicker' => 'What private means',
                'title' => 'Travel entirely on your own terms',
                'paragraphs' => [
                    'With no shared vehicle and no fixed schedule, you can linger at a sighting, return early for lunch, or head out before dawn for the best light.',
                    'Private guiding is the single biggest upgrade to a safari, and it is standard on every Caracal journey.',
                ],
                'bullets' => [
                    'Dedicated guide and private 4x4',
                    'Flexible game-drive timing',
                    'Activities tailored to you',
                    'No shared departures',
                ],
            ],
            [
                'kicker' => 'Why private',
                'title' => 'Ideal for couples, families and photographers',
                'paragraphs' => [
                    'Private safaris suit honeymooners, families with children, and photographers who want control over light and positioning.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Is a private safari much more expensive?', 'a' => 'There is a premium because the vehicle and guide are yours, but for two or more travelers the uplift is often modest compared with a shared option.'],
            ['q' => 'Can we keep the same guide throughout?', 'a' => 'Where logistics allow, yes. We only switch for regional specialists when it adds real value.'],
            ['q' => 'Can we include our children?', 'a' => 'Absolutely — private guiding is ideal for families because you control the pace and can tailor activities.'],
            ['q' => 'Can we do a private photo safari?', 'a' => 'Yes. Many private safaris are built around photography, with early starts and extended golden-hour drives.'],
        ],
        'related' => ['us/kenya-luxury-safaris', 'us/fly-in-safaris-kenya', 'us/kenya-family-safari', 'private-safaris-kenya'],
    ],

    'us/fly-in-safaris-kenya' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'fly-in-safaris-kenya',
        'eyebrow' => 'More time in the wild',
        'h1' => 'Fly-In Safaris in Kenya from the USA',
        'title' => 'Kenya Fly-In Safari from USA | Bush Flights & Circuits',
        'description' => 'Fly-in Kenya safaris from the USA using bush flights between the Mara, Laikipia and Amboseli. More time in the wild, less time on the road.',
        'subtitle' => 'Bush flights turn long road transfers into part of the adventure, linking Kenya\'s finest regions by air so more of your trip is spent in the wild.',
        'hero_image' => 'images/safari-air.jpg',
        'hero_alt' => 'Fly-in safari bush flight in Kenya',
        'stats' => [
            ['value' => 'By Air', 'label' => 'Between regions'],
            ['value' => 'Time+', 'label' => 'More hours in the bush'],
            ['value' => 'Scenic', 'label' => 'Kenya from above'],
        ],
        'sections' => [
            [
                'kicker' => 'Why fly',
                'title' => 'Cut the driving, keep the safari',
                'paragraphs' => [
                    'Kenya is vast. A bush flight between the Mara and Laikipia takes under an hour instead of a full day by road, landing minutes from camp.',
                    'Fly-in circuits are the most efficient way to combine several regions without sacrificing comfort or wildlife time.',
                ],
                'bullets' => [
                    'Scheduled and private charter options',
                    'Airstrip-to-camp transfers included',
                    'Combine two to four regions',
                    'Scenic low-level views',
                ],
            ],
            [
                'kicker' => 'Logistics',
                'title' => 'Effortless movement, handled for you',
                'paragraphs' => [
                    'We coordinate every flight, transfer and baggage allowance around your itinerary, with a representative meeting you on the ground.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Are bush flights safe?', 'a' => 'Yes. We use established Kenyan operators with well-maintained aircraft and experienced pilots on routes they fly daily.'],
            ['q' => 'How much luggage can I bring?', 'a' => 'Light-aircraft baggage is usually limited to about 15kg in a soft bag. We provide exact allowances and can store extra luggage.'],
            ['q' => 'Can we fly privately instead?', 'a' => 'Yes. Private charters offer full flexibility on timing and routing and are popular for families and groups.'],
            ['q' => 'Do fly-in safaris cost more?', 'a' => 'There is a flight cost, often offset by staying in higher-value regions and spending more time in camp. We show the trade-off clearly.'],
        ],
        'related' => ['us/kenya-luxury-safaris', 'us/private-kenya-safari', 'us/10-day-kenya-luxury-safari', 'fly-in-safaris-kenya'],
    ],

    'us/kenya-honeymoon-safari' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'luxury-honeymoon-safaris-kenya',
        'eyebrow' => 'Romance in the wild',
        'h1' => 'Kenya Honeymoon Safaris from the USA',
        'title' => 'Kenya Honeymoon Safari from USA | Romantic Luxury Trips',
        'description' => 'Romantic Kenya honeymoon safaris from the USA with private guides, intimate camps, sundowners and Indian Ocean beach extensions.',
        'subtitle' => 'A honeymoon safari designed for two: private game drives, intimate camps, candlelit dinners under the stars and an optional beach finale.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Romantic Kenya honeymoon safari sundowner',
        'stats' => [
            ['value' => 'For Two', 'label' => 'Entirely private'],
            ['value' => 'Romantic', 'label' => 'Intimate camps'],
            ['value' => 'Bush+Beach', 'label' => 'Optional ocean finish'],
        ],
        'sections' => [
            [
                'kicker' => 'Designed for two',
                'title' => 'Privacy, romance and unhurried days',
                'paragraphs' => [
                    'Your honeymoon is private throughout, with intimate camps, thoughtful touches and the freedom to move at your own pace.',
                    'From a private sundowner on the plains to a candlelit bush dinner, we build the moments that make the trip yours alone.',
                ],
                'bullets' => [
                    'Private vehicle and guide',
                    'Intimate romantic camps',
                    'Private sundowners and dinners',
                    'Optional couples\' spa and pool suites',
                ],
            ],
            [
                'kicker' => 'The ideal trip',
                'title' => 'Safari first, ocean after',
                'paragraphs' => [
                    'Most couples spend four to six nights on safari and four to six on the coast, ending relaxed and sun-kissed before flying home.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Is Kenya a good honeymoon destination?', 'a' => 'Yes. It combines exceptional wildlife, intimate luxury camps and the Indian Ocean, making it one of the world\'s most romantic safari honeymoons.'],
            ['q' => 'Can you arrange a private beach villa?', 'a' => 'Yes, from boutique beach hotels to fully private villas, we match the coast stay to your style.'],
            ['q' => 'When is the best time for a honeymoon?', 'a' => 'The dry seasons offer dependable wildlife and weather; the green season brings lower rates and dramatic skies for couples who value atmosphere.'],
            ['q' => 'What is a romantic honeymoon budget?', 'a' => 'A private luxury honeymoon safari with beach typically starts around USD 10,000 per person, depending on season, length and camp tier.'],
        ],
        'related' => ['us/kenya-safari-and-beach', 'us/kenya-luxury-safaris', 'luxury-honeymoon-safaris-kenya', 'us/private-kenya-safari'],
    ],

    'us/kenya-family-safari' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'luxury-family-safaris-kenya',
        'eyebrow' => 'Adventure for all ages',
        'h1' => 'Kenya Family Safaris from the USA',
        'title' => 'Kenya Family Safari from USA | Luxury Family Safari Vacations',
        'description' => 'Luxury Kenya family safaris from the USA with private guides, kid-friendly camps, flexible pacing and beach add-ons for all ages.',
        'subtitle' => 'A private family safari designed around your children\'s ages and energy — expert guides, kid-friendly camps and the flexibility to slow down or speed up.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => 'Family safari in Kenya watching elephants',
        'stats' => [
            ['value' => 'All Ages', 'label' => 'Tailored to your family'],
            ['value' => 'Flexible', 'label' => 'Pace set by the kids'],
            ['value' => 'Educational', 'label' => 'Guides who inspire'],
        ],
        'sections' => [
            [
                'kicker' => 'Family-first design',
                'title' => 'A safari that works for every age',
                'paragraphs' => [
                    'Children experience the bush differently, and a great family safari respects that. We choose camps with family suites, pools and flexible meal times, and guides who are brilliant with young travelers.',
                    'Because your vehicle is private, you can shorten game drives, return for naps and find a rhythm everyone enjoys.',
                ],
                'bullets' => [
                    'Kid-friendly luxury camps and family suites',
                    'Patient, engaging private guides',
                    'Shorter drives and built-in downtime',
                    'Interconnecting rooms and private dining',
                ],
            ],
            [
                'kicker' => 'Where to go',
                'title' => 'The best regions for families',
                'paragraphs' => [
                    'The Masai Mara offers prolific wildlife and easy logistics; Laikipia adds hands-on conservation; the coast is a perfect ocean finish.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'What age is suitable for a family safari?', 'a' => 'Most camps welcome children from around six years, and some offer dedicated family programs. We match camps to your children\'s ages.'],
            ['q' => 'Is a safari safe for children?', 'a' => 'Yes, with sensible guidance. We choose secure camps, brief children on bush safety and keep activities age-appropriate.'],
            ['q' => 'Can we combine safari with a beach?', 'a' => 'Yes — a safari-and-beach vacation is one of the easiest family combinations, with a calm Indian Ocean finish.'],
            ['q' => 'Do children pay less?', 'a' => 'Many camps offer reduced child rates, and sharing a family room lowers costs. We show family pricing clearly in your proposal.'],
        ],
        'related' => ['us/kenya-safari-and-beach', 'us/kenya-luxury-safaris', 'luxury-family-safaris-kenya', 'us/private-kenya-safari'],
    ],

    'us/kenya-safari-and-beach' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'luxury-safari-and-beach-kenya',
        'eyebrow' => 'Wilderness, then ocean',
        'h1' => 'Kenya Safari and Beach Vacations from the USA',
        'title' => 'Kenya Safari and Beach Vacation | From the USA',
        'description' => 'Kenya safari and beach vacations from the USA — private game viewing followed by Diani, Watamu or Zanzibar, all seamlessly connected.',
        'subtitle' => 'Pair the drama of a private Kenya safari with the calm of the Indian Ocean — a seamless vacation from savannah sunrise to barefoot beach.',
        'hero_image' => 'images/tsavo-giraffes.jpg',
        'hero_alt' => 'Kenya safari and beach vacation from the USA',
        'stats' => [
            ['value' => 'Bush', 'label' => 'Private safari first'],
            ['value' => 'Beach', 'label' => 'Indian Ocean finish'],
            ['value' => 'Seamless', 'label' => 'Flights and transfers arranged'],
        ],
        'sections' => [
            [
                'kicker' => 'The rhythm',
                'title' => 'Why safari and beach work together',
                'paragraphs' => [
                    'After days of early drives and big wildlife, the coast is a gentle counterpoint: warm water, white sand and unhurried days.',
                    'We sequence the trip so the safari comes first and the beach restores you before the journey home.',
                ],
                'bullets' => [
                    'Safari first, then ocean relaxation',
                    'Internal flights link bush airstrips to the coast',
                    'Beach properties matched to your style',
                    'Ideal for honeymoons and family vacations',
                ],
            ],
            [
                'kicker' => 'Coast choices',
                'title' => 'Diani, Watamu and Zanzibar',
                'paragraphs' => [
                    'Diani Beach offers long white sands and easy access, Watamu brings reef and marine life, and Zanzibar adds a different culture and spice-island atmosphere.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How many nights should we spend on the coast?', 'a' => 'Most travelers combine 4 to 6 safari nights with 4 to 7 beach nights, tuned to your flights and stamina.'],
            ['q' => 'Is Zanzibar included?', 'a' => 'Yes. A Kenya safari with a Zanzibar extension is popular and easy to arrange.'],
            ['q' => 'When is the best time for safari and beach?', 'a' => 'The coast is warm year-round. January to March and July to October offer the best of both.'],
            ['q' => 'Is the coast good for families?', 'a' => 'Yes, the calm, shallow Indian Ocean is ideal for children, and we choose family-friendly beach properties.'],
        ],
        'related' => ['us/kenya-honeymoon-safari', 'us/kenya-family-safari', 'luxury-safari-and-beach-kenya', 'us/kenya-luxury-safaris'],
    ],

    'us/10-day-kenya-luxury-safari' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'safaris/10-day-luxury-kenya-safari',
        'template' => 'itinerary',
        'eyebrow' => 'Ten days, three regions',
        'h1' => '10-Day Kenya Luxury Safari from the USA',
        'title' => '10 Day Kenya Safari from USA | Luxury Private Itinerary',
        'description' => 'A 10-day luxury Kenya safari from the USA across the Masai Mara, Laikipia and Amboseli, with private guiding and USD pricing.',
        'subtitle' => 'Ten private days across the Masai Mara, Laikipia and Amboseli — a relaxed, customized itinerary built around US flight times and priced in USD.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => '10-day luxury Kenya safari from the USA',
        'facts' => [
            ['label' => 'Duration', 'value' => '10 days / 9 nights'],
            ['label' => 'Regions', 'value' => 'Mara · Laikipia · Amboseli'],
            ['label' => 'Style', 'value' => 'Private fly-in safari'],
            ['label' => 'Pricing', 'value' => 'USD, itemized'],
        ],
        'itinerary' => [
            ['day' => 'Day 1', 'title' => 'Arrive in Nairobi', 'text' => 'Met on arrival and transferred to a boutique hotel to rest after your international flight.'],
            ['day' => 'Day 2', 'title' => 'Fly to the Masai Mara', 'text' => 'A short bush flight to the Mara, lunch in camp and an afternoon game drive.'],
            ['day' => 'Day 3', 'title' => 'Mara full day', 'text' => 'Track big cats across the plains with your private guide and a bush picnic lunch.'],
            ['day' => 'Day 4', 'title' => 'Mara to Laikipia', 'text' => 'Morning drive, then a scenic flight north to a private Laikipia conservancy.'],
            ['day' => 'Day 5', 'title' => 'Laikipia conservancy', 'text' => 'Off-road and night drives, rhino and predator tracking, and quiet time in camp.'],
            ['day' => 'Day 6', 'title' => 'Laikipia experiences', 'text' => 'A guided walk or camel ride and a private sundowner over the plains.'],
            ['day' => 'Day 7', 'title' => 'Fly to Amboseli', 'text' => 'Fly south to Amboseli for big skies, elephant herds and Kilimanjaro views.'],
            ['day' => 'Day 8', 'title' => 'Amboseli full day', 'text' => 'Dawn and afternoon drives among elephants with photography-focused positioning.'],
            ['day' => 'Day 9', 'title' => 'Amboseli at leisure', 'text' => 'A gentle morning drive, a Maasai community visit and a final sundowner.'],
            ['day' => 'Day 10', 'title' => 'Depart Kenya', 'text' => 'A last morning in the bush, then a flight to Nairobi for your US-bound departure.'],
        ],
        'sections' => [
            [
                'kicker' => 'Why this journey',
                'title' => 'Three regions, one elegant arc',
                'paragraphs' => [
                    'Ten days lets you experience the contrast that makes Kenya so rewarding: the predator-rich Mara, the private wilderness of Laikipia and the elephant country of Amboseli.',
                    'Bush flights keep transitions short, so the extra days go into wildlife and rest rather than roads.',
                ],
                'bullets' => [
                    'The three defining regions of a Kenya safari',
                    'Private guiding and 4x4 throughout',
                    'Photography-friendly Amboseli light',
                    'Priced in USD for US travelers',
                ],
            ],
        ],
        'inclusions' => $inclusions,
        'exclusions' => $exclusions,
        'faqs' => [
            ['q' => 'Is 10 days enough to see Kenya?', 'a' => 'Yes. Ten days with bush flights covers three iconic regions at a relaxed pace, with time for genuine rest.'],
            ['q' => 'What does a 10-day safari cost from the USA?', 'a' => 'Private luxury 10-day safaris typically range from around USD 10,000 to USD 18,000 per person, depending on season, camps and group size.'],
            ['q' => 'Can we add the beach?', 'a' => 'Yes, at ten days a short beach finish is possible. We will advise on the best split for your flights.'],
            ['q' => 'Do you align with US flights?', 'a' => 'Yes. We design the itinerary around your arrival and departure so you maximize time on safari.'],
        ],
        'related' => ['us/12-day-kenya-luxury-safari', 'us/kenya-safari-packages', 'safaris/10-day-luxury-kenya-safari', 'us/kenya-safari-cost'],
    ],

    'us/12-day-kenya-luxury-safari' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'safaris/12-day-luxury-kenya-safari',
        'template' => 'itinerary',
        'eyebrow' => 'Twelve days of depth',
        'h1' => '12-Day Kenya Luxury Safari from the USA',
        'title' => '12 Day Kenya Safari from USA | Private Luxury Circuit',
        'description' => 'A 12-day luxury Kenya safari from the USA through the Mara, Laikipia and Samburu, designed for travelers who want depth, privacy and relaxed pacing.',
        'subtitle' => 'Twelve private days across the Masai Mara, Laikipia and Samburu — a deeper, unhurried circuit customized for US travelers.',
        'hero_image' => 'images/giraffe-herd.jpg',
        'hero_alt' => '12-day luxury Kenya safari from the USA',
        'facts' => [
            ['label' => 'Duration', 'value' => '12 days / 11 nights'],
            ['label' => 'Regions', 'value' => 'Mara · Laikipia · Samburu'],
            ['label' => 'Style', 'value' => 'Private fly-in safari'],
            ['label' => 'Pricing', 'value' => 'USD, itemized'],
        ],
        'itinerary' => [
            ['day' => 'Day 1', 'title' => 'Arrive in Nairobi', 'text' => 'Private transfer and a relaxed first night after your international flight.'],
            ['day' => 'Day 2', 'title' => 'Fly to the Masai Mara', 'text' => 'Bush flight to the Mara, lunch in camp and an afternoon drive.'],
            ['day' => 'Day 3', 'title' => 'Mara full day', 'text' => 'Dawn and golden-hour drives tracking lion, cheetah and leopard.'],
            ['day' => 'Day 4', 'title' => 'Mara at leisure', 'text' => 'Bush breakfast, optional balloon safari and time to enjoy camp.'],
            ['day' => 'Day 5', 'title' => 'Mara to Laikipia', 'text' => 'Fly north to a private conservancy for off-road and night drives.'],
            ['day' => 'Day 6', 'title' => 'Laikipia wildlife', 'text' => 'Rhino, big cats and specialized northern species on a private conservancy.'],
            ['day' => 'Day 7', 'title' => 'Laikipia experiences', 'text' => 'Guided walk, camel ride or lion-tracking with researchers.'],
            ['day' => 'Day 8', 'title' => 'Fly to Samburu', 'text' => 'Fly further north for arid, photogenic wilderness and the Special Five.'],
            ['day' => 'Day 9', 'title' => 'Samburu full day', 'text' => 'Game drives along the Ewaso Ng\'iro river and a cultural visit if you wish.'],
            ['day' => 'Day 10', 'title' => 'Samburu at leisure', 'text' => 'A slower day of drives, river wildlife and private sundowners.'],
            ['day' => 'Day 11', 'title' => 'Samburu to Nairobi', 'text' => 'Morning drive, then fly to Nairobi for a final night.'],
            ['day' => 'Day 12', 'title' => 'Depart Kenya', 'text' => 'Transfer to the airport for your US-bound flight.'],
        ],
        'sections' => [
            [
                'kicker' => 'Why this journey',
                'title' => 'The connoisseur\'s Kenya circuit',
                'paragraphs' => [
                    'Twelve days allows a truly varied journey: the Mara\'s predators, Laikipia\'s private conservancies and Samburu\'s remote north at a slower pace.',
                ],
                'bullets' => [
                    'Three contrasting ecosystems',
                    'Time for walking, conservation and photography',
                    'Private guiding and flexible daily plans',
                    'Samburu\'s Special Five and rich culture',
                ],
            ],
        ],
        'inclusions' => $inclusions,
        'exclusions' => $exclusions,
        'faqs' => [
            ['q' => 'Why include Samburu?', 'a' => 'Samburu adds a different landscape, the Special Five species and a quieter, more exclusive atmosphere than the southern parks.'],
            ['q' => 'Is 12 days good for photographers?', 'a' => 'Excellent. The length allows early starts, extended golden-hour drives and time in reserves with fewer vehicles.'],
            ['q' => 'Can we swap Samburu for the coast?', 'a' => 'Yes. We can redesign the second half as a beach extension if you prefer an ocean finish.'],
            ['q' => 'What does a 12-day safari cost from the USA?', 'a' => 'Private luxury 12-day safaris typically range from around USD 12,000 to USD 22,000 per person, depending on season, camp tier and group size.'],
        ],
        'related' => ['us/14-day-kenya-luxury-safari', 'us/kenya-safari-packages', 'safaris/12-day-luxury-kenya-safari', 'us/kenya-safari-cost'],
    ],

    'us/14-day-kenya-luxury-safari' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'safaris/14-day-luxury-kenya-safari',
        'template' => 'itinerary',
        'eyebrow' => 'The complete Kenya journey',
        'h1' => '14-Day Kenya Luxury Safari from the USA',
        'title' => '14 Day Kenya Safari from USA | Luxury Safari & Beach',
        'description' => 'A 14-day luxury Kenya safari from the USA combining the Mara, Laikipia, Samburu, Amboseli and the Indian Ocean coast in one seamless journey.',
        'subtitle' => 'The complete Kenya journey — fourteen private days linking four great wildlife regions with a barefoot finish on the Indian Ocean.',
        'hero_image' => 'images/hero-samburu.jpg',
        'hero_alt' => '14-day luxury Kenya safari and beach from the USA',
        'facts' => [
            ['label' => 'Duration', 'value' => '14 days / 13 nights'],
            ['label' => 'Regions', 'value' => 'Mara · Laikipia · Samburu · Amboseli · Coast'],
            ['label' => 'Style', 'value' => 'Private safari & beach'],
            ['label' => 'Pricing', 'value' => 'USD, itemized'],
        ],
        'itinerary' => [
            ['day' => 'Day 1', 'title' => 'Arrive in Nairobi', 'text' => 'Private transfer and a relaxed first night in Kenya.'],
            ['day' => 'Day 2', 'title' => 'Fly to the Masai Mara', 'text' => 'Bush flight to the Mara and an afternoon game drive.'],
            ['day' => 'Day 3', 'title' => 'Mara full day', 'text' => 'Extended drives tracking the Mara\'s big cats and plains game.'],
            ['day' => 'Day 4', 'title' => 'Mara at leisure', 'text' => 'Bush breakfast, optional balloon safari and quiet time in camp.'],
            ['day' => 'Day 5', 'title' => 'Mara to Laikipia', 'text' => 'Fly north to a private conservancy for off-road game viewing.'],
            ['day' => 'Day 6', 'title' => 'Laikipia wildlife', 'text' => 'Rhino and predator tracking in a low-density conservancy.'],
            ['day' => 'Day 7', 'title' => 'Laikipia experiences', 'text' => 'Guided walk, camel ride or conservation encounter.'],
            ['day' => 'Day 8', 'title' => 'Fly to Samburu', 'text' => 'Head north for arid wilderness and the Special Five species.'],
            ['day' => 'Day 9', 'title' => 'Samburu full day', 'text' => 'River-front game drives and an optional community visit.'],
            ['day' => 'Day 10', 'title' => 'Samburu to Amboseli', 'text' => 'A scenic flight south to Amboseli for elephants and Kilimanjaro views.'],
            ['day' => 'Day 11', 'title' => 'Amboseli full day', 'text' => 'Dawn and afternoon drives among elephant herds and big skies.'],
            ['day' => 'Day 12', 'title' => 'Fly to the coast', 'text' => 'Fly to Diani or Watamu and transfer to your beach retreat.'],
            ['day' => 'Day 13', 'title' => 'Indian Ocean', 'text' => 'A full day to relax, swim, dive or sail on the Kenyan coast.'],
            ['day' => 'Day 14', 'title' => 'Depart Kenya', 'text' => 'Fly to Nairobi and connect with your US-bound international flight.'],
        ],
        'sections' => [
            [
                'kicker' => 'Why this journey',
                'title' => 'Kenya in full, from bush to beach',
                'paragraphs' => [
                    'Fourteen days is the definitive Kenya safari. Experience four great wildlife regions, then decompress on the Indian Ocean, flying between every stage.',
                    'It is ideal for a milestone trip, a long-awaited first safari, or travelers who want to see Kenya properly in one visit from the USA.',
                ],
                'bullets' => [
                    'Four iconic safari regions plus the coast',
                    'Private guiding and bush flights throughout',
                    'Time for photography, walking and conservation',
                    'A restorative Indian Ocean finale',
                ],
            ],
        ],
        'inclusions' => array_merge($inclusions, ['Beach accommodation on a half-board basis']),
        'exclusions' => array_merge($exclusions, ['Beach activities and watersports']),
        'faqs' => [
            ['q' => 'Is 14 days too long for a safari?', 'a' => 'Not when it includes the coast. The beach finale gives the trip a natural rest, so the safari days stay fresh.'],
            ['q' => 'Where on the coast do you recommend?', 'a' => 'Diani offers white sand and easy access; Watamu brings reefs; Zanzibar suits a different cultural flavor.'],
            ['q' => 'Can we reduce the safari to add more beach?', 'a' => 'Yes, we balance safari and beach nights to suit your flights and how much relaxation you want.'],
            ['q' => 'What does a 14-day journey cost from the USA?', 'a' => 'Private luxury 14-day safaris with a beach finish typically range from around USD 15,000 to USD 28,000 per person, depending on season, camps and group size.'],
        ],
        'related' => ['us/kenya-safari-and-beach', 'us/12-day-kenya-luxury-safari', 'safaris/14-day-luxury-kenya-safari', 'us/kenya-safari-packages'],
    ],

    'us/masai-mara-luxury-safari' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'destinations/masai-mara',
        'eyebrow' => 'Predator country',
        'h1' => 'Masai Mara Luxury Safari from the USA',
        'title' => 'Masai Mara Safari from USA | Luxury Mara Tours',
        'description' => 'Luxury Masai Mara safaris from the USA with private guides, exclusive conservancies and front-row access to the Great Migration.',
        'subtitle' => 'The Masai Mara is Kenya\'s most celebrated wilderness — golden plains, abundant big cats and, from July to October, the spectacle of the Great Migration.',
        'hero_image' => 'images/safari-giraffe.jpg',
        'hero_alt' => 'Masai Mara luxury safari from the USA',
        'stats' => [
            ['value' => 'Big Cats', 'label' => 'Lion, leopard, cheetah'],
            ['value' => 'Migration', 'label' => 'July to October'],
            ['value' => 'Fly-In', 'label' => '45 minutes from Nairobi'],
        ],
        'sections' => [
            [
                'kicker' => 'Overview',
                'title' => 'Why the Masai Mara is the benchmark safari',
                'paragraphs' => [
                    'The Mara is a vast, open ecosystem where wildlife is abundant and easy to see, supporting exceptional densities of lion, cheetah and leopard.',
                    'A well-planned Mara safari balances the legendary reserve with quieter private conservancies that border it.',
                ],
                'bullets' => [
                    'World-class predator viewing year-round',
                    'The Great Migration from July to October',
                    'Reserve plus low-density conservancies',
                    'Quick bush flights from Nairobi',
                ],
            ],
            [
                'kicker' => 'Planning from the USA',
                'title' => 'When to visit and how to get there',
                'paragraphs' => [
                    'July to October brings the Migration and superb dry-season viewing; January to March offers warm conditions and excellent big-cat sightings with fewer visitors. We time your stay and position your camps around your US flights.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'What is the best time to visit the Masai Mara?', 'a' => 'July to October for the Great Migration and dry-season game viewing, or January to March for warm weather and excellent big-cat sightings with fewer crowds.'],
            ['q' => 'How do I get to the Masai Mara from the USA?', 'a' => 'Fly to Nairobi, then take a 45-minute bush flight to a Mara airstrip. We arrange the connection around your international arrival.'],
            ['q' => 'Should I stay in the reserve or a conservancy?', 'a' => 'Conservancies offer more privacy and flexible activities. Many itineraries combine both, and we advise based on your priorities.'],
            ['q' => 'Will I see the Great Migration?', 'a' => 'River crossings are dramatic but not guaranteed. The herds are present roughly July to October, and we time and position your stay to maximize your chances.'],
        ],
        'related' => ['destinations/masai-mara', 'us/kenya-luxury-safaris', 'us/10-day-kenya-luxury-safari', 'great-migration-safaris-kenya'],
    ],

    'us/kenya-safari-cost' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'us/kenya-safari-cost',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'Budgeting your trip',
        'h1' => 'Kenya Safari Cost from the USA',
        'title' => 'Kenya Safari Cost from USA | 2026 Price Guide',
        'description' => 'What a luxury Kenya safari costs from the USA in 2026 — typical per-person budgets, what drives the price and what is included.',
        'subtitle' => 'A clear, honest guide to Kenya safari costs for American travelers — typical budgets, what drives the price and how to get the most from your investment.',
        'hero_image' => 'images/safari-lion-drive.jpg',
        'hero_alt' => 'Guide to Kenya safari costs from the USA',
        'stats' => [
            ['value' => 'From $8k', 'label' => 'Per person, private & luxury'],
            ['value' => 'USD', 'label' => 'All pricing in dollars'],
            ['value' => 'Itemized', 'label' => 'See where it goes'],
        ],
        'sections' => [
            [
                'kicker' => 'The short answer',
                'title' => 'What a luxury Kenya safari costs',
                'paragraphs' => [
                    'As a guide, a private luxury Kenya safari starts at roughly USD 8,000 per person for a 7-day journey, rises to around USD 10,000–18,000 per person for 10 days, and reaches USD 15,000–28,000 per person for 14 days with a beach finish.',
                    'These figures reflect private guiding, luxury camps and internal bush flights. Shared or shorter safaris can cost less; ultra-luxury and peak Migration dates can cost considerably more.',
                ],
                'bullets' => [
                    '7 days: from about USD 8,000 per person',
                    '10 days: about USD 10,000–18,000 per person',
                    '14 days with beach: about USD 15,000–28,000 per person',
                ],
            ],
            [
                'kicker' => 'What drives cost',
                'title' => 'The five factors that matter most',
                'paragraphs' => [
                    'Understanding the levers lets you direct your budget where it counts.',
                ],
                'bullets' => [
                    'Season — peak Migration dates command the highest rates',
                    'Camp tier — from boutique tented camps to ultra-luxury lodges',
                    'Duration and regions — more nights and flights add cost',
                    'Private guiding — your own vehicle and guide throughout',
                    'Charters — private aircraft for maximum flexibility',
                ],
            ],
            [
                'kicker' => 'Included',
                'title' => 'What is and isn\'t included',
                'paragraphs' => [
                    'Luxury accommodation, private guiding, internal flights, park fees and full-board meals are included. International flights, visas, insurance, premium drinks and gratuities are typically excluded.',
                ],
            ],
            [
                'kicker' => 'Getting value',
                'title' => 'How to get the most from your budget',
                'paragraphs' => [
                    'The green seasons and shoulder months offer lower rates with excellent wildlife. Combining regions efficiently with bush flights, and choosing conservancies that include activities, both stretch your budget further.',
                    'We provide an itemized USD proposal so you can see exactly where the money goes and adjust with clarity.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Why does a Kenya safari cost so much?', 'a' => 'Luxury camps are low-capacity, conservation fees fund protected land, and private guiding and bush flights add value. You are paying for exclusivity, expertise and access.'],
            ['q' => 'What is the cheapest time to go?', 'a' => 'The green seasons (April–May and November) and shoulder months offer the lowest rates, with lush scenery and excellent birdlife.'],
            ['q' => 'Can we reduce the cost without losing quality?', 'a' => 'Yes — travelling outside peak dates, choosing intimate mid-tier camps and trimming one region can lower costs while keeping a luxury experience.'],
            ['q' => 'Do you charge for planning?', 'a' => 'No. Consultation and proposals are complimentary, and there is no obligation until you confirm.'],
        ],
        'related' => ['us/kenya-safari-packages', 'us/kenya-safari-planning-guide', 'us/kenya-luxury-safaris', 'kenya-luxury-safari-packages'],
    ],

    'us/kenya-safari-planning-guide' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'us/kenya-safari-planning-guide',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'Start here',
        'h1' => 'Kenya Safari Planning Guide for US Travelers',
        'title' => 'Kenya Safari Planning Guide from USA | Step by Step',
        'description' => 'A step-by-step Kenya safari planning guide for US travelers — timing, flights, visas, health, packing, budgeting and how to choose a safari company.',
        'subtitle' => 'Everything American travelers need to plan a Kenya safari with confidence — timing, flights, logistics and how to choose the right partner.',
        'hero_image' => 'images/safari-air.jpg',
        'hero_alt' => 'Kenya safari planning guide for US travelers',
        'stats' => [
            ['value' => '6 Steps', 'label' => 'To a confirmed safari'],
            ['value' => 'Practical', 'label' => 'Visas, health, packing'],
            ['value' => 'Honest', 'label' => 'No pressure'],
        ],
        'sections' => [
            [
                'kicker' => 'Step by step',
                'title' => 'How to plan your Kenya safari',
                'paragraphs' => [
                    'A great safari is planned in a clear sequence: choose your dates, decide your regions, set a realistic budget, select camps, arrange flights, then prepare for travel.',
                    'We guide you through each step and handle the on-the-ground logistics.',
                ],
                'bullets' => [
                    '1. Choose your travel window and season',
                    '2. Decide which regions and experiences matter most',
                    '3. Set a per-person budget',
                    '4. Match camps and guiding to your style',
                    '5. Book international and internal flights',
                    '6. Prepare visas, health and packing',
                ],
            ],
            [
                'kicker' => 'Timing',
                'title' => 'When to go',
                'paragraphs' => [
                    'July to October is peak for the Great Migration and dry-season game viewing. January to March is warm and excellent for big cats. The green seasons bring lower rates, lush landscapes and superb birdlife.',
                ],
            ],
            [
                'kicker' => 'Logistics',
                'title' => 'Flights, visas and health',
                'paragraphs' => [
                    'Most US travelers reach Nairobi via a direct or one-stop flight. US citizens need an entry authorization, and we recommend consulting a travel health professional about vaccinations and malaria precautions.',
                ],
                'bullets' => [
                    'Confirm your entry authorization early',
                    'Check passport validity (6+ months)',
                    'Consult a travel clinic for health advice',
                    'Arrange comprehensive travel insurance',
                ],
            ],
            [
                'kicker' => 'Choosing a company',
                'title' => 'How to choose the right safari partner',
                'paragraphs' => [
                    'Look for genuine regional expertise, transparent pricing, private guiding as standard and clear answers to your questions. A specialist based in Kenya will always design a better itinerary than a global reseller.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How far in advance should I plan a Kenya safari?', 'a' => 'For peak season, 6 to 12 months ahead. Outside peak dates, 3 to 6 months is usually comfortable, though we can sometimes work faster.'],
            ['q' => 'Do I need a visa as a US citizen?', 'a' => 'US citizens require an entry authorization for Kenya. Requirements can change, so check the latest official guidance before travel.'],
            ['q' => 'What vaccinations do I need?', 'a' => 'Requirements depend on your health history and itinerary. We recommend consulting a travel health professional for personalized advice.'],
            ['q' => 'What should I pack?', 'a' => 'Neutral, comfortable layers, a sun hat, sun protection, binoculars and a camera. Fly-in safaris usually limit baggage to about 15kg in a soft bag; we provide a full packing list.'],
        ],
        'related' => ['us/kenya-safari-cost', 'us/flying-to-kenya-from-usa', 'us/kenya-luxury-safaris', 'kenya-safari-faq'],
    ],

    'us/flying-to-kenya-from-usa' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'us/flying-to-kenya-from-usa',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'Getting there',
        'h1' => 'Flying to Kenya from the USA',
        'title' => 'Flying to Kenya from the USA | Routes & Flight Times',
        'description' => 'How to fly to Kenya from the USA — flight times, routes, airlines, connections to Nairobi and how to time your safari around your arrival.',
        'subtitle' => 'A practical guide to flying from the United States to Kenya — routes, flight times, airport connections and how we build your safari around your arrival.',
        'hero_image' => 'images/safari-air.jpg',
        'hero_alt' => 'Flying to Kenya from the USA for a safari',
        'stats' => [
            ['value' => '14–20h', 'label' => 'Typical door-to-door flight time'],
            ['value' => '1 stop', 'label' => 'Common from US hubs'],
            ['value' => 'NBO', 'label' => 'Nairobi gateway'],
        ],
        'sections' => [
            [
                'kicker' => 'Routes',
                'title' => 'How to reach Nairobi from the USA',
                'paragraphs' => [
                    'Nairobi\'s Jomo Kenyatta International Airport (NBO) is the main gateway. Many US travelers connect through Europe, the Middle East or another African hub, and several airlines offer convenient one-stop service.',
                    'From the East Coast, journey times are shorter; from the West Coast, allow a little more. We help you choose routing that fits your safari start.',
                ],
                'bullets' => [
                    'Nairobi (NBO) is the primary international gateway',
                    'One-stop routings available from major US hubs',
                    'European, Middle East and African connections',
                    'Mombasa (MBA) for direct coast arrivals on some routes',
                ],
            ],
            [
                'kicker' => 'Timing',
                'title' => 'Timing your arrival for the safari',
                'paragraphs' => [
                    'Most safaris begin with a night in Nairobi or a same-day bush flight from Wilson Airport. We time your internal connections around your international arrival so you do not lose a night unnecessarily.',
                ],
            ],
            [
                'kicker' => 'Arrival',
                'title' => 'What happens when you land',
                'paragraphs' => [
                    'You are met on arrival and transferred to your hotel or onward flight. Your entry authorization should be arranged before departure, and passports need at least six months\' validity.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How long is the flight from the USA to Kenya?', 'a' => 'Including a connection, roughly 14 to 16 hours from the East Coast and a little longer from the West Coast.'],
            ['q' => 'Are there direct flights?', 'a' => 'There is limited direct service; most itineraries use one convenient connection. We advise on the best routing for your city.'],
            ['q' => 'Which airport do I fly into?', 'a' => 'Most travelers arrive at Nairobi (NBO). Some coastal itineraries can use Mombasa (MBA) where routing allows.'],
            ['q' => 'Do I need a yellow fever certificate?', 'a' => 'Requirements vary by nationality and route. We recommend checking official guidance and consulting a travel clinic.'],
        ],
        'related' => ['us/kenya-safari-from-new-york', 'us/kenya-safari-planning-guide', 'us/kenya-luxury-safaris', 'fly-in-safaris-kenya'],
    ],

    'us/kenya-safari-from-new-york' => [
        'locale' => 'en-us',
        'hreflang' => 'en-us',
        'group' => 'us/kenya-safari-from-new-york',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'From the East Coast',
        'h1' => 'Kenya Safari from New York',
        'title' => 'Kenya Safari from New York | Flights & Luxury Itineraries',
        'description' => 'Plan a luxury Kenya safari from New York — flight options, timing and tailor-made private itineraries built around NYC departures.',
        'subtitle' => 'New York is one of the best-connected US gateways to Kenya. Here is how to plan a luxury safari around a NYC departure.',
        'hero_image' => 'images/mara-jeep.jpg',
        'hero_alt' => 'Kenya safari from New York planning',
        'stats' => [
            ['value' => 'JFK/EWR', 'label' => 'Convenient gateways'],
            ['value' => '1 stop', 'label' => 'Typical routing'],
            ['value' => 'Customized', 'label' => 'Built around your dates'],
        ],
        'sections' => [
            [
                'kicker' => 'Flights',
                'title' => 'Flying from New York to Kenya',
                'paragraphs' => [
                    'From JFK or Newark, travelers typically reach Nairobi with one convenient connection through Europe, the Middle East or another hub. It is one of the shortest US routings to East Africa.',
                    'We can time your safari so a late-night departure maximizes your time off work and your days on safari.',
                ],
            ],
            [
                'kicker' => 'Itineraries',
                'title' => 'Popular safaris for New York travelers',
                'paragraphs' => [
                    'Short 7-day Mara escapes and 10-day multi-region safaris suit NYC schedules well, with optional beach extensions for longer breaks.',
                ],
                'bullets' => [
                    '7-day Masai Mara escape',
                    '10-day Mara, Laikipia and Amboseli',
                    '14-day safari-and-beach vacation',
                ],
            ],
            [
                'kicker' => 'Timing',
                'title' => 'When to go from New York',
                'paragraphs' => [
                    'July to October aligns with the Great Migration and summer travel; January to March is ideal for a warm-weather winter escape.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How long is the flight from New York to Kenya?', 'a' => 'Usually around 14 to 16 hours including a single connection, depending on the routing.'],
            ['q' => 'Can you work around a short break?', 'a' => 'Yes. A 7-day Mara safari fits neatly into a week, and we time flights to maximize your time on the ground.'],
            ['q' => 'Is there a direct flight?', 'a' => 'Direct service is limited; most travelers use one convenient connection. We will recommend the best routing for your dates.'],
            ['q' => 'Can we add a beach?', 'a' => 'Absolutely. Diani, Watamu and Zanzibar are easy additions for longer New York breaks.'],
        ],
        'related' => ['us/flying-to-kenya-from-usa', 'us/kenya-luxury-safaris', 'us/10-day-kenya-luxury-safari', 'us/kenya-safari-cost'],
    ],

];
