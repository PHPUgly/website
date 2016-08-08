@extends('_includes.blog_post_base')

@section('post::title', 'Episode 22: International Edition')
@section('post::date', 'August 4th, 2016')
@section('post::brief', '
        * SDPHP Meetup
        * Phalcon 3.0.0 Released
        * Alexa Skills for PHP
        * Tom bought a security camera
        * Developers we look up to

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 22
        *recorded August 4th, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/277268334&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode22) | [Video](https://www.youtube.com/watch?v=aD2Al-bCn6o)

        **Topics**

        * [SDPHP Meetup](http://www.meetup.com/SanDiegoPHP/)
        * [Phalcon 3.0.0 Released](https://blog.phalconphp.com/post/phalcon-3-0-0-released)
        * [Alexa Skills for PHP](https://www.reddit.com/r/PHP/comments/4v0wpe/alexa_skills_framework_for_php_web_services/)
        * [Tom bought a security camera](https://www.angelcam.com/)
        * Developers we look up to

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop