@extends('index.layout')

@section('content')
    @include("index.header")

    <div id="start-screen" class="start-screen--light start-screen--style-4">
        <div class="start-screen__static-bg jarallax" data-speed="0.3" style="background-image: url(/static/img/new_header_bkg.png);">

            <div class="start-screen__content  text--center">
                <div class="start-screen__content__inner">
                    <div class="grid grid--container">
                        <div class="row row--xs-middle">
                            <div class="col col--md-10 col--lg-8 col--xl-7">
                                <h1 class="h2 __title">Decentralized Megabyte Exchange</h1>

                                <p>
                                    Buy, sell and use your mobile internet peer to peer, controlled by no one
                                </p>

                                <style>
                                    .custom-btn--style-1-1{
                                        background: none;
                                        border: 1px solid #73809d;
                                        color: white;
                                    }

                                    .custom-btn--style-1-1:hover{
                                        background: #43c1a8;
                                        color: white;
                                    }
                                    .custom-btn--style-2-1{
                                        -webkit-box-shadow: 0 3px 27px 0 rgba(239,21,82,.66);
                                        box-shadow: 0 3px 27px 0 rgba(239,21,82,.66);
                                        padding-top: 28px;
                                        padding-bottom: 28px;
                                        margin: 10px 0;
                                        font-size: 2rem;
                                        background-color: #f6003b;
                                        color: #fff;
                                    }

                                    .custom-btn--style-2-1:hover{
                                        background: #fb376e;
                                        color: white;
                                    }

                                    .countdown {
                                        line-height: 1.5;
                                        font-size: inherit;
                                        letter-spacing: inherit;
                                    }

                                    .countdown-value{
                                        padding: 5px 0 5px !important;
                                        border-radius: 5px;
                                        margin-right: 10px;
                                        margin-bottom: 5px !important;
                                        font-size: 52px !important;
                                        font-weight: bold;
                                    }

                                    .countdown-heading{
                                        text-align: center;
                                        font-size: 16px;
                                    }

                                    .start-screen--style-4 .countdown{
                                        margin-top: 0 !important;
                                    }
                                </style>

                                <p>
                                    <a class="custom-btn custom-btn--medium custom-btn--style-1-1" style="margin-top: 20px;" href="#">Get Whitepaper</a>

                                    <a class="custom-btn custom-btn--medium custom-btn--style-1-1" style="margin-top: 20px;" href="#">Token Info</a>
                                </p>

                                <div class="social-btns social-btns-new">
                                    <a class="fontello-twitter" href="https://twitter.com/keepgo" target="_blank">
                                        <svg class="svg social" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 2px;"><path d="M24 4.8c-0.4 0.2-1.6 0.7-2.7 0.8 0.7-0.4 1.8-1.7 2.1-2.7 -0.7 0.4-2.3 1.1-3.1 1.1 0 0 0 0 0 0 -0.9-0.9-2.2-1.7-3.6-1.7 -2.7 0-4.7 2.4-4.7 5.1 0 0.4 0 0.8 0.1 1.1h0C8.3 8.5 4.1 6.4 1.6 3.2 0.1 5.8 1.4 8.9 3.1 10c-0.6 0-1.7-0.1-2.2-0.6 0 1.7 0.8 4 3.8 4.8 -0.6 0.3-1.6 0.2-2.1 0.2 0.2 1.5 2.2 3.4 4.4 3.4C6.3 18.7 3.4 20.3 0 19.8 2.3 21.2 4.9 22 7.7 22c8 0 14.5-6.5 14.2-14.5 0 0 0 0 0 0 0 0 0 0 0-0.1 0 0 0 0 0-0.1C22.7 6.9 23.3 6 24 4.8z"></path></svg>
                                    </a>
                                    <a class="fontello-facebook" href="https://www.facebook.com/KeepGo.Web2Go" target="_blank">
                                        <svg class="svg social" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M15.4 4h2.6v-4h-3.3v0c-4.4 0.2-5.6 2.6-5.7 5.2H9v2.8h-3v4h3v12H14v-12h3l0.7-4H14V5.5C14 4.6 14.6 4 15.4 4z"></path></svg>
                                    </a>
                                    <a class="fontello-paper-plane" href="https://www.keepgo.com/blogs/articles" target="_blank">
                                        <svg class="svg social" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 50 50" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M 9 4 C 6.239 4 4 6.239 4 9 L 4 41 C 4 43.761 6.239 46 9 46 L 41 46 C 43.761 46 46 43.761 46 41 L 46 9 C 46 6.239 43.761 4 41 4 L 9 4 z M 20 12 L 25 12 C 29.42 12 33.033 15.632547 33 20.060547 C 32.991 21.141547 33.919 22 35 22 L 36 22 C 37.105 22 38 22.895 38 24 L 38 30 C 38 34.4 34.4 38 30 38 L 20 38 C 15.6 38 12 34.4 12 30 L 12 25 L 12 20 C 12 15.6 15.6 12 20 12 z M 20 18 C 18.9 18 18 18.9 18 20 C 18 21.1 18.9 22 20 22 L 25 22 C 26.1 22 27 21.1 27 20 C 27 18.9 26.1 18 25 18 L 20 18 z M 20 28 C 18.9 28 18 28.9 18 30 C 18 31.1 18.9 32 20 32 L 30 32 C 31.1 32 32 31.1 32 30 C 32 28.9 31.1 28 30 28 L 20 28 z"></path></svg>
                                    </a>
                                    <a class="fontello-youtube-play" href="https://www.youtube.com/user/iPhoneTrip" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M23.6 6.4c-0.2-1.7-1.4-3-3.1-3.1 -7.4-0.5-9.2-0.5-16.6 0C2.2 3.4 0.9 4.7 0.7 6.4c-0.6 5.2-0.6 6.1 0 11.3 0.2 1.7 1.4 3 3.1 3.1 7.4 0.5 9.2 0.5 16.6 0 1.7-0.1 2.9-1.4 3.1-3.1C24.1 12.5 24.1 11.6 23.6 6.4zM16.1 12.5l-6.4 3.9c-0.2 0.1-0.4 0.1-0.6 0 -0.2-0.1-0.3-0.3-0.3-0.5V8.2c0-0.2 0.1-0.4 0.3-0.5C9.3 7.6 9.5 7.6 9.7 7.7l6.4 3.9c0.2 0.1 0.3 0.3 0.3 0.4C16.4 12.3 16.3 12.4 16.1 12.5z"></path></svg>
                                    </a>
                                    <a class="icon-github-circled-alt2" href="https://github.com/keepgo" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 438.549 438.549" style="enable-background:new 0 0 438.549 438.549; margin-top: 8px; width: 20px; margin-right: 4px;" xml:space="preserve"><path d="M409.132,114.573c-19.608-33.596-46.205-60.194-79.798-79.8C295.736,15.166,259.057,5.365,219.271,5.365   c-39.781,0-76.472,9.804-110.063,29.408c-33.596,19.605-60.192,46.204-79.8,79.8C9.803,148.168,0,184.854,0,224.63   c0,47.78,13.94,90.745,41.827,128.906c27.884,38.164,63.906,64.572,108.063,79.227c5.14,0.954,8.945,0.283,11.419-1.996   c2.475-2.282,3.711-5.14,3.711-8.562c0-0.571-0.049-5.708-0.144-15.417c-0.098-9.709-0.144-18.179-0.144-25.406l-6.567,1.136   c-4.187,0.767-9.469,1.092-15.846,1c-6.374-0.089-12.991-0.757-19.842-1.999c-6.854-1.231-13.229-4.086-19.13-8.559   c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559   c-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-0.951-2.568-2.098-3.711-3.429c-1.142-1.331-1.997-2.663-2.568-3.997   c-0.572-1.335-0.098-2.43,1.427-3.289c1.525-0.859,4.281-1.276,8.28-1.276l5.708,0.853c3.807,0.763,8.516,3.042,14.133,6.851   c5.614,3.806,10.229,8.754,13.846,14.842c4.38,7.806,9.657,13.754,15.846,17.847c6.184,4.093,12.419,6.136,18.699,6.136   c6.28,0,11.704-0.476,16.274-1.423c4.565-0.952,8.848-2.383,12.847-4.285c1.713-12.758,6.377-22.559,13.988-29.41   c-10.848-1.14-20.601-2.857-29.264-5.14c-8.658-2.286-17.605-5.996-26.835-11.14c-9.235-5.137-16.896-11.516-22.985-19.126   c-6.09-7.614-11.088-17.61-14.987-29.979c-3.901-12.374-5.852-26.648-5.852-42.826c0-23.035,7.52-42.637,22.557-58.817   c-7.044-17.318-6.379-36.732,1.997-58.24c5.52-1.715,13.706-0.428,24.554,3.853c10.85,4.283,18.794,7.952,23.84,10.994   c5.046,3.041,9.089,5.618,12.135,7.708c17.705-4.947,35.976-7.421,54.818-7.421s37.117,2.474,54.823,7.421l10.849-6.849   c7.419-4.57,16.18-8.758,26.262-12.565c10.088-3.805,17.802-4.853,23.134-3.138c8.562,21.509,9.325,40.922,2.279,58.24   c15.036,16.18,22.559,35.787,22.559,58.817c0,16.178-1.958,30.497-5.853,42.966c-3.9,12.471-8.941,22.457-15.125,29.979   c-6.191,7.521-13.901,13.85-23.131,18.986c-9.232,5.14-18.182,8.85-26.84,11.136c-8.662,2.286-18.415,4.004-29.263,5.146   c9.894,8.562,14.842,22.077,14.842,40.539v60.237c0,3.422,1.19,6.279,3.572,8.562c2.379,2.279,6.136,2.95,11.276,1.995   c44.163-14.653,80.185-41.062,108.068-79.226c27.88-38.161,41.825-81.126,41.825-128.906   C438.536,184.851,428.728,148.168,409.132,114.573z"></path></svg>
                                    </a>
                                    <a class="icon-github-circled-alt2" href="https://t.me/joinchat/FR_DSU4d2bdzkSNqUwsxUA" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 189.473 189.473" style="enable-background:new 0 0 189.473 189.473; margin-top: 8px; width: 20px; margin-right: 6px;" xml:space="preserve" width="24" height="24"><path d="M152.531,179.476c-1.48,0-2.95-0.438-4.211-1.293l-47.641-32.316l-25.552,18.386c-2.004,1.441-4.587,1.804-6.914,0.972   c-2.324-0.834-4.089-2.759-4.719-5.146l-12.83-48.622L4.821,93.928c-2.886-1.104-4.8-3.865-4.821-6.955   c-0.021-3.09,1.855-5.877,4.727-7.02l174.312-69.36c0.791-0.336,1.628-0.53,2.472-0.582c0.302-0.018,0.605-0.018,0.906-0.001   c1.748,0.104,3.465,0.816,4.805,2.13c0.139,0.136,0.271,0.275,0.396,0.42c1.11,1.268,1.72,2.814,1.835,4.389   c0.028,0.396,0.026,0.797-0.009,1.198c-0.024,0.286-0.065,0.571-0.123,0.854L159.898,173.38c-0.473,2.48-2.161,4.556-4.493,5.523   C154.48,179.287,153.503,179.476,152.531,179.476z M104.862,130.579l42.437,28.785L170.193,39.24l-82.687,79.566l17.156,11.638   C104.731,130.487,104.797,130.533,104.862,130.579z M69.535,124.178l5.682,21.53l12.242-8.809l-16.03-10.874   C70.684,125.521,70.046,124.893,69.535,124.178z M28.136,86.782l31.478,12.035c2.255,0.862,3.957,2.758,4.573,5.092l3.992,15.129   c0.183-1.745,0.974-3.387,2.259-4.624L149.227,38.6L28.136,86.782z"></path></svg>
                                    </a>
                                    <a class="icon-github-circled-alt2" href="https://www.linkedin.com/company/keepgo" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 7px; width: 20px; margin-right: 4px;"><path d="M0 23h5V8H0V23zM17.8 7.5c-2.2 0-3.5 0.8-4.8 2.6V8H8v15h5V14.9c0-1.7 0.9-3.4 2.8-3.4s3.2 1.7 3.2 3.4v8.2H24v-8.5C24 8.6 20 7.5 17.8 7.5zM2.5 0.7c-1.6 0-2.9 1.2-2.9 2.6s1.3 2.6 2.9 2.6c1.6 0 2.9-1.2 2.9-2.6S4.2 0.7 2.5 0.7z"></path></svg>
                                    </a>
                                    <a class="icon-github-circled-alt2" href="mailto:support@keepgo.com" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M21.3 4.9H2.2C1.3 4.9 0 5.5 0 7.1v10.5c0 0.8 0.5 1.9 1.7 2.2 0.1 0 0.2 0.1 0.3 0.1 0 0 0.1 0 0.1 0 0 0 0.1 0 0.1 0h19.1c0 0 0.1 0 0.1 0 0 0 0.1 0 0.1 0 0.1 0 0.2 0 0.3-0.1 0.8-0.2 1.7-0.8 1.7-2.1V7.1C23.5 6.2 22.9 4.9 21.3 4.9zM1.6 17.7V8.2l5.5 3.2c-0.1 0-0.1 0.1-0.1 0.1l-5.3 6.4C1.7 17.8 1.6 17.8 1.6 17.7zM2.4 6.6H21.1l-9.3 5.4L2.4 6.6zM8.4 12.7c0.1-0.1 0.1-0.1 0.3-0.4l2.6 1.5c0.1 0.1 0.3 0.1 0.5 0.1h0c0 0 0 0 0 0 0.2 0 0.3 0 0.5-0.1l2.6-1.5c0.2 0.3 0.2 0.3 0.3 0.4l4.6 5.5H3.8L8.4 12.7zM16.5 11.5c0-0.1-0.1-0.1-0.1-0.2l5.5-3.2v9.4c0 0.1 0 0.2 0 0.3L16.5 11.5z"></path></svg>
                                    </a>
                                </div>

                                <p class="text--left">Pre-ICO starts in:</p>

                                <div class='countdown js-countdown' data-date="2018-06-05"></div>

                                <p>
                                    <a class="custom-btn custom-btn--medium custom-btn--style-2-1" href="#">Apply for Whitelist</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <span class="scroll-discover hide show--md">scroll down <b></b></span>

    </div>
    <!-- end start screen -->

    <!-- start main -->
    <main role="main">

        <!-- start section -->
        <section class="section section--no-pt section--no-pb section--custom-04">
            <style type="text/css">
                .section--custom-04 .logos { background-color: #002339; }

                @media only screen and (min-width: 768px)
                {
                    .section--custom-04 .logos
                    {
                        margin-bottom: -100px;
                        transform: translateY(-20%);
                    }
                }
            </style>

            <div class="grid grid--container">
                <div class="logos" style="background-color: white; border-radius: 50px;">
                    <div class="__inner">
                        <div class="row row--xs-center row--xs-around">
                            <div class="col col--xs-auto"><img src="/static/img/logos_img/at_t.png"   /></div>
                            <div class="col col--xs-auto"><img src="/static/img/logos_img/telefonica.png"   /></div>
                            <div class="col col--xs-auto"><img src="/static/img/logos_img/vodafone.png"   /></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section" style="padding: 20px 0px 40px;">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center" style="margin-top: 60px; margin-bottom: 0px;">
                    <h2 class="__title"> Existing Business: Keepgo Partners</h2>
                </div>
                <div class="logos">
                    <div class="__inner">
                        <div class="row row--xs-center row--xs-around">
                            <div class="col col--xs-auto">
                                <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/airtel.png"/>
                            </div>

                            <div class="col col--xs-auto">
                                <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/austria_telekom.png"/>
                            </div>

                            <div class="col col--xs-auto">
                                <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/globe_logo.png"/>
                            </div>

                            <div class="col col--xs-auto">
                                <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/optus.png"/>
                            </div>

                            <div class="col col--xs-auto">
                                <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/rogers.png"/>
                            </div>

                            <div class="col col--xs-auto">
                                <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/salt.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <style>
            .review-block{
                padding-top: 50px;
                padding-bottom: 70px;
            }
            .review-block .slick-dots button {
                background-color: #e6695d;
            }

            .review-block .__author--position{
                color: #e6695d;
            }
        </style>
        <!-- start section -->
        <section class="section section--base-bg review-block" style="background-color: #072638">
            <div class="grid grid--container">
                <div class="row">
                    <div class="col col--md-2  hide show--md">
                        <i class="testimonial-ico">“</i>
                    </div>

                    <div class="col col--md-10">
                        <div class="testimonial testimonial--slider" data-slick='{"autoplay": true, "arrows": false, "dots": true, "speed": 1000}'>
                            <div class="__item">
                                <div class="__text">
                                    <p>
                                        I have had consistently good connectivity on this multi-country Asia trip thanks to @keepgo. Global unlimited data at a flat rate. Thanks!!
                                    </p>
                                </div>

                                <div class="__author">
                                    <h5 class="__author--name">Werner Vogels</h5>
                                    <span class="__author--position">CTO @ Amazon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt section--no-pb">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60" style="margin-top: 90px;">
                    <h2 class="__title">Press About Us</h2>
                </div>

                <div class="review review--slider  review--style-1" data-slick='{"autoplay": true, "arrows": false, "dots": true, "speed": 1000}'>
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/usatoday.png"/>
                            </i>

                            <p>
                                When it's better to try than to buy "If you're crossing one of the borders, you may especially want to rent a smartphone, or just a SIM card for your iPhone, so you can avoid costly data overages. Keepgo helps do just that. You can rent a replacement SIM card - or you can even rent a complete iOS gadget"
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava.png"  />
                            <h5 class="__author--name">Kim Komando</h5>
                            <span class="__author--position">USA TODAY</span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/gear_patrol.png"/>
                            </i>

                            <p>
                                The Right Wi-Fi Hotspot for Every Type of Traveler "Best for the International Traveler: If you’re the type of traveler who routinely ventures overseas, you’re not going to want the hassle of getting a new rental hotspot for every single trip".
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Tucker Bowe </h5>
                            <span class="__author--position">Gear Patrol</span>
                        </div>
                    </div>
                    <!-- end item -->


                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/bgr.png"   style="height: 87px; width: auto;" />
                            </i>

                            <p>
                                How to travel abroad without having to sell your house to pay your cell phone bill
                                "Keepgo on Tuesday announced a few big changes to its wireless offering".
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava.png"  />
                            <h5 class="__author--name">Zach Epstein</h5>
                            <span class="__author--position">BGR</span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/epoch_times.jpg"   style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                How to Pay Less While Using Your Cell Phone Abroad
                                "When it comes to using your cell phone abroad, international travel has gotten much less painful in recent history".
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Zach Epstein </h5>
                            <span class="__author--position">Epoch Times </span>
                        </div>
                    </div>
                    <!-- end item -->
                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/examiner.png" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                Keepgo solves overseas travel dataphone challenge
                                "There is no shortage of advice for travelers who want to use their dataphones, tablets and computers while traveling abroad".
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava.png"  />
                            <h5 class="__author--name"></h5>
                            <span class="__author--position">Examiner.com</span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/go_nomad.jpg" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                Mobile Wireless Routers Keep you Connected
                                "Interested in owning your own "MiFi," instead of simply renting one? Keepgo offers users the opportunity to travel indefinitely with internet on the go".
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Shannon Broderick</h5>
                            <span class="__author--position">GoNOMAD </span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/israel_21c.png" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                iPhone home wherever you roam
                                "..Keepgo has content-sharing agreement in place with application developers and agreements with cellular networks around the world, so you can be sure there won't be any surprises like unexpected, extra fees when you return home.."
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Karin Kloosterman </h5>
                            <span class="__author--position">Israel21 </span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/lifeintrips.png" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                "This is the first time I have traveled with international data coverage and I can easily say it will not be the last. I have been spoiled by this Keepgo international SIM card and will never travel without this kind of luxury ever again - and neither should you. You will save time, money, and your sanity."
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Shaun Robertson </h5>
                            <span class="__author--position">This Life In Trips </span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/smarter_travel.png" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                Pack Lighter and Save Money by Renting "You may not want to pay the monthly bill for an iPhone, but they're pretty darn handy to have while traveling. That's where Keepgo can help.."
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Kate Sitarz </h5>
                            <span class="__author--position">Smartertravel </span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/the_points_guy.png" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                Staying Connected Overseas with the Keepgo Lifetime Mobile Wi-Fi Hotspot
                                "There are plenty of ways - with varying degrees of simplicity - to keep connected while traveling. You can buy a SIM each time you touch down in a new country".
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Sarah Silbert </h5>
                            <span class="__author--position">The Points Guy </span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/tshlogo.png" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                "I'd strongly recommend KeepGo to anyone traveling internationally and looking for a cheaper alternative to expensive roaming fees."
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Danny Walsh </h5>
                            <span class="__author--position">Tech SourceHub </span>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="__item">
                        <div class="__text  text--center">
                            <i class="__logo">
                                <img class="img-responsive" width="232" height="87" src="/static/img/logos_img/yahoo.png" style="height: 87px; width: auto;"/>
                            </i>

                            <p>
                                12 things you didn't know you could rent " ..In a service that's designed for travelers, Keepgo hooks you up with a rental unit for a week (starting at $99), with simple set-up for you destination.."
                            </p>
                        </div>

                        <div class="__author  text--center">
                            <img class="__author--image  center-block circled" width="78" height="78" src="/static/img/ava_2.png"  />
                            <h5 class="__author--name">Shaun Robertson </h5>
                            <span class="__author--position">Yahoo </span>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
                <!-- end review -->
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section" style="padding: 100px 0px 80px;">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h2 class="__title">Existing Business: Keepgo Clients</h2>
                </div>

                <div class="row row--xs-middle">
                    <div class="col col--lg-10">
                        <div class="logos">
                            <div class="__inner">
                                <div class="row row--xs-center row--xs-around">
                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/2_1.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/2_2.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/2_3.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/2_4.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/2_5.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/bezeq.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/bitconsult.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/skyroam.png"   />
                                    </div>

                                    <div class="col col--xs-auto">
                                        <img class="lazy" src="/static/img/blank.gif" data-src="/static/img/logos_img/ucloundlink.png"   />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt">
            <div class="grid">
                <div class="section-heading section-heading--center">
                    <h5 class="__subtitle" style="color: #f36f62">ABOUT</h5>
                </div>
                <div class="row row--md-center row--md-reverse">
                    <div class="col col--md-5 col--lg-6 col--no-gutters">
                        <img class="img-responsive" src="/static/img/img_4.png"   />
                    </div>

                    <div class="col hide--md col-MB-40"></div>

                    <div class="col col--md-7 col--lg-6">
                        <div class="content-grid" style="margin-left: auto;max-width: 570px;">
                            <div data-aos="fade-right" data-aos-delay="150">
                                <div class="section-heading col-MB-30">
                                    <h2 class="__title">Decentralized Megabyte Exchange</h2>
                                </div>

                                <p class="col-MB-35">
                                    The Decentralized Exchange for Megabytes provides a complete ecosystem to buy, sell and exchange megabytes. Currently, the valuable traffic you purchase is at the mercy of large corporations and cannot be traded. In the Exchange network, it’s yours to use and sell as you wish; your megabytes travel through a decentralized peer-to-peer network controlled by no one and incentivized by the KEEP token.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt">
            <div class="grid grid--container">
                <div class="row">
                    <div class="col col--md-5">
                        <div data-aos="fade-right" data-aos-offset="100">
                            <div class="section-heading  col-MB-30">
                                <h5 class="__subtitle">Algorythm</h5>

                                <h2 class="__title">Truly Fair Megabyte Economy</h2>
                            </div>

                            <p>
                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#">Discover</a>
                            </p>
                        </div>
                    </div>

                    <div class="col hide--md col-MB-30"></div>

                    <div class="col col--md-7">
                        <p data-aos="fade-up" data-aos-offset="100">
                            Let’s consider you purchase 10Gb/month from your carrier. De-facto, you use one third of it. On the other hand, there is an inbound traveler who just landed in your country.
                        </p>

                        <p data-aos="fade-up" data-aos-offset="100">
                            The Exchange provides a single interface for real-time traffic exchange and payment, making your megabytes tradable using the KEEP token.

                        </p>

                        <p data-aos="fade-up" data-aos-offset="100">
                            Bearing in mind that the decentralized network is controlled by no one, the price for every megabyte is set solely by supply and demand - forming a truly fair megabyte economy.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h5 class="__subtitle" style="color: #f36f62;">keepgo ICO uniqueness</h5>

                    <h2 class="__title">WHY KEEP TOKEN IS UNIQUE?</h2>
                </div>

                <p data-aos="fade-up" data-aos-offset="100">
                    The Decentralized Exchnage for Megabytes is a new business model to trade cellular services. This is a new concept, where anybody can trade data with anybody, peer-to-peer (or peer-to-machine). Prices and technology controlled by no one, fully ruled by supply and demand.
                </p>

                <p data-aos="fade-up" data-aos-offset="100">
                    This model will co-exist with the current eco-system and current telecom models, there is no collusion or cannibalization involved. In the same way as MNO co-exists these days with MVNO; or cash co-exists with credit cards.
                </p>

                <p data-aos="fade-up" data-aos-offset="100" class="col-MB-50">
                    Technology wise, the whole SW (end user mobile app, match node, smart contracts) will be fully open-source and available for further modifications. The application can be adopted by any HW manufacturer, telecom and IT-related business. In addition, The Exchange will support multiple blockchains, therefore any big and small players can develop any functionality and trade cellular services.
                </p>

                <div class="feature feature--style-2  text--center">

                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--lg-3">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">Blockchain Agnostic</h3>

                                        <p> The marketplace supports multiple blockchain technologies, existing and to be released. We will use IOTA by default.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-3">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/hardware-independent_orange.png" height="60px"   />
                                        </i>

                                        <h3 class="__title">Hardware Independent</h3>

                                        <p>We will immediately offer the KeepgoFi hotspot, but will also provide app developers and smartphone/gadget manufacturers with REST APIs to enable them to sell and purchase using any mobile and stationary device.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-3">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/open_source_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">Open Source Software</h3>

                                        <p>Define your own seller/buyer matching parameters, set different commission and much more using our open source marketplace code. Powered by Open Source Foundation and completely free of charge.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-3">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/flexible_monetization_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">Flexible monetization schemes</h3>

                                        <p>Tokens can be used to earn money by selling data, trading on an exchange or leasing to occasional sellers. The more traffic you sell, the more quota you have with every token.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end feature -->
            </div>
        </section>
        <!-- end section -->

        <style>
            @media screen and (max-width: 768px){
                .learn-more-mb-20{
                    margin-bottom: 20px;
                }
            }
        </style>
        <!-- start section -->
        <section class="section jarallax col-MB-60" data-speed="0.5">
            <img class="jarallax-img" src="/static/img/bg_14.jpg"   />

            <div class="grid">
                <div class="row row--lg-reverse row--md-center">
                    <div class="col col--lg-6">
                        <div class="content-grid" style="margin-right: auto;max-width: 500px;">
                            <div data-aos="fade-up">
                                <div class="section-heading  col-MB-20">
                                    <h2 class="__title" style="color: white;">
                                        Join our ICO today and get complimentary* Keepgo WPN - Secure Mobile WiFi Hotspot
                                        for the cryptocommunity
                                    </h2>
                                </div>

                                <p class="col-MB-15" style="color: white;">
                                    *For 10 ETH investments and over
                                </p>

                                <p class="col-MB-15" style="color: white;">
                                    Mobile data for use or trade is included !
                                </p>


                                <p>
                                    <a class="custom-btn custom-btn--medium custom-btn--style-1 learn-more-mb-20" href="#" style="margin-right: 20px;">Learn more</a>
                                    <a class="custom-btn custom-btn--medium custom-btn--style-2" href="#">Apply for Whitelist</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col hide--lg col-MB-40"></div>

                    <div class="col col--lg-6 col--no-gutters">
                        <img class="img-responsive" src="/static/img/wallet.png"   style="margin: auto;" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt" style="padding-bottom: 70px;">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60" style="max-width: 900px;">
                    <h5 class="__subtitle" style="color: #f36f62;">MEET KEEPGOFI</h5>

                    <h3 class="__title">DESIGNED WITH THE CRYPTO CURRENCY COMMUNITY IN MIND</h3>
                </div>

                <!-- start feature -->
                <div class="feature feature--style-2  text--center col-MB-60">

                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">WIFI PRIVATE NETWORK</h3>

                                        <p> The WiFi network you can trust. Pocket mobile WiFi hotspot within a hand's reach. Secured Hardware and Software. Installations of apps are not allowed.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60px"   />
                                        </i>

                                        <h3 class="__title">GLOBAL COVERAGE</h3>

                                        <p>Works everywhere, where there is cellular coverage.
                                            Connects to 500+ mobile operators in 100+ countries. No Sim, No Contract.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">4G/LTE SPEEDS</h3>

                                        <p>Data speeds as high
                                            as 150Mbps/50Mbps.
                                            Stable and fast connection
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end feature -->

                <div class="section-heading section-heading--center  col-MB-60" style="max-width: 900px;">
                    <h3 class="__title">FEATURES YOU ARE GOING TO LOVE. OUR SELECTION OF
                        FEATURES GIVES YOU THE SECURE CONNECTIVITY THAT YOU WANT
                    </h3>
                </div>

                <!-- start feature -->
                <div class="feature feature--style-2  text--center">

                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">PAY BY BITCOIN. NO CONTRACT.
                                            PAY AS YOU GO.
                                        </h3>

                                        <p> Pay for the device with BTC (paypal, credit card available as well). Device comes preloaded with 1GB of data. Refill your data as you go or set up auto-refill to keep your service active.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60px"   />
                                        </i>

                                        <h3 class="__title">A FULL YEAR TO USE YOUR DATA</h3>

                                        <p>You have a full year to use your initial 1GB of data. Every time you refill your data you reset the clock to another year.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">EASY TO USE</h3>

                                        <p>One push of a button and you have access to the internet while on the go. Works seamlessly on all your WiFi-enabled devices. No need to install any software!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>

                        <div class="row">
                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">UP TO 8 DEVICES
                                        </h3>

                                        <p> Keep your mobile phone, tablet, laptop connected within 32 ft (10m) range.
                                            All at the same time- no need to pick favorites.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60px"   />
                                        </i>

                                        <h3 class="__title">SECURED PRIVATE WIFI NETWORK</h3>

                                        <p>Protects your personal information and secret keys against hacker's attacks. Provides protection against Man In The Middle (MITM) attack, when hackers hijack unsecure WiFi network.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--lg-4">
                                <div class="__item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="/static/img/blank.gif" data-src="/static/img/blockchain_agnostic_orange.png" height="60"   />
                                        </i>

                                        <h3 class="__title">BUILT-IN POWER BANK
                                        </h3>

                                        <p>Your Keepgo WPN can serve as a backup power source to charge other
                                            USB-compatible devices by using the built-in Power Bank feature.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end feature -->
            </div>
        </section>
        <!-- end section -->

        @include("index.roadmap")

        <!-- start section -->
        <section class="section jarallax" data-speed="0.5">
            <img class="jarallax-img" src="/static/img/bg_13.jpg"   />

            <div class="grid grid--container">
                <div class="row row--xs-center">
                    <div class="col col--md-5 col--lg-4">
                        <div class="section-heading" data-aos="fade-right">
                            <h5 class="__subtitle" style="color: #f36f62;">
                                keepgo
                            </h5>

                            <h2 class="__title">Documentation Download</h2>
                        </div>
                    </div>

                    <div class="col hide--md col-MB-40"></div>

                    <div class="col col--md-7 col--lg-8">
                        <div class="documents documents--style-1">
                            <div class="__inner">
                                <div class="row row--xs-between">
                                    <!-- start item -->
                                    <div class="col col--xs-6 col--sm-auto col--md-6 col--lg-auto">
                                        <a href="#" class="__document" data-aos="fade-left" data-aos-delay="100">
                                            <i class="__ico fontello-document"></i>

                                            <span class="h5">Whitepaper</span>
                                        </a>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col col--xs-6 col--sm-auto col--md-6 col--lg-auto">
                                        <a href="#" class="__document" data-aos="fade-left" data-aos-delay="200">
                                            <i class="__ico fontello-document"></i>

                                            <span class="h5">One Page Summary</span>
                                        </a>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col col--xs-6 col--sm-auto col--md-6 col--lg-auto">
                                        <a href="#" class="__document" data-aos="fade-left" data-aos-delay="300">
                                            <i class="__ico fontello-document"></i>

                                            <span class="h5">Pitch Deck</span>
                                        </a>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col col--xs-6 col--sm-auto col--md-6 col--lg-auto">
                                        <a href="#" class="__document" data-aos="fade-left" data-aos-delay="400">
                                            <i class="__ico fontello-document"></i>

                                            <span class="h5">Industry Report</span>
                                        </a>
                                    </div>
                                    <!-- end item -->
                                </div>
                            </div>
                        </div>
                        <!-- end documents -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h5 class="__subtitle" id="faq">FAQ</h5>

                    <h2 class="__title">Have any questions?</h2>
                </div>

                <div class="row row--xs-middle">
                    <div class="col col--lg-10">
                        <!-- start FAQ -->
                        <div class="faq">
                            <div class="accordion-container">
                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Why cellular data cannot be traded on standard marketplaces, like eBay or Amazon?</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                Standard marketplaces are designed to support the trading of physical merchandise and do not have the required technological infrastructure to support the trade of cellular services.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Will Network Operators allow the resell of data bundles purchased by end users?</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                There is no single legal standard regarding resell of cellular services, but there are more and more class action lawsuits demanding cellular providers allow the full use of purchased services. We believe that KeepNET model should co-exist with the current eco-system and current telecom models, there is no collision or cannibalization here. Same as MNO coexists these days with MVNO; or cash co-exists with credit cards.
                                            </p>

                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Is any special equipment required to trade data?</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                Yes, data can be purchased only with devices that support SIM-less technologies, like KeepgoFi Hotspot. Data can be sold by any device with the KeepNET app installed (Android version) or using portable SIM slots.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Will I be able to use my phone while trading the data?</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                You will be able to use your phone as usually while the device is connected to a WiFi network and with the Exchange app up and running.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Can I also trade texts and voice bundles over the Exchange?</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                No, at the present time The Exchange doesn’t support the trade of SMS messages and voice minutes
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Is trading limited to mobile data only, or can WiFi traffic also be traded?</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                Data exchange is not limited to mobile data, one can trade their landline Wi-Fi bundle as well.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <div class="show-more-faq-block" style="display: none;">
                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="__title h5">How can Exchange guarantee that I will get the exact amount of data I have paid for?</h4>

                                            <i class="circled"></i>
                                        </div>

                                        <article>
                                            <div class="__inner">
                                                <p>
                                                    The payment for megabytes is performed via distributed blockchain network in real time. You pay only for what you get
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->
                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="__title h5">Why blockchain is essential for data exchange?</h4>

                                            <i class="circled"></i>
                                        </div>

                                        <article>
                                            <div class="__inner">
                                                <p>
                                                    Without the blockchain technology, guaranteed real time micro-payment for usage is impossible.
                                                    <br>
                                                    Due to blockchain technology specifics, operator SIM identifier can be replaced by smart contract.
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->
                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="__title h5">How can The Exchange guarantee coverage everywhere I travel?</h4>

                                            <i class="circled"></i>
                                        </div>

                                        <article>
                                            <div class="__inner">
                                                <p>
                                                    Ever since Keepgo was established in 2009 our primary activity has been to negotiate favorable reselling agreements. We have secured many such agreements and guarantee coverage in countries and destinations where no sellers are available. Keepgo will provide its vast agreements portfolio for The KEEP Foundation needs.
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->
                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="__title h5">How KEEP tokens will be used?</h4>

                                            <i class="circled"></i>
                                        </div>

                                        <article>
                                            <div class="__inner">
                                                <p>
                                                    Keep token is a license to trade data on the exchange. It grants access to the technology. In addition to trade and direct use, we assume that companies like Keepgo will buy licenses and lease them to occasional seller.
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->
                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="__title h5">Who will run blockchain nodes?</h4>

                                            <i class="circled"></i>
                                        </div>

                                        <article>
                                            <div class="__inner">
                                                <p>
                                                    We do not develop our own blockchain. We are blockchain agnostic. We will only create and support the technology and smart contracts that will enable the exchange of data.
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->
                                </div>
                            </div>

                            <div class="text--center">
                                <a class="custom-btn custom-btn--medium custom-btn--style-1" onclick="showMoreQuestions(this)">Show more</a>
                            </div>

                            <script>
                                function showMoreQuestions(ob){
                                    $(".show-more-faq-block").fadeIn();
                                    $(ob).attr("onclick","hideMoreQuestions(this)");
                                    $(ob).html("Hide more");
                                }
                                function hideMoreQuestions(ob){
                                    $(".show-more-faq-block").fadeOut();
                                    $(ob).attr("onclick","showMoreQuestions(this)");
                                    $(ob).html("Show more");
                                }
                            </script>
                        </div>
                        <!-- end FAQ -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--with-border">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h2 class="__title">FOUNDERS</h2>
                </div>

                <!-- start team -->
                <div class="team team--style-1">
                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4 col--xl-offset-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="100">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/david_lipovkov.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/dimali" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">David Lipovkov</h5>

                                        <p>
                                            David leads the company since its inception. He has 12 years experience of C-level positions in technology companies. David Lipovkov holds a B.Sc. in Computer Science from the Technion IIT.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/guy_zbarsky.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/gesha" target=""></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Guy Zbarsky</h5>

                                        <p>
                                            Guy brings more than 15 years of management experience. He holds a B.Sc in Computer Science, B.Sc in Mechanical Engineering and a MBA from the Technion IIT. Ranked IDF Major, Divemaster and Karate Sempai
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end team -->
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--with-border">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h2 class="__title">ADVISORS</h2>
                </div>

                <!-- start team -->
                <div class="team team--style-1">
                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-3">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="100">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/igor_ryabenkiy.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/iryabenkiy" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Dr. Igor Ryabenkiy</h5>

                                        <p>
                                            Igor is a a serial investor and entrepreneur with over 20 years of successful executive and investment experience, including Internet startups and IT companies.
                                            He has funded, developed, and exited more than 100+ of investment projects worldwide.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-3">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/ishay_tentser.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/tentser/" target=""></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Ishay Tentser</h5>

                                        <p>
                                            Ishay Tentser is the Founder & CEO of Initech, an Israeli software development company with a focus on decentralized systems.
                                            He is also a founding member in several startups, a networking guru, and unyielding performer.
                                            Ishay is seen as an innovative thinker and speaker in Fintech, AI, Crypto, Blockchain.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-3">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/yossi_peretz.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/yossi-peretz/" target=""></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Yossi Peretz</h5>

                                        <p>
                                            Yossi is a technology and cryptocurrency enthusiast, with a strong record of developing market-leading products and services, and extensive experience in online investments and financial markets.
                                            Yossi has a wealth of international experience, with roles in the fintech, business and operations management.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-3">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/sam_netzer.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/sam-netzer-150205/" target=""></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Sam Netzer</h5>

                                        <p>
                                            Serving for 10+ years as the Head of Roaming Department in Orange IL,
                                            Sam was the innovator of first roaming bundles for international travelers, disrupting the local telecom market and generating more than $100M in sales of international traffic. Later he became CEO of a startup company.
                                            Holds an MBA.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-3 col--xl-offset-1">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/simon_lytsin.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/litsyn/" target=""></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Prof. Simon Lytsin</h5>

                                        <p>
                                            Consults Israeli and international high-tech companies in the areas of storage, communications and computing.
                                            As chief scientist at SanDisk, Simon was the innovator of the breakthrough Flash memory storage technology. Founder of a successful start-up.
                                            An IEEE Senior member, Professor with the School of Electrical Engineering, Tel-Aviv University.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/ivan_zolochevskii.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/ivan-zolochevskii-5231232/" target=""></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Ivan Zolochevskii</h5>

                                        <p>
                                            Ivan served as a CEO of Vodafone UA for more than 4 years.
                                            Experienced Chief Executive Officer with a demonstrated history of working in the telecommunications industry.
                                            Strong business development professional with a MBA Program,
                                            Professional Diploma focused in Management from The Open University Business School.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-3">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/mark_kellerhuis.jpg" width="230" height="230"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/mark-kellerhuis-982135/" target=""></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Mark Kellerhuis</h5>

                                        <p>
                                            As Sprint US Director, Mark manages the international carriers business within the EMEA region since 2005.
                                            He has more then 25 years of experience in the Telecommunications and IT industry.
                                            Bachelor of Informatics, Technical Information Systems.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end team -->
            </div>
        </section>
        <!-- end section -->

        <style>
            .show-more-team-block{
                display: none;
            }
        </style>
        <!-- start section -->
        <section class="section jarallax jarallax-our-team" data-speed="0.3" style="background-color: #010938">
            <img class="jarallax-img" src="/static/img/bg_4.jpg"   />

            <div class="grid grid--container">
                <div class="section-heading section-heading--center section-heading--white  col-MB-60">
                    <h5 class="__subtitle">Our brain</h5>

                    <h2 class="__title" id="team">Awesome Team</h2>
                </div>

                <!-- start team -->
                <div class="team team--style-2 team--light-color">
                    <div class="__inner">
                        <div class="row">

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 col--xl-offset-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="50">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/jacques_de_waal.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/jdewaal" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Jacques de Waal</h5>
                                        <span class="__subtitle">Partner – Keepgo EU</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="100">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/vlad_kalinovski.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/company/keepgo" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Vlad Kalinovski</h5>
                                        <span class="__subtitle">VP R&D</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="150">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/alexander_zaets.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/alexander-n-zaets-715b9233/" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Alexander Zaets</h5>
                                        <span class="__subtitle">Server Side Team Leader</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/daniel_salpak.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/daniel-salpak-0360b58b" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Dr. Daniel Salpak</h5>
                                        <span class="__subtitle">Carrier Relations Manager and Finance</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 col--xl-offset-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="250">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/gili_chupak.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/company/keepgo" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Gili Chupak</h5>
                                        <span class="__subtitle">Head of Customer Service</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="300">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/boris_frenkel.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://il.linkedin.com/in/fobos2k" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Boris Frenkel</h5>
                                        <span class="__subtitle">Senior Embedded Software Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="350">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/liad_horowitz.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/liad-horowitz-780b66116" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Liad Horowitz</h5>
                                        <span class="__subtitle">Senior Business Development Manager</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="400">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/frank_visser.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/frankvisser91" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Frank Visser</h5>
                                        <span class="__subtitle">Marketing manager - EU</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block col--xl-offset-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="50">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/oleg_shehter.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/oleg-shehter-9a2b9275" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Oleg Shehter</h5>
                                        <span class="__subtitle">Head of QA Department</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="100">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/ella_brester.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/company/keepgo" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Ella Brester</h5>
                                        <span class="__subtitle">Executive Assistant</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="150">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/dmitry_atanov.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/dmitry-atanov-0a217583/" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Dmitry Atanov</h5>
                                        <span class="__subtitle">Quality Assurance Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/andrey_kruk.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/andrey-kruk-02175886/" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Andrey Kruk</h5>
                                        <span class="__subtitle">Server Side Developer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block col--xl-offset-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="250">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/sean_vermeulen.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/sean-vermeulen-22a774150/" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Sean Vermeulen</h5>
                                        <span class="__subtitle">B2B Account Manager - EU</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="300">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/tijmen_de_kruijf.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/in/tijmen-de-kruijf-823a40152/" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Tijmen de Kruijf</h5>
                                        <span class="__subtitle">Marketing manager - EU</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="350">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/rick_willems.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/company/keepgo" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Rick Willems</h5>
                                        <span class="__subtitle">Customer Service - EU</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="400">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/marc_antoine_delezenne.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/company/keepgo" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Marc-Antoine Delezenne</h5>
                                        <span class="__subtitle">Business Development - France</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-2 show-more-team-block col--xl-offset-2">
                                <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50" data-aos-duration="300" data-aos-delay="400">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy" src="/static/img/blank.gif" data-src="/static/img/team_img/alex_velitsky.jpg" width="110" height="110"   />

                                        <div class="social-btns">
                                            <a class="fontello-linkedin  circled" href="https://www.linkedin.com/company/keepgo" target="_blank"></a>
                                        </div>
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Alex Velitsky</h5>
                                        <span class="__subtitle">Business Development - Australia</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                            <div style="clear: both;"></div>
                        </div>

                        <div class="text--center" style="margin-top: 30px;">
                            <a class="custom-btn custom-btn--medium custom-btn--style-2" onclick="showMoreTeamMembers(this)">Show more</a>
                        </div>

                        <script>
                            function showMoreTeamMembers(ob){
                                $(".show-more-team-block").fadeIn();
                                $(ob).attr("onclick","hideMoreTeamMembers(this)");
                                $(ob).html("Hide more");
                            }
                            function hideMoreTeamMembers(ob){
                                $(".show-more-team-block").fadeOut();
                                $(ob).attr("onclick","showMoreTeamMembers(this)");
                                $(ob).html("Show more");
                            }
                        </script>
                    </div>
                </div>
                <!-- end team -->
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section jarallax" data-speed="0.5">
            <div class="pattern" style="background-color: #767676;"></div>

            <div class="grid grid--container">
                <div class="section-heading section-heading--center section-heading--white  col-MB-60">
                    <h2 class="__title">Subscribe Newsletter</h2>
                </div>

                <div class="center-block" style="max-width: 510px">
                    <form class="form--horizontal" action="#">
                        <div class="b-table">
                            <div class="cell v-middle">
                                <div class="input-wrp">
                                    <input class="textfield" type="text" value="" placeholder="E-mail" />
                                </div>
                            </div>

                            <div class="cell v-middle">
                                <button class="custom-btn custom-btn--medium custom-btn--style-2" type="submit" role="button">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->

    @include("index.footer")
@endsection