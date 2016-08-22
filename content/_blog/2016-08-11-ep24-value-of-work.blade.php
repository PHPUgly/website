@extends('_includes.blog_post_base')

@section('post::title', 'Episode 24: The Value of Work')
@section('post::date', 'August 18th, 2016')
@section('post::brief', '
        * Mr. Robot
        * SDPHP and SDLUG Meetups
        * Flaw in Samsung Pay lets hackers wirelessly skim credit cards
        * FIG Follies
        * Being asked to work for free
        * Delta looses power

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 24
        *recorded August 18th, 2016*
        @endmarkdown

        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/279242015&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode23) | [Video](https://www.youtube.com/watch?v=aD2Al-bCn6o)

        **Topics**

        * [Mr. Robot](http://www.usanetwork.com/mrrobot)
        * [SDPHP and SDLUG Meetups](http://www.meetup.com/SanDiegoPHP/)
        * [Flaw in Samsung Pay lets hackers wirelessly skim credit cards](http://www.zdnet.com/article/flaw-in-samsung-pay-lets-hackers-wirelessly-skim-credit-cards/)
        * [FIG Follies](http://paul-m-jones.com/archives/6389)
        * Being asked to work for free
        * [Delta looses power](http://www.bbc.com/news/world-us-canada-37007908) * [I want to know what code is running inside my body](https://backchannel.com/i-want-to-know-what-code-is-running-inside-my-body-ff9a159da34b#.mys4uytmt)o

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop