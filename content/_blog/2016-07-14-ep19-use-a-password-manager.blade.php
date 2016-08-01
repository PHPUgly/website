@extends('_includes.blog_post_base')

@section('post::title', 'Episode 19: Use A Password Manager')
@section('post::date', 'July 14th, 2016')
@section('post::brief', '
        * PHP 5.5 Reaches EOL
        * SDPHP Downtown Meetup
        * The Security Vulnerability of target=_blank
        * Many projects that use the [bad practice of extract ($_GET)]
        * PHPStorm Plugin Ideavim
        * Github gets syntax highlighting for Blade Templates
        * Amazon\'s AWS buys Cloud9 Cloud IDE
        * New service for reading PHP Internals called Externals.io
        * Running your RaspberryPi with PHP

')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 19
        *recorded July 14th, 2016*
        @endmarkdown
        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/274168460&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode19) | [Uncut Video](https://www.youtube.com/watch?v=FH2AaP0zSHw)
        **Topics**

        * [PHP 5.5 Reaches EOL](http://php.net/supported-versions.php)
        * [SDPHP Downtown Meetup](http://www.meetup.com/sandiegophp/)
        * The Security Vulnerability of [target=_blank](https://medium.com/@jitbit/target-blank-the-most-underestimated-vulnerability-ever-96e328301f4c#.vfb3qummf)
        * Many projects that use the [bad practice of extract ($_GET)](https://www.reddit.com/r/PHP/comments/4rtrrb/nearly_900000_projects_on_github_use_extract_get/)
        * PHPStorm Plugin [Ideavim](https://plugins.jetbrains.com/plugin/164) gets an update
        * [Github gets syntax highlighting for Blade Templates](https://laravel-news.com/2016/07/github-now-supports-blade-syntax-highlighting/)
        * [Amazon's AWS buys Cloud9 Cloud IDE](https://techcrunch.com/2016/07/14/amazons-aws-buys-cloud9-to-add-more-development-tools-to-its-web-services-stack/)
        * New service for reading PHP Internals called [Externals.io](http://externals.io/)
        * Running your [RaspberryPi with PHP](https://www.sitepoint.com/powering-raspberry-pi-projects-with-php/)


        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
        @endmarkdown

    </p>

@stop