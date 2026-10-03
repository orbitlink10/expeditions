<?php

/*
|--------------------------------------------------------------------------
| Hub pages
|--------------------------------------------------------------------------
| Merged into the main SEO page registry by App\Support\SeoPageRegistry.
| Hubs use the "hub" template and render a grid of their child pages, acting
| as topic-cluster entry points and improving internal linking.
*/

return [

    'destinations' => [
        'locale' => 'en',
        'group' => 'destinations',
        'template' => 'hub',
        'hub' => 'destinations',
        'eyebrow' => 'Where to go in Kenya',
        'h1' => 'Kenya Safari Destinations',
        'title' => 'Kenya Safari Destinations | Masai Mara, Laikipia & Coast',
        'description' => 'Explore Kenya safari destinations with Caracal Expeditions — the Masai Mara, Laikipia, Amboseli, Samburu, Tsavo, private conservancies and the Indian Ocean coast.',
        'subtitle' => 'From the predator plains of the Masai Mara to the private conservancies of Laikipia and the beaches of the Indian Ocean, these are the regions that define a luxury Kenya safari.',
        'hero_image' => 'images/safari-giraffe.jpg',
        'hero_alt' => 'Kenya safari destinations — giraffe on the plains',
        'stats' => [
            ['value' => '9 Regions', 'label' => 'Safari, conservancy & coast'],
            ['value' => 'Fly-In', 'label' => 'Linked by bush flights'],
            ['value' => 'Private', 'label' => 'Guides and vehicles'],
        ],
        'sections' => [
            [
                'kicker' => 'How to choose',
                'title' => 'Building the right region mix',
                'paragraphs' => [
                    'Most exceptional safaris combine two or three contrasting regions. The Masai Mara delivers predators and the Great Migration; Laikipia and Lewa offer private, low-density wilderness; Amboseli and Tsavo bring elephants and big skies; Samburu the wild north; and the coast closes the journey on the Indian Ocean.',
                    'We match the mix to your dates, interests and pace — and link each region by bush flight so the transitions are part of the adventure.',
                ],
                'bullets' => [
                    'Mara — big cats and the Great Migration',
                    'Laikipia, Lewa & Ol Pejeta — private conservancies and rhino',
                    'Amboseli & Tsavo — elephants and dramatic landscapes',
                    'Samburu — the arid, photogenic north',
                    'Diani & Watamu — barefoot luxury on the coast',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Which Kenya safari destination is best for first-timers?', 'a' => 'The Masai Mara is the classic first safari, often combined with Laikipia or Amboseli. We advise on the best mix for your dates and interests.'],
            ['q' => 'How do we travel between destinations?', 'a' => 'Most luxury itineraries use scheduled or private bush flights between regions, keeping travel time short and maximising time in the wild.'],
            ['q' => 'Can we add the beach to a safari?', 'a' => 'Yes. Diani and Watamu are our most requested coastal destinations, with Zanzibar a popular alternative.'],
            ['q' => 'How many regions should we visit?', 'a' => 'Two or three regions for a week to ten days, and three or four for a longer trip, is usually ideal. We tailor this to your pace.'],
        ],
        'related' => ['luxury-kenya-safaris', 'kenya-luxury-safari-packages', 'fly-in-safaris-kenya', 'luxury-safari-and-beach-kenya'],
    ],

];
