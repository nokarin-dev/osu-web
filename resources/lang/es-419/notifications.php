<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => '¡Todas las notificaciones leídas!',
    'delete' => 'Eliminar :type',
    'loading' => 'Cargando notificaciones no leídas...',
    'mark_read' => 'Borrar :type',
    'none' => 'No hay notificaciones',
    'see_all' => 'ver todas las notificaciones',
    'see_channel' => 'ir al chat',
    'verifying' => 'Verifica la sesión para ver las notificaciones',

    'action_type' => [
        '_' => 'todas',
        'beatmapset' => 'mapas',
        'build' => 'versiones',
        'channel' => 'chat',
        'forum_topic' => 'foro',
        'news_post' => 'noticias',
        'team' => 'equipo',
        'user' => 'perfil',
    ],

    'filters' => [
        '_' => 'todas',
        'beatmapset' => 'mapas',
        'build' => 'versiones',
        'channel' => 'chat',
        'forum_topic' => 'foro',
        'news_post' => 'noticias',
        'team' => 'equipo',
        'user' => 'perfil',
    ],

    'item' => [
        'beatmapset' => [
            '_' => 'Mapa',

            'beatmap_owner_change' => [
                '_' => 'Dificultad de invitado',
                'beatmap_owner_change' => 'Ahora eres dueño de la dificultad «:beatmap» del mapa «:title»',
                'beatmap_owner_change_compact' => 'Ahora eres dueño de la dificultad «:beatmap»',
            ],

            'beatmapset_discussion' => [
                '_' => 'Discusión de mapas',
                'beatmapset_discussion_lock' => 'La discusión en «:title» se ha cerrado',
                'beatmapset_discussion_lock_compact' => 'La discusión fue cerrada',
                'beatmapset_discussion_post_new' => 'Nueva publicación en «:title» por :username: «:content»',
                'beatmapset_discussion_post_new_empty' => 'Nueva publicación en «:title» por :username',
                'beatmapset_discussion_post_new_compact' => 'Nueva publicación por :username: «:content»',
                'beatmapset_discussion_post_new_compact_empty' => 'Nueva publicación por :username',
                'beatmapset_discussion_review_new' => 'Nueva revisión en «:title» por :username que contiene :review_counts',
                'beatmapset_discussion_review_new_compact' => 'Nueva revisión por :username que contiene :review_counts',
                'beatmapset_discussion_unlock' => 'La discusión en «:title» ha sido abierta',
                'beatmapset_discussion_unlock_compact' => 'La discusión se ha abierto',

                'review_count' => [
                    'praises' => ':count_delimited elogio|:count_delimited elogios',
                    'problems' => ':count_delimited problema|:count_delimited problemas',
                    'suggestions' => ':count_delimited sugerencia|:count_delimited sugerencias',
                ],
            ],

            'beatmapset_problem' => [
                '_' => 'Problema en un mapa calificado',
                'beatmapset_discussion_qualified_problem' => 'Reportado por :username en «:title»: «:content»',
                'beatmapset_discussion_qualified_problem_empty' => 'Reportado por :username en «:title»',
                'beatmapset_discussion_qualified_problem_compact' => 'Reportado por :username: «:content»',
                'beatmapset_discussion_qualified_problem_compact_empty' => 'Reportado por :username',
            ],

            'beatmapset_state' => [
                '_' => 'El estado del mapa ha cambiado',
                'beatmapset_disqualify' => '«:title» ha sido descalificado',
                'beatmapset_disqualify_compact' => 'El mapa fue descalificado',
                'beatmapset_love' => '«:title» fue promovido a amados',
                'beatmapset_love_compact' => 'El mapa fue promovido a amados',
                'beatmapset_nominate' => '«:title» ha sido nominado',
                'beatmapset_nominate_compact' => 'El mapa fue nominado',
                'beatmapset_qualify' => '«:title» ha ganado suficientes nominaciones e ingresó a la cola de clasificación',
                'beatmapset_qualify_compact' => 'El mapa ingresó a la cola de clasificación',
                'beatmapset_rank' => '«:title» ha sido clasificado',
                'beatmapset_rank_compact' => 'El mapa fue clasificado',
                'beatmapset_remove_from_loved' => '«:title» fue eliminado de amados',
                'beatmapset_remove_from_loved_compact' => 'El mapa fue eliminado de amados',
                'beatmapset_reset_nominations' => 'La nominación de «:title» ha sido restablecida',
                'beatmapset_reset_nominations_compact' => 'La nominación fue restablecida',
            ],

            'comment' => [
                '_' => 'Nuevo comentario',

                'comment_new' => ':username ha comentado «:content» en «:title»',
                'comment_new_compact' => ':username ha comentado «:content»',
                'comment_reply' => ':username ha respondido «:content» en «:title»',
                'comment_reply_compact' => ':username ha respondido «:content»',
            ],
        ],

        'channel' => [
            '_' => 'Chat',

            'announcement' => [
                '_' => 'Nuevo anuncio',

                'announce' => [
                    'channel_announcement' => ':username dice «:title»',
                    'channel_announcement_compact' => ':title',
                    'channel_announcement_group' => 'Anuncio de :username',
                ],
            ],

            'channel' => [
                '_' => 'Nuevo mensaje',

                'pm' => [
                    'channel_message' => ':username dice «:title»',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => 'de :username',
                ],
            ],

            'channel_team' => [
                '_' => 'Nuevo mensaje del equipo',

                'team' => [
                    'channel_team' => ':username dice «:title»',
                    'channel_team_compact' => ':username dice «:title»',
                    'channel_team_group' => ':username dice «:title»',
                ],
            ],
        ],

        'build' => [
            '_' => 'Registro de cambios',

            'comment' => [
                '_' => 'Nuevo comentario',

                'comment_new' => ':username ha comentado «:content» en «:title»',
                'comment_new_compact' => ':username ha comentado «:content»',
                'comment_reply' => ':username ha respondido «:content» en «:title»',
                'comment_reply_compact' => ':username ha respondido «:content»',
            ],
        ],

        'news_post' => [
            '_' => 'Noticias',

            'comment' => [
                '_' => 'Nuevo comentario',

                'comment_new' => ':username ha comentado «:content» en «:title»',
                'comment_new_compact' => ':username ha comentado «:content»',
                'comment_reply' => ':username ha respondido «:content» en «:title»',
                'comment_reply_compact' => ':username ha respondido «:content»',
            ],
        ],

        'forum_topic' => [
            '_' => 'Tema del foro',

            'forum_topic_reply' => [
                '_' => 'Nueva respuesta en el foro',
                'forum_topic_reply' => ':username ha respondido a «:title»',
                'forum_topic_reply_compact' => ':username ha respondido',
            ],
        ],

        'team' => [
            'team_application' => [
                '_' => 'Solicitud de unirse al equipo',

                'team_application_accept' => "Ahora eres miembro del equipo :title",
                'team_application_accept_compact' => "Ahora eres miembro del equipo :title",

                'team_application_group' => 'Actualizaciones de las solicitudes para unirse al equipo',

                'team_application_reject' => 'Tu solicitud para unirte al equipo :title ha sido rechazada',
                'team_application_reject_compact' => 'Tu solicitud para unirte al equipo :title ha sido rechazada',
                'team_application_store' => ':title ha solicitado unirse a tu equipo',
                'team_application_store_compact' => ':title ha solicitado unirse a tu equipo',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                '_' => 'Nuevo mapa',

                'user_beatmapset_new' => 'Nuevo mapa «:title» por :username',
                'user_beatmapset_new_compact' => 'Nuevo mapa «:title»',
                'user_beatmapset_new_group' => 'Nuevos mapas por :username',

                'user_beatmapset_revive' => 'El mapa «:title» ha sido revivido por :username',
                'user_beatmapset_revive_compact' => 'El mapa «:title» ha sido revivido',
            ],
        ],

        'user_achievement' => [
            '_' => 'Medallas',

            'user_achievement_unlock' => [
                '_' => 'Nueva medalla',
                'user_achievement_unlock' => '¡Desbloqueada «:title»!',
                'user_achievement_unlock_compact' => '¡Desbloqueada «:title»!',
                'user_achievement_unlock_group' => '¡Medallas desbloqueadas!',
            ],
        ],
    ],

    'mail' => [
        'beatmapset' => [
            'beatmap_owner_change' => [
                'beatmap_owner_change' => 'Ahora eres un invitado en el mapa «:title»',
            ],

            'beatmapset_discussion' => [
                'beatmapset_discussion_lock' => 'La discusión en «:title» se ha cerrado',
                'beatmapset_discussion_post_new' => 'La discusión en «:title» tiene nuevas actualizaciones',
                'beatmapset_discussion_unlock' => 'La discusión en «:title» se ha abierto',
            ],

            'beatmapset_problem' => [
                'beatmapset_discussion_qualified_problem' => 'Se reportó un nuevo problema en «:title»',
            ],

            'beatmapset_state' => [
                'beatmapset_disqualify' => '«:title» ha sido descalificado',
                'beatmapset_love' => '«:title» fue promovido a amados',
                'beatmapset_nominate' => '«:title» ha sido nominado',
                'beatmapset_qualify' => '«:title» ha ganado suficientes nominaciones e ingresó a la cola de clasificación',
                'beatmapset_rank' => '«:title» ha sido clasificado',
                'beatmapset_remove_from_loved' => '«:title» se eliminó de amados',
                'beatmapset_reset_nominations' => 'La nominación de «:title» ha sido restablecida',
            ],

            'comment' => [
                'comment_new' => 'El mapa «:title» tiene nuevos comentarios',
            ],
        ],

        'channel' => [
            'announcement' => [
                'channel_announcement' => 'Hay un nuevo anuncio en «:name»',
            ],
            'channel' => [
                'channel_message' => 'Has recibido un nuevo mensaje de :username',
            ],
            'channel_team' => [
                'channel_team' => 'Hay un nuevo mensaje en el equipo «:name»',
            ],
        ],

        'build' => [
            'comment' => [
                'comment_new' => 'El registro de cambios «:title» tiene nuevos comentarios',
            ],
        ],

        'news_post' => [
            'comment' => [
                'comment_new' => 'La noticia «:title» tiene nuevos comentarios',
            ],
        ],

        'forum_topic' => [
            'forum_topic_reply' => [
                'forum_topic_reply' => 'Hay nuevas respuestas en «:title»',
            ],
        ],

        'team' => [
            'team_application' => [
                'team_application_accept' => "Ahora eres miembro del equipo :title",
                'team_application_reject' => 'Tu solicitud para unirte al equipo :title ha sido rechazada',
                'team_application_store' => ':title ha solicitado unirse a tu equipo',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                'user_beatmapset_new' => ':username ha creado nuevos mapas',
                'user_beatmapset_revive' => ':username ha revivido mapas',
            ],
        ],
    ],
];
