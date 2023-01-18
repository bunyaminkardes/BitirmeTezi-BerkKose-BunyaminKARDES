<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- google fontları-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo+2">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        
        <!-- slider için -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- düstatistik için -->
        <script src="<?php echo base_url(); ?>/js/jquery.counterup.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery.waypoints.min.js"></script>

        <!-- favicon -->
        <link rel='shortcut icon' type='image/x-icon' href= "<?php echo base_url(); ?>img/favicon.ico" />
    </head>
    <body>
        
        <!-- HEADER BAŞLANGIÇ -->
        <div id="master-header-kusak" class="d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <form action="" autocomplete="off" style="padding-top:5px;"> <!-- inline css-->
                            <input id="search-bar" type="search" placeholder=" Dü'de ara">
                            <i id="search-bar-ikon" class="fa fa-search"></i>
                        </form>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <a href="https://duzce.edu.tr/08d6/dukkan" target="_blank"><img id="dukkan" src="<?php echo base_url(); ?>img/dukkan.png" width="90" alt="dükkan logosu"></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="master-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
                        <a href="<?php echo base_url(); ?>"><img id="master-header-logo" src="<?php echo base_url(); ?>img/logo-2.png" alt="düzce üniversitesi logosu"></a>
                    </div>
                    <div class="col-12 col-sm-9 col-md-9 col-lg-9 master-navbar d-none d-md-block">
                        <ul>
                            <li> <a id="hizli-erisim" href="javascript:void(0);">HIZLI ERİŞİM</a></li>
                            <li> <a href="javascript:void(0);">ARAŞTIRMA</a> </li>
                            <li> <a href="javascript:void(0);">AKADEMİK</a> </li>
                            <li> <a href="javascript:void(0);">ÜNİVERSİTEMİZ</a> </li>
                        </ul>
                    </div>
                    <div class="col-12 d-block d-md-none"> <!-- d-block d-md-none :  -->
                        <div class="hamburger-menu" id="hamburger-menu">
                            <div class="hamburger-menu-buton-cizgiler"></div>
                            <div class="hamburger-menu-buton-cizgiler"></div>
                            <div class="hamburger-menu-buton-cizgiler"></div>
                            <div class="hamburger-menu-acilir-menu" id="hamburger-menu-acilir-menu">
                                <ul>
                                    <li> <a href="#"> ÜNİVERSİTEMİZ </a> </li>
                                    <li> <a href="#"> AKADEMİK </a> </li>
                                    <li> <a href="#"> ARAŞTIRMA </a> </li>
                                    <li> <a href="#"> HIZLI ERİŞİM </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HIZLI ERİŞİM AÇILIR MENÜ BAŞLANGIÇ -->
            <div id="hizli-erisim-acilir-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 hizli-erisim-acilir-menu-sol">
                            <h3 id="hizli-erisim-acilir-menu-baslik">HIZLI ERİŞİM</h3>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 hizli-erisim-acilir-menu-sag">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <ul>
                                    <li> <span class="fa fa-envelope hizli-erisim-ikon"></span> <a href="#">E-POSTA SERVİSİ</a> </li>
                                    <li> <span class="fa fa-eye hizli-erisim-ikon"></span> <a href="#">ÖBS/KBYS</a> </li>
                                    <li> <span class="fa fa-file-text hizli-erisim-ikon"></span> <a href="#">EBYS</a> </li>
                                    <li> <span class="fa fa-globe hizli-erisim-ikon"></span> <a href="#">UZEM</a> </li>
                                    <li> <span class="fa fa-book hizli-erisim-ikon"></span> <a href="#">KÜTÜPHANE</a> </li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <ul>
                                    <li> <span class="fa fa-phone-square hizli-erisim-ikon"></span> <a href="#">REHBER</a> </li>
                                    <li> <span class="fa fa-calendar hizli-erisim-ikon"></span> <a href="#">PBS</a> </li>
                                    <li> <span class="fa fa-clipboard hizli-erisim-ikon"></span> <a href="#">STAJ</a> </li>
                                    <li> <span class="fa fa-cutlery hizli-erisim-ikon"></span> <a href="#">YEMEK MENÜSÜ</a> </li>
                                    <li> <span class="fa fa-life-ring hizli-erisim-ikon"></span> <a href="#">HAVUZ</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HIZLI ERİŞİM AÇILIR MENÜ BİTİŞ -->

        </div>
        <!-- HEADER BİTİŞ -->