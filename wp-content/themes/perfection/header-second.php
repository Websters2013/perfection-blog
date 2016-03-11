<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>
    <style>
        /*------------preloader---------*/
        .preloader {
            opacity: 1;
            visibility: visible;
            z-index: 10;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, .95);
            -webkit-transition: opacity .3s ease-in-out, visibility .3s ease-in-out;
            transition: opacity .3s ease-in-out, visibility .3s ease-in-out;
        }

        .preloader.hide {
            opacity: 0;
            visibility: hidden;
        }

        .preloader__wrap {
            position: absolute;
            width: 400px;
            height: 36px;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            overflow: visible;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
        }

        .preloader__wrap div {
            position: absolute;
            width: 20px;
            height: 36px;
            opacity: 0;
            font-family: "Proxima Nova Regular", sans-serif;
            animation: move 2s linear infinite;
            -webkit-animation: move 2s linear infinite;
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            color: #fff;
        }

        .preloader__wrap div:nth-child(2) {
            animation-delay: 0.2s;
            -webkit-animation-delay: 0.2s;
        }

        .preloader__wrap div:nth-child(3) {
            animation-delay: 0.4s;
            -webkit-animation-delay: 0.4s;
        }

        .preloader__wrap div:nth-child(4) {
            animation-delay: 0.6s;
            -webkit-animation-delay: 0.6s;
        }

        .preloader__wrap div:nth-child(5) {
            animation-delay: 0.8s;
            -webkit-animation-delay: 0.8s;
        }

        .preloader__wrap div:nth-child(6) {
            animation-delay: 1s;
            -webkit-animation-delay: 1s;
        }

        .preloader__wrap div:nth-child(7) {
            animation-delay: 1.2s;
            -webkit-animation-delay: 1.2s;
        }

        @keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }
            35% {
                left: 41%;
                transform: rotate(0deg);
                opacity: 1;
            }
            65% {
                left: 59%;
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                left: 100%;
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }
            35% {
                left: 41%;
                -webkit-transform: rotate(0deg);
                opacity: 1;
            }
            65% {
                left: 59%;
                -webkit-transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                left: 100%;
                -webkit-transform: rotate(-180deg);
                opacity: 0;
            }
        }

        /*------------/preloader---------*/


    </style>
</head>
<body>
<!-- site -->
<div class="site">

    <!--preloader-->
    <div class="preloader" data-delay="2000">

        <!--preloader__wrap-->
        <div class="preloader__wrap">
            <div>G</div>
            <div>N</div>
            <div>I</div>
            <div>D</div>
            <div>A</div>
            <div>O</div>
            <div>L</div>
        </div>
        <!--/preloader__wrap-->

    </div>
    <!--/preloader-->

    <!-- site__header -->
    <header class="site__header site__header_inner">

        <!-- site__header-layout -->
        <div class="site__header-layout">

            <!-- logo -->
            <a href="<?php home_url(); ?>" class="logo">
                <img src="<?php echo TEMPLATEURI ?>/img/logo_inside.png" alt="logo">
            </a>
            <!-- /logo -->

            <!-- header-menu__item -->
            <a href="#" class="header-menu__item">View Icons</a>
            <!-- /header-menu__item -->

            <!-- header-menu__item -->
            <a href="#" class="header-menu__item">Buy Now</a>
            <!-- /header-menu__item -->

            <!-- site__header__menu-drop -->
            <a class="drop-menu-btn" href="#"><span></span></a>
            <!-- /site__header__menu-drop -->

        </div>
        <!-- /site__header-layout -->

        <!-- drop-menu -->
        <div class="drop-menu">

            <!-- drop-menu__inner -->
            <div class="drop-menu__inner">

                <!-- drop-menu__inner-wrap -->
                <div class="drop-menu__inner-wrap"  id="scroll-wrap" >

                    <!-- scroller -->
                    <div  id="scroller">

                        <!-- drop-menu__menu -->
                        <ul class="drop-menu__menu">
                            <li><a href="#" class="drop-menu__menu-item">View icons</a></li>
                            <li><a href="#" class="drop-menu__menu-item">Pricing</a></li>
                        </ul>
                        <!-- /drop-menu__menu -->

                        <!-- drop-menu__navigation -->
                        <ul class="drop-menu__navigation">
                            <li><a href="#" class="drop-menu__navigation-item">About</a></li>
                            <li><a href="#" class="drop-menu__navigation-item">Blog</a></li>
                            <li><a href="#" class="drop-menu__navigation-item">Affilates</a></li>
                            <li><a href="#" class="drop-menu__navigation-item">Support</a></li>
                        </ul>
                        <!-- /drop-menu__navigation -->

                        <!-- drop-menu__legally -->
                        <ul class="drop-menu__legally">
                            <li><a href="#" class="drop-menu__legally-item">Classic license</a></li>
                            <li><a href="#" class="drop-menu__legally-item">Extended license</a></li>
                            <li><a href="#" class="drop-menu__legally-item">Terms of use</a></li>
                            <li><a href="#" class="drop-menu__legally-item">Privicy policy</a></li>
                        </ul>
                        <!-- /drop-menu__legally -->

                    </div>
                    <!-- /scroller -->

                </div>
                <!-- /drop-menu__inner-wrap -->

                <!-- drop-menu__inner -->
                <span class="copyright">© ICON54 2016. All rights reserved</span>
                <!-- drop-menu__inner -->

                <!-- social -->
                <div class="social">
                    <a href="#" class="social__item social__item_mail"></a>
                    <a href="#" class="social__item social__item_btn"></a>
                    <a href="#" class="social__item social__item_tw"></a>
                    <a href="#" class="social__item social__item_fb"></a>
                </div>
                <!-- /social -->

            </div>
            <!-- /drop-menu__inner -->

        </div>
        <!-- /drop-menu -->

    </header>
    <!-- site__header -->