@extends('_includes.blog_post_base')

@section('post::title', 'Episode 25: Baby Talk')
@section('post::date', 'August 25th, 2016')
@section('post::brief', '
        * Getting yelled at by your idol
          * Phil Sturgeon\'s Talking About Diversity: Conspiracy
        * OPcache Settings/Configuration
        * We got to hang out with the Larachat Live Team Ep13
        * Laravel 5.3 Released
        * MariaDB Corp announces non-free license
        * Microsoft continues to surprise with open source
        * NPM Breaks the internet..again
')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 25
        *recorded August 26th, 2016*
        @endmarkdown
        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/280393173&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode25) | [Video](https://youtu.be/pRAwpDmU4V4)

        **Topics**

        * [Getting yelled at by your idol](https://twitter.com/RealRideout/status/769224458108305408)
          * [Phil Sturgeon's Talking About Diversity: Conspiracy](https://philsturgeon.uk/2016/08/02/talking-about-diversity-conspiracy/)
        * OPcache Settings/Configuration
        * We got to hang out with the [Larachat Live Team Ep13](https://www.youtube.com/watch?v=1a7Zw6_e_tk)
        * [Laravel 5.3 Released](http://www.laravel.com)
        * [MariaDB Corp announces non-free license](http://www.infoworld.com/article/3109213/open-source-tools/open-source-uproar-as-mariadb-goes-commercial.html)
        * [Microsoft continues to surprise with open source](http://indianexpress.com/article/technology/tech-news-technology/microsoft-powershell-open-source-linux-os-x-2993633/)
        * [NPM Breaks the internet..again](http://status.npmjs.org/incidents/dw8cr1lwxkcr)

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop
