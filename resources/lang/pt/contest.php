<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'header' => [
        'small' => 'Compete em mais maneiras do que só clicar em círculos.',
        'large' => 'Concursos da comunidade',
    ],

    'index' => [
        'nav_title' => 'listagem',
    ],

    'judge' => [
        'comments' => 'comentários',
        'hide_judged' => 'esconder inscrições avaliadas',
        'nav_title' => 'avaliar',
        'no_current_vote' => 'Ainda não votaste.',
        'update' => 'atualizar',
        'validation' => [
            'missing_score' => 'pontuação em falta',
            'contest_vote_judged' => 'Não podes votar em concursos apreciados.',
        ],
        'voted' => 'Já votaste nesta inscrição.',
    ],

    'judge_results' => [
        '_' => 'Resultados da apreciação',
        'creator' => 'criador',
        'score' => 'Pontuação',
        'score_std' => '',
        'total_score' => 'pontuação total',
        'total_score_std' => '',
    ],

    'voting' => [
        'judge_link' => 'Tu fazes parte do júri deste concurso. Avalia aqui as participações!',
        'judged_notice' => 'Este concurso está a usar o sistema de apreciação. O júri está neste momento a tratar das participações.',
        'login_required' => 'Inicia sessão para votar.',
        'over' => 'A votação para este concurso terminou',
        'show_voted_only' => 'Mostrar votados',

        'best_of' => [
            'none_played' => "Não parece que jogaste nenhuns beatmaps que se qualificam para este concurso!",
        ],

        'button' => [
            'add' => 'Votar',
            'remove' => 'Remover voto',
            'used_up' => 'Usaste todos os teus votos',
        ],

        'progress' => [
            '_' => ':used / :max votos utilizados',
        ],

        'requirement' => [
            'playlist_beatmapsets' => [
                'incomplete_play' => 'Precisas de jogar todos os beatmaps nas playlists especificadas antes de votares',
            ],
        ],
    ],

    'entry' => [
        '_' => 'inscrição',
        'login_required' => 'Inicia sessão para entrar no concurso.',
        'silenced_or_restricted' => 'Não podes entrar em concursos enquanto estiveres restrito ou silenciado.',
        'preparation' => 'Estamos de momento a preparar este concurso. Agradecemos a tua paciência!',
        'drop_here' => 'Larga a tua inscrição aqui',
        'download' => 'Transferir .osz',

        'wrong_type' => [
            'art' => 'Somente ficheiros .jpg e .png são aceites para este concurso.',
            'beatmap' => 'Somente ficheiros .osu são aceites para este concurso.',
            'music' => 'Somente ficheiros .mp3 são aceites para este concurso.',
        ],

        'wrong_dimensions' => 'As entradas para este concurso devem ser :widthx:height',
        'too_big' => 'As inscrições para este concurso só podem ser até :limit.',
    ],

    'beatmaps' => [
        'download' => 'Transferir inscrição',
    ],

    'vote' => [
        'list' => 'votos',
        'count' => ':count voto|:count votos',
        'points' => ':count ponto|:count pontos',
        'points_float' => '',
    ],

    'dates' => [
        'ended' => 'Terminou em :date',
        'ended_no_date' => 'Concluído',

        'starts' => [
            '_' => 'Começa em :date',
            'soon' => 'em breve™',
        ],
    ],

    'states' => [
        'entry' => 'Entrada aberta',
        'voting' => 'A votação começou',
        'results' => 'Resultados',
    ],
];
