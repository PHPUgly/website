@extends('_includes.blog_post_base')

@section('post::title', 'Episode 30: Toms Green Thumb')
@section('post::date', 'September 30th, 2016')
@section('post::brief', '
        * Laravel Forge adds a new development blog
        * DigitalOcean and Github Hacktoberfest
        * Symfony Reaches 500 Million Downloads
        * Bugsnag adds support for seeing what happens before an exception is thrown
        * Vue 2.0 released
        * Linux kernel security needs a rethink
        * PHP 7.1.0 Release Candidate 3 Released
        * Apache Spot uses AI to filter network traffic
        * Why are you not taking LSD to improve your work performance?
        * Would you take LSD to give you a boost at work?
        * SpaceX Interplanitary Transport Announced
')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 30
        *recorded September 30th, 2016*
        @endmarkdown
        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/285805555&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        @markdown

        [Sound Cloud](https://soundcloud.com/phpugly/episode30) |
        [Video](http://youtu.be/au_QLjiUHLc)

        **Topics**

        * Laravel Forge adds a new [development blog](https://forge-blog.laravel.com/)
        * DigitalOcean and Github [Hacktoberfest](https://hacktoberfest.digitalocean.com/)
        * Symfony Reaches [500 Million Downloads](http://symfony.com/blog/symfony-reaches-500-million-downloads)
        * [Bugsnag adds support for seeing what happens before an exception is thrown](http://blog.bugsnag.com/track-events-leading-to-exception-in-laravel)
        * [Vue 2.0 released](https://laravel-news.com/2016/09/bugsnag-adds-support-for-seeing-what-happens-before-an-exception-is-thrown/)
        * [Linux kernel security needs a rethink](http://arstechnica.com/security/2016/09/linux-kernel-security-needs-fixing/)
        * [PHP 7.1.0 Release Candidate 3 Released](http://php.net/archive/2016.php#id2016-09-29-1)
        * [Apache Spot uses AI to filter network traffic](http://www.csoonline.com/article/3124497/big-data/meet-apache-spot-a-new-open-source-project-for-cybersecurity.html)
        * [Why are you not taking LSD to improve your work performance?](http://www.wired.co.uk/article/lsd-microdosing-drugs-silicon-valley)
        * [Would you take LSD to give you a boost at work?](http://www.wired.co.uk/article/lsd-microdosing-drugs-silicon-valley)
        * [SpaceX Interplanitary Transport Announced](https://www.youtube.com/watch?v=0qo78R_yYFA)

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) /
        [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) /
        [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)

        Sponsor of this show:

        **The DiegoDev Group**

        [![DiegoDev Group](http://www.diegodev.com/img/logos/DiegoDev%20Group%20300x82.png "Logo DiegoDev
        Group")](https://www.diegodev.com)
        @endmarkdown

    </p>

@stop
