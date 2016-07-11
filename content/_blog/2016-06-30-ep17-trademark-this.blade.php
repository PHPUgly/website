@extends('_includes.blog_post_base')

@section('post::title', 'Episode 17: Trademark This')
@section('post::date', 'June 30th, 2016')
@section('post::brief', '
        * Let\'s Encrypt Trademark issues
        * PHP Alpha 2 released
        * October CMS version 1
        * Zend Framework 3.0 released
        * EU\'s Crazy Cookie Laws

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        #### Episode 17:Trademark This
        *recorded June 30th, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/271940072&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        @markdown

        [Sound Cloud](https://soundcloud.com/phpugly/episode17) | [Uncut Video](https://youtu.be/Kd2rZ0EjDdQ)

        **Topics**

        * Let's Encrypt Trademark issues
        * PHP Alpha 2 released
        * [October CMS version 1](https://octobercms.com/) releasing July 2nd
        * [Zend Framework 3.0 released](https://github.com/zendframework/zendframework/releases/tag/release-3.0.0)
        * [EU's Crazy Cookie Laws](https://murze.be/2016/06/make-laravel-app-comply-crazy-eu-cookie-law/)

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