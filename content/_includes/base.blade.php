<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$siteDescription}}">

    <title>{{$siteName}} @yield('pageTitle')</title>
    <link rel="stylesheet" href="@url('app.css')">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="@url('/')">{{$siteName}}</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="@url('about')">About Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li >
                    <a href="https://itunes.apple.com/us/podcast/phpugly/id1093659401?mt=2">iTunes</a>
                </li>
                <li>
                    <a href="https://soundcloud.com/phpugly/">SoundCloud</a>
                </li>
                <li>
                    <a href="https://twitter.com/phpugly"><img height="25px" src="@url('twitter.png')"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="image-bg-fluid-height">
    <img class="img-responsive img-center" src="@url('phpelephant_200x200.png')" alt="">
</header>

<section>
    <div class="container">
        <h1 class="section-heading text-center">{{$siteName}}</h1>
        <h5 class="text-center">{{ $siteDescription }}</h5>
        <div class="row">
            <div class="col-lg-2">
                <p></p>
            </div>

            <div class="col-lg-8">
                @yield('body')
            </div>

            <div class="col-lg-2 text-right">
                <p>
                </p>
            </div>
        </div>
    </div>
</section>

<footer class="panel-footer">
    @markdown
    ---
    @endmarkdown

    <div class="containe">
        <div class="row">
            <div class="col-lg-4">
                <p>Thanks for listening </p>
            </div>
            <div class="col-lg-4 text-center">
                <p>Copyright &copy; {{$siteName}} {{ date('Y') }}</p>
            </div>
            <div class="col-lg-4 text-right">
                <p>
                    <a href="https://twitter.com/phpugly"><img height="25px" src="@url('twitter-5-xxl.png')"></a>
                    <a href="https://github.com/phpugly/podcast"><img height="25px" src="@url('github-10-xxl.png')"></a>
                </p>
            </div>
        </div>
    </div>
</footer>

<div class="clearfix"></div>
<script src="@url('app.js')"></script>

</body>
</html>