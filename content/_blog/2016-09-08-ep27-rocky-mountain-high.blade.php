@extends('_includes.blog_post_base')

@section('post::title', 'Episode 27: Rocky Mountain High')
@section('post::date', 'September 8st, 2016')
@section('post::brief', '
        * PyroCMS 3.1 released built on Laravel 5.3
        * The End of SDPHP North County? Or Is it?
        * PHPUgly Host John Congdon newest article in the September 2016 edition of php[arch]
        * Lumen 5.3 is released
        * Git 2.10 has been released
        * The perspection of Youtube Censorship
        * Check out DiegoDev new Blog
')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 27
        *recorded September 8st, 2016*
        @endmarkdown

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode27) | [Video](https://youtu.be/BaGA8C95J3c)

        **Topics**

        * PyroCMS 3.1 [released](http://www.pyrocms.com/posts/2016/09/01/pyrocms-3-1) built on Laravel 5.3
        * The End of SDPHP North County? Or Is it?
        * PHPUgly Host John Congdon [@johncongdon](https://twitter.com/johncongdon) newest article in the [September 2016 edition of php[arch]](https://www.phparch.com/2016/09/september-2016-legacy-code-of-the-ancients/)
        * [Lumen 5.3 is released](https://laravel-news.com/2016/09/lumen-5-3-is-released/)
        * Git 2.10 has been [released](https://github.com/blog/2242-git-2-10-has-been-released)
        * The perspection of Youtube Censorship
        * Check out DiegoDev new [Blog](https://blog.diegodev.com)

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)

        Sponsor of this show:

        **The DiegoDev Group**

        [![DiegoDev Group](http://www.diegodev.com/img/logos/DiegoDev%20Group%20300x82.png "Logo DiegoDev Group")](https://www.diegodev.com)
        @endmarkdown

    </p>

@stop
