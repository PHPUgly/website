@extends('_includes.blog_post_base')

@section('post::title', 'Episode 18: What Time Is It')
@section('post::date', 'July 8th, 2016')
@section('post::brief', '
        * A blog post called The Autistic Programmer
        * Do PHP and IoT Have a Future Together?
        * Pipes (||) vs OR
        * The joys of Timezones in code. How is the best way to handle them?
        * Laracon.us now offering a live streaming package
        * Laravel Package Mailthief
        * A peak at VueJS 2.0 and what to expect

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        ### PHPUgly - Episode 18:What Time Is It?
        *recorded July 8th, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/272948036&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode18) | [Uncut
        Video](https://www.youtube.com/watch?v=LaQe9CC3oZg)

        **Topics**

        * A blog post called [The Autistic Programmer](http://shocm.me/29z2SRd)
        * [Do PHP and IoT Have a Future Together?](https://www.sitepoint.com/do-php-and-iot-have-a-future-together/)
        * Pipes (||) vs OR
        * The joys of Timezones in code. How is the best way to handle them?
        * Laracon.us now offering a [live streaming
        package](https://www.picatic.com/laracon-us-2016?code=dat-live-stream)
        * Laravel Package [Mailthief](https://github.com/tightenco/mailthief)
        * A peak at [VueJS 2.0](https://dotdev.co/peeking-into-vue-js-2-part-1-b457e60c88c6#.cgxxbjbef) and what to
        expect

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