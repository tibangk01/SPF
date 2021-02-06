<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= APP_NAME ?> | <?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('') ?>assets/client/images/favicon.ico">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/client/css/vendor/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/client/css/vendor/fontawesome-all.min.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/client/css/plugins/swiper.min.css">

    <!-- Animate text CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/client/css/plugins/animate-text.css">

    <!-- AOS CSS -->
    <link href="<?= base_url('') ?>assets/client/css/plugins/aos.css" rel="stylesheet">

    <!-- Some Plugins CSS -->
    <link href="<?= base_url('') ?>assets/client/css/plugins/some-plugins.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/client/css/plugins/animate.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/client/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url('') ?>templates/brucehtml/bruce/assets/scss/style.css"> -->

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    <div class="header-area header-area--default">

        <!-- Header Top Wrap Start -->
        <div class="header-top-wrap theme-bg-default">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4  col-6">
                    </div>
                    <div class="col-md-4 col-6  d-md-block d-none">
                        <div class="top-message">&nbsp;</div>
                    </div>
                    <div class="col-md-4  col-6">
                        <!-- header right box -->
                        <div class="header-right-box">
                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <p class="mobile-top-message d-none"><a href="<?= base_url('admin')?>">Connexion</a></p>
                                <!-- language-menu -->
                                <div class="language-menu">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('admin')?>" class="">
                                                <span><i class="fa fa-lock"></i> Connexion</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-lock"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Header Top Wrap End -->

        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-area--absolute transparent-bg header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header default-menu-style position-relative">

                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="<?= base_url('client/home') ?>">
                                    <img src="<?= base_url('/') ?>assets/client/images/logo/dark-logo.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header midle box  -->
                            <div class="header-midle-box">
                                <div class="header-bottom-wrap d-md-block d-none">
                                    <div class="header-bottom-inner">
                                        <div class="header-bottom-left-wrap">
                                            <!-- navigation menu -->
                                            <div class="header__navigation d-none d-lg-block">
                                                <nav class="navigation-menu primary--menu">
                                                    <ul>
                                                        <li class="has-children has-children--multilevel-submenu">
                                                            <a href="<?= base_url('client/home') ?>"><span>Accueil</span></a>
                                                        </li>
                                                        <li class="has-children has-children--multilevel-submenu">
                                                            <a href="<?= base_url('client/documents') ?>"><span>Documents utiles</span></a>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="<?= base_url('client/contact') ?>"><span>Contact</span></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Wrap End -->
    </div>
    <!--====================  End of header area  ====================-->

