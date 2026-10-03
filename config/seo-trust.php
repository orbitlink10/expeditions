<?php

/*
|--------------------------------------------------------------------------
| Phase 8 — Trust & conversion pages (93, 95–98)
|--------------------------------------------------------------------------
| Merged into the main SEO page registry by App\Support\SeoPageRegistry.
|
| IMPORTANT: no fabricated reviews, names, ratings or credentials appear in
| this file, and no Review/AggregateRating structured data is emitted. The
| reviews and stories pages describe our process and invite genuine, verified
| submissions rather than inventing testimonials.
*/

return [

    'meet-our-safari-guides' => [
        'locale' => 'en',
        'group' => 'meet-our-safari-guides',
        'eyebrow' => 'The people who make the safari',
        'h1' => 'Meet Our Safari Guides',
        'title' => 'Meet Our Safari Guides | Expert Kenya Guides | Caracal',
        'description' => 'Meet the Kenya-based safari guides we work with — specialists in big cats, birds, photography and family travel who bring the bush to life.',
        'subtitle' => 'The guide makes the safari. We work with a handpicked network of Kenya-based guides chosen for their knowledge, patience and personality.',
        'hero_image' => 'images/mara-jeep.jpg',
        'hero_alt' => 'Kenya-based safari guide on a private game drive',
        'stats' => [
            ['value' => 'Kenya-Based', 'label' => 'Local expertise'],
            ['value' => 'Matched', 'label' => 'To your interests'],
            ['value' => 'Private', 'label' => 'Yours alone'],
        ],
        'sections' => [
            [
                'kicker' => 'Our philosophy',
                'title' => 'A great guide changes everything',
                'paragraphs' => [
                    'A safari is only as good as the person beside you in the vehicle. Our guides read the landscape, anticipate wildlife behaviour and translate the bush into a story you will remember.',
                    'Just as importantly, they are good company — patient with children, unhurried with photographers and instinctively attuned to the mood of your group.',
                ],
                'bullets' => [
                    'Deep regional knowledge and tracking skill',
                    'Calm, patient and genuinely engaging',
                    'Comfortable with families, couples and photographers',
                    'Respectful of wildlife, communities and the environment',
                ],
            ],
            [
                'kicker' => 'Selection',
                'title' => 'How we choose our guides',
                'paragraphs' => [
                    'We work over many years with a trusted network of guides across the Mara, Laikipia, Amboseli, Samburu and the coast. We select them for their track record, their local knowledge and their manner.',
                    'Rather than rotate staff, we build long-term relationships so your guide is someone we know and trust personally.',
                ],
                'bullets' => [
                    'Proven experience in Kenya\'s key regions',
                    'Specialist knowledge matched to your interests',
                    'Consistent, personally known to our team',
                ],
            ],
            [
                'kicker' => 'Specialisms',
                'title' => 'Matched to how you travel',
                'paragraphs' => [
                    'Some guides are exceptional with big cats, others with birdlife, photography, conservation or young children. We match your guide to the safari you have in mind.',
                ],
                'bullets' => [
                    'Big-cat tracking and general wildlife',
                    'Birding and natural history',
                    'Photography-focused guiding and positioning',
                    'Family-friendly guiding for younger travellers',
                    'Walking and conservation-led experiences',
                ],
            ],
            [
                'kicker' => 'What to expect',
                'title' => 'Your guide, from arrival to departure',
                'paragraphs' => [
                    'You will be introduced to your guide at the start of your safari, and wherever logistics allow the same guide stays with you throughout. They handle the daily detail so you can simply enjoy the moment.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Do we get a private guide?', 'a' => 'Yes. Every Caracal safari is private, so your guide and vehicle are yours alone for the duration of the trip.'],
            ['q' => 'Will we have the same guide throughout?', 'a' => 'Where logistics allow, yes. We may introduce a regional specialist for particular conservancy experiences where it adds real value.'],
            ['q' => 'Are your guides fluent in English?', 'a' => 'Yes, our guides are fluent English speakers. We can also advise on guides with other language skills for international travellers on request.'],
            ['q' => 'Can you match a guide to our children?', 'a' => 'Absolutely. We regularly match family safaris with guides who are especially good with children and can pace the days accordingly.'],
        ],
        'related' => ['why-caracal-expeditions', 'about', 'private-safaris-kenya', 'plan-my-safari'],
    ],

    'safari-booking-terms' => [
        'locale' => 'en',
        'group' => 'safari-booking-terms',
        'eyebrow' => 'The detail',
        'h1' => 'Safari Booking Terms',
        'title' => 'Safari Booking Terms | Caracal Expeditions',
        'description' => 'An overview of Caracal Expeditions booking terms: reservations, deposits, payments, cancellations, amendments, insurance and traveller responsibilities.',
        'subtitle' => 'A plain-language summary of how booking works. Full terms and conditions are issued with your personalised proposal and again with your booking confirmation.',
        'hero_image' => 'images/safari-lion-drive.jpg',
        'hero_alt' => 'Booking terms for a luxury Kenya safari',
        'stats' => [
            ['value' => 'Clear', 'label' => 'Plain-language summary'],
            ['value' => 'Itemised', 'label' => 'Transparent pricing'],
            ['value' => 'In Writing', 'label' => 'Full terms with proposal'],
        ],
        'sections' => [
            [
                'kicker' => 'Reservations',
                'title' => 'Quotes, proposals and deposits',
                'paragraphs' => [
                    'An enquiry and any proposal are quotations only and do not constitute a confirmed booking. Availability is checked and held before any payment is requested.',
                    'A deposit confirms your safari and secures the camps, guides and flights. The deposit amount and balance due date are always stated clearly in your proposal before you commit.',
                ],
                'bullets' => [
                    'Proposals are quotes and create no obligation',
                    'Availability is confirmed before payment',
                    'A deposit secures your arrangements',
                    'Balance payable before travel, as stated in your terms',
                ],
            ],
            [
                'kicker' => 'Pricing',
                'title' => 'Prices and currency',
                'paragraphs' => [
                    'Prices are quoted per person and itemised. Quotations may be issued in USD, EUR or GBP. Park, conservancy and concession fees are included as stated in your proposal.',
                    'Third-party costs, government fees and exchange rates can change; any adjustment to a confirmed booking is governed by the terms provided at the time of booking.',
                ],
            ],
            [
                'kicker' => 'Cancellations',
                'title' => 'Cancellations and amendments',
                'paragraphs' => [
                    'Camps and flights apply their own cancellation policies, which are passed on to you. Amendment and cancellation terms, including any fees, are set out in full in your booking terms, as they differ by property and season.',
                ],
                'bullets' => [
                    'Cancellation terms vary by camp, season and supplier',
                    'Any fees are shown in full before you confirm',
                    'Amendments are subject to availability',
                ],
            ],
            [
                'kicker' => 'Travellers',
                'title' => 'Insurance, documents and health',
                'paragraphs' => [
                    'Comprehensive travel and medical insurance is a condition of travel. You are responsible for valid passports, entry authorisations, visas and any health requirements, and for arriving on time for flights.',
                ],
                'bullets' => [
                    'Travel insurance is required for all travellers',
                    'Passports should be valid for at least six months',
                    'You are responsible for visas and entry authorisations',
                    'Check health and vaccination guidance before travel',
                ],
            ],
            [
                'kicker' => 'Responsibility',
                'title' => 'Liability and unforeseen events',
                'paragraphs' => [
                    'Wildlife, weather and other factors beyond our control can change plans. We will always work to provide a safe, high-quality experience and will act in your interests if adjustments are needed.',
                    'Our full terms describe the responsibilities of both parties, including limits of liability and the handling of circumstances outside our control.',
                ],
            ],
            [
                'kicker' => 'Support',
                'title' => 'Questions and complaints',
                'paragraphs' => [
                    'If anything is unclear, ask before you book — we would far rather explain something in advance. If a concern arises during travel, contact us immediately so we can resolve it; complaints received after travel should be sent to us in writing.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'When is my safari confirmed?', 'a' => 'Your safari is confirmed once the agreed deposit is received and we have issued your booking confirmation.'],
            ['q' => 'Are prices guaranteed?', 'a' => 'Once your safari is confirmed and paid as agreed, your quoted arrangements are secured, subject to the terms provided at booking.'],
            ['q' => 'Do I need travel insurance?', 'a' => 'Yes. Comprehensive travel and medical insurance is a condition of travel, and we recommend arranging it as soon as your trip is confirmed.'],
            ['q' => 'Where can I read the full terms?', 'a' => 'Full terms and conditions are sent with your personalised proposal and again with your booking confirmation. Ask us any time for a copy.'],
        ],
        'related' => ['booking-payment-process', 'plan-my-safari', 'kenya-safari-faq', 'why-caracal-expeditions'],
    ],

    'guest-reviews' => [
        'locale' => 'en',
        'group' => 'guest-reviews',
        'eyebrow' => 'Verified feedback',
        'h1' => 'Guest Reviews',
        'title' => 'Guest Reviews | Caracal Expeditions Kenya Safaris',
        'description' => 'How Caracal Expeditions collects and publishes verified guest feedback, what travellers value most, and how to share your own safari experience.',
        'subtitle' => 'We publish genuine, verified feedback from travellers. Until a review is shared with us directly, we would rather show you nothing than invent a quote — here is how it works.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Guest reviews for Caracal Expeditions Kenya safaris',
        'stats' => [
            ['value' => 'Verified', 'label' => 'Only real guests'],
            ['value' => 'Permission', 'label' => 'Shared with consent'],
            ['value' => 'Honest', 'label' => 'No invented quotes'],
        ],
        'sections' => [
            [
                'kicker' => 'Our approach',
                'title' => 'Honest feedback, published with permission',
                'paragraphs' => [
                    'We only publish reviews and stories that come from real travellers, with their permission. We do not write testimonials, invent names or publish unverified ratings.',
                    'As we gather reviews from recent guests, they will appear here and on independent review platforms. In the meantime, we are happy to connect you with references on request.',
                ],
                'bullets' => [
                    'Reviews only from genuine, verified travellers',
                    'Published with the traveller\'s consent',
                    'No fabricated quotes, names or ratings',
                    'References available on request',
                ],
            ],
            [
                'kicker' => 'What matters',
                'title' => 'What travellers consistently value',
                'paragraphs' => [
                    'Across the feedback we receive, the same themes come up again and again. They are the standards we hold ourselves to on every journey.',
                ],
                'bullets' => [
                    'Expert, personable private guiding',
                    'Genuinely private vehicles and flexible pacing',
                    'Handpicked camps with exceptional service',
                    'Seamless logistics and bush flights',
                    'Honest advice and clear pricing',
                ],
            ],
            [
                'kicker' => 'Share yours',
                'title' => 'Travelled with us? We would love to hear from you',
                'paragraphs' => [
                    'If you have travelled with Caracal Expeditions, we would be delighted to hear about your experience. Send us your feedback and, with your permission, we may feature it here or in our traveller stories.',
                ],
            ],
            [
                'kicker' => 'Independence',
                'title' => 'Why we do not chase ratings',
                'paragraphs' => [
                    'We focus on designing and delivering excellent safaris rather than engineering a rating. Real recommendations from real travellers are worth far more than a manipulated score.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Where can I read reviews about Caracal Expeditions?', 'a' => 'Verified reviews from recent guests will be published here as they are shared. We are also happy to provide references from past travellers on request.'],
            ['q' => 'Do you publish all feedback?', 'a' => 'We publish genuine feedback with the traveller\'s permission. We do not edit reviews to change their meaning, and we do not publish invented content.'],
            ['q' => 'Can I speak to a past traveller?', 'a' => 'In many cases, yes. Ask us and, subject to their consent, we can connect you with a past guest.'],
            ['q' => 'How do I leave a review?', 'a' => 'Send your feedback to us directly, or leave a review on the independent platform you booked through. With your permission, we may feature it here.'],
        ],
        'related' => ['traveller-stories', 'why-caracal-expeditions', 'about', 'plan-my-safari'],
    ],

    'traveller-stories' => [
        'locale' => 'en',
        'group' => 'traveller-stories',
        'eyebrow' => 'Journeys and inspiration',
        'h1' => 'Traveller Stories',
        'title' => 'Traveller Stories | Luxury Kenya Safari Inspiration',
        'description' => 'Safari inspiration from Caracal Expeditions — the kinds of journeys we design, from honeymoons and family safaris to photographic expeditions and Migration trips.',
        'subtitle' => 'Every safari tells a story. Explore the kinds of journeys our travellers most often take, and the moments that define them.',
        'hero_image' => 'images/safari-giraffe.jpg',
        'hero_alt' => 'Safari stories and inspiration from Kenya',
        'stats' => [
            ['value' => 'Honeymoons', 'label' => 'Romance in the wild'],
            ['value' => 'Families', 'label' => 'Adventures for all ages'],
            ['value' => 'Photography', 'label' => 'Built around light'],
        ],
        'sections' => [
            [
                'kicker' => 'The journeys',
                'title' => 'The safaris our travellers most often choose',
                'paragraphs' => [
                    'Most Caracal journeys begin with a simple idea — a honeymoon, a first family safari, the Great Migration or a milestone birthday — and grow into a tailored itinerary shaped around the people travelling.',
                ],
                'bullets' => [
                    'Honeymoons combining the Mara with the Indian Ocean',
                    'Family safaris paced around younger travellers',
                    'Photographic journeys built around the best light',
                    'Migration trips timed to the herds',
                    'Safari-and-beach journeys ending on the coast',
                ],
            ],
            [
                'kicker' => 'The moments',
                'title' => 'What tends to stay with people',
                'paragraphs' => [
                    'Certain moments come up again and again: a first leopard at dawn, elephants crossing in front of you, a balloon rising over the plains, or a bush breakfast after a long morning drive.',
                    'These are not staged — they emerge from good guiding, the right camps and enough time in the wild.',
                ],
            ],
            [
                'kicker' => 'The process',
                'title' => 'From first idea to final sundowner',
                'paragraphs' => [
                    'A great story starts with a conversation. We listen, propose, refine and then handle every detail so that your only job is to be present for it.',
                ],
            ],
            [
                'kicker' => 'Your story',
                'title' => 'Share your journey',
                'paragraphs' => [
                    'If you have travelled with us, we would love to hear your story. With your permission, we may feature genuine traveller accounts here — always real, always with consent, never invented.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Can you help me choose the right journey?', 'a' => 'Yes. Share your dates, group and interests and a safari specialist will suggest the journeys that fit you best.'],
            ['q' => 'Do you feature real traveller stories?', 'a' => 'Yes — we publish genuine traveller accounts with permission. We do not invent stories or testimonials.'],
            ['q' => 'Where should I start planning?', 'a' => 'Start with our plan-my-safari page or browse our signature journeys and destinations, then send us an enquiry.'],
            ['q' => 'Can I share my own story?', 'a' => 'Absolutely. Send us your experience and, with your consent, we may feature it here.'],
        ],
        'related' => ['luxury-honeymoon-safaris-kenya', 'luxury-family-safaris-kenya', 'great-migration-safaris-kenya', 'photographic-safaris-kenya'],
    ],

    'travel-advisors' => [
        'locale' => 'en',
        'group' => 'travel-advisors',
        'eyebrow' => 'Personal planning, expert advice',
        'h1' => 'Travel Advisors',
        'title' => 'Travel Advisors | Plan with a Kenya Safari Specialist',
        'description' => 'Plan your Kenya safari with a dedicated travel advisor, or partner with Caracal Expeditions as a travel advisor. Expert, personal advice from Kenya specialists.',
        'subtitle' => 'Work with a dedicated Kenya safari advisor for personal, expert planning — or partner with us as a travel advisor for your own clients.',
        'hero_image' => 'images/mara-jeep.jpg',
        'hero_alt' => 'Kenya safari travel advisor planning a private journey',
        'stats' => [
            ['value' => 'Dedicated', 'label' => 'One advisor, start to finish'],
            ['value' => 'Expert', 'label' => 'Kenya specialists'],
            ['value' => 'Partners', 'label' => 'For travel advisors'],
        ],
        'sections' => [
            [
                'kicker' => 'For travellers',
                'title' => 'What a Caracal safari advisor does',
                'paragraphs' => [
                    'When you enquire, you are matched with a Kenya-based safari advisor who learns your dates, group and interests and designs a personalised itinerary around them.',
                    'They remain your single point of contact from first idea to final transfer, so nothing gets lost between you and the ground.',
                ],
                'bullets' => [
                    'Personalised itinerary design',
                    'Honest advice on camps, regions and seasons',
                    'Clear, itemised proposals',
                    'One contact throughout your journey',
                ],
            ],
            [
                'kicker' => 'How we work',
                'title' => 'A calm, unhurried planning process',
                'paragraphs' => [
                    'There is no pressure and no obligation until you are ready. We refine the itinerary with you until it feels right, then handle every booking, flight and transfer.',
                ],
            ],
            [
                'kicker' => 'For the trade',
                'title' => 'Partnering with us as a travel advisor',
                'paragraphs' => [
                    'We work with a limited number of travel advisors and agencies who want a trusted Kenya specialist behind them. If you design luxury travel for clients, we can act as your on-the-ground partner in Kenya.',
                    'Contact us to discuss how a partnership could work and the support we can provide.',
                ],
                'bullets' => [
                    'A Kenya-based specialist partner for your clients',
                    'Tailor-made private itineraries on your behalf',
                    'Seamless ground handling and logistics',
                    'Clear, trade-friendly communication',
                ],
            ],
            [
                'kicker' => 'Why Caracal',
                'title' => 'Specialists, not generalists',
                'paragraphs' => [
                    'We do one thing: private, tailor-made luxury safaris in Kenya. That focus is exactly what makes us a strong advisor to travellers and to the trade alike.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Do I get a dedicated advisor?', 'a' => 'Yes. You are matched with a Kenya-based safari advisor who remains your single point of contact throughout.'],
            ['q' => 'Is planning free?', 'a' => 'Yes. Consultation and proposals are complimentary, with no obligation until you confirm.'],
            ['q' => 'Do you work with travel agents and advisors?', 'a' => 'Yes. We partner with selected travel advisors and agencies as their Kenya specialist. Contact us to discuss a partnership.'],
            ['q' => 'Can you handle complex or multi-family trips?', 'a' => 'Yes. Multi-generational families, groups and complex fly-in itineraries are all well within our expertise.'],
        ],
        'related' => ['plan-my-safari', 'about', 'why-caracal-expeditions', 'booking-payment-process'],
    ],

];
