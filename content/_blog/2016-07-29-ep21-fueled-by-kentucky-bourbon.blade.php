@extends('_includes.blog_post_base')

@section('post::title', 'Episode 21: Fueled by Kentucky Bourbon')
@section('post::date', 'July 29th, 2016')
@section('post::brief', '
        * SDLUG Meetup
        * Laracon Annoucements
        * More drama at the PHP FIG
        * Rasmus Lerdorf: All frameworks suck
        * How we broke PHP, hacked Pornhub and earned $20,000

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 21
        *recorded July 29t, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/276287000&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode20) | [Video](https://www.youtube.com/watch?v=GAwoYw8OatM)

        **Topics**

        * [SDLUG Meetup](https://www.meetup.com/San-Diego-Laravel-Meetup/)
        * [Laracon Annoucements](https://laravel-news.com/)
        * [More drama at the PHP FIG](https://groups.google.com/forum/#!topic/php-fig/OHKaXxPVWcQ)
        * [Rasmus Lerdorf: All frameworks suck](https://www.youtube.com/watch?v=DuB6UjEsY_Y)
        * [How we broke PHP, hacked Pornhub and earned $20,000](https://www.evonide.com/how-we-broke-php-hacked-pornhub-and-earned-20000-dollar/)


        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop