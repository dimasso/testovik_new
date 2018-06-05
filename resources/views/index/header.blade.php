<style>
    .top-bar--light #top-bar__navigation a span:after, .top-bar--light #top-bar__navigation-toggler span, .top-bar--light #top-bar__navigation-toggler span:after, .top-bar--light #top-bar__navigation-toggler span:before{
        background-color: rgba(243,111,98,1);
    }
</style>

<!-- start header -->
<header id="top-bar" class="top-bar--light">
    <div id="top-bar__inner">
        <a id="top-bar__logo" class="site-logo" href="/">
            <img class="img-responsive" height="42" src="/static/img/site_logo.png"/>
            <img class="img-responsive" height="42" src="/static/img/site_logo.png"/>
        </a>

        <a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

        <div id="top-bar__navigation-wrap">
            <div>
                <nav id="top-bar__navigation" class="navigation" role="navigation">
                    <ul>
                        <li class="active">
                            <style>
                                .home-mobile-new{
                                    display: inline !important; float: none !important;
                                }

                                .lang-mobile-new{
                                    display: none !important;
                                }

                                .show-mobile-clear{
                                    display: none;
                                }

                                .show-mobile-clear{
                                    display: none;
                                }

                                .hide-mobile-clear{
                                    display: block;
                                }

                                @media screen and (max-width: 992px) {
                                    .home-mobile-new{
                                        display: inline; float: left !important;
                                    }

                                    .lang-mobile-new{
                                        float: left; margin-top: -7px !important; margin-left: 50px; display: block !important;
                                    }

                                    .show-mobile-clear{
                                        display: block;
                                    }

                                    .hide-mobile-clear{
                                        display: none !important;
                                    }
                                }
                            </style>
                            <a href="" class="home-mobile-new"><span>Home</span></a>

                            <li class="lang-mobile-new">
                                <div id="top-bar__choose-lang" class="top-bar__choose-lang">
                                    <div class="list-wrap">
                                        <ul class="list">
                                            <li><img class="img-responsive  circled" src="/static/img/ico/flag/2.png" width="25" height="25"></li>
                                            <li><img class="img-responsive  circled" src="/static/img/ico/flag/3.png" width="25" height="25"></li>
                                            <li><img class="img-responsive  circled" src="/static/img/ico/flag/4.png" width="25" height="25"></li>
                                        </ul>
                                    </div>

                                    <i><img class="img--active img-responsive  circled" src="/static/img/ico/flag/1.png" width="25" height="25"></i>
                                </div>
                            </li>
                            <div style="clear: both" class="show-mobile-clear"></div>
                        </li>

                        <li>
                            <a href=""><span>About</span></a>
                        </li>

                        <li>
                            <a href="/tokensale-info"><span>Token Info</span></a>
                        </li>

                        <li>
                            <a href="/#team"><span>Team</span></a>
                        </li>

                        <li>
                            <a href="#"><span>Technology</span></a>
                        </li>

                        <li>
                            <a href="/#faq"><span>FAQ’s</span></a>
                        </li>

                        <li>
                            <a href="support.html"><span>Support</span></a>
                        </li>
                    </ul>
                </nav>

                <br class="hide--lg">

                <ul id="top-bar__subnavigation">
                    <style>
                        .custom-btn--style-login-btn{
                            background-color: #10cb6c;
                        }
                        .custom-btn--style-login-btn:hover{
                            background-color:#26de81;
                        }
                    </style>
                    <li><a class="custom-btn custom-btn--small custom-btn--style-login-btn" href="/login">Login</a></li>
                    <li><a href="/register">Sign up</a></li>

                    <li class="hide-mobile-clear">
                        <div id="top-bar__choose-lang" class="top-bar__choose-lang">
                            <div class="list-wrap">
                                <ul class="list">
                                    <li><img class="img-responsive  circled" src="/static/img/ico/flag/2.png" width="25" height="25"></li>
                                    <li><img class="img-responsive  circled" src="/static/img/ico/flag/3.png" width="25" height="25"></li>
                                    <li><img class="img-responsive  circled" src="/static/img/ico/flag/4.png" width="25" height="25"></li>
                                </ul>
                            </div>

                            <i><img class="img--active img-responsive  circled" src="/static/img/ico/flag/1.png" width="25" height="25" alt="demo" ></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->