@extends('_includes.blog_post_base')

@section('post::title', 'Episode 23: Government Funded')
@section('post::date', 'August 11th, 2016')
@section('post::brief', '
        * Be the first employee at Laravel
        * Laracon Videos Available
        * PHP-FIG Goes 3.0
        * OMB finalizes policy on open source code from agencies
        * PHP 7.1 Beta 2
        * Testla car drives owner to hospital
        * Hulu ending free service
        * I want to know what code is running inside my body

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 23
        *recorded August 11th, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/278378405&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode23) | [Video](https://www.youtube.com/watch?v=aD2Al-bCn6o)

        **Topics**

        * [Be the first employee at Laravel](https://larajobs.com/job/565/will-you-be-employee-1-at-laravel)
        * [Laracon Videos Available](https://streamacon.com/video/laracon-us)
        * [PHP-FIG Goes 3.0](https://medium.com/@michaelcullumuk/fig-3-0-91dbfd21c93b#.8uz4uo1mc)
        * [OMB finalizes policy on open source code from agencies](http://fedscoop.com/omb-code-gov-open-source-tony-scott-august-2016)
        * [PHP 7.1 Beta 2](http://php.net/index.php#id2016-08-04-1)
        * [Testla car drives owner to hospital](http://www.bbc.co.uk/newsbeat/article/37009696/tesla-car-drives-owner-to-hospital-after-he-suffers-pulmonary-embolism)
        * [Hulu ending free service](http://mashable.com/2016/08/08/hulu-ending-free-service/#JcHJTctMtOqw)
        * [I want to know what code is running inside my body](https://backchannel.com/i-want-to-know-what-code-is-running-inside-my-body-ff9a159da34b#.mys4uytmt)o

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop