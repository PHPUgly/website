@extends('_includes.base')

@section('body')

    <h2>Latest Show</h2>

    <p class="section-paragraph">
        @markdown
        #### Episode 17:Trademark This
        *recorded June 30th, 2016*
        @endmarkdown

        @markdown

        [Sound Cloud](https://soundcloud.com/phpugly/episode17)

        [Uncut Video](https://youtu.be/Kd2rZ0EjDdQ)

        **Topics**

        * Let's Encrypt Trademark issues
        * PHP Alpha 2 released
        * [October CMS version 1](https://octobercms.com/) releasing July 2nd
        * [Zend Framework 3.0 released](https://github.com/zendframework/zendframework/releases/tag/release-3.0.0)
        * [EU's Crazy Cookie Laws](https://murze.be/2016/06/make-laravel-app-comply-crazy-eu-cookie-law/)

        ## The hosts
        * Eric Van Johnson [Twitter](https://twitter.com/shocm) / [Github](https://github.com/ericvanjohnson/) / [Blog](https://www.shocm.com) / [About.me](https://about.me/shocm)
        * Tom Rideout [Twitter](https://twitter.com/realrideout) / [Github](https://github.com/trideout/) / [About.me](https://about.me/thomasrideout)
        * John Congdon [Twitter](https://twitter.com/johncongdon) / [Github](https://github.com/johncongdon)

        Follow us on Twitter [@PHPUgly](https://twitter.com/phpugly)

        Email us at [Podacast@phpugly.com](mailto:podcast@phpugly.com)
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

