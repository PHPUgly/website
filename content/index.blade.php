@extends('_includes.base')

@section('body')

    <h2>Latest Shows</h2>
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
    <hr>

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 24
        *recorded August 18th, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/279242015&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode24)

        **Topics**

        * [Mr. Robot](http://www.usanetwork.com/mrrobot)
        * [SDPHP and SDLUG Meetups](http://www.meetup.com/SanDiegoPHP/)
        * [Flaw in Samsung Pay lets hackers wirelessly skim credit cards](http://www.zdnet.com/article/flaw-in-samsung-pay-lets-hackers-wirelessly-skim-credit-cards/)
        * [FIG Follies](http://paul-m-jones.com/archives/6389)
        * Being asked to work for free
        * [Delta looses power](http://www.bbc.com/news/world-us-canada-37007908) * [I want to know what code is running inside my body](https://backchannel.com/i-want-to-know-what-code-is-running-inside-my-body-ff9a159da34b#.mys4uytmt)o
        @endmarkdown

    </p>
    <hr>
    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 23
        *recorded August 11th, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/278378405&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode23)

        **Topics**

        * [Be the first employee at Laravel](https://larajobs.com/job/565/will-you-be-employee-1-at-laravel)
        * [Laracon Videos Available](https://streamacon.com/video/laracon-us)
        * [PHP-FIG Goes 3.0](https://medium.com/@michaelcullumuk/fig-3-0-91dbfd21c93b#.8uz4uo1mc)
        * [OMB finalizes policy on open source code from agencies](http://fedscoop.com/omb-code-gov-open-source-tony-scott-august-2016)
        * [PHP 7.1 Beta 2](http://php.net/index.php#id2016-08-04-1)
        * [Testla car drives owner to hospital](http://www.bbc.co.uk/newsbeat/article/37009696/tesla-car-drives-owner-to-hospital-after-he-suffers-pulmonary-embolism)
        * [Hulu ending free service](http://mashable.com/2016/08/08/hulu-ending-free-service/#JcHJTctMtOqw)
        * [I want to know what code is running inside my body](https://backchannel.com/i-want-to-know-what-code-is-running-inside-my-body-ff9a159da34b#.mys4uytmt)o
        @endmarkdown

    </p>
    <hr>
    <h2>Previous Shows</h2>

    @foreach($paginatedBlogPosts as $post)
        <article>
            <p>
                <a href="@url($post->path)">{{ $post->title }}</a>
                <br>
                <small>{{ $post->date }}</small>
                <br>
                {{ str_limit($post->brief, 300) }}
            </p>
        </article>
    @endforeach


@stop
