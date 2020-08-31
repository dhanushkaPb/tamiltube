@extends('layouts.main')


@section('title')
    Tamil Tube(LK)

@endsection

@section('body')

    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <!--header-->
            <div class="off-canvas position-left light-off-menu" id="offCanvas-responsive"
                data-off-canvas="hxo9cu-off-canvas" aria-hidden="true">
                <div class="off-menu-close">
                    <h3>Menu</h3>
                    <span data-toggle="offCanvas-responsive" aria-expanded="false" aria-controls="offCanvas-responsive"><i
                            class="fa fa-times"></i></span>
                </div>

                <div class="responsive-search">
                    <form method="post">
                        <div class="input-group">
                            <input class="input-group-field" type="text" placeholder="search Here">
                            <div class="input-group-button">
                                <button type="submit" name="search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
            <div class="off-canvas-content" data-off-canvas-content="">
                <header>

                    <section id="navBar">
                        <nav class="sticky-container" data-sticky-container="" style="height: 80px;">
                            <div class="sticky topnav is-stuck is-at-top" data-sticky="ct7ova-sticky"
                                data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0"
                                data-margin-bottom="0"
                                style="width: 100%; background: rgb(255, 255, 255); max-width: 1349px; margin-top: 0em; top: 0px; bottom: auto; left: 0px;"
                                data-sticky-on="large" data-resize="ju0klf-sticky">
                                <div class="row">
                                    <div class="large-12 columns">
                                        <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large"
                                            style="display: none;">
                                            <button class="menu-icon" type="button" data-toggle="offCanvas-responsive"
                                                aria-expanded="false" aria-controls="offCanvas-responsive"></button>
                                            <div class="title-bar-title"><img
                                                    src="{{ URL::asset('public/images/logo-small.png') }}" alt="logo"></div>
                                        </div>

                                        <div class="top-bar show-for-large" id="beNav" style="width: 100%;">
                                            <div class="top-bar-left">
                                                <ul class="menu">
                                                    <li class="menu-text">
                                                        <a href=""><img src="{{ URL::asset('public/images/logo.png') }}"
                                                                alt="logo"></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="top-bar-right">
                                                <ul class="menu vertical medium-horizontal dropdown"
                                                    data-responsive-menu="drilldown medium-dropdown" role="menubar"
                                                    data-dropdown-menu="kv5y5w-dropdown-menu">
                                                    <li class="has-submenu active is-dropdown-submenu-parent opens-right"
                                                        role="menuitem" aria-haspopup="true" aria-expanded="false"
                                                        aria-label="Home">
                                                        <a href="" tabindex="0"><i class="fa fa-home"></i>Home</a>
                                                        <ul class="submenu menu vertical is-dropdown-submenu first-sub"
                                                            data-submenu="" data-animate="slide-in-down slide-out-up"
                                                            aria-hidden="true" role="menu">
                                                            <li role="menuitem"
                                                                class="is-submenu-item is-dropdown-submenu-item"><a
                                                                    href="{{ url('/addaddpage') }}"><i
                                                                        class="fa fa-home"></i>Add Page</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="has-submenu is-dropdown-submenu-parent opens-right"
                                                        data-dropdown-menu="example1" role="menuitem" aria-haspopup="true"
                                                        aria-expanded="false" aria-label="Videos">
                                                        <a href="" tabindex="0"><i class="fa fa-film"></i>Videos</a>
                                                        <ul class="submenu menu vertical is-dropdown-submenu first-sub"
                                                            data-submenu="" data-animate="slide-in-down slide-out-up"
                                                            aria-hidden="true" role="menu">

                                                        </ul>
                                                    </li>
                                                    <li role="menuitem"><a href=""><i class="fa fa-th"></i>category</a></li>
                                                    <li role="menuitem" class="is-dropdown-submenu-parent opens-right"
                                                        aria-haspopup="true" aria-expanded="false" aria-label="blog">
                                                        <a href=""><i class="fa fa-edit"></i>blog</a>
                                                        <ul class="submenu menu vertical is-dropdown-submenu first-sub"
                                                            data-submenu="" data-animate="slide-in-down slide-out-up"
                                                            aria-hidden="true" role="menu">

                                                        </ul>
                                                    </li>
                                                    <li role="menuitem" class="is-dropdown-submenu-parent opens-right"
                                                        aria-haspopup="true" aria-expanded="false" aria-label="features">
                                                        <a href=""><i class="fa fa-magic"></i>features</a>
                                                        <ul class="submenu menu vertical is-dropdown-submenu first-sub"
                                                            data-submenu="" data-animate="slide-in-down slide-out-up"
                                                            aria-hidden="true" role="menu">
                                                            <li role="menuitem"
                                                                class="is-submenu-item is-dropdown-submenu-item"><a
                                                                    href=""><i class="fa fa-magic"></i>frfh</a></li>


                                                            <li role="menuitem"
                                                                class="is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item opens-right"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                aria-label="profile">
                                                                <a href=""><i class="fa fa-magic"></i>profile</a>
                                                                <ul class="submenu menu vertical is-dropdown-submenu"
                                                                    data-submenu=""
                                                                    data-animate="slide-in-down slide-out-up"
                                                                    aria-hidden="true" role="menu">
                                                                </ul>
                                                            </li>



                                                        </ul>
                                                    </li>
                                                    <li role="menuitem"><a href=""><i class="fa fa-user"></i>about</a></li>
                                                    <li role="menuitem"><a href=""><i class="fa fa-envelope"></i>contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="search-bar" class="clearfix search-bar-light">
                                    <form method="post">
                                        <div class="search-input float-left">
                                            <input type="search" name="search" placeholder="Seach Here your video">
                                        </div>
                                        <div class="search-btn float-right text-right">
                                            <button class="button" name="search" type="submit">search now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </section>
                </header><!-- End Header -->
                <!--breadcrumbs-->
                <section id="breadcrumb" class="breadcrumb-video-2">
                    <div class="row">
                        <div class="large-12 columns">
                            <nav aria-label="You are here:" role="navigation">
                                <ul class="breadcrumbs">
                                    <li><i class="fa fa-home"></i><a
                                            href="http://beetube.me/html-template/single-video-v2.html#">Home</a></li>
                                    <li><a href="http://beetube.me/html-template/single-video-v2.html#">Animation</a></li>
                                    <li class="disabled">Gene Splicing</li>
                                    <li>
                                        <span class="show-for-sr">Current: </span> Comedy video
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
                <!--end breadcrumbs-->

                <div class="row">
                    <!-- left side content area -->
                    <div class="large-8 columns">
                        <!--single inner video-->
                        <section class="inner-video">
                            <div class="row secBg">
                                <div class="large-12 columns inner-flex-video">
                                    <div class="flex-video widescreen">
                                        <iframe width="420" height="315" src="" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br>
                        <!-- single post stats collapse-->
                        <section class="SinglePostStats">
                            <div class="container">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="heading-1">
                                            <h5 class="mb-0">
                                                <a role="button" data-toggle="collapse" href="#collapse-1"
                                                    aria-expanded="true" aria-controls="collapse-1">
                                                    Grade 6/7/8/9
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-1" class="collapse show" data-parent="#accordion"
                                            aria-labelledby="heading-1">
                                            <div class="card-body">

                                                <div id="accordion-1">
                                                    <div class="card">
                                                        <div class="card-header" id="heading-1-1">
                                                            <h5 class="mb-0">
                                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                                    href="#collapse-1-1" aria-expanded="false"
                                                                    aria-controls="collapse-1-1">
                                                                    Grade 6
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapse-1-1" class="collapse" data-parent="#accordion-1"
                                                            aria-labelledby="heading-1-1">
                                                            <div class="card-body">

                                                                <div id="accordion-1-1">
                                                                    <div class="card">
                                                                        <div class="card-header" id="heading-1-1-1">
                                                                            <h5 class="mb-0">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    href="#collapse-1-1-1"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-1-1-1">
                                                                                    January(Month)
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapse-1-1-1" class="collapse"
                                                                            data-parent="#accordion-1-1"
                                                                            aria-labelledby="heading-1-1-1">
                                                                            <div class="card-body">
                                                                                <div class="embed-responsive embed-responsive-16by9">
                                                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                                                                  </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header" id="heading-1-1-2">
                                                                            <h5 class="mb-0">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    href="#collapse-1-1-2"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-1-1-2">
                                                                                    Item 1 > 1 > 2
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapse-1-1-2" class="collapse"
                                                                            data-parent="#accordion-1-1"
                                                                            aria-labelledby="heading-1-1-2">
                                                                            <div class="card-body">
                                                                                Text 1 > 1 > 2
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header" id="heading-1-1-3">
                                                                            <h5 class="mb-0">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    href="#collapse-1-1-3"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-1-1-3">
                                                                                    Item 1 > 1 > 3
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapse-1-1-3" class="collapse"
                                                                            data-parent="#accordion-1-1"
                                                                            aria-labelledby="heading-1-1-3">
                                                                            <div class="card-body">
                                                                                Text 1 > 1 > 3
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="heading-1-2">
                                                            <h5 class="mb-0">
                                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                                    href="#collapse-1-2" aria-expanded="false"
                                                                    aria-controls="collapse-1-2">
                                                                    Item 1 > 2
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapse-1-2" class="collapse" data-parent="#accordion-1"
                                                            aria-labelledby="heading-1-2">
                                                            <div class="card-body">
                                                                Text 1 > 2
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-2">
                                            <h5 class="mb-0">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
                                                    aria-expanded="false" aria-controls="collapse-2">
                                                   Grade 12/13
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-2" class="collapse" data-parent="#accordion"
                                            aria-labelledby="heading-2">
                                            <div class="card-body">
                                                <div id="accordion-2">
                                                    <div class="card">
                                                        <div class="card-header" id="heading-2-1">
                                                            <h5 class="mb-0">
                                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                                    href="#collapse-2-1" aria-expanded="false"
                                                                    aria-controls="collapse-2-1">
                                                                    Grade 6
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapse-2-1" class="collapse" data-parent="#accordion-2"
                                                            aria-labelledby="heading-2-1">
                                                            <div class="card-body">

                                                                <div id="accordion-2-1">
                                                                    <div class="card">
                                                                        <div class="card-header" id="heading-2-1-1">
                                                                            <h5 class="mb-0">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    href="#collapse-2-1-1"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-2-1-1">
                                                                                    January(Month)
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapse-2-1-1" class="collapse"
                                                                            data-parent="#accordion-2-1"
                                                                            aria-labelledby="heading-2-1-1">
                                                                            <div class="card-body">
                                                                                <div class="embed-responsive embed-responsive-16by9">
                                                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                                                                  </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header" id="heading-2-1-2">
                                                                            <h5 class="mb-0">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    href="#collapse-2-1-2"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-2-1-2">
                                                                                    Item 1 > 1 > 2
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapse-2-1-2" class="collapse"
                                                                            data-parent="#accordion-2-1"
                                                                            aria-labelledby="heading-2-1-2">
                                                                            <div class="card-body">
                                                                                Text 1 > 1 > 2
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header" id="heading-2-1-3">
                                                                            <h5 class="mb-0">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    href="#collapse-2-1-3"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-2-1-3">
                                                                                    Item 1 > 1 > 3
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapse-2-1-3" class="collapse"
                                                                            data-parent="#accordion-2-1"
                                                                            aria-labelledby="heading-2-1-3">
                                                                            <div class="card-body">
                                                                                Text 1 > 1 > 3
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="heading-2-2">
                                                            <h5 class="mb-0">
                                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                                    href="#collapse-2-2" aria-expanded="false"
                                                                    aria-controls="collapse-2-2">
                                                                    Item 1 > 2
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapse-2-2" class="collapse" data-parent="#accordion-2"
                                                            aria-labelledby="heading-2-2">
                                                            <div class="card-body">
                                                                Text 1 > 2
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <h5 class="mb-0">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
                                                    aria-expanded="false" aria-controls="collapse-3">
                                                    Item 3
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-3" class="collapse" data-parent="#accordion"
                                            aria-labelledby="heading-3">
                                            <div class="card-body">
                                                Text 3
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section><!-- End single post stats -->

                        <!-- single post description -->
                        <section class="singlePostDescription">

                        </section><!-- End single post description -->

                        <!-- related Posts -->
                        <section class="content content-with-sidebar related">

                        </section>
                        <!--end related posts-->
                        <!-- Comments -->
                        <section class="content comments">

                        </section><!-- End Comments -->
                    </div><!-- end left side content area -->

                    <!-- sidebar -->
                    <div class="large-4 columns">
                        <aside class="secBg sidebar">
                            <div class="row">
                                <!-- search Widget -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Search Videos</h5>
                                        </div>
                                        <form id="searchform" method="get" role="search">
                                            <div class="input-group">
                                                <input class="input-group-field" type="text"
                                                    placeholder="Enter your keyword">
                                                <div class="input-group-button">
                                                    <input type="submit" class="button" value="Submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- End search Widget -->

                                <!-- most view Widget -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Most View Videos</h5>
                                        </div>
                                        <div class="widgetContent">
                                            <div class="video-box thumb-border">

                                            </div>
                                            <div class="video-box thumb-border">
                                                <div class="video-img-thumb">

                                                </div>
                                                <div class="video-box-content">

                                                </div>
                                            </div>
                                            <div class="video-box thumb-border">

                                            </div>
                                            <div class="video-box thumb-border">

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end most view Widget -->

                                <!-- categories -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox clearfix">
                                        <div class="widgetTitle">
                                            <h5>Categories</h5>
                                        </div>
                                        <div class="widgetContent clearfix">
                                            <ul>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- social Fans Widget -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>social fans</h5>
                                        </div>
                                        <div class="widgetContent">
                                            <div class="social-links">
                                                <a class="socialButton" href="">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>698K</span>
                                                    <span>fans</span>
                                                </a>
                                                <a class="socialButton" href="">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>598</span>
                                                    <span>followers</span>
                                                </a>
                                                <a class="socialButton" href="">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>98k</span>
                                                    <span>followers</span>
                                                </a>
                                                <a class="socialButton" href="">
                                                    <i class="fa fa-youtube"></i>
                                                    <span>168k</span>
                                                    <span>followers</span>
                                                </a>
                                                <a class="socialButton" href="">
                                                    <i class="fa fa-vimeo"></i>
                                                    <span>498</span>
                                                    <span>followers</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End social Fans Widget -->

                                <!-- ad banner widget -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Recent post videos</h5>
                                        </div>
                                        <div class="widgetContent">
                                            <div class="advBanner text-center">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#"><img
                                                        src="{{ URL::asset('public/images/sideradv.png') }}"
                                                        alt="sidebar adv"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end ad banner widget -->

                                <!-- Recent post videos -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Recent post videos</h5>
                                        </div>
                                        <div class="widgetContent">
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">
                                                        <img src="{{ URL::asset('public/images/category4.png') }}"
                                                            alt="recent">
                                                        <a href="http://beetube.me/html-template/single-video-v2.html#"
                                                            class="hover-posts">
                                                            <span><i class="fa fa-play"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">

                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">

                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">
                                                        <img src="public/images/sidebar-recent2.png" alt="recent">
                                                        <a href="" class="hover-posts">
                                                            <span><i class="fa fa-play"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">
                                                        <h6><a href="">The
                                                                lorem Ipsumbeen the industry's standard.</a></h6>
                                                        <p><i class="fa fa-user"></i><span>admin</span><i
                                                                class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Recent post videos -->

                                <!-- tags -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Tags</h5>
                                        </div>
                                        <div class="tagcloud">
                                            <a href="">3D Videos</a>

                                        </div>
                                    </div>
                                </div><!-- End tags -->
                            </div>
                        </aside>
                    </div><!-- end sidebar -->
                </div>

                <!-- footer -->
                <footer>
                    <div class="row">
                        <div class="large-3 medium-6 columns">
                            <div class="widgetBox">
                                <div class="widgetTitle">
                                    <h5>About Betube</h5>
                                </div>
                                <div class="textwidget">
                                    Betube video wordpress theme lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s book.
                                </div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 columns">
                            <div class="widgetBox">
                                <div class="widgetTitle">
                                    <h5>Recent Videos</h5>
                                </div>
                                <div class="widgetContent">
                                    <div class="media-object">
                                        <div class="media-object-section">
                                            <div class="recent-img">
                                                <img src="public/images/recent1.png" alt="recent">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#"
                                                    class="hover-posts">
                                                    <span><i class="fa fa-play"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-object-section">
                                            <div class="media-content">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The
                                                        lorem Ipsumbeen the industry's standard.</a></h6>
                                                <p><i class="fa fa-user"></i><span>admin</span><i
                                                        class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-object">
                                        <div class="media-object-section">
                                            <div class="recent-img">
                                                <img src="public/images/1.jpg" alt="recent">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#"
                                                    class="hover-posts">
                                                    <span><i class="fa fa-play"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-object-section">
                                            <div class="media-content">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The
                                                        lorem Ipsumbeen the industry's standard.</a></h6>
                                                <p><i class="fa fa-user"></i><span>admin</span><i
                                                        class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-object">
                                        <div class="media-object-section">
                                            <div class="recent-img">
                                                <img src="public/images/recent3.png" alt="recent">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#"
                                                    class="hover-posts">
                                                    <span><i class="fa fa-play"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-object-section">
                                            <div class="media-content">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The
                                                        lorem Ipsumbeen the industry's standard.</a></h6>
                                                <p><i class="fa fa-user"></i><span>admin</span><i
                                                        class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 columns">
                            <div class="widgetBox">
                                <div class="widgetTitle">
                                    <h5>Tags</h5>
                                </div>
                                <div class="tagcloud">
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">3D Videos</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">Videos</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">HD</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">Movies</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">Sports</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">3D</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">Movies</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">Animation</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">HD</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">Music</a>
                                    <a href="http://beetube.me/html-template/single-video-v2.html#">Recreation</a>
                                </div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 columns">
                            <div class="widgetBox">
                                <div class="widgetTitle">
                                    <h5>Subscribe Now</h5>
                                </div>
                                <div class="widgetContent">
                                    <form data-abide="kybibt-abide" novalidate="" method="post">
                                        <p>Subscribe to get exclusive videos</p>
                                        <div class="input">
                                            <input type="text" placeholder="Enter your full Name" required="">
                                            <span class="form-error">
                                                Yo, you had better fill this out, it's required.
                                            </span>
                                        </div>
                                        <div class="input">
                                            <input type="email" id="email" placeholder="Enter your email address"
                                                required="">
                                            <span class="form-error">
                                                I'm required!
                                            </span>
                                        </div>
                                        <button class="button" type="submit" value="Submit">Sign up Now</button>
                                    </form>
                                    <div class="social-links">
                                        <h5>We’re a Social Bunch</h5>
                                        <a class="secondary-button"
                                            href="http://beetube.me/html-template/single-video-v2.html#"><i
                                                class="fa fa-facebook"></i></a>
                                        <a class="secondary-button"
                                            href="http://beetube.me/html-template/single-video-v2.html#"><i
                                                class="fa fa-twitter"></i></a>
                                        <a class="secondary-button"
                                            href="http://beetube.me/html-template/single-video-v2.html#"><i
                                                class="fa fa-google-plus"></i></a>
                                        <a class="secondary-button"
                                            href="http://beetube.me/html-template/single-video-v2.html#"><i
                                                class="fa fa-instagram"></i></a>
                                        <a class="secondary-button"
                                            href="http://beetube.me/html-template/single-video-v2.html#"><i
                                                class="fa fa-vimeo"></i></a>
                                        <a class="secondary-button"
                                            href="http://beetube.me/html-template/single-video-v2.html#"><i
                                                class="fa fa-youtube"></i></a>
                                        <a class="secondary-button"
                                            href="http://beetube.me/html-template/single-video-v2.html#"><i
                                                class="fa fa-flickr"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="http://beetube.me/html-template/single-video-v2.html#" id="back-to-top" title="Back to top"
                        class="show"><i class="fa fa-angle-double-up"></i></a>
                </footer><!-- footer -->
                <div id="footer-bottom">
                    <div class="logo text-center">
                        <img src="public/images/footerlogo.png" alt="footer logo">
                    </div>
                    <div class="btm-footer-text text-center">
                        <p>2016 © Betube video wordpress theme.</p>
                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
            <!--end off canvas content-->
        </div>
        <!--end off canvas wrapper inner-->
    </div>
@endsection
