<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[مستخدم محذوف]',

    'beatmapset_activities' => [
        'title' => "سجل اقتراحات :user",
        'title_compact' => 'تقديم الإقتِراحات',

        'discussions' => [
            'title_recent' => 'المناقشات التي بدأت مؤخرا',
        ],

        'events' => [
            'title_recent' => 'آخر الأحداث',
        ],

        'posts' => [
            'title_recent' => 'المنشورات الأخيرة',
        ],

        'votes_received' => [
            'title_most' => 'الأكثر تصويتاََ بواسطة (آخر ٣ اشهر)',
        ],

        'votes_made' => [
            'title_most' => 'الأكثر تصويتاََ (آخر ٣ اشهر)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'لقد قمت بحظر هذا المستخدم.',
        'comment_text' => 'هذا التعليق مخفي.',
        'blocked_count' => 'المستخدمون المحظورون (:count)',
        'hide_profile' => 'إخفاء الملف الشخصي',
        'hide_comment' => 'إخفاء',
        'forum_post_text' => 'تم إخفاء هذه المشاركة.',
        'not_blocked' => 'هذا المستخدم ليس محظوراََ.',
        'show_profile' => 'عرض الملف الشخصي',
        'show_comment' => 'إظهار',
        'too_many' => 'تم الوصول للحد الأقصى للحظر.',
        'button' => [
            'block' => 'حظر',
            'unblock' => 'إلغاء الحظر',
        ],
    ],

    'card' => [
        'gift_supporter' => 'إهداء علامة supporter ',
        'loading' => 'جاري التحميل...',
        'send_message' => 'إرسال رسالة',
    ],

    'create' => [
        'form' => [
            'password' => 'كلمة السر',
            'password_confirmation' => 'تأكيد كلمة السر',
            'submit' => 'إنشاء حساب',
            'user_email' => 'الايميل',
            'user_email_confirmation' => 'تأكيد الأيميل',
            'username' => 'اسم المستخدم',

            'tos_notice' => [
                '_' => 'من خلال إنشاء الحساب أنت توافق على :link',
                'link' => 'شروط الخدمة',
            ],
        ],
    ],

    'disabled' => [
        'title' => 'اه-اوه! يبدو انه قد تم تعطيل حسابك.',
        'warning' => "في حالة مخالفَتِكَ لِقاعِدة, خذ بعين الاِعتبار ان هنالك حظر لمدة شهر واحد لم يكون ضمنه اي طلبات عفو. بعد هذه المدة, قد يكون من الضرورة مراسلتنا. برجاء الاِنتباه الى ان انشاءكَ لحِساب في هذه الفترة سيؤدي الى <strong>زيادة في فترة حظر الشهر الواحد</strong>. يرجى الاِنتباه ايضاََ الى ان <strong>كل حساب تنشأهُ, فأِنك تنتهك القوانين اكثر</strong>. ننصحك وبشدة ان لا تتجه لهذا المسار المظلم!",

        'if_mistake' => [
            '_' => 'اذا كنت تعتقد ان هذا خطأ, انت مرحب بمراسلتنا ( على :email او بالنقر على "؟" على اسغل زاوية-اليد-اليمنى من هذه الصفحة). ارجوك تفهم اننا واثقون دائماََ من جميع اجرائاتِنا, بحسبِ انها تستند الى معلومات دقيقة جداََ. لدينا الحق في مخالفة طلبك اعتقدنا انه يبدو غير صادق.',
            'email' => 'البريد الإلكتروني',
        ],

        'reasons' => [
            'compromised' => 'تم اتخاذ اِجراءات بحق حِسابِك. قد يكون معطلاََ مؤقتاََ حتى تؤكَدَ هويتهُ.',
            'opening' => 'هنالك عدد من الأسباب التي تجعل من حِسابِك معطلاََ:',

            'tos' => [
                '_' => 'لقد خرقت واحداََ او اكثر من :community_rules او :tos.',
                'community_rules' => 'قوانين المجتمع',
                'tos' => 'بنود الخدمة',
            ],
        ],
    ],

    'filtering' => [
        'by_game_mode' => 'الأعضاء حسب نمط اللعبة',
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive' => "لم تستعمل حسابك منذ وقتِِ طويل.",
            'inactive_different_country' => "لم تستعمل حسابك منذ وقتِِ طويل.",
        ],
    ],

    'login' => [
        '_' => 'تسجيل الدخول',
        'button' => 'تسجيل الدخول',
        'button_posting' => 'يسجل الدخول...',
        'email_login_disabled' => 'تسجيل الدخول بالبريد الالكتروني معطل حالياََ. برجاء تسجيل الدخول عن طريق اسم المستخدم بدلا من ذلك.',
        'failed' => 'تسجيل دخول غير صحيح',
        'forgot' => 'نسيت كلمة المرور؟',
        'info' => 'الرجاء تسجيل الدخول للاستمرار',
        'invalid_captcha' => 'فَشِلت الكابتشا، قم بتحديث الصفحة وحاول مرة أخرى.',
        'locked_ip' => 'عنوان IP الخاص بك مؤمن. الرجاء الانتظار بضع دقائق.',
        'password' => 'كلمة السر',
        'register' => "ليس لديك حساب osu!؟ قم باِنشاء واحد",
        'remember' => 'تذكر هذا الجهاز',
        'title' => 'الرجاء تسجيل الدخول للمضي قدما',
        'username' => 'اسم المستخدم',

        'beta' => [
            'main' => 'وصول البيتا مقيد حالياََ للمستخدمين ذوي الاِمتيازات فقط.',
            'small' => '(سوف يحصل عليه osu!supporters قريبا)',
        ],
    ],

    'ogp' => [
        'modding_description' => 'الخرائط: :counts',
        'modding_description_empty' => 'ليس لدى المستخدم أي خرائط...',

        'description' => [
            '_' => 'الترتيب (:ruleset): :global | :country',
            'country' => 'الدولة :rank',
            'global' => 'عالمياََ :rank',
        ],
    ],

    'posts' => [
        'title' => ':username منشورات',
    ],

    'anonymous' => [
        'login_link' => 'انقر لتسجيل الدخول',
        'login_text' => 'تسجيل الدخول',
        'username' => 'زائر',
        'error' => 'تحتاج إلى تسجيل الدخول للقيام بذلك.',
    ],
    'logout_confirm' => 'أتريد تسجيل الخروج حقا؟ :(',
    'report' => [
        'button_text' => 'اِبلاغ',
        'comments' => 'تعليقات إضافية',
        'placeholder' => 'يرجى تقديم أي معلومات تعتقد انه يمكن أن تكون مفيدة.',
        'reason' => 'السبب',
        'thanks' => 'شكرا لبلاغِك!',
        'title' => 'الاِبلاغ عن :username؟',

        'actions' => [
            'send' => 'إرسال البلاغ',
            'cancel' => 'إلغاء',
        ],

        'options' => [
            'cheating' => 'لعب مؤذي/ غش',
            'inappropriate_chat' => '',
            'insults' => 'اهانتي / اهانة الاخرين',
            'multiple_accounts' => 'استخدام حسابات متعددة',
            'nonsense' => 'هُراء',
            'other' => 'أخرى (اكتب أدناه)',
            'spam' => 'سبام',
            'unwanted_content' => 'ربط عن محتوى غير لائق',
        ],
    ],
    'restricted_banner' => [
        'title' => 'تم تقييد حسابك!',
        'message' => 'عندما تكون مقيداََ, سوف تمنع من مراسلة الاخرين ونتائج ستكون ظاهرة لك فقط. هذه عادة نتيجة تلقائية وسوف تختفي خلال 24 ساعة. اذا كنت تريد الغاء تقييدك, ارجوك <a href="mailto:accounts@ppy.sh">اتصل بالدعم</a>.',
        'message_link' => 'تحقق من هذه الصفحة لمعرفة المزيد.',
    ],
    'show' => [
        'age' => ':age سنة',
        'change_avatar' => 'غير صورتك!',
        'first_members' => 'هنا منذ البداية',
        'is_developer' => 'مطور!osu',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'انضم في :date',
        'lastvisit' => 'اخر ظهور :date',
        'lastvisit_online' => 'متصل حالياً',
        'missingtext' => 'لقد ادخلت معلومات خاطئة! (او قد يكون المستخدم مقيد)',
        'origin_country' => 'من :country',
        'previous_usernames' => 'سابقاََ',
        'plays_with' => 'يستخدم :devices',

        'comments_count' => [
            '_' => 'نَشَر :link',
            'count' => ':count_delimited تعليق|:count_delimited تعليقات',
        ],
        'cover' => [
            'to_0' => 'إخفاء الغلاف',
            'to_1' => 'إظهار الغلاف',
        ],
        'daily_challenge' => [
            'daily' => '',
            'daily_streak_best' => '',
            'daily_streak_current' => '',
            'playcount' => '',
            'title' => '',
            'top_10p_placements' => '',
            'top_50p_placements' => '',
            'weekly' => '',
            'weekly_streak_best' => '',
            'weekly_streak_current' => '',

            'unit' => [
                'day' => '',
                'week' => '',
            ],
        ],
        'edit' => [
            'cover' => [
                'button' => 'تغيير صورة الغلاف',
                'defaults_info' => 'خيارات اغلفة اضافية ستكون متاحة في المستقبل',
                'holdover_remove_confirm' => "الغلاف المحدد سابقاً لم يعد متوفّراً ولن تستطيع اختياره مجدداً بعد تغييره. هل تريد المتابعة؟",
                'title' => '',

                'upload' => [
                    'broken_file' => 'فشلت معالجة الصورة. تحقق من الصورة المرفوعة وحاول مرة أخرى.',
                    'button' => 'رفع صورة',
                    'dropzone' => 'اَسقط الملف هنا للرفع',
                    'dropzone_info' => 'يمكنك أيضا إسقاط الصورة هنا للرفع',
                    'size_info' => 'حجم الغلاف يجب ان يكون 2400x640',
                    'too_large' => 'الملف المرفوع كبير جدا.',
                    'unsupported_format' => 'تنسيق غير مدعوم.',

                    'restriction_info' => [
                        '_' => 'الرفع متاح لـ :link فقط',
                        'link' => 'osu!supporters',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'الوضع الافتراضي للعبة',
                'set' => 'عين :mode كالوضع الافتراضي للعبة',
            ],

            'hue' => [
                'reset_no_supporter' => '',
                'title' => '',

                'supporter' => [
                    '_' => '',
                    'link' => '',
                ],
            ],
        ],

        'extra' => [
            'none' => 'بلا',
            'unranked' => 'لا نتائج اخيرة',

            'achievements' => [
                'achieved-on' => 'احتُل عند :date',
                'locked' => 'مُغلق',
                'title' => 'الانجازات',
            ],
            'beatmaps' => [
                'by_artist' => 'بواسطة :artist',
                'title' => 'خرائط الايقاع',

                'favourite' => [
                    'title' => 'الخرائط المفضلة',
                ],
                'graveyard' => [
                    'title' => 'الخرائط المقبورة',
                ],
                'guest' => [
                    'title' => 'خرائط من مشاركات الضيف',
                ],
                'loved' => [
                    'title' => 'خرائط Loved',
                ],
                'nominated' => [
                    'title' => 'خرائط Ranked جديدة',
                ],
                'pending' => [
                    'title' => 'الخرائط المعلقة',
                ],
                'ranked' => [
                    'title' => 'الخرائط الـ Ranked',
                ],
            ],
            'discussions' => [
                'title' => 'المناقشات',
                'title_longer' => 'المناقشات الأخيرة',
                'show_more' => 'رؤية المزيد من المناقشات',
            ],
            'events' => [
                'title' => 'الأحداث',
                'title_longer' => 'الأحداث الأخيرة',
                'show_more' => 'عرض المزيد من الأحداث',
            ],
            'historical' => [
                'title' => 'التاريخ',

                'monthly_playcounts' => [
                    'title' => 'تاريخ اللعب',
                    'count_label' => 'مرات اللعب',
                ],
                'most_played' => [
                    'count' => 'مرة لُعِبت',
                    'title' => 'الخرائط الاكثر لعباََ',
                ],
                'recent_plays' => [
                    'accuracy' => 'الدقة: :percentage',
                    'title' => 'الخرائط الملعوبة اخر (24 ساعة)',
                ],
                'replays_watched_counts' => [
                    'title' => 'تاريخ مشاهدات الـ Replays',
                    'count_label' => 'الـ Replays التي شاهدتها',
                ],
            ],
            'kudosu' => [
                'recent_entries' => 'تاريخ الكودوسو الفائت',
                'title' => 'كودوسو!',
                'total' => 'عدد الكودوسو الحاصل عليها',

                'entry' => [
                    'amount' => ':amount كودوسو',
                    'empty' => "هذا المستخدم لم يحصل على اية كودوسو!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'حصل على :amount من الكودوسو التي رفضت من اقتراح على منشور :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'رفض :amount من منشور الاقتراح :post',
                        ],

                        'delete' => [
                            'reset' => 'خسر :amount من حذف منشور الاقتراح :post',
                        ],

                        'restore' => [
                            'give' => 'استلم :amount من استعادة منشور الاقتراح :post',
                        ],

                        'vote' => [
                            'give' => 'استلم :amount من خلال الحصول على اصوات منشور الاقتراح :post',
                            'reset' => 'خسر :amount من خلال خسارة اصوات منشور الاقتراح :post',
                        ],

                        'recalculate' => [
                            'give' => 'استلم :amount من خلال اعادة حساب منشور الاقتراح :post',
                            'reset' => 'خسر :amount من خلال اعادة حساب منشور الاقتراح :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'استلم :amount من :giver لمنشوره في :post',
                        'reset' => 'إعادة تعيين كودوسو بواسطة :giver للمنشور :post',
                        'revoke' => 'رفض كودوسو بواسطة :giver للمنشور :post',
                    ],
                ],

                'total_info' => [
                    '_' => 'مبنية على اساس مساهمات المستخدم في اعطاء اقتراحات الخرائط. انظر :link لمزيد من المعلومات.',
                    'link' => 'هذه الصفحة',
                ],
            ],
            'me' => [
                'title' => 'أنا!',
            ],
            'medals' => [
                'empty' => "هذا المستخدم لم يحصل على أي شيئ حتى الآن. ;_;",
                'recent' => 'الأخير',
                'title' => 'الاوسمة',
            ],
            'playlists' => [
                'title' => 'العاب قائمة التشغيل',
            ],
            'posts' => [
                'title' => 'المنشورات',
                'title_longer' => 'المنشورات الحديثة',
                'show_more' => 'عرض المزيد من المنشورات',
            ],
            'recent_activity' => [
                'title' => 'الأخيرة',
            ],
            'realtime' => [
                'title' => 'الألعاب الجماعية',
            ],
            'top_ranks' => [
                'download_replay' => 'تحميل الـ Replay',
                'not_ranked' => 'فقط الخرائط الـ Ranked تعطي نقاط خبرة',
                'pp_weight' => 'موزون :percentage',
                'view_details' => 'عرض التفاصيل',
                'title' => 'النتائج',

                'best' => [
                    'title' => 'افضل اداء',
                ],
                'first' => [
                    'title' => 'المراكز الاولى',
                ],
                'pin' => [
                    'to_0' => 'إزالة التثبيت',
                    'to_0_done' => 'نتيجة غير مثبتة',
                    'to_1' => 'تثبيت',
                    'to_1_done' => 'نتيجة مثبتة',
                ],
                'pinned' => [
                    'title' => 'النتائج المثبتة',
                ],
            ],
            'votes' => [
                'given' => 'الأصوات المقدمة (اخر 3 اشهر)',
                'received' => 'الأصوات المستلمة (اخر 3 اشهر)',
                'title' => 'الأصوات',
                'title_longer' => 'الأصوات الأخيرة',
                'vote_count' => ':count_delimited صوت|:count_delimited اصوات',
            ],
            'account_standing' => [
                'title' => 'حالة الحساب',
                'bad_standing' => "حساب <strong>:username</strong> في حالة غير جيدة :(",
                'remaining_silence' => '<strong>:username</strong> سوف يكون قادراََ على التحدث في :duration.',

                'recent_infringements' => [
                    'title' => 'الحوادث الاخيرة',
                    'date' => 'التاريخ',
                    'action' => 'النشاط',
                    'length' => 'الطول',
                    'length_indefinite' => 'غير محدد',
                    'description' => 'الوصف',
                    'actor' => 'بواسطة :username',

                    'actions' => [
                        'restriction' => 'حظر',
                        'silence' => 'سكون',
                        'tournament_ban' => 'حظر البطولات',
                        'note' => 'ملاحظة',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => '',
            'interests' => 'الاهتمامات',
            'location' => 'الموقع الحالي',
            'occupation' => 'المهنة',
            'twitter' => '',
            'website' => 'الموقع',
        ],
        'not_found' => [
            'reason_1' => 'لربما غير اسم المستخدم الخاص به.',
            'reason_2' => 'الحساب غير متوفر حالياََ بسبب الأمان او مشاكل اخرى.',
            'reason_3' => 'لربما قمت بخطأ!',
            'reason_header' => 'هناك عدة اسباب لهذا:',
            'title' => 'لم يتم العثور على المستخدم ! ;_;',
        ],
        'page' => [
            'button' => 'تعديل الملف الشخصي',
            'description' => '<strong>انا!</strong> هي منطقة تخصصها بنفسك لعرض ما تريده للزوار.',
            'edit_big' => 'عدلني!',
            'placeholder' => 'ادخل محتوى الصفحة هنا',

            'restriction_info' => [
                '_' => 'تحتاج ان تكون :link لفتح هذه الميزة.',
                'link' => 'osu!supporter',
            ],
        ],
        'post_count' => [
            '_' => 'ساهم بـ :link',
            'count' => ':count_delimited منشور منتدى":count_delimited منشورات المنتدى',
        ],
        'rank' => [
            'country' => 'ترتيب الدولة لـ :mode',
            'country_simple' => 'ترتيب الدولة',
            'global' => 'الترتيب العالمي لـ :mode',
            'global_simple' => 'الترتيب العالمي',
            'highest' => 'أعلى ترتيب: :rank في :date',
        ],
        'season_stats' => [
            'division_top_percentage' => '',
            'total_score' => '',
        ],
        'stats' => [
            'hit_accuracy' => 'دقة التصويب',
            'hits_per_play' => '',
            'level' => 'المستوى :level',
            'level_progress' => 'التقدم للمستوى التالي',
            'maximum_combo' => 'اقصى كومبو',
            'medals' => 'الاوسمة',
            'play_count' => 'مرات اللعب',
            'play_time' => 'وقت اللعب الإجمالي',
            'ranked_score' => 'عدد نقاط الـ Ranked',
            'replays_watched_by_others' => 'الـ Replays التي شاهدها الأخرون',
            'score_ranks' => 'ترتيب النقاط',
            'total_hits' => 'مجموع التصويبات',
            'total_score' => 'مجموع النقاط',
            // modding stats
            'graveyard_beatmapset_count' => 'الخرائط المقبورة',
            'loved_beatmapset_count' => 'خرائط Loved',
            'pending_beatmapset_count' => 'الخرائط المعلقة',
            'ranked_beatmapset_count' => 'الخرائط الـ Ranked',
        ],
    ],

    'silenced_banner' => [
        'title' => 'أنت مُقيد (صامت) حاليا.',
        'message' => 'قد تكون بعض الإجراءات غير متوفرة.',
    ],

    'status' => [
        'all' => 'الكل',
        'online' => 'متصل',
        'offline' => 'غير متصل',
    ],
    'store' => [
        'from_client' => 'الرجاء التسجيل داخل اللعبة بدلاً من هنا!',
        'from_web' => 'يرجى إكمال التسجيل عبر موقع osu!',
        'saved' => 'انشأ المستخدم',
    ],
    'verify' => [
        'title' => 'التحقق من الحساب',
    ],

    'view_mode' => [
        'brick' => 'عرض الطوب',
        'card' => 'العرض كبطاقة',
        'list' => 'عرض كلائحة',
    ],
];
