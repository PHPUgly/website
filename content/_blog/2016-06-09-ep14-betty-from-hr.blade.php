@extends('_includes.blog_post_base')

@section('post::title', 'Episode 14: Betty from HR')
@section('post::date', 'June 9, 2016')
@section('post::brief', 'PHP Statistics / PHP 7.1 / Grumphp')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269820467&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        *recorded June 9th, 2016*

        [Sound Cloud](https://soundcloud.com/phpugly/episode14)

        **Topics**

        * Our latest [Downtown SDPHP Meetup](http://www.meetup.com/sandiegophp/) and what's coming for North County
        * Recent contributes the PHPUgly crew has made to Open Source Projects
        * [PHP Versioning statistics](https://seld.be/notes/php-versions-stats-2016-1-edition) and how the move to PHP 7
        is looking
        * Some features queued up for [PHP 7.1](http://php.net/index.php#id2016-06-09-1)
        * and we discuss [grumphp](https://github.com/phpro/grumphp), a new tool to make sure you code is clean and
        compliant,

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