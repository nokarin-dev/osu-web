<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'admin' => [
        '_' => 'administración',
    ],
    'error' => [
        'error' => [
            '400' => 'solicitud no válida',
            '404' => 'no encontrado',
            '403' => 'prohibido',
            '401' => 'no autorizado',
            '401-verification' => 'verificación de la cuenta',
            '405' => 'no encontrado',
            '422' => 'solicitud no válida',
            '429' => 'demasiadas solicitudes',
            '500' => 'algo se rompió',
            '503' => 'mantenimiento',
        ],
    ],
    'forum' => [
        '_' => 'foro',
        'topic_logs_controller' => [
            'index' => 'registros de temas',
        ],
    ],
    'main' => [
        'account_controller' => [
            'verify_link' => 'verificación de la cuenta',
        ],
        'artists_controller' => [
            '_' => 'artistas destacados',
        ],
        'beatmap_discussion_posts_controller' => [
            '_' => 'publicaciones de discusión del mapa',
        ],
        'beatmap_discussions_controller' => [
            '_' => 'discusiones del mapa',
        ],
        'beatmap_packs_controller' => [
            '_' => 'paquetes de mapas',
        ],
        'beatmapset_discussion_votes_controller' => [
            '_' => 'votos de discusión del mapa',
        ],
        'beatmapset_events_controller' => [
            '_' => 'historial de mapas',
        ],
        'beatmapsets_controller' => [
            'discussion' => 'discusión del mapa',
            'index' => 'lista de mapas',
            'show' => 'información del mapa',
        ],
        'changelog_controller' => [
            '_' => 'registro de cambios',
        ],
        'chat_controller' => [
            '_' => 'chat',
        ],
        'comments_controller' => [
            '_' => 'comentarios',
        ],
        'contest_entries_controller' => [
            'judge_results' => 'resultados de la evaluación del concurso',
        ],
        'contests_controller' => [
            '_' => 'concursos',
            'judge' => 'evaluación del concurso',
        ],
        'groups_controller' => [
            'show' => 'grupos',
        ],
        'home_controller' => [
            'get_download' => 'descarga',
            'index' => 'panel',
            'search' => 'búsqueda',
            'support_the_game' => 'apoya el juego',
            'testflight' => 'testflight',
        ],
        'legacy_matches_controller' => [
            '_' => 'partidos',
        ],
        'legal_controller' => [
            '_' => 'información',
        ],
        'livestreams_controller' => [
            '_' => 'transmisiones en vivo',
        ],
        'news_controller' => [
            '_' => 'novedades',
        ],
        'notifications_controller' => [
            '_' => 'historial de notificaciones',
        ],
        'password_reset_controller' => [
            '_' => 'restablecimiento de contraseña',
        ],
        'ranking_controller' => [
            '_' => 'clasificaciones',
        ],
        'scores_controller' => [
            '_' => 'rendimiento',
        ],
        'seasons_controller' => [
            '_' => 'clasificaciones',
        ],
        'teams_controller' => [
            '_' => 'equipos',
            'create' => 'crear equipo',
            'edit' => 'configuración del equipo',
            'leaderboard' => 'tabla de clasificación del equipo',
            'show' => 'información del equipo',
        ],
        'tournaments_controller' => [
            '_' => 'torneos',
        ],
        'user_cover_presets_controller' => [
            '_' => 'portadas preestablecidas',
        ],
        'users_controller' => [
            '_' => 'información del jugador',
            'create' => 'crear una cuenta',
            'disabled' => 'aviso',
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
            '_' => 'autorizar aplicación',
        ],
    ],
    'store' => [
        '_' => 'tienda',
    ],
    'teams' => [
        'members_controller' => [
            'index' => 'miembros del equipo',
        ],
    ],
    'users' => [
        'modding_history_controller' => [
            '_' => 'información del modder',
        ],
        'multiplayer_controller' => [
            '_' => 'historial de multijugador',
        ],
    ],
];
