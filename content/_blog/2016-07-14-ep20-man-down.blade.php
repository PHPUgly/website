@extends('_includes.blog_post_base')

@section('post::title', 'Episode 20: Man Down!')
@section('post::date', 'July 21st, 2016')
@section('post::brief', '
        * SDPHP Downtown Meetup
        * Some changes that are coming to Laravel 5.3
        * How one Regex string brought down Stackoverflow
        * PHP 7.1 hits Beta
        * How Facebook can decide to revoke your license to React.js

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 20
        *recorded July 21st, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/275225667&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode20) | [Video](https://www.youtube.com/watch?v=GAwoYw8OatM)

        **Topics**

        * [SDPHP Downtown Meetup](http://www.meetup.com/sandiegophp/)
        * [Some changes that are coming to Laravel 5.3](https://laravel-news.com/2016/07/laravel-5-3-changes-app-folder/)
        * [How one Regex string brought down Stackoverflow](http://stackstatus.net/post/147710624694/outage-postmortem-july-20-2016)
        * [PHP 7.1 hits Beta](http://php.net/index.php#id2016-07-21-1)
        * [How Facebook can decide to revoke your license to React.js](http://react-etc.net/entry/your-license-to-use-react-js-can-be-revoked-if-you-compete-with-facebook)

        On a side note, we would like to welcome the newest member of the PHPUgly family, Nolan Congdon, new son of the host [ John  Congdon ](https://twitter.com/johncongdon). All our best wishes go out to the entire Congdon family.


        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop