@extends('_includes.blog_post_base')

@section('post::title', 'Episode 15: Coder Boner')
@section('post::date', 'June 16, 2016')
@section('post::brief', 'SDPHP Meetup / Friending People / LinkedIn / Github / PyroCMS')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269820467&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        @markdown
        *recorded June 16th, 2016*
        [Sound Cloud](https://soundcloud.com/phpugly/episode15)

        **Topics**

        * The [North County SDPHP Meetup](http://www.meetup.com/sandiegophp/)
        * If "Friending" Clients and Employees is a good idea
        * [Microsoft Buys LinkedIn](http://news.microsoft.com/2016/06/13/microsoft-to-acquire-linkedin/)
        * Being green just got a little easier with [Github adding your Private repos to your public
        profile](https://github.com/blog/2173-more-contributions-on-your-profile)
        * and [PyroCMS v3 built with Laravel](https://laravel-news.com/2016/06/pyrocms-v3-announced/)

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) /
        [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) /
        [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop