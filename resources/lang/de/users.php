<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[gelöschter Benutzer]',

    'beatmapset_activities' => [
        'title' => "Moddingverlauf von :user",
        'title_compact' => 'Modding',

        'discussions' => [
            'title_recent' => 'Letztens gestartete Diskussionen',
        ],

        'events' => [
            'title_recent' => 'Neueste Events',
        ],

        'posts' => [
            'title_recent' => 'Neueste Beiträge',
        ],

        'votes_received' => [
            'title_most' => 'Meiste Stimmen von (letzten 3 Monate)',
        ],

        'votes_made' => [
            'title_most' => 'Meiste Stimmen (letzten 3 Monate)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'Du hast diesen Benutzer geblockt.',
        'comment_text' => 'Dieser Kommentar ist ausgeblendet.',
        'blocked_count' => 'blockierte Benutzer (:count)',
        'hide_profile' => 'Profil verbergen',
        'hide_comment' => 'ausblenden',
        'forum_post_text' => 'Dieser Beitrag wird ausgeblendet.',
        'not_blocked' => 'Dieser Benutzer ist nicht geblockt.',
        'show_profile' => 'Profil anzeigen',
        'show_comment' => 'anzeigen',
        'too_many' => 'Block-Limit erreicht.',
        'button' => [
            'block' => 'Blockieren',
            'unblock' => 'Entblocken',
        ],
    ],

    'card' => [
        'gift_supporter' => 'Verschenke ein osu!supporter-Tag',
        'loading' => 'Lädt...',
        'send_message' => 'Nachricht senden',
    ],

    'create' => [
        'form' => [
            'password' => 'Passwort',
            'password_confirmation' => 'Passwort bestätigen',
            'submit' => 'Account erstellen',
            'user_email' => 'E-Mail',
            'user_email_confirmation' => 'E-Mail bestätigen',
            'username' => 'Benutzername',

            'tos_notice' => [
                '_' => 'durch die Erstellung eines Accounts bist du mit den :link einverstanden',
                'link' => 'Nutzungsbedingungen',
            ],
        ],
    ],

    'disabled' => [
        'title' => 'Uh, oh! Anscheinend wurde dein Konto deaktiviert.',
        'warning' => "Falls Du gegen eine Regel verstoßen hast, beachte bitte, dass es in der Regel eine Bedenkzeit von einem Monat gibt, in der wir keine Anträge berücksichtigen. Nach diesem Zeitraum kannst Du uns jederzeit kontaktieren, falls Du dies für erforderlich hältst. Beachte, dass das Erstellen neuer Konten nach dem Deaktivieren eines Kontos zu einer <strong>Verlängerung dieser einmonatigen Bedenkzeit</strong> führt. Bitte beachte auch, dass du für <strong>jedes Konto, das du erstellst, weitere Regeln verletzt</strong>. Wir raten Dir dringend davon ab, diesen Weg einzuschlagen!",

        'if_mistake' => [
            '_' => 'Wenn du der Meinung bist, dass dies ein Fehler ist, kannst du uns gerne kontaktieren (per :email oder durch Klicken auf das "?" in der rechten unteren Ecke dieser Seite). Bitte beachte, dass wir bei unseren Handlungen immer volles Vertrauen haben, da sie auf sehr soliden Daten beruhen. Wir behalten uns das Recht vor, deine Anfrage zu ignorieren, wenn wir das Gefühl haben, dass du absichtlich unehrlich bist.',
            'email' => 'E-Mail',
        ],

        'reasons' => [
            'compromised' => 'Dein Konto wurde als gefährdet eingestuft. Es kann vorübergehend deaktiviert werden, während seine Identität bestätigt wird.',
            'opening' => 'Es gibt eine Reihe von Gründen, die dazu führen können, dass Dein Konto deaktiviert wird:',

            'tos' => [
                '_' => 'Du hast eine oder mehrere von unseren :community_rules oder :tos gebrochen.',
                'community_rules' => 'Community-Regeln',
                'tos' => 'Nutzungsbedingungen',
            ],
        ],
    ],

    'filtering' => [
        'by_game_mode' => 'Mitglieder nach Spielmodus',
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive' => "Dein Account wurde längere Zeit nicht benutzt.",
            'inactive_different_country' => "Dein Konto wurde längere Zeit nicht benutzt.",
        ],
    ],

    'login' => [
        '_' => 'Login',
        'button' => 'Einloggen',
        'button_posting' => 'Logge ein...',
        'email_login_disabled' => 'Das Anmelden per E-Mail ist derzeit deaktiviert. Bitte benutze stattdessen deinen Benutzernamen.',
        'failed' => 'Falscher Login',
        'forgot' => 'Passwort vergessen?',
        'info' => 'Bitte melde dich an, um fortzufahren',
        'invalid_captcha' => 'Captcha ungültig, bitte aktualisiere die Seite und versuche es erneut.',
        'locked_ip' => 'Deine IP-Adresse ist gesperrt. Bitte warte ein paar Minuten.',
        'password' => 'Passwort',
        'register' => "Noch keinen osu!-Account? Erstell' einen",
        'remember' => 'Diesen Computer merken',
        'title' => 'Zum Fortfahren bitte einloggen',
        'username' => 'Benutzername',

        'beta' => [
            'main' => 'Beta-Zugang ist momentan privilegierten Benutzern vorbehalten.',
            'small' => '(osu!supporter kommen bald dazu)',
        ],
    ],

    'ogp' => [
        'modding_description' => 'Beatmaps: :counts',
        'modding_description_empty' => 'Der Nutzer hat keine Beatmaps.',

        'description' => [
            '_' => 'Rang (:ruleset): :global | :country',
            'country' => 'Land :rank',
            'global' => 'Global :rank',
        ],
    ],

    'posts' => [
        'title' => 'Posts von :username',
    ],

    'anonymous' => [
        'login_link' => 'zum Einloggen klicken',
        'login_text' => 'einloggen',
        'username' => 'Gast',
        'error' => 'Dafür musst du eingeloggt sein.',
    ],
    'logout_confirm' => 'Sicher, dass du dich ausloggen willst? :(',
    'report' => [
        'button_text' => 'Melden',
        'comments' => 'Weitere Kommentare',
        'placeholder' => 'Bitte stelle jegliche Infomationen zur Verfügung, die nützlich sein könnten.',
        'reason' => 'Grund',
        'thanks' => 'Danke für deine Meldung!',
        'title' => ':username melden?',

        'actions' => [
            'send' => 'Meldung abschicken',
            'cancel' => 'Abbrechen',
        ],

        'options' => [
            'cheating' => 'Cheating',
            'inappropriate_chat' => 'Unangemessenes Verhalten im Chat',
            'insults' => 'Beleidigt mich / andere',
            'multiple_accounts' => 'Verwendet mehrere Konten',
            'nonsense' => 'Unsinn',
            'other' => 'Anderes (unten angeben)',
            'spam' => 'Spamming',
            'unwanted_content' => 'Unangemessene Inhalte',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Dein Account wurde restricted!',
        'message' => 'Während einer Sperrung kannst du nicht mit anderen Spielern interagieren und deine Ranglistenscores sind nur für dich sichtbar. Dies passiert normalerweise durch einen automatischen Prozess und wird üblicherweise innerhalb von 24 Stunden aufgehoben. :link',
        'message_link' => 'Siehe hier für weitere Informationen.',
    ],
    'show' => [
        'age' => ':age Jahre alt',
        'change_avatar' => 'ändere deinen avatar!',
        'first_members' => 'Seit dem Anfang hier',
        'is_developer' => 'osu!-Entwickler',
        'is_supporter' => 'osu!-Supporter',
        'joined_at' => ':date beigetreten',
        'lastvisit' => 'Zuletzt gesehen :date',
        'lastvisit_online' => 'Derzeit online',
        'missingtext' => 'Vielleicht hast du dich verschrieben (oder der Benutzer wurde gebannt)!',
        'origin_country' => 'Aus :country',
        'previous_usernames' => 'auch bekannt als',
        'plays_with' => 'Spielt mit :devices',

        'comments_count' => [
            '_' => ':link abgegeben',
            'count' => ':count_delimited Kommentar|:count_delimited Kommentare',
        ],
        'cover' => [
            'to_0' => 'Cover verbergen',
            'to_1' => 'Cover anzeigen',
        ],
        'daily_challenge' => [
            'daily' => 'Tägliche Serie',
            'daily_streak_best' => 'Beste Tagesserie',
            'daily_streak_current' => 'Aktuelle Tagesserie',
            'playcount' => 'Gesamtbeteiligung',
            'title' => 'Tägliche\nHerausforderung',
            'top_10p_placements' => 'Platzierungen in den Top 10 %',
            'top_50p_placements' => 'Platzierungen in den Top 50 %',
            'weekly' => 'Wöchentliche Serie',
            'weekly_streak_best' => 'Beste Wochenserie',
            'weekly_streak_current' => 'Aktuelle Wochenserie',

            'unit' => [
                'day' => ':value T',
                'week' => ':value W',
            ],
        ],
        'edit' => [
            'cover' => [
                'button' => 'Profilbanner ändern',
                'defaults_info' => 'In der Zukunft wird es mehr Optionen für das Banner geben',
                'holdover_remove_confirm' => "Das davor ausgewählte Cover ist nicht mehr zur Auswahl verfügbar. Du kannst es nach dem Wechsel zu einem anderen Cover nicht wieder auswählen. Trotzdem fortfahren?",
                'title' => 'Banner',

                'upload' => [
                    'broken_file' => 'Verarbeitung des Bildes fehlgeschlagen. Überprüfe das hochgeladene Bild und versuch es erneut.',
                    'button' => 'Bild hochladen',
                    'dropzone' => 'Zum Hochladen hier ablegen',
                    'dropzone_info' => 'Du kannst das Bild auch hier ablegen, um es hochzuladen',
                    'size_info' => 'Banner sollte 2000x500 groß sein',
                    'too_large' => 'Datei ist zu groß.',
                    'unsupported_format' => 'Format wird nicht unterstützt.',

                    'restriction_info' => [
                        '_' => 'Hochladen nur für :link verfügbar',
                        'link' => 'osu!supporter',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'Standard-Spielmodus',
                'set' => 'Wähle :mode als Standard-Spielmodus',
            ],

            'hue' => [
                'reset_no_supporter' => 'Zur Standardfarbe zurückkehren? Für die Wahl einer anderen Farbe wird ein Supporter-Tag benötigt.',
                'title' => 'Farbe',

                'supporter' => [
                    '_' => 'Eigene Farbschemata nur für :link verfügbar',
                    'link' => 'osu!supporter',
                ],
            ],
        ],

        'extra' => [
            'none' => 'nichts',
            'unranked' => 'Keine Plays in letzter Zeit',

            'achievements' => [
                'achieved-on' => 'Erreicht am :date',
                'locked' => 'Noch nicht freigeschaltet',
                'title' => 'Erfolge',
            ],
            'beatmaps' => [
                'by_artist' => 'von :artist',
                'title' => 'Beatmaps',

                'favourite' => [
                    'title' => 'Lieblingsbeatmaps',
                ],
                'graveyard' => [
                    'title' => 'Begrabene Beatmaps',
                ],
                'guest' => [
                    'title' => 'Als Gast beigetragene Beatmaps',
                ],
                'loved' => [
                    'title' => 'Loved Beatmaps',
                ],
                'nominated' => [
                    'title' => 'Nominierte Ranked Beatmaps',
                ],
                'pending' => [
                    'title' => 'Ausstehende Beatmaps',
                ],
                'ranked' => [
                    'title' => 'Ranked Beatmaps',
                ],
            ],
            'discussions' => [
                'title' => 'Diskussionen',
                'title_longer' => 'Neueste Diskussionen',
                'show_more' => 'mehr Diskussionen anzeigen',
            ],
            'events' => [
                'title' => 'Events',
                'title_longer' => 'Neueste Events',
                'show_more' => 'mehr Events anzeigen',
            ],
            'historical' => [
                'title' => 'Historie',

                'monthly_playcounts' => [
                    'title' => 'Spielverlauf',
                    'count_label' => 'Spiele',
                ],
                'most_played' => [
                    'count' => 'Anzahl der Spiele',
                    'title' => 'Meistgespielte Beatmaps',
                ],
                'recent_plays' => [
                    'accuracy' => 'Genauigkeit: :percentage',
                    'title' => 'Zuletzt gespielt (24h)',
                ],
                'replays_watched_counts' => [
                    'title' => 'Angeschaute Replays',
                    'count_label' => 'Replays angeschaut',
                ],
            ],
            'kudosu' => [
                'recent_entries' => 'Kudosu-Verlauf',
                'title' => 'Kudosu!',
                'total' => 'Kudosu insgesamt',

                'entry' => [
                    'amount' => ':amount Kudosu',
                    'empty' => "Dieser Benutzer hat kein Kudosu erhalten!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => ':amount durch das Zurückziehen des Kudosu-Verwehrens von :post erhalten',
                        ],

                        'deny_kudosu' => [
                            'reset' => ':amount vom Beitrag :post verwehrt',
                        ],

                        'delete' => [
                            'reset' => ':amount durch das Löschen des Modding-Beitrags :post verloren',
                        ],

                        'restore' => [
                            'give' => ':amount durch die Wiederherstellung des Modding-Posts :post erhalten',
                        ],

                        'vote' => [
                            'give' => ':amount durch erhaltene Stimmen im Post :post erhalten',
                            'reset' => ':amount durch verlorene Stimmen im Beitrag :post verloren',
                        ],

                        'recalculate' => [
                            'give' => ':amount durch Neuberechnung der Stimmen in :post erhalten',
                            'reset' => ':amount durch Neuberechnung der Stimmen in :post verloren',
                        ],
                    ],

                    'forum_post' => [
                        'give' => ':amount von :giver für einen Beitrag in :post erhalten',
                        'reset' => 'Kudosu von :giver im Beitrag :post zurückgesetzt',
                        'revoke' => 'Kudosu von :giver im Beitrag :post verwehrt',
                    ],
                ],

                'total_info' => [
                    '_' => 'Basierend auf dem Beitrag, den der Benutzer zum Beatmap-Modding geleistet hat. Weitere Informationen auf :link.',
                    'link' => 'dieser Seite',
                ],
            ],
            'me' => [
                'title' => 'ich!',
            ],
            'medals' => [
                'empty' => "Dieser Nutzer hat noch keine erhalten. ;_;",
                'recent' => 'Neueste',
                'title' => 'Medaillen',
            ],
            'playlists' => [
                'title' => 'Playlist-Spiele',
            ],
            'posts' => [
                'title' => 'Beiträge',
                'title_longer' => 'Neueste Beiträge',
                'show_more' => 'weitere Beiträge anschauen',
            ],
            'recent_activity' => [
                'title' => 'Neulich',
            ],
            'realtime' => [
                'title' => 'Mehrspieler-Spiele',
            ],
            'top_ranks' => [
                'download_replay' => 'Replay herunterladen',
                'not_ranked' => 'Nur Ranked Beatmaps geben PP.',
                'pp_weight' => ':percentage gewichtet',
                'view_details' => 'Details anzeigen',
                'title' => 'Scores',

                'best' => [
                    'title' => 'Beste Performance',
                ],
                'first' => [
                    'title' => 'Erster Platz',
                ],
                'pin' => [
                    'to_0' => 'Ablösen',
                    'to_0_done' => 'Score abgelöst',
                    'to_1' => 'Anpinnen',
                    'to_1_done' => 'Score angepinnt',
                ],
                'pinned' => [
                    'title' => 'Angepinnte Scores',
                ],
            ],
            'votes' => [
                'given' => 'Abgegebene Stimmen (letzte 3 Monate)',
                'received' => 'Erhaltene Stimmen (letzte 3 Monate)',
                'title' => 'Stimmen',
                'title_longer' => 'Neueste Stimmen',
                'vote_count' => ':count_delimited Stimme|:count_delimited Stimmen',
            ],
            'account_standing' => [
                'title' => 'Accountstatus',
                'bad_standing' => "Der Account von :username hat zurzeit keinen guten Ruf :(",
                'remaining_silence' => ':username kann in :duration wieder sprechen.',

                'recent_infringements' => [
                    'title' => 'Neuliche Verstöße',
                    'date' => 'Datum',
                    'action' => 'Maßnahme',
                    'length' => 'Dauer',
                    'length_indefinite' => 'Unbestimmt',
                    'description' => 'Beschreibung',
                    'actor' => 'von :username',

                    'actions' => [
                        'restriction' => 'Bann',
                        'silence' => 'Silence',
                        'tournament_ban' => 'Turniersperre',
                        'note' => 'Warnung',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => '',
            'interests' => 'Interessen',
            'location' => 'Aktueller Standort',
            'occupation' => 'Beschäftigung',
            'twitter' => '',
            'website' => 'Webseite',
        ],
        'not_found' => [
            'reason_1' => 'Der gesuchte Benutzer könnte seinen Namen geändert haben.',
            'reason_2' => 'Der Account ist aus Sicherheitsgründen temporär nicht verfügbar.',
            'reason_3' => 'Du hast dich vielleicht verschrieben!',
            'reason_header' => 'Es gibt ein paar mögliche Gründe dafür:',
            'title' => 'Benutzer nicht gefunden! ;_;',
        ],
        'page' => [
            'button' => 'Profil bearbeiten',
            'description' => '<strong>me!</strong> ist ein persönlicher Bereich auf deinem osu!-Profil, den du nach deinem Belieben anpassen kannst.',
            'edit_big' => 'me! bearbeiten',
            'placeholder' => 'Seiteninhalt hier eingeben',

            'restriction_info' => [
                '_' => 'Du musst ein :link sein, um diese Funktion freizuschalten.',
                'link' => 'osu!supporter',
            ],
        ],
        'post_count' => [
            '_' => ':link beigetragen',
            'count' => ':count_delimited Forumsbeitrag|:count_delimited Forenbeiträge',
        ],
        'rank' => [
            'country' => 'Länderrang im Modus :mode',
            'country_simple' => 'Nationaler Rang',
            'global' => 'Globaler Rang im Modus :mode',
            'global_simple' => 'Globaler Rang',
            'highest' => 'Höchster Rang: :rank am :date',
        ],
        'season_stats' => [
            'division_top_percentage' => 'Top :value',
            'total_score' => 'Gesamtpunktzahl',
        ],
        'stats' => [
            'hit_accuracy' => 'Genauigkeit',
            'hits_per_play' => '',
            'level' => 'Level :level',
            'level_progress' => 'Fortschritt bis zum nächsten Level',
            'maximum_combo' => 'Höchste Combo',
            'medals' => 'Medaillen',
            'play_count' => 'Anzahl Spiele',
            'play_time' => 'Gesamtspielzeit',
            'ranked_score' => 'Punktzahl auf Ranglisten',
            'replays_watched_by_others' => 'Von anderen angesehene Replays',
            'score_ranks' => 'Ränge durch Punkte',
            'total_hits' => 'Anzahl Treffer',
            'total_score' => 'Gesamtpunktzahl',
            // modding stats
            'graveyard_beatmapset_count' => 'Begrabene Beatmaps',
            'loved_beatmapset_count' => 'Loved Beatmaps',
            'pending_beatmapset_count' => 'Ausstehende Beatmaps',
            'ranked_beatmapset_count' => 'Ranked & Approved Beatmaps',
        ],
    ],

    'silenced_banner' => [
        'title' => 'Du bist derzeit stumm.',
        'message' => 'Einige Aktionen sind möglicherweise nicht verfügbar.',
    ],

    'status' => [
        'all' => 'Alle',
        'online' => 'Online',
        'offline' => 'Offline',
    ],
    'store' => [
        'from_client' => 'Bitte registriere dich stattdessen über den Spiel-Client!',
        'from_web' => 'Bitte melde dich über die osu!-Webseite an',
        'saved' => 'Benutzer erstellt',
    ],
    'verify' => [
        'title' => 'Accountverifizierung',
    ],

    'view_mode' => [
        'brick' => 'Ziegelansicht',
        'card' => 'Kartenansicht',
        'list' => 'Listenansicht',
    ],
];
