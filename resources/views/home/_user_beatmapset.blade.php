{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
    See the LICENCE file in the repository root for full licence text.
--}}
@php
    $user = Auth::user();
    $href = $type === 'daily_challenge' && isset($dailyChallenge) 
        ? route('daily-challenge.show', [
            'daily_challenge' => \App\Libraries\DailyChallengeDateHelper::roomId($dailyChallenge)
        ])
        : route('beatmapsets.show', $beatmapset->beatmapset_id);
@endphp
<a class='user-home-beatmapset' href="{{$href}}">
    @include('objects._beatmapset_cover', [
        'beatmapset' => $beatmapset,
        'modifiers' => 'home',
        'size' => 'list',
    ])

    <div class="user-home-beatmapset__meta">
        <div class="user-home-beatmapset__title-container">
            @foreach ($beatmapset->playmodesStr() as $playmode)
                <div class="user-home-beatmapset__playmode-icon" title="{{ osu_trans("beatmaps.mode.{$playmode}") }}">
                    <span class="fal fa-extra-mode-{{$playmode}}"></span>
                </div>
            @endforeach

            <div class='user-home-beatmapset__title u-ellipsis-overflow'>
                {{ $beatmapset->getDisplayTitle($user) }}
            </div>
        </div>
        <div class='user-home-beatmapset__artist u-ellipsis-overflow'>
            {{ $beatmapset->getDisplayArtist($user) }}
        </div>
        <div class='user-home-beatmapset__creator u-ellipsis-overflow'>
            {!! osu_trans('home.user.beatmaps.by_user', ['user' => tag(
                'span',
                ['data-user-id' => $beatmapset->user_id, 'class' => 'js-usercard'],
                e($beatmapset->creator)
            )]) !!}

            <span class='user-home-beatmapset__playcount'>
                @if ($type === 'new')
                    {!! timeago($beatmapset->approved_date) !!}
                @elseif ($type === 'popular')
                    <span class="fa fa-heart"></span>
                    {{ i18n_number_format($beatmapset->favourite_count) }}
                @elseif ($type === 'daily_challenge')
                    {!! osu_trans('home.user.beatmaps.resets', ['ends' => timeago($dailyChallenge->ends_at)]) !!}
                @endif
            </span>
        </div>
    </div>
    <div class='user-home-beatmapset__chevron'><i class='fas fa-chevron-right'></i></div>
</a>
