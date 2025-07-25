<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'admin' => [
        '_' => 'admin',
    ],
    'error' => [
        'error' => [
            '400' => 'ogiltig begäran',
            '404' => 'saknas',
            '403' => 'förbjuden',
            '401' => 'obehörig',
            '401-verification' => 'kontobekräftelse',
            '405' => 'saknas',
            '422' => 'ogiltig begäran',
            '429' => 'för många förfrågningar',
            '500' => 'någonting gick fel',
            '503' => 'underhåll',
        ],
    ],
    'forum' => [
        '_' => 'forum',
        'topic_logs_controller' => [
            'index' => 'ämneslogg',
        ],
    ],
    'main' => [
        'account_controller' => [
            'verify_link' => 'kontobekräftelse',
        ],
        'artists_controller' => [
            '_' => 'utvalda artister',
        ],
        'beatmap_discussion_posts_controller' => [
            '_' => 'beatmapdiskussionsinlägg',
        ],
        'beatmap_discussions_controller' => [
            '_' => 'beatmapdiskussioner',
        ],
        'beatmap_packs_controller' => [
            '_' => 'beatmapsamlingar',
        ],
        'beatmapset_discussion_votes_controller' => [
            '_' => 'beatmapdiskussionsröster',
        ],
        'beatmapset_events_controller' => [
            '_' => 'beatmaphistorik',
        ],
        'beatmapsets_controller' => [
            'discussion' => 'beatmapdiskussioner',
            'index' => 'beatmaplistning',
            'show' => 'beatmapinfo',
        ],
        'changelog_controller' => [
            '_' => 'ändringslogg',
        ],
        'chat_controller' => [
            '_' => 'chatt',
        ],
        'comments_controller' => [
            '_' => 'kommentarer',
        ],
        'contest_entries_controller' => [
            'judge_results' => 'tävlingsbedömnings resultat',
        ],
        'contests_controller' => [
            '_' => 'tävlingar',
            'judge' => 'tävlingsbedömning',
        ],
        'groups_controller' => [
            'show' => 'grupper',
        ],
        'home_controller' => [
            'get_download' => 'ladda ner',
            'index' => 'kontrollpanel',
            'search' => 'sök',
            'support_the_game' => 'stötta spelet',
            'testflight' => 'testflight',
        ],
        'legacy_matches_controller' => [
            '_' => '',
        ],
        'legal_controller' => [
            '_' => 'information',
        ],
        'livestreams_controller' => [
            '_' => 'direktsändningar',
        ],
        'news_controller' => [
            '_' => 'nyheter',
        ],
        'notifications_controller' => [
            '_' => 'aviseringshistorik',
        ],
        'password_reset_controller' => [
            '_' => 'lösenordsåterställning',
        ],
        'ranking_controller' => [
            '_' => 'rankning',
        ],
        'scores_controller' => [
            '_' => 'prestation',
        ],
        'seasons_controller' => [
            '_' => 'rankningar',
        ],
        'teams_controller' => [
            '_' => 'lag',
            'create' => 'skapa lag',
            'edit' => 'lag inställningar ',
            'leaderboard' => 'lag topplista',
            'show' => 'lag info',
        ],
        'tournaments_controller' => [
            '_' => 'turneringar',
        ],
        'user_cover_presets_controller' => [
            '_' => 'användarens omslagsförinställningar',
        ],
        'users_controller' => [
            '_' => 'spelarinformation',
            'create' => 'skapa konto',
            'disabled' => 'notera',
        ],
        'wiki_controller' => [
            '_' => 'wiki',
        ],
    ],
    'multiplayer' => [
        'rooms_controller' => [
            'events' => '',
        ],
    ],
    'passport' => [
        'authorization_controller' => [
            '_' => 'auktorisera app',
        ],
    ],
    'store' => [
        '_' => 'butik',
    ],
    'teams' => [
        'members_controller' => [
            'index' => 'lag medlemmar ',
        ],
    ],
    'users' => [
        'modding_history_controller' => [
            '_' => 'modder info',
        ],
        'multiplayer_controller' => [
            '_' => 'flerspelarhistorik',
        ],
    ],
];
