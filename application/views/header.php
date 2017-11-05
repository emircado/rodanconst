<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rodan Construction</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?= base_url('css/normalize.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">

        <link type="text/plain" rel="author" href="http://www.rodanconstruction.com/humans.txt" />

        <link rel="icon" type="image/ico" href="<?= base_url('favicon.ico') ?>">

        <script src="<?= base_url('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>
        <script src="https://use.fontawesome.com/2b71088380.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <div class="wrapper">
                    <div class="logo-box">
                        <a href="<?= site_url() ?>">
                            <img class="logo" src="<?= base_url() ?>img/logo.png" alt="Rodan Construction">
                        </a>
                        <button id="menu-switch" type="button"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="spacer">
                    <nav id="main-nav">
                        <ul>
                            <li <?php if ($page=='home') { ?> class="active" <?php } ?>>
                                <a href="<?= site_url() ?>">HOME</a>
                            </li>
                            <li <?php if ($page=='aboutus') { ?> class="active" <?php } ?>>
                                <a href="<?= site_url('aboutus') ?>">ABOUT</a>
                            </li>
                            <li <?php if ($page=='gallery') { ?> class="active" <?php } ?>>
                                <a href="<?= site_url('gallery') ?>">GALLERY</a>
                            </li>
                            <li <?php if ($page=='contactus') { ?> class="active" <?php } ?>>
                                <a href="<?= site_url('contactus') ?>">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>