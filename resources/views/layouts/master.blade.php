<!DOCTYPE html>
<html class="no-js" lang="tr">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Tarık KAMAT - @yield('title')</title>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('front/css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('front/js/modernizr.js') }}"></script>
</head>

<body>

<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div id="top" class="s-wrap site-wrapper">

    <!-- site header
    ================================================== -->
    <header class="s-header">

        <div class="header__top">
            <div class="header__logo">
                <a class="site-logo" href="/">
                    <img src="{{ asset('front/images/logo.svg') }}" alt="Homepage">
                </a>
            </div>
        </div> <!-- end header__top -->

        <nav class="header__nav-wrap">

            <ul class="header__nav">
                <li class=""><a href="/" title="">Ana sayfa</a></li>
                <li class="has-children">
                    <a href="#0" title="">Categories</a>
                    <ul class="sub-menu">
                        @foreach(\App\Models\Category::all() as $category)
                            <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul> <!-- end header__nav -->

        </nav> <!-- end header__nav-wrap -->

        <!-- menu toggle -->
        <a href="#0" class="header__menu-toggle">
            <span>Menu</span>
        </a>

    </header> <!-- end s-header -->


    <!-- site content
    ================================================== -->
    @yield('content')
    <!-- end s-content -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">
        <div class="row">
            <div class="column large-full footer__content">
                <div class="footer__copyright">
                    <span><a href="https://github.com/tarikkamat">Tarık KAMAT</a></span>

                    <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                </div>
            </div>
        </div>

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>
    </footer>

</div> <!-- end s-wrap -->


<!-- Java Script
================================================== -->
<script src="{{ asset('front/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('front/js/plugins.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>

</body>
