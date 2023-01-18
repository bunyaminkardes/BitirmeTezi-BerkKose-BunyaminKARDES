<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Paneli - Düzce Üniversitesi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/adminlte/custom.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/adminlte/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/adminlte/adminlte.min.css">
        
        <!-- favicon -->
        <link rel='shortcut icon' type='image/x-icon' href= "<?php echo base_url(); ?>img/favicon.ico" />
        
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>Panel/Logout">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="<?php echo base_url(); ?>panel" class="brand-link">
                    <img src="<?php echo base_url(); ?>img/adminlte/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">DÜZCE PANEL</span>
                </a>
                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>uploads/profil-foto/<?php echo $this->session->userdata("KULLANICIFOTO"); ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a class="d-block"> <?php echo $this->session->userdata("GIRISYAPANKULLANICI"); ?> </a>
                        </div>
                    </div>
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>panel" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>panel/duyurular" class="nav-link">
                                    <i class="nav-icon fas fa-bullhorn"></i>
                                    <p>Duyurular</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>panel/etkinlikler" class="nav-link">
                                    <i class="nav-icon fas fa-calendar"></i>
                                    <p>Etkinlikler</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>panel/haberler" class="nav-link">
                                    <i class="nav-icon fas fa-newspaper"></i>
                                    <p>Haberler</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>panel/adminler" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Adminler</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>panel/dustatistik" class="nav-link">
                                    <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>Düstatistik</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            
            <div class="content-wrapper">
                <section class="content">
            