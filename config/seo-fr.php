<?php

/*
|--------------------------------------------------------------------------
| Phase 6 — France market cluster (français)
|--------------------------------------------------------------------------
| Merged into the main SEO page registry by App\Support\SeoPageRegistry.
| Content is written in premium, natural French. EUR pricing is offered and
| each page shares an hreflang group with its equivalent global/US/UK page.
*/

$inclusions = [
    'Guide safari privé et véhicule 4x4 pendant tout le séjour',
    'Camps et lodges de luxe sélectionnés',
    'Vols intérieurs entre les régions',
    'Frais de parcs, conservancies et concessions',
    'Pension complète selon l\'itinéraire',
    'Tous les transferts aéroport et de piste',
    'Eau potable dans le véhicule',
    'Couverture d\'évacuation médicale',
];

$exclusions = [
    'Vols internationaux et visas',
    'Assurance voyage et santé',
    'Vins, spiritueux et champagne premium',
    'Safari en ballon et soins spa en option',
    'Pourboires aux guides et au personnel',
    'Dépenses personnelles',
];

return [

    'fr' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'fr',
        'eyebrow' => 'Organisation depuis la France',
        'h1' => 'Safaris au Kenya depuis la France',
        'title' => 'Safari au Kenya depuis la France | Organisation sur mesure',
        'description' => 'Organisez un safari de luxe au Kenya depuis la France avec Caracal Expeditions : guides privés, itinéraires sur mesure, devis en euros et vols au départ de Paris.',
        'subtitle' => 'Caracal Expeditions conçoit des safaris privés et sur mesure au Kenya pour les voyageurs français, avec des devis en euros, des conseils sincères et des liaisons fluides depuis Paris et la province.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Safari de luxe au Kenya organisé depuis la France',
        'stats' => [
            ['value' => 'Privé', 'label' => 'Guides et véhicules'],
            ['value' => 'Sur mesure', 'label' => 'Jamais en groupe'],
            ['value' => 'Euros', 'label' => 'Devis transparents'],
        ],
        'sections' => [
            [
                'kicker' => 'Pourquoi le Kenya',
                'title' => 'Le safari classique pour les voyageurs français',
                'paragraphs' => [
                    'Le Kenya offre le safari que la plupart des voyageurs imaginent : lions dans les grandes plaines, éléphants au pied du Kilimandjaro et Grande Migration dans le Masai Mara. Le pays est anglophone, facile à parcourir et très bien desservi par les vols intérieurs.',
                    'Nous nous occupons de tout sur place, vous n\'avez plus qu\'à arriver et en profiter.',
                ],
                'bullets' => [
                    'Faune exceptionnelle et guides de premier ordre',
                    'Vols pratiques depuis Paris et la province',
                    'Combinaisons safari et plage en un seul voyage',
                    'Pension complète et logistique sans souci',
                ],
            ],
            [
                'kicker' => 'Vols et saisons',
                'title' => 'Rejoindre le Kenya depuis la France',
                'paragraphs' => [
                    'Depuis Paris, le Kenya se rejoint avec une escale ou via un vol direct selon la saison, souvent avec un départ de nuit qui permet d\'optimiser votre temps de congé. Les villes de province se connectent facilement via Paris ou un hub européen.',
                    'Pour le meilleur équilibre entre faune et météo, visez juillet à octobre ou janvier à mars.',
                ],
            ],
            [
                'kicker' => 'Notre approche',
                'title' => 'Des itinéraires sur mesure, pas des circuits de groupe',
                'paragraphs' => [
                    'Chaque safari Caracal est privé et construit autour de vous. Nous proposons les régions, les camps et le rythme, puis nous affinons ensemble jusqu\'au résultat idéal — sans engagement avant confirmation. Devis en euros.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Combien de temps dure le vol de France vers le Kenya ?', 'a' => 'Le trajet Paris–Nairobi demande généralement entre 9 et 11 heures selon l\'escale. Des départs de nuit permettent d\'arriver le matin et de rejoindre la brousse le jour même.'],
            ['q' => 'Proposez-vous des devis en euros ?', 'a' => 'Oui. Les voyageurs français reçoivent des propositions claires et détaillées en euros, sans frais cachés.'],
            ['q' => 'Quelle est la meilleure période pour visiter le Kenya ?', 'a' => 'De juillet à octobre pour la Grande Migration et l\'observation en saison sèche, ou de janvier à mars pour un temps chaud et d\'excellentes observations des grands félins.'],
            ['q' => 'Faut-il un visa pour le Kenya ?', 'a' => 'Les voyageurs français ont besoin d\'une autorisation d\'entrée. Les règles pouvant évoluer, nous vous conseillons de vérifier les informations officielles avant le départ.'],
        ],
        'related' => ['fr/safaris-de-luxe-kenya', 'fr/safari-prive-kenya', 'fr/preparer-safari-kenya-depuis-france', 'fr/prix-safari-luxe-kenya'],
    ],

    'fr/safaris-de-luxe-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'luxury-kenya-safaris',
        'eyebrow' => 'Voyages privés sur mesure',
        'h1' => 'Safaris de luxe au Kenya',
        'title' => 'Safari de luxe Kenya | Safaris privés sur mesure | Caracal',
        'description' => 'Découvrez des safaris de luxe privés au Kenya : guides experts, vols intérieurs, camps sélectionnés et itinéraires sur mesure dans le Masai Mara, à Laikipia et au-delà.',
        'subtitle' => 'Caracal Expeditions conçoit des safaris de luxe privés et sur mesure au Kenya — guides experts, camps sélectionnés et vols intérieurs pour un voyage calme, cinématographique et entièrement le vôtre.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Safari de luxe au Kenya au coucher du soleil',
        'stats' => [
            ['value' => 'Privé', 'label' => 'Guides et véhicules'],
            ['value' => 'Sur mesure', 'label' => 'Construit pour vous'],
            ['value' => 'Euros', 'label' => 'Tarifs transparents'],
        ],
        'sections' => [
            [
                'kicker' => 'La différence Caracal',
                'title' => 'Un safari de luxe pensé pour vous',
                'paragraphs' => [
                    'Nous sommes des spécialistes basés au Kenya et nous n\'y travaillons que là. Cette spécialisation signifie de meilleurs camps, de meilleurs guides et un meilleur itinéraire — et un voyage qui correspond à votre façon de voyager.',
                    'Aucun départ en groupe : votre voyage est privé et conçu une seule fois, pour vous.',
                ],
                'bullets' => [
                    'Guide privé et véhicule dédié pendant tout le séjour',
                    'Camps de luxe et conservancies sélectionnés',
                    'Vols intérieurs pour maximiser le temps en brousse',
                    'Un seul interlocuteur du début à la fin',
                ],
            ],
            [
                'kicker' => 'Régions',
                'title' => 'Où voyager',
                'paragraphs' => [
                    'La plupart des voyageurs français combinent deux ou trois régions : le Masai Mara pour les grands félins et la Migration, Laikipia ou Lewa pour les conservancies privées, Amboseli pour les éléphants, Samburu pour le grand nord et la côte pour une fin balnéaire.',
                ],
            ],
            [
                'kicker' => 'Pratique',
                'title' => 'Organiser depuis la France',
                'paragraphs' => [
                    'Nous vous conseillons sur les vols, les périodes, les visas et les bagages, et nous construisons l\'itinéraire autour de votre aéroport de départ et de vos dates. Les devis sont fournis en euros et clairement détaillés.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Combien coûte un safari de luxe au Kenya ?', 'a' => 'Un safari privé de luxe démarre généralement autour de 7 500 € par personne pour 7 jours et augmente selon la durée, la saison, le niveau des camps et les vols privés. Nous fournissons un devis détaillé en euros.'],
            ['q' => 'Un safari privé vaut-il le coup pour deux personnes ?', 'a' => 'Pour la plupart des voyageurs, oui. Le supplément par rapport à un safari partagé est souvent plus faible que prévu, et la flexibilité change tout.'],
            ['q' => 'Gérez-vous les vols intérieurs ?', 'a' => 'Oui, nous organisons tous les vols intérieurs et transferts ; les billets internationaux sont généralement réservés de votre côté, avec nos conseils.'],
            ['q' => 'Quand faut-il réserver ?', 'a' => 'Pour la haute saison, nous recommandons 6 à 12 mois à l\'avance ; hors pic, 3 à 6 mois suffisent souvent.'],
        ],
        'related' => ['fr/safari-prive-kenya', 'fr/circuit-safari-kenya', 'fr/prix-safari-luxe-kenya', 'luxury-kenya-safaris'],
    ],

    'fr/safari-prive-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'private-safaris-kenya',
        'eyebrow' => 'Votre guide, votre véhicule',
        'h1' => 'Safaris privés au Kenya',
        'title' => 'Safari privé Kenya | Guide et véhicule dédiés',
        'description' => 'Safaris privés au Kenya avec votre propre guide et véhicule, itinéraires personnalisés et safaris quotidiens flexibles. Sur mesure pour les voyageurs français.',
        'subtitle' => 'Un safari privé au Kenya vous offre un guide dédié, votre propre véhicule et une flexibilité totale — la liberté de suivre une observation et de voyager à votre rythme.',
        'hero_image' => 'images/mara-jeep.jpg',
        'hero_alt' => 'Véhicule et guide de safari privé au Kenya',
        'stats' => [
            ['value' => 'Privé', 'label' => 'Guide et 4x4'],
            ['value' => 'Flexible', 'label' => 'Rythme à votre choix'],
            ['value' => 'France', 'label' => 'Euros et vols adaptés'],
        ],
        'sections' => [
            [
                'kicker' => 'Le sens du privé',
                'title' => 'Voyager entièrement à votre rythme',
                'paragraphs' => [
                    'Sans véhicule partagé ni horaire fixe, vous pouvez vous attarder devant une observation, rentrer tôt pour le déjeuner ou partir avant l\'aube pour profiter de la plus belle lumière.',
                    'Le guide privé est la plus grande amélioration possible d\'un safari, et il est inclus dans chaque voyage Caracal.',
                ],
                'bullets' => [
                    'Guide dédié et 4x4 privé',
                    'Horaires de safaris flexibles',
                    'Activités adaptées à vos envies',
                    'Aucun départ partagé',
                ],
            ],
            [
                'kicker' => 'Pour qui',
                'title' => 'Idéal pour les couples, les familles et les photographes',
                'paragraphs' => [
                    'Les safaris privés conviennent aux voyages de noces, aux familles avec enfants et aux photographes qui veulent maîtriser la lumière et le positionnement.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Un safari privé coûte-t-il beaucoup plus cher ?', 'a' => 'Il y a un supplément car le véhicule et le guide sont à vous, mais à partir de deux voyageurs l\'écart reste souvent modéré par rapport à une option partagée.'],
            ['q' => 'Peut-on garder le même guide tout le voyage ?', 'a' => 'Chaque fois que la logistique le permet, oui. Nous ne changeons que pour des spécialistes régionaux lorsque cela apporte une vraie valeur.'],
            ['q' => 'Peut-on voyager avec des enfants ?', 'a' => 'Absolument — le guide privé est idéal pour les familles, car vous contrôlez le rythme et adaptez les activités.'],
            ['q' => 'Peut-on faire un safari photo privé ?', 'a' => 'Oui. De nombreux safaris privés sont conçus pour la photographie, avec des départs matinaux et des sorties prolongées à l\'heure dorée.'],
        ],
        'related' => ['fr/safaris-de-luxe-kenya', 'fr/safari-en-avion-kenya', 'fr/safari-famille-kenya', 'private-safaris-kenya'],
    ],

    'fr/circuit-safari-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'kenya-luxury-safari-packages',
        'template' => 'itinerary',
        'eyebrow' => 'Dix jours, trois régions',
        'h1' => 'Circuit safari au Kenya',
        'title' => 'Circuit Safari Kenya | Itinéraire privé 10 jours sur mesure',
        'description' => 'Un circuit safari privé de 10 jours au Kenya : Masai Mara, Laikipia et Amboseli, guides privés, camps de luxe et vols intérieurs. Devis en euros.',
        'subtitle' => 'Dix jours privés à travers le Masai Mara, Laikipia et Amboseli — un circuit détendu et sur mesure, avec devis en euros.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => 'Circuit safari privé au Kenya avec éléphants',
        'facts' => [
            ['label' => 'Durée', 'value' => '10 jours / 9 nuits'],
            ['label' => 'Régions', 'value' => 'Mara · Laikipia · Amboseli'],
            ['label' => 'Style', 'value' => 'Safari privé avec vols'],
            ['label' => 'Tarifs', 'value' => 'Devis en euros'],
        ],
        'itinerary' => [
            ['day' => 'Jour 1', 'title' => 'Arrivée à Nairobi', 'text' => 'Accueil à l\'arrivée et transfert vers un hôtel de charme pour un repos bien mérité.'],
            ['day' => 'Jour 2', 'title' => 'Vol vers le Masai Mara', 'text' => 'Court vol intérieur vers le Mara, déjeuner au camp et safaris en fin d\'après-midi.'],
            ['day' => 'Jour 3', 'title' => 'Journée au Mara', 'text' => 'Pistage des grands félins dans les plaines avec votre guide privé et pique-nique en brousse.'],
            ['day' => 'Jour 4', 'title' => 'Du Mara à Laikipia', 'text' => 'Safari matinal, puis vol panoramique vers une conservancy privée de Laikipia.'],
            ['day' => 'Jour 5', 'title' => 'Conservancy de Laikipia', 'text' => 'Safaris hors piste et de nuit, suivi des rhinocéros et des prédateurs, temps calme au camp.'],
            ['day' => 'Jour 6', 'title' => 'Expériences à Laikipia', 'text' => 'Marche guidée ou sortie à dos de chameau, puis sundowner privé face aux plaines.'],
            ['day' => 'Jour 7', 'title' => 'Vol vers Amboseli', 'text' => 'Vol vers le sud pour Amboseli : grands espaces, troupeaux d\'éléphants et vues sur le Kilimandjaro.'],
            ['day' => 'Jour 8', 'title' => 'Journée à Amboseli', 'text' => 'Safaris à l\'aube et en après-midi parmi les éléphants, avec un positionnement pensé pour la photo.'],
            ['day' => 'Jour 9', 'title' => 'Amboseli en douceur', 'text' => 'Safari matinal, visite d\'une communauté maasaï et dernier sundowner.'],
            ['day' => 'Jour 10', 'title' => 'Départ du Kenya', 'text' => 'Dernière matinée en brousse, puis vol vers Nairobi pour votre vol retour.'],
        ],
        'sections' => [
            [
                'kicker' => 'Pourquoi ce circuit',
                'title' => 'Trois régions, une même élégance',
                'paragraphs' => [
                    'Dix jours permettent de découvrir les contrastes qui font la richesse du Kenya : le Mara et ses prédateurs, la nature privée de Laikipia et le pays des éléphants d\'Amboseli.',
                    'Les vols intérieurs raccourcissent les transitions : les jours supplémentaires profitent à la faune et au repos, pas à la route.',
                ],
                'bullets' => [
                    'Les trois régions emblématiques du Kenya',
                    'Guide privé et 4x4 pendant tout le séjour',
                    'Lumière d\'Amboseli idéale pour la photo',
                    'Devis fournis en euros',
                ],
            ],
        ],
        'inclusions' => $inclusions,
        'exclusions' => $exclusions,
        'faqs' => [
            ['q' => 'Dix jours suffisent-ils pour découvrir le Kenya ?', 'a' => 'Oui. Avec les vols intérieurs, dix jours couvrent trois régions emblématiques à un rythme détendu, avec de vrais moments de repos.'],
            ['q' => 'Combien coûte un circuit de 10 jours ?', 'a' => 'Un safari privé de luxe de 10 jours se situe généralement entre 9 000 € et 17 000 € par personne selon la saison, les camps et la taille du groupe.'],
            ['q' => 'Peut-on ajouter la plage ?', 'a' => 'Oui, une courte extension balnéaire est possible sur 10 jours. Nous vous conseillons la meilleure répartition selon vos vols.'],
            ['q' => 'Adaptez-vous les vols depuis la France ?', 'a' => 'Oui. Nous construisons l\'itinéraire autour de votre arrivée et de votre départ pour maximiser votre temps en brousse.'],
        ],
        'related' => ['fr/safaris-de-luxe-kenya', 'fr/safari-kenya-plage', 'kenya-luxury-safari-packages', 'fr/prix-safari-luxe-kenya'],
    ],

    'fr/safari-masai-mara-luxe' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'destinations/masai-mara',
        'eyebrow' => 'Le pays des prédateurs',
        'h1' => 'Safari de luxe dans le Masai Mara',
        'title' => 'Safari Masai Mara de luxe | Safari privé Kenya',
        'description' => 'Safaris de luxe dans le Masai Mara, avec guides privés, conservancies exclusives et accès privilégié à la Grande Migration. Organisé depuis la France.',
        'subtitle' => 'Le Masai Mara est la plus célèbre des réserves kenyanes : plaines dorées, grands félins abondants et, de juillet à octobre, le spectacle de la Grande Migration.',
        'hero_image' => 'images/safari-giraffe.jpg',
        'hero_alt' => 'Girafe dans les plaines du Masai Mara',
        'stats' => [
            ['value' => 'Félins', 'label' => 'Lions, léopards, guépards'],
            ['value' => 'Migration', 'label' => 'Juillet à octobre'],
            ['value' => 'Vol', 'label' => '45 min depuis Nairobi'],
        ],
        'sections' => [
            [
                'kicker' => 'Aperçu',
                'title' => 'Pourquoi le Mara est la référence',
                'paragraphs' => [
                    'Le Mara est un vaste écosystème ouvert où la faune est abondante et facile à observer, avec des densités exceptionnelles de lions, de guépards et de léopards.',
                    'Un safari bien conçu associe la réserve mythique à des conservancies privées plus calmes qui la bordent.',
                ],
                'bullets' => [
                    'Observation des prédateurs toute l\'année',
                    'La Grande Migration de juillet à octobre',
                    'Réserve et conservancies à faible densité',
                    'Vols intérieurs rapides depuis Nairobi',
                ],
            ],
            [
                'kicker' => 'Depuis la France',
                'title' => 'Quand venir et comment s\'organiser',
                'paragraphs' => [
                    'De juillet à octobre, la Migration et l\'observation en saison sèche sont au rendez-vous ; de janvier à mars, le temps est chaud et les félins faciles à voir, avec moins de visiteurs. Nous calons votre séjour et vos camps sur vos vols depuis la France.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Quelle est la meilleure période pour le Masai Mara ?', 'a' => 'De juillet à octobre pour la Grande Migration et l\'observation en saison sèche, ou de janvier à mars pour un temps chaud et d\'excellentes observations avec moins de monde.'],
            ['q' => 'Comment rejoindre le Masai Mara ?', 'a' => 'Vol jusqu\'à Nairobi, puis 45 minutes de vol intérieur vers une piste du Mara. Nous organisons la correspondance selon votre arrivée internationale.'],
            ['q' => 'Réserve ou conservancy ?', 'a' => 'Les conservancies offrent plus d\'intimité et d\'activités flexibles. Beaucoup d\'itinéraires combinent les deux ; nous vous conseillons selon vos priorités.'],
            ['q' => 'Verrai-je la Grande Migration ?', 'a' => 'Les traversées de rivière sont spectaculaires mais jamais garanties. Les troupeaux sont présents d\'environ juillet à octobre ; nous calons votre séjour pour maximiser vos chances.'],
        ],
        'related' => ['destinations/masai-mara', 'fr/safaris-de-luxe-kenya', 'fr/safari-en-avion-kenya', 'great-migration-safaris-kenya'],
    ],

    'fr/safari-amboseli-luxe' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'destinations/amboseli',
        'eyebrow' => 'Grands espaces et éléphants',
        'h1' => 'Safari de luxe à Amboseli',
        'title' => 'Safari Amboseli de luxe | Éléphants et Kilimandjaro',
        'description' => 'Safaris de luxe à Amboseli avec guides privés, troupeaux d\'éléphants emblématiques et vues sur le Kilimandjaro. À combiner avec le Mara ou la côte.',
        'subtitle' => 'Amboseli, c\'est le pays des éléphants encadré par le plus haut sommet d\'Afrique — grands ciels, troupeaux photogéniques et paysages intemporels.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => 'Éléphants devant le Kilimandjaro à Amboseli',
        'stats' => [
            ['value' => 'Éléphants', 'label' => 'Troupeaux légendaires'],
            ['value' => 'Kilimandjaro', 'label' => 'Vues emblématiques'],
            ['value' => 'Photo', 'label' => 'Grands ciels et lumière'],
        ],
        'sections' => [
            [
                'kicker' => 'Aperçu',
                'title' => 'L\'image classique du Kenya',
                'paragraphs' => [
                    'Les plaines ouvertes d\'Amboseli, ses horizons poussiéreux et ses immenses familles d\'éléphants composent l\'imagerie que la plupart des gens associent au safari. Par matin clair, le Kilimandjaro se dresse derrière les troupeaux.',
                    'Le parc, plus petit et plus facile à parcourir que le Mara, complète idéalement un itinéraire multi-régions.',
                ],
                'bullets' => [
                    'Parmi les meilleures observations d\'éléphants d\'Afrique',
                    'Toile de fond du Kilimandjaro',
                    'Lumière exceptionnelle pour la photographie',
                    'Extension facile vers la côte ou la vallée du Rift',
                ],
            ],
            [
                'kicker' => 'Saison',
                'title' => 'Quand visiter Amboseli',
                'paragraphs' => [
                    'Les saisons sèches (juin à octobre et janvier à février) offrent les vues les plus dégagées sur la montagne et la meilleure concentration de faune autour des points d\'eau.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Verrai-je le Kilimandjaro ?', 'a' => 'Par matin clair, oui. Les nuages peuvent masquer le sommet, surtout en saison humide ; nous prévoyons plusieurs occasions d\'observation quand c\'est possible.'],
            ['q' => 'Amboseli ou le Masai Mara ?', 'a' => 'Amboseli est plus petit et centré sur les éléphants et les paysages ; le Mara offre davantage de prédateurs et la Migration. Beaucoup de voyageurs combinent les deux.'],
            ['q' => 'Comment se rendre à Amboseli ?', 'a' => 'Courts vols intérieurs depuis Nairobi (Wilson) et d\'autres régions, ou transferts routiers par la route Nairobi–Mombasa.'],
            ['q' => 'Amboseli convient-il aux familles ?', 'a' => 'Oui. Le terrain ouvert, les éléphants abondants et les distances plus courtes en font une destination très appréciée des enfants.'],
        ],
        'related' => ['destinations/amboseli', 'fr/safaris-de-luxe-kenya', 'fr/safari-kenya-plage', 'fr/safari-masai-mara-luxe'],
    ],

    'fr/safari-laikipia' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'destinations/laikipia',
        'eyebrow' => 'Nature privée',
        'h1' => 'Safari de luxe à Laikipia',
        'title' => 'Safari Laikipia | Conservancies privées du Kenya',
        'description' => 'Safaris de luxe à Laikipia dans les conservancies privées du Kenya : faible densité, safaris à pied et observation des rhinocéros en toute exclusivité.',
        'subtitle' => 'Laikipia est la grande nature privée du Kenya : vastes conservancies, guides engagés dans la conservation et un niveau d\'exclusivité que les parcs nationaux ne peuvent égaler.',
        'hero_image' => 'images/samburu-elephant.jpg',
        'hero_alt' => 'Éléphant dans une conservancy de Laikipia',
        'stats' => [
            ['value' => 'Privé', 'label' => 'Vastes conservancies'],
            ['value' => 'Rhinos', 'label' => 'Bastions de conservation'],
            ['value' => 'Faible densité', 'label' => 'Peu de véhicules'],
        ],
        'sections' => [
            [
                'kicker' => 'Aperçu',
                'title' => 'Le safari le plus exclusif du Kenya',
                'paragraphs' => [
                    'Laikipia est une mosaïque de conservancies et de ranches privés sur un plateau au nord du mont Kenya. Le faible nombre de visiteurs et une gestion stricte en font l\'idéal pour qui cherche de l\'espace.',
                    'C\'est aussi une réussite de conservation, abritant d\'importantes populations de rhinocéros noirs et blancs, d\'éléphants et de lycaons.',
                ],
                'bullets' => [
                    'Safaris hors piste et de nuit en conservancy',
                    'Rhinos, éléphants, grands félins et lycaons',
                    'Safaris à pied et à dos de chameau',
                    'Certains des camps les plus exclusifs du Kenya',
                ],
            ],
            [
                'kicker' => 'Expériences',
                'title' => 'Bien plus que des safaris en voiture',
                'paragraphs' => [
                    'Laikipia invite aux journées actives — marches guidées, équitation, sorties à dos de chameau, suivi des lions avec des chercheurs et rencontres autour de la conservation.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Qu\'est-ce qui rend Laikipia unique ?', 'a' => 'Ses conservancies privées, sa faible densité de visiteurs et son engagement pour la conservation créent un safari plus exclusif, plus flexible et plus actif que les réserves fréquentées.'],
            ['q' => 'Peut-on faire un safari à pied ?', 'a' => 'Oui. Laikipia est l\'un des meilleurs endroits du Kenya pour les safaris à pied et d\'autres expériences actives.'],
            ['q' => 'Verrai-je les Big Five ?', 'a' => 'Laikipia offre d\'excellentes observations de rhinos, éléphants, lions, léopards et buffles, surtout dans les conservancies, mais les observations restent sauvages et jamais garanties.'],
            ['q' => 'Laikipia convient-elle aux familles ?', 'a' => 'Tout à fait. Les expériences de conservation, l\'équitation et les activités pratiques ravissent les enfants.'],
        ],
        'related' => ['destinations/laikipia', 'fr/safari-samburu', 'fr/safaris-de-luxe-kenya', 'destinations/lewa'],
    ],

    'fr/safari-samburu' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'destinations/samburu',
        'eyebrow' => 'Frontière nord',
        'h1' => 'Safari de luxe à Samburu',
        'title' => 'Safari Samburu | Réserve sauvage du nord Kenya',
        'description' => 'Safaris de luxe à Samburu, dans la frontière nord du Kenya : espèces rares, culture riche et camps exclusifs le long de l\'Ewaso Ng\'iro.',
        'subtitle' => 'Samburu, c\'est le Kenya le plus atmosphérique : aride, photogénique et abritant des espèces que l\'on ne trouve nulle part ailleurs dans le pays.',
        'hero_image' => 'images/samburu-elephant.jpg',
        'hero_alt' => 'Éléphant au bord de l\'Ewaso Ng\'iro à Samburu',
        'stats' => [
            ['value' => 'Special 5', 'label' => 'Espèces uniques'],
            ['value' => 'Culture', 'label' => 'Héritage samburu'],
            ['value' => 'Calme', 'label' => 'Moins de visiteurs'],
        ],
        'sections' => [
            [
                'kicker' => 'Aperçu',
                'title' => 'Un Kenya plus sauvage',
                'paragraphs' => [
                    'Le paysage accidenté et semi-aride de Samburu est traversé par la rivière Ewaso Ng\'iro, qui attire la faune sur ses rives. La réserve est célèbre pour le « Special Five » : zèbre de Grévy, girafe réticulée, gérénuk, oryx beïsa et autruche de Somalie.',
                    'Avec moins de visiteurs que les parcs du sud, Samburu semble lointain et exclusif.',
                ],
                'bullets' => [
                    'Les espèces du Special Five',
                    'Paysages arides spectaculaires et faune de rivière',
                    'Peu de visiteurs et camps tranquilles',
                    'Culture samburu et visites communautaires',
                ],
            ],
            [
                'kicker' => 'Saison',
                'title' => 'Quand visiter Samburu',
                'paragraphs' => [
                    'Les saisons sèches sont idéales, car les animaux se rassemblent le long de la rivière. La saison verte métamorphose le paysage et offre une superbe lumière et un excellent rapport qualité-prix.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Qu\'est-ce que le Special Five de Samburu ?', 'a' => 'Le zèbre de Grévy, la girafe réticulée, le gérénuk, l\'oryx beïsa et l\'autruche de Somalie — des espèces adaptées au nord aride du Kenya.'],
            ['q' => 'Samburu vaut-il le détour ?', 'a' => 'Absolument. Il offre un paysage et une faune distincts et une ambiance plus calme et exclusive que les réserves du sud.'],
            ['q' => 'Comment rejoindre Samburu ?', 'a' => 'Vols intérieurs depuis Nairobi (Wilson) en environ une heure, avec transferts de piste jusqu\'au camp.'],
            ['q' => 'Peut-on rencontrer les communautés samburu ?', 'a' => 'Oui, nous pouvons organiser des visites culturelles respectueuses et réellement bénéfiques si vous le souhaitez.'],
        ],
        'related' => ['destinations/samburu', 'fr/safari-laikipia', 'fr/safari-en-avion-kenya', 'fr/safari-masai-mara-luxe'],
    ],

    'fr/safari-en-avion-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'fly-in-safaris-kenya',
        'eyebrow' => 'Plus de temps en brousse',
        'h1' => 'Safari en avion au Kenya',
        'title' => 'Safari en avion Kenya | Vols intérieurs et circuits',
        'description' => 'Safaris en avion au Kenya avec vols intérieurs entre le Masai Mara, Laikipia et Amboseli. Plus de temps dans la nature, moins de route.',
        'subtitle' => 'Les vols intérieurs transforment les longs transferts en partie de l\'aventure et relient les plus belles régions du Kenya par les airs.',
        'hero_image' => 'images/safari-air.jpg',
        'hero_alt' => 'Petit avion sur une piste de brousse au Kenya',
        'stats' => [
            ['value' => 'Par avion', 'label' => 'Entre les régions'],
            ['value' => 'Temps+', 'label' => 'Plus d\'heures en brousse'],
            ['value' => 'Panoramique', 'label' => 'Le Kenya vu du ciel'],
        ],
        'sections' => [
            [
                'kicker' => 'Pourquoi voler',
                'title' => 'Moins de route, plus de safari',
                'paragraphs' => [
                    'Le Kenya est vaste. Un vol intérieur entre le Mara et Laikipia prend moins d\'une heure au lieu d\'une journée de route, et vous dépose à quelques minutes du camp.',
                    'Les circuits en avion sont la façon la plus efficace de combiner plusieurs régions sans sacrifier le confort ni le temps d\'observation.',
                ],
                'bullets' => [
                    'Options de vols réguliers et de vols privés',
                    'Transferts de piste au camp inclus',
                    'Combinez deux à quatre régions',
                    'Vues panoramiques à basse altitude',
                ],
            ],
            [
                'kicker' => 'Logistique',
                'title' => 'Des déplacements fluides, gérés pour vous',
                'paragraphs' => [
                    'Nous coordonnons chaque vol, transfert et franchise de bagages autour de votre itinéraire, avec un représentant qui vous accueille sur place.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Les vols intérieurs sont-ils sûrs ?', 'a' => 'Oui. Nous travaillons avec des opérateurs kenyans reconnus, des appareils bien entretenus et des pilotes expérimentés sur des routes qu\'ils desservent quotidiennement.'],
            ['q' => 'Quelle franchise de bagages ?', 'a' => 'Les petits avions limitent généralement les bagages à environ 15 kg dans un sac souple. Nous vous communiquons les limites exactes et pouvons stocker le surplus.'],
            ['q' => 'Peut-on voler en privé ?', 'a' => 'Oui. Les vols privés offrent une flexibilité totale d\'horaires et d\'itinéraires et sont très appréciés des familles et des groupes.'],
            ['q' => 'Les safaris en avion coûtent-ils plus cher ?', 'a' => 'Il y a un coût de vol, souvent compensé par des régions à plus forte valeur et plus de temps au camp. Nous présentons clairement le compromis.'],
        ],
        'related' => ['fly-in-safaris-kenya', 'fr/safaris-de-luxe-kenya', 'fr/safari-prive-kenya', 'fr/circuit-safari-kenya'],
    ],

    'fr/voyage-de-noces-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'luxury-honeymoon-safaris-kenya',
        'eyebrow' => 'Romance en pleine nature',
        'h1' => 'Voyage de noces au Kenya',
        'title' => 'Voyage de noces Kenya | Safari romantique de luxe',
        'description' => 'Voyages de noces romantiques au Kenya : guides privés, camps intimes, sundowners en brousse et extensions balnéaires sur l\'océan Indien.',
        'subtitle' => 'Un safari de noces conçu pour deux : safaris privés, camps intimes, dîners aux chandelles sous les étoiles et fin balnéaire en option.',
        'hero_image' => 'images/mara-sunset.jpg',
        'hero_alt' => 'Sundowner romantique de voyage de noces au Kenya',
        'stats' => [
            ['value' => 'Pour deux', 'label' => 'Entièrement privé'],
            ['value' => 'Romantique', 'label' => 'Camps intimes'],
            ['value' => 'Brousse + plage', 'label' => 'Fin océan en option'],
        ],
        'sections' => [
            [
                'kicker' => 'Pensé pour deux',
                'title' => 'Intimité, romance et jours sans horaire',
                'paragraphs' => [
                    'Votre voyage de noces est privé de bout en bout, avec des camps intimes, des attentions délicates et la liberté de voyager à votre rythme.',
                    'D\'un sundowner privé dans la savane à un dîner aux chandelles en brousse, nous créons les moments qui rendent ce voyage unique.',
                ],
                'bullets' => [
                    'Véhicule et guide privés',
                    'Camps romantiques et intimes',
                    'Sundowners et dîners privés',
                    'Suites avec piscine et soins en couple en option',
                ],
            ],
            [
                'kicker' => 'L\'itinéraire idéal',
                'title' => 'Safari d\'abord, océan ensuite',
                'paragraphs' => [
                    'La plupart des couples passent quatre à six nuits en safari et quatre à six nuits sur la côte, pour rentrer détendus et bronzés.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Le Kenya est-il une bonne destination pour un voyage de noces ?', 'a' => 'Oui. Il combine une faune exceptionnelle, des camps de luxe intimes et l\'océan Indien, ce qui en fait l\'un des voyages de noces safari les plus romantiques au monde.'],
            ['q' => 'Peut-on réserver une villa privée en bord de mer ?', 'a' => 'Oui, d\'un hôtel de charme à une villa entièrement privée, nous adaptons le séjour balnéaire à votre style.'],
            ['q' => 'Quelle est la meilleure période ?', 'a' => 'Les saisons sèches offrent une faune et une météo fiables ; la saison verte apporte des tarifs plus doux et des ciels spectaculaires.'],
            ['q' => 'Quel budget prévoir ?', 'a' => 'Un voyage de noces safari de luxe avec plage démarre généralement autour de 9 000 € par personne, selon la saison, la durée et le niveau des camps.'],
        ],
        'related' => ['luxury-honeymoon-safaris-kenya', 'fr/safari-kenya-plage', 'fr/safaris-de-luxe-kenya', 'fr/safari-prive-kenya'],
    ],

    'fr/safari-famille-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'luxury-family-safaris-kenya',
        'eyebrow' => 'L\'aventure pour tous les âges',
        'h1' => 'Safari en famille au Kenya',
        'title' => 'Safari famille Kenya | Safaris de luxe pour enfants',
        'description' => 'Safaris familiaux de luxe au Kenya : guides privés, camps adaptés aux enfants, rythme flexible et extensions balnéaires. Organisé depuis la France.',
        'subtitle' => 'Un safari privé conçu autour de l\'âge et de l\'énergie de vos enfants — guides experts, camps adaptés et flexibilité totale.',
        'hero_image' => 'images/safari-elephant.jpg',
        'hero_alt' => 'Safari en famille au Kenya devant des éléphants',
        'stats' => [
            ['value' => 'Tous âges', 'label' => 'Adapté à votre famille'],
            ['value' => 'Flexible', 'label' => 'Rythme des enfants'],
            ['value' => 'Éducatif', 'label' => 'Guides passionnants'],
        ],
        'sections' => [
            [
                'kicker' => 'Pensé pour la famille',
                'title' => 'Un safari qui convient à chaque âge',
                'paragraphs' => [
                    'Les enfants vivent la brousse différemment, et un bon safari familial le respecte. Nous choisissons des camps avec suites familiales, piscines et horaires de repas souples, et des guides formidables avec les jeunes voyageurs.',
                    'Votre véhicule étant privé, vous pouvez raccourcir les safaris, rentrer pour la sieste et trouver un rythme qui plaît à tous.',
                ],
                'bullets' => [
                    'Camps de luxe adaptés aux enfants et suites familiales',
                    'Guides privés patients et captivants',
                    'Safaris plus courts et temps libre intégré',
                    'Chambres communicantes et repas privés',
                ],
            ],
            [
                'kicker' => 'Où aller',
                'title' => 'Les meilleures régions en famille',
                'paragraphs' => [
                    'Le Masai Mara offre une faune abondante et une logistique simple ; Laikipia ajoute la conservation sur le terrain ; la côte est une fin océanique parfaite.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'À partir de quel âge un safari en famille ?', 'a' => 'La plupart des camps accueillent les enfants à partir de six ans environ, et certains proposent des programmes familiaux dédiés. Nous adaptons les camps à l\'âge de vos enfants.'],
            ['q' => 'Un safari est-il sûr pour les enfants ?', 'a' => 'Oui, avec des consignes sensées. Nous choisissons des camps sécurisés, sensibilisons les enfants à la sécurité en brousse et adaptons les activités à leur âge.'],
            ['q' => 'Peut-on combiner safari et plage ?', 'a' => 'Oui — un séjour safari et plage est l\'une des combinaisons familiales les plus simples, avec une fin paisible sur l\'océan Indien.'],
            ['q' => 'Les enfants paient-ils moins cher ?', 'a' => 'De nombreux camps proposent des tarifs enfants réduits, et partager une chambre familiale diminue les coûts. Nous affichons clairement les tarifs famille.'],
        ],
        'related' => ['luxury-family-safaris-kenya', 'fr/safari-kenya-plage', 'fr/safaris-de-luxe-kenya', 'fr/safari-prive-kenya'],
    ],

    'fr/safari-kenya-plage' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'luxury-safari-and-beach-kenya',
        'eyebrow' => 'La brousse, puis l\'océan',
        'h1' => 'Safari et plage au Kenya',
        'title' => 'Safari et plage Kenya | Séjour brousse et océan Indien',
        'description' => 'Séjours safari et plage au Kenya : safari privé puis farniente à Diani, Watamu ou Zanzibar. Liaisons fluides pour les voyageurs français.',
        'subtitle' => 'Associez l\'intensité d\'un safari privé au Kenya au calme de l\'océan Indien — un séjour fluide, du lever de soleil dans la savane à la plage pieds nus.',
        'hero_image' => 'images/tsavo-giraffes.jpg',
        'hero_alt' => 'Séjour safari et plage au Kenya',
        'stats' => [
            ['value' => 'Brousse', 'label' => 'Safari privé d\'abord'],
            ['value' => 'Plage', 'label' => 'Fin océan Indien'],
            ['value' => 'Fluide', 'label' => 'Vols et transferts gérés'],
        ],
        'sections' => [
            [
                'kicker' => 'Le rythme',
                'title' => 'Pourquoi safari et plage se marient si bien',
                'paragraphs' => [
                    'Après des journées de safaris matinaux et de faune majestueuse, la côte offre un contrepoint délicat : eau chaude, sable blanc et journées sans horaire.',
                    'Nous ordonnons le séjour pour que le safari vienne en premier et que la plage vous ressource avant le retour.',
                ],
                'bullets' => [
                    'Safari d\'abord, détente océanique ensuite',
                    'Vols intérieurs reliant les pistes à la côte',
                    'Hôtels de plage adaptés à votre style',
                    'Idéal pour les voyages de noces et les familles',
                ],
            ],
            [
                'kicker' => 'La côte',
                'title' => 'Diani, Watamu et Zanzibar',
                'paragraphs' => [
                    'Diani offre de longues plages de sable blanc et un accès facile, Watamu séduit par son récif et sa vie marine, et Zanzibar ajoute une culture différente et une atmosphère d\'île aux épices.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Combien de nuits prévoir sur la côte ?', 'a' => 'La plupart des voyageurs combinent 4 à 6 nuits de safari et 4 à 7 nuits de plage, selon vos vols et votre rythme.'],
            ['q' => 'Zanzibar est-il inclus ?', 'a' => 'Oui. Un safari au Kenya avec extension à Zanzibar est une option populaire et facile à organiser.'],
            ['q' => 'Quelle est la meilleure période ?', 'a' => 'La côte est chaude toute l\'année. De janvier à mars et de juillet à octobre offrent le meilleur des deux.'],
            ['q' => 'La côte convient-elle aux familles ?', 'a' => 'Oui, l\'océan Indien calme et peu profond est idéal pour les enfants, et nous choisissons des hôtels familiaux.'],
        ],
        'related' => ['luxury-safari-and-beach-kenya', 'fr/voyage-de-noces-kenya', 'fr/safari-kenya-zanzibar', 'fr/safaris-de-luxe-kenya'],
    ],

    'fr/safari-kenya-zanzibar' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'safaris/kenya-zanzibar-luxury-safari',
        'eyebrow' => 'Deux pays, un voyage',
        'h1' => 'Safari au Kenya et Zanzibar',
        'title' => 'Safari Kenya et Zanzibar | Voyage luxe brousse et plage',
        'description' => 'Un voyage de luxe combinant safari au Kenya et plage à Zanzibar : le Masai Mara, puis les eaux turquoise et la culture swahilie de l\'océan Indien.',
        'subtitle' => 'La combinaison ultime brousse et plage — la faune du Masai Mara, puis l\'eau turquoise et la culture swahilie de Zanzibar.',
        'hero_image' => 'images/safari-lion-drive.jpg',
        'hero_alt' => 'Safari au Kenya et séjour de luxe à Zanzibar',
        'stats' => [
            ['value' => '10 jours', 'label' => 'Brousse et île'],
            ['value' => 'Culture', 'label' => 'Stone Town et épices'],
            ['value' => 'Romantique', 'label' => 'Fin deux pays'],
        ],
        'sections' => [
            [
                'kicker' => 'Pourquoi ce voyage',
                'title' => 'La faune du Kenya, les rivages de Zanzibar',
                'paragraphs' => [
                    'Zanzibar ajoute une culture différente et une fin résolument romantique à un safari kenyan, avec des visites d\'épices, la ville historique de Stone Town et des plages idylliques.',
                    'Nous coordonnons la liaison transfrontalière pour que le voyage se déroule comme un seul séjour fluide.',
                ],
                'bullets' => [
                    'Safari grands félins dans le Masai Mara',
                    'Plages et culture swahilie de Zanzibar',
                    'Stone Town et fermes d\'épices',
                    'Une fin romantique dans deux pays',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Faut-il un visa pour Zanzibar ?', 'a' => 'Oui, la Tanzanie a ses propres conditions d\'entrée. Nous vous orientons vers les informations officielles avant le départ.'],
            ['q' => 'Comment rejoindre Zanzibar depuis le Kenya ?', 'a' => 'Généralement un court vol via Nairobi ou une liaison directe, organisée dans le cadre de votre itinéraire.'],
            ['q' => 'Zanzibar convient-il aux voyages de noces ?', 'a' => 'C\'est l\'une des destinations balnéaires les plus romantiques de l\'océan Indien, parfaite après un safari.'],
            ['q' => 'Quelle est la meilleure période ?', 'a' => 'Les saisons sèches, de janvier à mars et de juin à octobre, conviennent au safari comme à l\'île.'],
        ],
        'related' => ['safaris/kenya-zanzibar-luxury-safari', 'fr/safari-kenya-plage', 'fr/voyage-de-noces-kenya', 'fr/safaris-de-luxe-kenya'],
    ],

    'fr/prix-safari-luxe-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'us/kenya-safari-cost',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'Préparer son budget',
        'h1' => 'Prix d\'un safari de luxe au Kenya',
        'title' => 'Prix safari de luxe Kenya | Guide des tarifs 2026',
        'description' => 'Combien coûte un safari de luxe au Kenya en 2026 : budgets par personne, facteurs de prix, ce qui est inclus et comment bien investir.',
        'subtitle' => 'Un guide clair et honnête des prix d\'un safari au Kenya pour les voyageurs français — budgets typiques, facteurs de coût et comment en tirer le meilleur.',
        'hero_image' => 'images/safari-lion-drive.jpg',
        'hero_alt' => 'Guide des prix d\'un safari de luxe au Kenya',
        'stats' => [
            ['value' => 'Dès 7 500 €', 'label' => 'Par personne, privé et luxe'],
            ['value' => 'Euros', 'label' => 'Devis en euros'],
            ['value' => 'Détaillé', 'label' => 'Chaque poste expliqué'],
        ],
        'sections' => [
            [
                'kicker' => 'En résumé',
                'title' => 'Combien coûte un safari de luxe',
                'paragraphs' => [
                    'À titre indicatif, un safari privé de luxe au Kenya démarre autour de 7 500 € par personne pour 7 jours, se situe entre 9 000 € et 17 000 € par personne pour 10 jours, et atteint 14 000 € à 26 000 € par personne pour 14 jours avec extension balnéaire.',
                    'Ces montants reflètent un guide privé, des camps de luxe et les vols intérieurs. Les safaris partagés ou plus courts coûtent moins ; l\'ultra-luxe et les dates de pointe de la Migration coûtent nettement plus.',
                ],
                'bullets' => [
                    '7 jours : à partir d\'environ 7 500 € par personne',
                    '10 jours : environ 9 000 € à 17 000 € par personne',
                    '14 jours avec plage : environ 14 000 € à 26 000 € par personne',
                ],
            ],
            [
                'kicker' => 'Les facteurs',
                'title' => 'Les cinq éléments qui pèsent le plus',
                'paragraphs' => [
                    'Comprendre ces leviers permet de diriger votre budget là où cela compte vraiment.',
                ],
                'bullets' => [
                    'La saison — les dates de pointe de la Migration sont les plus chères',
                    'Le niveau des camps — du camp de charme au lodge ultra-luxe',
                    'La durée et les régions — plus de nuits et de vols augmentent le coût',
                    'Le guide privé — votre propre véhicule et guide',
                    'Les vols privés — un avion privé pour une flexibilité maximale',
                ],
            ],
            [
                'kicker' => 'Inclus',
                'title' => 'Ce qui est inclus et ce qui ne l\'est pas',
                'paragraphs' => [
                    'L\'hébergement de luxe, le guide privé, les vols intérieurs, les frais de parcs et la pension complète sont inclus. Les vols internationaux, les visas, l\'assurance, les boissons premium et les pourboires sont généralement exclus.',
                ],
            ],
            [
                'kicker' => 'Bon rapport',
                'title' => 'Comment optimiser son budget',
                'paragraphs' => [
                    'La saison verte et les mois intermédiaires offrent des tarifs plus doux avec une faune excellente. Combiner les régions efficacement avec les vols intérieurs et choisir des conservancies incluant les activités optimise aussi votre budget.',
                    'Nous fournissons un devis détaillé en euros pour que vous voyiez exactement où va l\'argent et puissiez ajuster en toute clarté.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Pourquoi un safari au Kenya coûte-t-il si cher ?', 'a' => 'Les camps de luxe ont une capacité réduite, les frais de conservation financent des terres protégées, et le guide privé et les vols intérieurs ajoutent de la valeur. Vous payez l\'exclusivité, l\'expertise et l\'accès.'],
            ['q' => 'Quelle est la période la moins chère ?', 'a' => 'La saison verte (avril–mai et novembre) et les mois intermédiaires offrent les tarifs les plus bas, avec des paysages luxuriants et une excellente avifaune.'],
            ['q' => 'Peut-on réduire le coût sans perdre en qualité ?', 'a' => 'Oui — voyager hors pointe, choisir des camps intimes de gamme intermédiaire et retirer une région peuvent baisser le coût tout en gardant un voyage de luxe.'],
            ['q' => 'L\'organisation est-elle payante ?', 'a' => 'Non. La consultation et les propositions sont gratuites, et sans engagement jusqu\'à confirmation.'],
        ],
        'related' => ['us/kenya-safari-cost', 'fr/safaris-de-luxe-kenya', 'fr/circuit-safari-kenya', 'us/kenya-safari-packages'],
    ],

    'fr/meilleure-periode-safari-kenya' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'fr/meilleure-periode-safari-kenya',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'Choisir sa saison',
        'h1' => 'Meilleure période pour un safari au Kenya',
        'title' => 'Meilleure période safari Kenya | Saisons et conseils',
        'description' => 'Quand partir au Kenya pour un safari : saisons sèches et vertes, Grande Migration, affluence, météo et meilleur rapport qualité-prix, mois par mois.',
        'subtitle' => 'Le Kenya se visite toute l\'année. Voici comment choisir votre période selon la faune, la météo, l\'affluence et le budget.',
        'hero_image' => 'images/giraffe-herd.jpg',
        'hero_alt' => 'Troupeau de girafes au Kenya selon la saison',
        'stats' => [
            ['value' => 'Juillet–oct.', 'label' => 'Migration et saison sèche'],
            ['value' => 'Janv.–mars', 'label' => 'Chaud et félins'],
            ['value' => 'Saison verte', 'label' => 'Meilleur rapport qualité-prix'],
        ],
        'sections' => [
            [
                'kicker' => 'Le calendrier',
                'title' => 'Saisons et temps fort',
                'paragraphs' => [
                    'De juillet à octobre, la saison sèche accueille la Grande Migration dans le Masai Mara et offre d\'excellentes observations. De janvier à mars, le temps est chaud et les félins faciles à observer.',
                    'La saison verte (avril–mai et novembre) apporte des paysages luxuriants, une superbe avifaune, des tarifs plus doux et des ciels spectaculaires.',
                ],
                'bullets' => [
                    'Janvier–mars : chaud, sec, idéal pour les grands félins',
                    'Juin–octobre : longue saison sèche, Migration au Mara',
                    'Novembre : saison verte, tarifs plus doux',
                    'Avril–mai : longues pluies, nature luxuriante',
                ],
            ],
            [
                'kicker' => 'Affluence et budget',
                'title' => 'Choisir selon vos priorités',
                'paragraphs' => [
                    'Si la Migration est votre priorité, visez juillet à octobre et réservez tôt. Pour un meilleur rapport qualité-prix, la saison verte et les mois intermédiaires sont imbattables.',
                    'Nous vous conseillons honnêtement selon vos dates, vos envies de faune et votre budget.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Quand voir la Grande Migration ?', 'a' => 'Les troupeaux sont généralement dans le Masai Mara de juillet à octobre, avec des traversées de rivière plus probables en saison sèche.'],
            ['q' => 'Quand partir pour éviter la foule ?', 'a' => 'De janvier à mars et pendant la saison verte, avec moins de visiteurs tout en profitant d\'une faune remarquable.'],
            ['q' => 'Quand faire un safari moins cher ?', 'a' => 'Avril–mai et novembre offrent les tarifs les plus bas, avec des paysages verdoyants et une avifaune exceptionnelle.'],
            ['q' => 'Fait-il trop chaud en janvier ?', 'a' => 'Non. Le temps est chaud et sec, idéal pour les safaris matinaux et les observations de félins.'],
        ],
        'related' => ['fr/preparer-safari-kenya-depuis-france', 'fr/safaris-de-luxe-kenya', 'kenya-safari-faq', 'fr/prix-safari-luxe-kenya'],
    ],

    'fr/preparer-safari-kenya-depuis-france' => [
        'locale' => 'fr',
        'hreflang' => 'fr-fr',
        'group' => 'us/kenya-safari-planning-guide',
        'schema_type' => 'Article',
        'published' => '2026-01-15',
        'eyebrow' => 'Commencer ici',
        'h1' => 'Préparer un safari au Kenya depuis la France',
        'title' => 'Préparer safari Kenya depuis la France | Guide étape par étape',
        'description' => 'Guide étape par étape pour préparer un safari au Kenya depuis la France : période, vols, visas, santé, bagages, budget et choix du bon organisateur.',
        'subtitle' => 'Tout ce qu\'il faut savoir pour préparer un safari au Kenya en toute sérénité — période, vols, formalités et choix du partenaire.',
        'hero_image' => 'images/safari-air.jpg',
        'hero_alt' => 'Guide de préparation d\'un safari au Kenya depuis la France',
        'stats' => [
            ['value' => '6 étapes', 'label' => 'Vers un safari confirmé'],
            ['value' => 'Pratique', 'label' => 'Visas, santé, bagages'],
            ['value' => 'Sincère', 'label' => 'Sans pression'],
        ],
        'sections' => [
            [
                'kicker' => 'Étape par étape',
                'title' => 'Comment préparer votre safari',
                'paragraphs' => [
                    'Un beau safari se prépare dans un ordre clair : choisir les dates, définir les régions, fixer un budget réaliste, sélectionner les camps, réserver les vols, puis préparer le voyage.',
                    'Nous vous accompagnons à chaque étape et gérons la logistique sur place.',
                ],
                'bullets' => [
                    '1. Choisir la période et la saison',
                    '2. Définir les régions et expériences prioritaires',
                    '3. Fixer un budget par personne',
                    '4. Sélectionner camps et guides selon votre style',
                    '5. Réserver les vols internationaux et intérieurs',
                    '6. Préparer visas, santé et bagages',
                ],
            ],
            [
                'kicker' => 'Formalités',
                'title' => 'Vols, visas et santé',
                'paragraphs' => [
                    'Depuis la France, on rejoint Nairobi avec une escale ou un vol direct selon la saison. Les voyageurs français ont besoin d\'une autorisation d\'entrée, et nous recommandons de consulter un centre de vaccinations internationales pour le paludisme et les vaccins.',
                ],
                'bullets' => [
                    'Obtenir l\'autorisation d\'entrée assez tôt',
                    'Vérifier la validité du passeport (6 mois et plus)',
                    'Consulter un centre de vaccinations internationales',
                    'Souscrire une assurance voyage complète',
                ],
            ],
            [
                'kicker' => 'Choisir le partenaire',
                'title' => 'Comment choisir son organisateur',
                'paragraphs' => [
                    'Recherchez une véritable expertise régionale, une tarification transparente, le guide privé en standard et des réponses claires à vos questions. Un spécialiste basé au Kenya concevra toujours un meilleur itinéraire qu\'un revendeur global.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => 'Combien de temps à l\'avance faut-il préparer son safari ?', 'a' => 'Pour la haute saison, 6 à 12 mois à l\'avance. Hors pic, 3 à 6 mois suffisent souvent, même si nous pouvons parfois organiser plus vite.'],
            ['q' => 'Faut-il un visa ?', 'a' => 'Les voyageurs français ont besoin d\'une autorisation d\'entrée pour le Kenya. Les règles pouvant évoluer, vérifiez les informations officielles avant le départ.'],
            ['q' => 'Quels vaccins prévoir ?', 'a' => 'Cela dépend de votre santé et de votre itinéraire. Nous recommandons de consulter un professionnel de santé pour un avis personnalisé.'],
            ['q' => 'Que mettre dans sa valise ?', 'a' => 'Des couches neutres et confortables, un chapeau, une protection solaire, des jumelles et un appareil photo. Les safaris en avion limitent souvent les bagages à environ 15 kg en sac souple ; nous fournissons une liste complète.'],
        ],
        'related' => ['us/kenya-safari-planning-guide', 'fr/meilleure-periode-safari-kenya', 'fr/prix-safari-luxe-kenya', 'fr/safaris-de-luxe-kenya'],
    ],

];
