<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'audio' => [
        'autoplay' => 'Speel het volgende lied automatisch',
    ],

    'defaults' => [
        'page_description' => 'osu! - Ritme is slechts een *klik* verwijderd!  Met Ouendan/EBA, Taiko en originele spelmodi, en zelfs een volledig functionele level editor.',
    ],

    'header' => [
        'admin' => [
            'beatmapset' => 'beatmapset',
            'beatmapset_covers' => 'beatmapset covers',
            'contest' => 'competitie',
            'contests' => 'competities',
            'root' => 'console',
        ],

        'artists' => [
            'index' => 'lijst',
        ],

        'beatmapsets' => [
            'show' => 'info',
            'discussions' => 'discussie',
        ],

        'changelog' => [
            'index' => 'lijst',
        ],

        'help' => [
            'index' => 'index',
            'sitemap' => 'Sitemap',
        ],

        'store' => [
            'cart' => 'winkelwagen',
            'orders' => 'bestelgeschiedenis',
            'products' => 'producten',
        ],

        'tournaments' => [
            'index' => 'lijst',
        ],

        'users' => [
            'modding' => 'modding',
            'playlists' => 'afspeellijsten',
            'realtime' => 'multiplayer',
            'show' => 'info',
        ],
    ],

    'gallery' => [
        'close' => 'Sluiten (esc)',
        'fullscreen' => 'Schakelen naar volledig scherm',
        'zoom' => 'Zoom in/uit',
        'previous' => 'Vorige (pijl links)',
        'next' => 'Volgende (pijl rechts)',
    ],

    'menu' => [
        'beatmaps' => [
            '_' => 'beatmaps',
        ],
        'community' => [
            '_' => 'community',
            'dev' => 'ontwikkeling',
        ],
        'help' => [
            '_' => 'hulp',
            'getAbuse' => 'rapporteer misbruik',
            'getFaq' => 'faq',
            'getRules' => 'regels',
            'getSupport' => 'ondersteuning',
        ],
        'home' => [
            '_' => 'start',
            'team' => 'team',
        ],
        'rankings' => [
            '_' => 'rankings',
        ],
        'store' => [
            '_' => 'winkel',
        ],
    ],

    'footer' => [
        'general' => [
            '_' => 'Algemeen',
            'home' => 'Startpagina',
            'changelog-index' => 'Changelog',
            'beatmaps' => 'Beatmap Lijst',
            'download' => 'Download osu!',
        ],
        'help' => [
            '_' => 'Help & Community',
            'faq' => 'Veelgestelde Vragen',
            'forum' => 'Community Forums',
            'livestreams' => 'Livestreams',
            'report' => 'Een Probleem Melden',
            'wiki' => 'Wiki',
        ],
        'legal' => [
            '_' => 'Juridisch & Status',
            'copyright' => 'Copyright (DMCA)',
            'jp_sctl' => '',
            'privacy' => 'Privacy',
            'rules' => '',
            'server_status' => 'Server Status',
            'source_code' => 'Broncode',
            'terms' => 'Gebruikersvoorwaarden',
        ],
    ],

    'errors' => [
        '400' => [
            'error' => 'Ongeldige aanvraag invoer',
            'description' => '',
        ],
        '404' => [
            'error' => 'Pagina Mist',
            'description' => "Sorry, de pagina die je hebt opgevraagd is er niet!",
        ],
        '403' => [
            'error' => "Jij hoort hier niet te zijn.",
            'description' => 'Je zou kunnen proberen terug te gaan.',
        ],
        '401' => [
            'error' => "Jij hoort hier niet.",
            'description' => 'Je zou kunnen proberen terug te gaan. Of misschien zou je kunnen inloggen.',
        ],
        '405' => [
            'error' => 'Pagina Mist',
            'description' => "Sorry, de pagina die je hebt opgevraagd is er niet!",
        ],
        '422' => [
            'error' => 'Ongeldige aanvraagparameter',
            'description' => '',
        ],
        '429' => [
            'error' => 'Snelheids limiet overschreden',
            'description' => '',
        ],
        '500' => [
            'error' => 'Oh nee! Iets brak! ;_;',
            'description' => "We worden automatisch op de hoogte gesteld van alle fouten.",
        ],
        'fatal' => [
            'error' => 'Oh nee! Iets brak (heel erg)! ;_;',
            'description' => "We worden automatisch op de hoogte gesteld van alle fouten.",
        ],
        '503' => [
            'error' => 'Offline voor onderhoud!',
            'description' => "Onderhoud duurt meestal ongeveer 5 seconden tot 10 minuten. Als we langer offline zijn, check :link voor meer informatie.",
            'link' => [
                'text' => '',
                'href' => '',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => "Voor de zekerheid is hier een code die je aan het ondersteuningsteam kan geven!",
    ],

    'popup_login' => [
        'button' => 'inloggen / registreren',

        'login' => [
            'forgot' => "Ik ben mijn inloggegevens vergeten",
            'password' => 'wachtwoord',
            'title' => 'Log In Om Verder Te Gaan',
            'username' => 'gebruikersnaam',

            'error' => [
                'email' => "Gebruikersnaam of emailadres bestaat niet",
                'password' => 'Incorrect wachtwoord',
            ],
        ],

        'register' => [
            'download' => 'Download',
            'info' => 'Download osu! om een account aan te maken!',
            'title' => "Heb je geen account?",
        ],
    ],

    'popup_user' => [
        'links' => [
            'account-edit' => 'Instellingen',
            'follows' => 'Volglijsten',
            'friends' => 'Vrienden',
            'legacy_score_only_toggle' => 'Lazermodus',
            'legacy_score_only_toggle_tooltip' => 'Lazermodus toont scores gezet op lazer met een nieuw scoringsalgoritme',
            'logout' => 'Log Uit',
            'profile' => 'Mijn Profiel',
            'scoring_mode_toggle' => '',
            'scoring_mode_toggle_tooltip' => '',
            'team' => '',
        ],
    ],

    'popup_search' => [
        'initial' => 'Type om te zoeken!',
        'retry' => 'Zoekopdracht mislukt. Klik om opnieuw te proberen.',
    ],
];
