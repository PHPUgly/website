@extends('_includes.blog_post_base')

@section('post::title', 'Episode 26: Difficult People')
@section('post::date', 'September 1st, 2016')
@section('post::brief', '
        * Using Stasis to host composer dependencies
        * We were mentioned on PHPDeveloper.org
        * Dropbox hack leads to dumping of 68m user passwords
        * PHP 7.1 RC1
        * VueJS v2.0.0-rc.4
        * Atom.io
        * Qualys SSL Labs
        * Have I been pwned
        * World\'s Biggest Data Breaches
')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    <p class="section-paragraph">
        @markdown
        ### PHPUgly - Episode 26
        *recorded September 1st, 2016*
        @endmarkdown
        <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/281415452&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

        @markdown
        [Sound Cloud](https://soundcloud.com/phpugly/episode26) | [Video](https://youtu.be/BaGA8C95J3c)

        **Topics**

        * [Using Stasis to host composer dependencies](https://www.sitepoint.com/local-composer-for-everyone-a-conference-friendly-satis-setup/)
        * We were mentioned on [PHPDeveloper.org](http://www.phpdeveloper.org/news/24349)
        * [Dropbox hack leads to dumping of 68m user passwords](https://www.theguardian.com/technology/2016/aug/31/dropbox-hack-passwords-68m-data-breach)
        * [PHP 7.1 RC1](http://php.net/index.php#id2016-09-01-1)
        * [VueJS v2.0.0-rc.4](https://github.com/vuejs/vue/releases/tag/v2.0.0-rc.4)
        * [Atom.io](https://atom.io/)
        * [Qualys SSL Labs](https://www.ssllabs.com/)
        * [Have I been pwned](https://haveibeenpwned.com/)
        * [World's Biggest Data Breaches](http://www.informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/)

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
