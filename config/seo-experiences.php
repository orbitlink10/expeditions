<?php

/*
|--------------------------------------------------------------------------
| Phase 3 — Luxury Kenya safari experiences
|--------------------------------------------------------------------------
| Merged into the main SEO page registry by App\Support\SeoPageRegistry.
| These pages use the standard "page" template and Service structured data.
*/

return [

    'great-migration-safaris-kenya' => [
        'locale' => 'en',
        'group' => 'great-migration-safaris-kenya',
        'schema_type' => 'Service',
        'eyebrow' => 'The greatest wildlife show on earth',
        'h1' => 'Great Migration Safaris in Kenya',
        'title' => 'Great Migration Safari Kenya | Masai Mara Wildebeest Crossing',
        'description' => 'Witness the Great Migration in Kenya on a private Masai Mara safari. Expert guides, prime river-crossing positions and luxury camps timed for the herds.',
        'subtitle' => 'Each year, over a million wildebeest and zebra move through the Masai Mara. We position you in the right place at the right time, with expert private guides and luxury camps.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Great Migration safari on the Masai Mara plains at sunset',
        'stats' => [
            ['value' => 'Jul–Oct', 'label' => 'Peak migration season'],
            ['value' => 'Crossings', 'label' => 'Mara river drama'],
            ['value' => 'Private', 'label' => 'Expert-guided positioning'],
        ],
        'sections' => [
            [
                'kicker' => 'Timing',
                'title' => 'When the Great Migration reaches Kenya',
                'paragraphs' => [
                    'The herds typically arrive in the Masai Mara from around July and remain until October, crossing the Mara river in search of fresh grazing. The exact timing shifts with the rains each year.',
                    'We track herd movements closely and time your stay to maximise the chance of witnessing a crossing, while keeping realistic expectations — nature sets the schedule, not us.',
                ],
                'bullets' => [
                    'July to October is the core migration window',
                    'River crossings peak in the dry months',
                    'Herds often linger into early November',
                ],
            ],
            [
                'kicker' => 'Positioning',
                'title' => 'Where to be, and how we get you there',
                'paragraphs' => [
                    'The best migration safaris are built around flexibility and location. We combine classic reserve areas with private conservancies, and use light aircraft so you can follow the herds rather than a fixed itinerary.',
                    'Your guide\'s knowledge of crossing points and timing is the single most important factor in a memorable migration safari.',
                ],
                'bullets' => [
                    'Camps chosen for migration proximity',
                    'Private guide with deep local knowledge',
                    'Bush flights for flexible repositioning',
                ],
            ],
            [
                'kicker' => 'Beyond the crossing',
                'title' => 'More than a single spectacle',
                'paragraphs' => [
                    'The migration brings intense predator activity, with lion, cheetah, leopard and hyena never far from the herds. Even outside a crossing, the Mara offers outstanding year-round wildlife.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'What is the best time to see the Great Migration in Kenya?', 'a' => 'The herds are usually in the Masai Mara from July to October, with river crossings most likely in the dry months. Exact timing varies with rainfall each year.'],
            ['q' => 'Will I definitely see a river crossing?', 'a' => 'Crossings are dramatic but never guaranteed — they depend on the herds and river conditions. We position you in the best areas and maximise your chances across several days.'],
            ['q' => 'Where should I stay for the migration?', 'a' => 'Camps near the Mara river and key crossing points are ideal. We match accommodation to the season and to your style.'],
            ['q' => 'Is the Mara crowded during the migration?', 'a' => 'The reserve can be busy at crossings. We balance that with private conservancies so you also have quiet, exclusive game viewing.'],
        ],
        'related' => ['destinations/masai-mara', 'safaris/10-day-luxury-kenya-safari', 'fly-in-safaris-kenya', 'luxury-kenya-safaris'],
    ],

    'photographic-safaris-kenya' => [
        'locale' => 'en',
        'group' => 'photographic-safaris-kenya',
        'schema_type' => 'Service',
        'eyebrow' => 'Built around light',
        'h1' => 'Photographic Safaris in Kenya',
        'title' => 'Photographic Safari Kenya | Luxury Photography Safaris',
        'description' => 'Luxury photographic safaris in Kenya with private guides, golden-hour drives and vehicles set up for photographers. Mara, Amboseli and beyond.',
        'subtitle' => 'A private Kenya safari designed around the frame — early starts, extended golden-hour drives and guides who understand what photographers need.',
        'hero_image' => 'images/safari-lion-drive.jpg',
        'hero_alt' => 'Photographic safari in Kenya with a private guided game drive',
        'stats' => [
            ['value' => 'Golden Hour', 'label' => 'Light-first scheduling'],
            ['value' => 'Private', 'label' => 'Your own vehicle'],
            ['value' => 'Expert', 'label' => 'Photo-aware guides'],
        ],
        'sections' => [
            [
                'kicker' => 'Approach',
                'title' => 'A safari designed around light and patience',
                'paragraphs' => [
                    'Photography rewards time and positioning. We build your day around the best light and the best subjects, with the freedom to stay with a scene until it is right.',
                    'Because your vehicle is private, there is no pressure to move on — you shoot at your own pace, with a guide who anticipates behaviour.',
                ],
                'bullets' => [
                    'Early departures and late returns for golden hour',
                    'Time to wait for behaviour and clean backgrounds',
                    'Guidance on positioning, angle and ethics',
                    'Flexible routing to follow the subject',
                ],
            ],
            [
                'kicker' => 'Equipment and comfort',
                'title' => 'Vehicles and camps that work for photographers',
                'paragraphs' => [
                    'We arrange vehicles with good sightlines and room for camera kit, and choose camps that make early starts and late finishes easy.',
                ],
            ],
            [
                'kicker' => 'Where to go',
                'title' => 'The best regions for photography',
                'paragraphs' => [
                    'The Masai Mara offers predator action and open plains; Amboseli delivers elephants and Kilimanjaro; Laikipia brings clean, quiet landscapes.',
                ],
                'bullets' => [
                    'Masai Mara — big cats and dramatic light',
                    'Amboseli — elephants and mountain backdrops',
                    'Laikipia — private conservancies and solitude',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Do I need professional camera gear?', 'a' => 'No. Whether you shoot with a DSLR, mirrorless or a high-end phone, we tailor the pace and positioning to your kit and experience.'],
            ['q' => 'Can you provide a photography guide?', 'a' => 'We match you with guides experienced in photographic safaris. Specialist photographer-hosts can be arranged on request.'],
            ['q' => 'Which region is best for photography?', 'a' => 'The Mara is exceptional for big cats, Amboseli for elephants and Kilimanjaro, and Laikipia for quiet, clean landscapes.'],
            ['q' => 'Is a photo safari more expensive?', 'a' => 'It is priced like any private luxury safari. Extra time, private vehicles and specialist guidance are the main factors.'],
        ],
        'related' => ['destinations/masai-mara', 'destinations/amboseli', 'private-safaris-kenya', 'luxury-kenya-safaris'],
    ],

    'private-conservancy-safaris-kenya' => [
        'locale' => 'en',
        'group' => 'private-conservancy-safaris-kenya',
        'schema_type' => 'Service',
        'eyebrow' => 'Exclusive access',
        'h1' => 'Private Conservancy Safaris in Kenya',
        'title' => 'Private Conservancy Safari Kenya | Exclusive Low-Density Wildlife',
        'description' => 'Private conservancy safaris in Kenya with off-road driving, night game drives and low visitor numbers. Exclusive wildlife access with expert private guides.',
        'subtitle' => 'Kenya\'s private conservancies offer what the busier parks cannot — low vehicle densities, off-road and night drives, and a sense of having the wilderness to yourself.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => 'Private conservancy safari in Kenya with elephants',
        'stats' => [
            ['value' => 'Low Density', 'label' => 'Few vehicles, big spaces'],
            ['value' => 'Off-Road', 'label' => 'Follow the sighting'],
            ['value' => 'Night Drives', 'label' => 'Nocturnal wildlife'],
        ],
        'sections' => [
            [
                'kicker' => 'The difference',
                'title' => 'Why conservancies change a safari',
                'paragraphs' => [
                    'Private conservancies are leased or community-owned land bordering the national reserves, where the number of beds and vehicles is strictly limited.',
                    'That means you can drive off-road where permitted, take night game drives, and enjoy sightings without a crowd of vehicles around you.',
                ],
                'bullets' => [
                    'Strictly limited visitor and vehicle numbers',
                    'Off-road driving and night game drives',
                    'Walking and specialist activities',
                    'Directly supports conservation and communities',
                ],
            ],
            [
                'kicker' => 'Where we go',
                'title' => 'Kenya\'s finest private conservancies',
                'paragraphs' => [
                    'We work with conservancies adjoining the Masai Mara and across Laikipia and Lewa, each with its own character and wildlife strengths.',
                ],
                'bullets' => [
                    'Mara conservancies — predators and migration access',
                    'Laikipia — rhino, big cats and active safaris',
                    'Lewa — UNESCO-listed conservation and rhino',
                ],
            ],
            [
                'kicker' => 'Balance',
                'title' => 'Reserve and conservancy, combined',
                'paragraphs' => [
                    'Many of our itineraries pair a conservancy with the national reserve, so you experience both the iconic wildlife and the exclusive, flexible side of a Kenya safari.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'What is a private conservancy?', 'a' => 'It is privately or community-owned land where wildlife is protected and visitor numbers are limited, usually bordering a national reserve.'],
            ['q' => 'Are conservancies better than the national reserve?', 'a' => 'They offer more exclusivity and flexibility, including off-road and night drives. Most of our safaris combine both for the best overall experience.'],
            ['q' => 'Do conservancy fees apply?', 'a' => 'Yes — conservancy and concession fees are included in our itineraries and shown transparently in your proposal.'],
            ['q' => 'Which conservancies do you recommend?', 'a' => 'It depends on your goals. Mara conservancies suit predators and the migration; Laikipia and Lewa suit rhino, conservation and active experiences.'],
        ],
        'related' => ['private-safaris-kenya', 'destinations/laikipia', 'destinations/lewa', 'luxury-kenya-safaris'],
    ],

    'walking-safaris-kenya' => [
        'locale' => 'en',
        'group' => 'walking-safaris-kenya',
        'schema_type' => 'Service',
        'eyebrow' => 'The bush on foot',
        'h1' => 'Luxury Walking Safaris in Kenya',
        'title' => 'Luxury Walking Safari Kenya | Guided Bush Walks',
        'description' => 'Luxury walking safaris in Kenya with expert guides, tracking on foot and bush walks through private conservancies. A slower, deeper connection to the wild.',
        'subtitle' => 'Walking reveals a side of the bush that vehicles cannot — tracks, scents, birds and plants, read by a guide who knows every sign.',
        'hero_image' => 'images/hero-samburu.jpg',
        'hero_alt' => 'Guided walking safari in a Kenyan conservancy',
        'stats' => [
            ['value' => 'On Foot', 'label' => 'A different perspective'],
            ['value' => 'Expert', 'label' => 'Armed walking guides'],
            ['value' => 'Private', 'label' => 'Your own group'],
        ],
        'sections' => [
            [
                'kicker' => 'Why walk',
                'title' => 'A slower, richer way to experience the bush',
                'paragraphs' => [
                    'Walking slows everything down. Without an engine you notice the small things — fresh tracks, alarm calls, the smell of rain — and the landscape becomes far more legible.',
                    'It is a complement to game drives, not a replacement, and for many travellers it becomes the most memorable part of the trip.',
                ],
                'bullets' => [
                    'Read tracks, signs and bird language with your guide',
                    'See the smaller details a vehicle passes by',
                    'A genuinely different sensory experience',
                ],
            ],
            [
                'kicker' => 'Where it works',
                'title' => 'The best places to walk in Kenya',
                'paragraphs' => [
                    'Private conservancies in Laikipia and Lewa are ideal, with vast open ground and excellent guiding. Some Mara conservancies and camps also offer walks.',
                ],
            ],
            [
                'kicker' => 'Practicalities',
                'title' => 'What a walk involves',
                'paragraphs' => [
                    'Walks are led by armed, highly experienced guides and tailored to your fitness. Most last one to three hours, often ending with a bush breakfast or sundowner.',
                ],
                'bullets' => [
                    'Led by armed, experienced walking guides',
                    'Paced to your group and fitness',
                    'Often paired with a bush meal',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Is walking in the bush safe?', 'a' => 'Yes, when led by professional armed guides who read the environment and keep safe distances. We only walk where it is appropriate and permitted.'],
            ['q' => 'Do I need to be very fit?', 'a' => 'No. Walks are tailored to your group, from gentle hour-long strolls to longer, more demanding hikes.'],
            ['q' => 'Can children join a walking safari?', 'a' => 'Some camps offer family-friendly walks, often with age limits. We will match properties and activities to your group.'],
            ['q' => 'Where are the best walking safaris in Kenya?', 'a' => 'Laikipia and Lewa are the standouts, thanks to private conservancies, open terrain and superb guiding.'],
        ],
        'related' => ['destinations/laikipia', 'destinations/lewa', 'private-safaris-kenya', 'luxury-kenya-safaris'],
    ],

    'hot-air-balloon-safari-masai-mara' => [
        'locale' => 'en',
        'group' => 'hot-air-balloon-safari-masai-mara',
        'schema_type' => 'Service',
        'eyebrow' => 'Sunrise from above',
        'h1' => 'Hot Air Balloon Safari in the Masai Mara',
        'title' => 'Hot Air Balloon Safari Masai Mara | Sunrise Flight',
        'description' => 'Book a hot air balloon safari over the Masai Mara at sunrise, with a champagne bush breakfast. Add a private balloon flight to your luxury Kenya safari.',
        'subtitle' => 'Drift silently over the Masai Mara as the sun rises, then land to a champagne bush breakfast — one of the most magical ways to see Kenya.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Hot air balloon safari sunrise over the Masai Mara',
        'stats' => [
            ['value' => 'Sunrise', 'label' => 'Dawn lift-off'],
            ['value' => 'Aerial', 'label' => 'Panoramic Mara views'],
            ['value' => 'Breakfast', 'label' => 'Champagne in the bush'],
        ],
        'sections' => [
            [
                'kicker' => 'The experience',
                'title' => 'A silent flight over the plains',
                'paragraphs' => [
                    'Balloons lift off at first light and drift with the wind wherever the game leads. From above you gain a rare perspective on the plains, rivers and herds below.',
                    'The flight lasts roughly an hour, followed by a celebratory bush breakfast on landing.',
                ],
            ],
            [
                'kicker' => 'The morning',
                'title' => 'What to expect',
                'paragraphs' => [
                    'You leave camp before dawn, watch the balloon inflate, and climb in as the sky brightens. After landing, you are driven to a breakfast laid out in the bush.',
                ],
                'bullets' => [
                    'Pre-dawn transfer from camp',
                    'Approximately one hour of flight',
                    'Champagne bush breakfast on landing',
                    'Certificate and transfer back to camp',
                ],
            ],
            [
                'kicker' => 'Good to know',
                'title' => 'When to fly and how to add it',
                'paragraphs' => [
                    'Balloons fly year-round, weather permitting, with the clearest conditions and best wildlife in the dry seasons. Flights are popular and should be booked in advance alongside your safari.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How much does a Masai Mara balloon safari cost?', 'a' => 'Balloon flights are typically around USD 450–550 per person, depending on operator and season, and are usually paid as an add-on to your safari.'],
            ['q' => 'Is the balloon safari safe?', 'a' => 'Yes. Operators are licensed and experienced, flights run in calm early-morning conditions, and all safety briefings are provided.'],
            ['q' => 'Is it suitable for children?', 'a' => 'Minimum age policies vary by operator, often around seven to twelve years. We will confirm for your group.'],
            ['q' => 'What if the flight is cancelled?', 'a' => 'Flights depend on weather and can be cancelled for safety, in which case you are usually refunded or rebooked.'],
        ],
        'related' => ['destinations/masai-mara', 'safaris/7-day-luxury-kenya-safari', 'safaris/10-day-luxury-kenya-safari', 'luxury-kenya-safaris'],
    ],

    'conservation-safaris-kenya' => [
        'locale' => 'en',
        'group' => 'conservation-safaris-kenya',
        'schema_type' => 'Service',
        'eyebrow' => 'Travel that gives back',
        'h1' => 'Conservation Safaris in Kenya',
        'title' => 'Conservation Safari Kenya | Wildlife Conservation Journeys',
        'description' => 'Conservation safaris in Kenya that fund and support wildlife protection, with rhino sanctuaries, community projects and conservation-led guiding.',
        'subtitle' => 'A safari that goes deeper — staying in conservancies and camps where your visit directly funds rhino protection, anti-poaching and community livelihoods.',
        'hero_image' => 'images/safari-air.jpg',
        'hero_alt' => 'Conservation safari in Kenya supporting wildlife protection',
        'stats' => [
            ['value' => 'Conservation-Led', 'label' => 'Every partner vetted'],
            ['value' => 'Rhino', 'label' => 'Sanctuary encounters'],
            ['value' => 'Community', 'label' => 'Local benefit'],
        ],
        'sections' => [
            [
                'kicker' => 'Why it matters',
                'title' => 'Tourism as a conservation tool',
                'paragraphs' => [
                    'In Kenya, well-run conservancies make wildlife an asset worth protecting. Tourism revenue funds rangers, tracking, veterinary care and community programmes.',
                    'Choosing a conservation-minded safari means your holiday contributes directly to that work.',
                ],
                'bullets' => [
                    'Fees that fund rangers and anti-poaching',
                    'Rhino and species-protection programmes',
                    'Community employment and education',
                ],
            ],
            [
                'kicker' => 'Where to go',
                'title' => 'Kenya\'s conservation strongholds',
                'paragraphs' => [
                    'Lewa, Ol Pejeta and the Laikipia conservancies are leaders in community conservation and rhino protection, with visitor experiences built around the work.',
                ],
            ],
            [
                'kicker' => 'Experiences',
                'title' => 'Access and insight',
                'paragraphs' => [
                    'Depending on the property, you can join rhino-tracking with rangers, visit sanctuaries, meet conservation teams and understand the challenges and successes first-hand.',
                ],
            ],
            [
                'kicker' => 'Our approach',
                'title' => 'How we choose partners',
                'paragraphs' => [
                    'We favour camps and conservancies with genuine, verifiable conservation and community commitments, and we are transparent about where your money goes.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'What is a conservation safari?', 'a' => 'It is a safari designed around properties and conservancies where tourism directly funds wildlife protection and community development.'],
            ['q' => 'Can I visit a rhino sanctuary?', 'a' => 'Yes. Lewa and Ol Pejeta in particular offer outstanding rhino viewing and, at Ol Pejeta, sanctuary experiences.'],
            ['q' => 'Does my money really help conservation?', 'a' => 'Yes. Conservancy and park fees, and the camps we choose, direct significant revenue into protection and local livelihoods.'],
            ['q' => 'Is a conservation safari different from a normal safari?', 'a' => 'The wildlife viewing is just as good — the difference is the emphasis on conservation-led guiding and partners with a strong mission.'],
        ],
        'related' => ['destinations/lewa', 'destinations/laikipia', 'why-caracal-expeditions', 'luxury-kenya-safaris'],
    ],

    'private-charter-safaris-kenya' => [
        'locale' => 'en',
        'group' => 'private-charter-safaris-kenya',
        'schema_type' => 'Service',
        'eyebrow' => 'Your own aircraft',
        'h1' => 'Private Charter Safaris in Kenya',
        'title' => 'Private Charter Safari Kenya | Flexible Fly-In Safaris',
        'description' => 'Private charter safaris in Kenya with fully flexible bush flights, bespoke routing and door-to-airstrip logistics for families and small groups.',
        'subtitle' => 'When schedule flights do not fit, a private charter gives you complete freedom over timing, routing and airstrips — the most flexible way to move through Kenya.',
        'hero_image' => 'images/safari-air.jpg',
        'hero_alt' => 'Private charter aircraft on a bush airstrip in Kenya',
        'stats' => [
            ['value' => 'Flexible', 'label' => 'Fly on your schedule'],
            ['value' => 'Private', 'label' => 'Your own aircraft'],
            ['value' => 'Bespoke', 'label' => 'Any route you choose'],
        ],
        'sections' => [
            [
                'kicker' => 'Why charter',
                'title' => 'Total control over your routing',
                'paragraphs' => [
                    'Scheduled bush flights follow fixed routes and times. A private charter lets you depart when you like, fly directly between regions, and include airstrips that scheduled services do not serve.',
                    'It is the most efficient option for multi-region itineraries, tight connections and exclusive camps.',
                ],
                'bullets' => [
                    'Departure times that suit your game drives',
                    'Direct flights between any regions',
                    'Access to remote, exclusive airstrips',
                    'Ideal for families and small groups',
                ],
            ],
            [
                'kicker' => 'How it works',
                'title' => 'Seamless logistics, handled for you',
                'paragraphs' => [
                    'We select the right aircraft for your route and group, coordinate baggage allowances, and arrange every airstrip transfer so the day flows without friction.',
                ],
            ],
            [
                'kicker' => 'Ideal for',
                'title' => 'Who benefits most',
                'paragraphs' => [
                    'Families, friends travelling together, photographers with heavy kit and travellers on tight timeframes all benefit from the flexibility of a private charter.',
                ],
            ],
            [
                'kicker' => 'Routes',
                'title' => 'Popular charter circuits',
                'paragraphs' => [
                    'Common routes link the Masai Mara with Laikipia, Amboseli and Samburu, or combine several regions plus a coastal finish in one seamless loop.',
                ],
                'bullets' => [
                    'Masai Mara · Laikipia · Amboseli',
                    'Samburu · Laikipia · Masai Mara',
                    'Safari regions · Diani or Zanzibar',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'How much does a private charter cost?', 'a' => 'Charter pricing depends on aircraft, distance and group size, and is usually quoted per flight or per itinerary. We show it clearly in your proposal.'],
            ['q' => 'Is a charter safer than scheduled flights?', 'a' => 'Both use well-maintained aircraft and experienced pilots. Charters simply give you more flexibility on timing and routing.'],
            ['q' => 'Can we charter for a large group?', 'a' => 'Yes, larger aircraft and multiple departures can be arranged for groups and multi-generational families.'],
            ['q' => 'Can we fly directly between safari regions?', 'a' => 'Yes — that is the main advantage. We can link regions directly without routing through Nairobi where practical.'],
        ],
        'related' => ['fly-in-safaris-kenya', 'safaris/12-day-luxury-kenya-safari', 'private-safaris-kenya', 'luxury-kenya-safaris'],
    ],

];
