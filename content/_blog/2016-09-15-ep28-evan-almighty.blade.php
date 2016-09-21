@extends('_includes.blog_post_base')

@section('post::title', 'Episode 28: Evan Almighty')
@section('post::date', 'September 15th, 2016')
@section('post::brief', '
        * SDPHP and SDLUG Meet
        * Laravel Spark v2 is now released
        * The GitHub Universe
        * Laravel Shift - 1,000 applications upgraded
        * Someone Is Learning How to Take Down the Internet
')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 28
        *recorded September 15th, 2016*
        @endmarkdown
        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/283655671&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        @markdown

        [Sound Cloud](https://soundcloud.com/phpugly/episode28) | [Video](https://youtu.be/wBwRDDKTyu8)

        **Topics**

        * [SDPHP and SDLUG Meetups](http://www.meetup.com/SanDiegoPHP/)
        * Laravel Spark v2 is now [released](https://laravel-news.com/2016/09/spark-v2)
        * The [GitHub
        Universe](https://github.com/blog/2256-a-whole-new-github-universe-announcing-new-tools-forums-and-features)
        * [Laravel Shift - 1,000 applications
        upgraded](http://jason.pureconcepts.net/2016/09/laravel-shift-1000-applications-upgraded/)
        * [Someone Is Learning How to Take Down the
        Internet](https://www.schneier.com/blog/archives/2016/09/someone_is_lear.html)

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) /
        [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) /
        [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)

        Sponsor of this show:

        **The DiegoDev Group**

        [![DiegoDev Group](http://www.diegodev.com/img/logos/DiegoDev%20Group%20300x82.png "Logo DiegoDev
        Group")](https://www.diegodev.com)
        @endmarkdown

    </p>

@stop
