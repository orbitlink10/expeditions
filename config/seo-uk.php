<?php

/*
|--------------------------------------------------------------------------
| Phase 5 — UK market cluster
|--------------------------------------------------------------------------
| Merged into the main SEO page registry by App\Support\SeoPageRegistry.
| Pages are written in British English and share hreflang groups with the
| equivalent global and USA pages to form true locale clusters.
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

    'uk' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'uk',
        'eyebrow' => 'Planning from the United Kingdom',
        'h1' => 'Kenya Safari Holidays from the UK',
        'title' => 'Kenya Safari Holidays from the UK | Luxury Safari Planning',
        'description' => 'Plan a luxury Kenya safari holiday from the UK with Caracal Expeditions — private guides, personalised itineraries and seamless connections from London and regional airports.',
        'subtitle' => 'Caracal Expeditions designs private, tailor-made Kenya safari holidays for British travellers, with GBP quotes, honest advice and seamless connections from London and beyond.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Luxury Kenya safari holiday planned from the UK',
        'stats' => [
            ['value' => '~9h', 'label' => 'Flight time from London'],
            ['value' => 'Private', 'label' => 'Personalised, never group'],
            ['value' => 'GBP', 'label' => 'Quotes in pounds'],
        ],
        'sections' => [
            [
                'kicker' => 'Why Kenya',
                'title' => 'The classic safari holiday for British travellers',
                'paragraphs' => [
                    'Kenya offers the safari most people picture: lions on open plains, elephants beneath Kilimanjaro and the Great Migration sweeping through the Masai Mara. It is English-speaking, straightforward to navigate and well served by bush flights.',
                    'We handle everything on the ground, so you simply fly in and enjoy it.',
                ],
                'bullets' => [
                    'World-class wildlife and guiding',
                    'English-speaking and easy to travel',
                    'Convenient flights from London and regional airports',
                    'Safari-and-beach holidays in one trip',
                ],
            ],
            [
                'kicker' => 'Flights and timing',
                'title' => 'Getting to Kenya from the UK',
                'paragraphs' => [
                    'London offers some of the shortest flight times to Nairobi of any major city, with overnight departures that let you maximise your time off work. Regional connections via London or a European hub are also straightforward.',
                    'For the best combination of wildlife and weather, aim for July to October or January to March.',
                ],
            ],
            [
                'kicker' => 'How we work',
                'title' => 'Personalised itineraries, not group tours',
                'paragraphs' => [
                    'Every Caracal safari is private and built around you. We propose regions, camps and pacing, then refine together until it is right — with no obligation until you confirm. Quotes are provided in GBP.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How long is the flight to Kenya from the UK?', 'a' => 'London to Nairobi is roughly nine hours, with convenient overnight departures. Regional UK airports connect via London or a European hub.'],
            ['q' => 'Do you quote in GBP?', 'a' => 'Yes. UK travellers receive clear, itemised proposals in pounds sterling, with no hidden extras.'],
            ['q' => 'What is the best time to visit Kenya from the UK?', 'a' => 'July to October for the Great Migration and dry-season game viewing, or January to March for warm weather and excellent big-cat sightings.'],
            ['q' => 'Do British citizens need a visa for Kenya?', 'a' => 'British citizens require an entry authorisation. Requirements can change, so we recommend checking the latest official guidance before travel.'],
        ],
        'related' => ['uk/luxury-kenya-safari-holidays', 'uk/kenya-safari-holidays', 'uk/kenya-safari-from-london', 'uk/private-kenya-safari-holidays'],
    ],

    'uk/luxury-kenya-safari-holidays' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'luxury-kenya-safaris',
        'eyebrow' => 'Private, tailor-made journeys',
        'h1' => 'Luxury Kenya Safari Holidays',
        'title' => 'Luxury Kenya Safari Holidays | Private Tailor-Made Safaris',
        'description' => 'Luxury Kenya safari holidays with private guides, handpicked camps and tailor-made itineraries across the Masai Mara, Laikipia and beyond. GBP quotes for UK travellers.',
        'subtitle' => 'A private, tailor-made luxury safari in Kenya — expert guides, handpicked camps and bush flights, arranged end to end for British travellers.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Luxury Kenya safari holiday at sunset',
        'stats' => [
            ['value' => 'Private', 'label' => 'Guides and vehicles'],
            ['value' => 'Personalised', 'label' => 'Built around you'],
            ['value' => 'GBP', 'label' => 'Transparent pricing'],
        ],
        'sections' => [
            [
                'kicker' => 'The Caracal difference',
                'title' => 'A luxury safari designed for you',
                'paragraphs' => [
                    'We are Kenya-based specialists who work only here, which means better camps, better guides and better routing — and a holiday that fits how you like to travel.',
                    'There are no group departures. Your journey is private and built once, for you.',
                ],
                'bullets' => [
                    'Private guide and vehicle throughout',
                    'Handpicked luxury camps and conservancies',
                    'Bush flights to maximise time in the wild',
                    'One planning contact from start to finish',
                ],
            ],
            [
                'kicker' => 'Regions',
                'title' => 'Where you can travel',
                'paragraphs' => [
                    'Most British travellers combine two or three regions: the Masai Mara for big cats and the Migration, Laikipia or Lewa for private conservancies, Amboseli for elephants, Samburu for the wild north, and the coast for a beach finish.',
                ],
            ],
            [
                'kicker' => 'Practical',
                'title' => 'Planning from the UK',
                'paragraphs' => [
                    'We advise on flights, timing, visas and packing, and build your itinerary around your departure airport and holiday dates. Proposals are in GBP and clearly itemised.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How much does a luxury Kenya safari holiday cost?', 'a' => 'Private luxury safaris typically start around USD 8,000 per person for 7 days and rise with length, season, camp tier and private charters. We provide an itemised quote in GBP on request.'],
            ['q' => 'Can you work around UK school holidays?', 'a' => 'Yes. We plan family safaris around UK term dates and advise on the best value periods within them.'],
            ['q' => 'Is a private safari worth it for two people?', 'a' => 'For most travellers, yes. The uplift over a shared safari is smaller than expected and the flexibility transforms the experience.'],
            ['q' => 'Do you arrange internal flights?', 'a' => 'Yes, we arrange all internal bush flights and transfers; international tickets are usually booked on your side with our guidance.'],
        ],
        'related' => ['uk/kenya-safari-holidays', 'uk/private-kenya-safari-holidays', 'uk/kenya-safari-and-beach-holidays', 'luxury-kenya-safaris'],
    ],

    'uk/kenya-safari-holidays' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'kenya-luxury-safari-packages',
        'eyebrow' => 'Curated, all-inclusive holidays',
        'h1' => 'Kenya Safari Holidays',
        'title' => 'Kenya Safari Holidays | Luxury Private Safari Packages',
        'description' => 'Kenya safari holidays tailored for UK travellers — 7 to 14-day private itineraries with expert guides, luxury camps and bush flights. Quotes in GBP.',
        'subtitle' => 'Ready-to-tailor Kenya safari holidays for British travellers, fully customisable — from a 7-day Mara escape to a 14-day safari-and-beach holiday.',
        'hero_image' => 'images/giraffe-herd.jpg',
        'hero_alt' => 'Kenya safari holiday with giraffes',
        'stats' => [
            ['value' => '7–14', 'label' => 'Day options'],
            ['value' => 'All-In', 'label' => 'Camps, guides, flights'],
            ['value' => 'GBP', 'label' => 'Itemised quotes'],
        ],
        'sections' => [
            [
                'kicker' => 'What\'s included',
                'title' => 'Complete holidays, fully arranged',
                'paragraphs' => [
                    'Our holidays include handpicked luxury camps, private guiding, internal bush flights, park fees and all transfers, so your trip is effortless from arrival to departure.',
                    'Each holiday is a starting point we personalise to your dates, budget and interests.',
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
                    '14 days — the complete Kenya holiday',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Are these group tours?', 'a' => 'No. Every holiday is private and fully personalised to your group; there are no fixed departures with strangers.'],
            ['q' => 'Can we book for a family?', 'a' => 'Yes. Family suites, child-friendly camps and flexible pacing are all part of our family safari holidays.'],
            ['q' => 'What is not included?', 'a' => 'International flights, visas, travel insurance, premium drinks, optional balloon safaris and gratuities are typically excluded.'],
            ['q' => 'How far ahead should we book?', 'a' => 'For peak season we recommend 6 to 12 months; outside peak dates, 3 to 6 months is usually comfortable.'],
        ],
        'related' => ['uk/luxury-kenya-safari-holidays', 'uk/10-day-kenya-safari-holiday', 'uk/14-day-kenya-safari-holiday', 'kenya-luxury-safari-packages'],
    ],

    'uk/private-kenya-safari-holidays' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'private-safaris-kenya',
        'eyebrow' => 'Your guide, your vehicle',
        'h1' => 'Private Kenya Safari Holidays',
        'title' => 'Private Kenya Safari Holidays | Your Own Guide & Vehicle',
        'description' => 'Private Kenya safari holidays with your own guide and vehicle, personalised routing and flexible daily game drives. Tailor-made for UK travellers.',
        'subtitle' => 'A private Kenya safari holiday gives you a dedicated guide, your own vehicle and total flexibility — the freedom to follow a sighting and travel on your own terms.',
        'hero_image' => 'images/mara-jeep.jpg',
        'hero_alt' => 'Private safari vehicle and guide in Kenya',
        'stats' => [
            ['value' => 'Private', 'label' => 'Guide and 4x4'],
            ['value' => 'Flexible', 'label' => 'Daily pace set by you'],
            ['value' => 'UK-ready', 'label' => 'GBP and UK flight timing'],
        ],
        'sections' => [
            [
                'kicker' => 'What private means',
                'title' => 'Travel entirely on your own terms',
                'paragraphs' => [
                    'With no shared vehicle and no fixed schedule, you can linger at a sighting, return early for lunch, or head out before dawn for the best light.',
                    'Private guiding is the single biggest upgrade to a safari, and it is standard on every Caracal holiday.',
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
            ['q' => 'Is a private safari much more expensive?', 'a' => 'There is a premium because the vehicle and guide are yours, but for two or more travellers the uplift is often modest compared with a shared option.'],
            ['q' => 'Can we keep the same guide throughout?', 'a' => 'Where logistics allow, yes. We only switch for regional specialists when it adds real value.'],
            ['q' => 'Can we include our children?', 'a' => 'Absolutely — private guiding is ideal for families because you control the pace and can tailor activities.'],
            ['q' => 'Can we do a private photography safari?', 'a' => 'Yes. Many private safaris are built around photography, with early starts and extended golden-hour drives.'],
        ],
        'related' => ['uk/luxury-kenya-safari-holidays', 'uk/fly-in-kenya-safari-holidays', 'uk/kenya-family-safari-holidays', 'private-safaris-kenya'],
    ],

    'uk/fly-in-kenya-safari-holidays' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'fly-in-safaris-kenya',
        'eyebrow' => 'More time in the wild',
        'h1' => 'Fly-In Kenya Safari Holidays',
        'title' => 'Fly-In Kenya Safari Holidays | Luxury Bush Flight Circuits',
        'description' => 'Fly-in Kenya safari holidays using bush flights between the Masai Mara, Laikipia and Amboseli. More time in the wild, less time on the road.',
        'subtitle' => 'Bush flights turn long road transfers into part of the adventure, linking Kenya\'s finest regions by air so more of your holiday is spent in the wild.',
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
        'related' => ['uk/luxury-kenya-safari-holidays', 'uk/private-kenya-safari-holidays', 'uk/10-day-kenya-safari-holiday', 'fly-in-safaris-kenya'],
    ],

    'uk/kenya-honeymoon-safari-holidays' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'luxury-honeymoon-safaris-kenya',
        'eyebrow' => 'Romance in the wild',
        'h1' => 'Kenya Honeymoon Safari Holidays',
        'title' => 'Kenya Honeymoon Safari Holidays | Romantic Luxury Safaris',
        'description' => 'Romantic Kenya honeymoon safari holidays with private guides, intimate camps, sundowners in the bush and optional Indian Ocean beach escapes.',
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
                'kicker' => 'The ideal holiday',
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
            ['q' => 'What is a romantic honeymoon budget?', 'a' => 'A private luxury honeymoon safari with beach typically starts around USD 10,000 per person, depending on season, length and camp tier. GBP quotes available.'],
        ],
        'related' => ['uk/kenya-safari-and-beach-holidays', 'uk/luxury-kenya-safari-holidays', 'luxury-honeymoon-safaris-kenya', 'uk/private-kenya-safari-holidays'],
    ],

    'uk/kenya-family-safari-holidays' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'luxury-family-safaris-kenya',
        'eyebrow' => 'Adventure for all ages',
        'h1' => 'Kenya Family Safari Holidays',
        'title' => 'Kenya Family Safari Holidays | Luxury Family Safaris',
        'description' => 'Luxury Kenya family safari holidays with private guides, child-friendly camps, flexible pacing and beach add-ons. Planned around UK school holidays.',
        'subtitle' => 'A private family safari designed around your children\'s ages and energy — expert guides, child-friendly camps and the flexibility to slow down or speed up.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => 'Family safari holiday in Kenya watching elephants',
        'stats' => [
            ['value' => 'All Ages', 'label' => 'Tailored to your family'],
            ['value' => 'Flexible', 'label' => 'Pace set by the children'],
            ['value' => 'School Dates', 'label' => 'Planned around UK holidays'],
        ],
        'sections' => [
            [
                'kicker' => 'Family-first design',
                'title' => 'A safari that works for every age',
                'paragraphs' => [
                    'Children experience the bush differently, and a great family safari respects that. We choose camps with family suites, pools and flexible meal times, and guides who are brilliant with young travellers.',
                    'Because your vehicle is private, you can shorten game drives, return for naps and find a rhythm everyone enjoys.',
                ],
                'bullets' => [
                    'Child-friendly luxury camps and family suites',
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
            ['q' => 'What age is suitable for a family safari?', 'a' => 'Most camps welcome children from around six years, and some offer dedicated family programmes. We match camps to your children\'s ages.'],
            ['q' => 'Is a safari safe for children?', 'a' => 'Yes, with sensible guidance. We choose secure camps, brief children on bush safety and keep activities age-appropriate.'],
            ['q' => 'Can we travel during UK school holidays?', 'a' => 'Yes. We plan around UK term dates and can advise on value periods within the school breaks.'],
            ['q' => 'Can we combine safari with a beach?', 'a' => 'Yes — a safari-and-beach holiday is one of the easiest family combinations, with a calm Indian Ocean finish.'],
        ],
        'related' => ['uk/kenya-safari-and-beach-holidays', 'uk/luxury-kenya-safari-holidays', 'luxury-family-safaris-kenya', 'uk/private-kenya-safari-holidays'],
    ],

    'uk/kenya-safari-and-beach-holidays' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'luxury-safari-and-beach-kenya',
        'eyebrow' => 'Wilderness, then ocean',
        'h1' => 'Kenya Safari and Beach Holidays',
        'title' => 'Kenya Safari and Beach Holidays | Bush & Indian Ocean',
        'description' => 'Kenya safari and beach holidays combining a private safari with an Indian Ocean escape in Diani, Watamu or Zanzibar. Tailor-made for UK travellers.',
        'subtitle' => 'Pair the drama of a private Kenya safari with the calm of the Indian Ocean — a seamless holiday from savannah sunrise to barefoot beach.',
        'hero_image' => 'images/tsavo-giraffes.jpg',
        'hero_alt' => 'Kenya safari and beach holiday combination',
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
                    'We sequence the holiday so the safari comes first and the beach restores you before the journey home.',
                ],
                'bullets' => [
                    'Safari first, then ocean relaxation',
                    'Internal flights link bush airstrips to the coast',
                    'Beach properties matched to your style',
                    'Ideal for honeymoons and family holidays',
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
            ['q' => 'How many nights should we spend on the coast?', 'a' => 'Most travellers combine 4 to 6 safari nights with 4 to 7 beach nights, tuned to your flights and stamina.'],
            ['q' => 'Is Zanzibar included?', 'a' => 'Yes. A Kenya safari with a Zanzibar extension is popular and easy to arrange.'],
            ['q' => 'When is the best time for safari and beach?', 'a' => 'The coast is warm year-round. January to March and July to October offer the best of both.'],
            ['q' => 'Is the coast good for families?', 'a' => 'Yes, the calm, shallow Indian Ocean is ideal for children, and we choose family-friendly beach properties.'],
        ],
        'related' => ['uk/kenya-honeymoon-safari-holidays', 'uk/kenya-family-safari-holidays', 'luxury-safari-and-beach-kenya', 'uk/luxury-kenya-safari-holidays'],
    ],

    'uk/10-day-kenya-safari-holiday' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'safaris/10-day-luxury-kenya-safari',
        'template' => 'itinerary',
        'eyebrow' => 'Ten days, three regions',
        'h1' => '10-Day Kenya Safari Holiday',
        'title' => '10 Day Kenya Safari Holiday | Private Luxury Itinerary',
        'description' => 'A 10-day luxury Kenya safari holiday across the Masai Mara, Laikipia and Amboseli, with private guiding and quotes in GBP for UK travellers.',
        'subtitle' => 'Ten private days across the Masai Mara, Laikipia and Amboseli — a relaxed, tailor-made itinerary with quotes in GBP.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => '10-day luxury Kenya safari holiday',
        'facts' => [
            ['label' => 'Duration', 'value' => '10 days / 9 nights'],
            ['label' => 'Regions', 'value' => 'Mara · Laikipia · Amboseli'],
            ['label' => 'Style', 'value' => 'Private fly-in safari'],
            ['label' => 'Pricing', 'value' => 'GBP quotes available'],
        ],
        'itinerary' => [
            ['day' => 'Day 1', 'title' => 'Arrive in Nairobi', 'text' => 'Met on arrival and transferred to a boutique hotel to rest after your overnight flight.'],
            ['day' => 'Day 2', 'title' => 'Fly to the Masai Mara', 'text' => 'A short bush flight to the Mara, lunch in camp and an afternoon game drive.'],
            ['day' => 'Day 3', 'title' => 'Mara full day', 'text' => 'Track big cats across the plains with your private guide and a bush picnic lunch.'],
            ['day' => 'Day 4', 'title' => 'Mara to Laikipia', 'text' => 'Morning drive, then a scenic flight north to a private Laikipia conservancy.'],
            ['day' => 'Day 5', 'title' => 'Laikipia conservancy', 'text' => 'Off-road and night drives, rhino and predator tracking, and quiet time in camp.'],
            ['day' => 'Day 6', 'title' => 'Laikipia experiences', 'text' => 'A guided walk or camel ride and a private sundowner over the plains.'],
            ['day' => 'Day 7', 'title' => 'Fly to Amboseli', 'text' => 'Fly south to Amboseli for big skies, elephant herds and Kilimanjaro views.'],
            ['day' => 'Day 8', 'title' => 'Amboseli full day', 'text' => 'Dawn and afternoon drives among elephants with photography-focused positioning.'],
            ['day' => 'Day 9', 'title' => 'Amboseli at leisure', 'text' => 'A gentle morning drive, a Maasai community visit and a final sundowner.'],
            ['day' => 'Day 10', 'title' => 'Depart Kenya', 'text' => 'A last morning in the bush, then a flight to Nairobi for your onward departure.'],
        ],
        'sections' => [
            [
                'kicker' => 'Why this holiday',
                'title' => 'Three regions, one elegant arc',
                'paragraphs' => [
                    'Ten days lets you experience the contrast that makes Kenya so rewarding: the predator-rich Mara, the private wilderness of Laikipia and the elephant country of Amboseli.',
                    'Bush flights keep transitions short, so the extra days go into wildlife and rest rather than roads.',
                ],
                'bullets' => [
                    'The three defining regions of a Kenya safari',
                    'Private guiding and 4x4 throughout',
                    'Photography-friendly Amboseli light',
                    'Quotes provided in GBP',
                ],
            ],
        ],
        'inclusions' => $inclusions,
        'exclusions' => $exclusions,
        'faqs' => [
            ['q' => 'Is 10 days enough to see Kenya?', 'a' => 'Yes. Ten days with bush flights covers three iconic regions at a relaxed pace, with time for genuine rest.'],
            ['q' => 'What does a 10-day safari holiday cost?', 'a' => 'Private luxury 10-day safaris typically range from around USD 10,000 to USD 18,000 per person, depending on season, camps and group size. We quote in GBP on request.'],
            ['q' => 'Can we add the beach?', 'a' => 'Yes, at ten days a short beach finish is possible. We will advise on the best split for your flights.'],
            ['q' => 'Do you align with UK flights?', 'a' => 'Yes. We design the itinerary around your arrival and departure so you maximise time on safari.'],
        ],
        'related' => ['uk/14-day-kenya-safari-holiday', 'uk/kenya-safari-holidays', 'safaris/10-day-luxury-kenya-safari', 'uk/luxury-kenya-safari-holidays'],
    ],

    'uk/14-day-kenya-safari-holiday' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'safaris/14-day-luxury-kenya-safari',
        'template' => 'itinerary',
        'eyebrow' => 'The complete Kenya holiday',
        'h1' => '14-Day Kenya Safari Holiday',
        'title' => '14 Day Kenya Safari Holiday | Luxury Safari & Beach',
        'description' => 'A 14-day luxury Kenya safari holiday combining the Mara, Laikipia, Samburu, Amboseli and the Indian Ocean coast in one seamless UK-friendly journey.',
        'subtitle' => 'The complete Kenya holiday — fourteen private days linking four great wildlife regions with a barefoot finish on the Indian Ocean.',
        'hero_image' => 'images/hero-samburu.jpg',
        'hero_alt' => '14-day luxury Kenya safari and beach holiday',
        'facts' => [
            ['label' => 'Duration', 'value' => '14 days / 13 nights'],
            ['label' => 'Regions', 'value' => 'Mara · Laikipia · Samburu · Amboseli · Coast'],
            ['label' => 'Style', 'value' => 'Private safari & beach'],
            ['label' => 'Pricing', 'value' => 'GBP quotes available'],
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
            ['day' => 'Day 14', 'title' => 'Depart Kenya', 'text' => 'Fly to Nairobi and connect with your onward international flight.'],
        ],
        'sections' => [
            [
                'kicker' => 'Why this holiday',
                'title' => 'Kenya in full, from bush to beach',
                'paragraphs' => [
                    'Fourteen days is the definitive Kenya holiday. Experience four great wildlife regions, then decompress on the Indian Ocean, flying between every stage.',
                    'It is ideal for a milestone trip, a long-awaited first safari, or travellers who want to see Kenya properly in one visit from the UK.',
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
            ['q' => 'Is 14 days too long for a safari?', 'a' => 'Not when it includes the coast. The beach finale gives the holiday a natural rest, so the safari days stay fresh.'],
            ['q' => 'Where on the coast do you recommend?', 'a' => 'Diani offers white sand and easy access; Watamu brings reefs; Zanzibar suits a different cultural flavour.'],
            ['q' => 'Can we reduce the safari to add more beach?', 'a' => 'Yes, we balance safari and beach nights to suit your flights and how much relaxation you want.'],
            ['q' => 'What does a 14-day holiday cost?', 'a' => 'Private luxury 14-day safaris with a beach finish typically range from around USD 15,000 to USD 28,000 per person, depending on season, camps and group size. GBP quotes available.'],
        ],
        'related' => ['uk/kenya-safari-and-beach-holidays', 'uk/10-day-kenya-safari-holiday', 'safaris/14-day-luxury-kenya-safari', 'uk/luxury-kenya-safari-holidays'],
    ],

    'uk/kenya-safari-from-london' => [
        'locale' => 'en-gb',
        'hreflang' => 'en-gb',
        'group' => 'uk/kenya-safari-from-london',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'From the capital',
        'h1' => 'Kenya Safari from London',
        'title' => 'Kenya Safari from London | Flights & Luxury Holidays',
        'description' => 'Plan a luxury Kenya safari from London — direct overnight flights, tailor-made private itineraries and expert planning for UK travellers.',
        'subtitle' => 'London is one of the best-connected cities in the world for Kenya. Here is how to plan a luxury safari around a London departure.',
        'hero_image' => 'images/mara-jeep.jpg',
        'hero_alt' => 'Kenya safari from London planning',
        'stats' => [
            ['value' => '~9h', 'label' => 'London to Nairobi'],
            ['value' => 'Overnight', 'label' => 'Convenient departures'],
            ['value' => 'Tailored', 'label' => 'Built around your dates'],
        ],
        'sections' => [
            [
                'kicker' => 'Flights',
                'title' => 'Flying from London to Kenya',
                'paragraphs' => [
                    'London offers some of the shortest flight times to Nairobi of any major city, with convenient overnight services that let you land in the morning and connect straight to the bush.',
                    'Regional UK airports connect easily via London or a European hub, so the journey is straightforward wherever you start.',
                ],
            ],
            [
                'kicker' => 'Holidays',
                'title' => 'Popular safaris for London travellers',
                'paragraphs' => [
                    'Short 7-day Mara escapes and 10-day multi-region safaris suit London schedules well, with optional beach extensions for longer breaks.',
                ],
                'bullets' => [
                    '7-day Masai Mara escape',
                    '10-day Mara, Laikipia and Amboseli',
                    '14-day safari-and-beach holiday',
                ],
            ],
            [
                'kicker' => 'Timing',
                'title' => 'When to go from London',
                'paragraphs' => [
                    'July to October aligns with the Great Migration and the UK summer holidays; January to March is ideal for a warm-weather winter escape.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How long is the flight from London to Kenya?', 'a' => 'Roughly nine hours, with frequent overnight departures that arrive in Nairobi in the morning.'],
            ['q' => 'Are there direct flights from London?', 'a' => 'Yes, several carriers offer direct or near-direct service between London and Nairobi, alongside convenient one-stop options.'],
            ['q' => 'Can you work around a short break?', 'a' => 'Yes. A 7-day Mara safari fits neatly into a week, and we time flights to maximise your time on the ground.'],
            ['q' => 'Can we add a beach?', 'a' => 'Absolutely. Diani, Watamu and Zanzibar are easy additions for longer London breaks.'],
        ],
        'related' => ['uk/kenya-safari-holidays', 'uk/luxury-kenya-safari-holidays', 'uk/10-day-kenya-safari-holiday', 'uk/kenya-safari-and-beach-holidays'],
    ],

];
