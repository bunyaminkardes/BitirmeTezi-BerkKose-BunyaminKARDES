<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DÜ ADMİN PANELİ - GİRİŞ YAP</title>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/adminlte/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/adminlte/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/adminlte/adminlte.min.css">
        
        <!-- favicon -->
        <link rel='shortcut icon' type='image/x-icon' href= "<?php echo base_url(); ?>img/favicon.ico" />

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Düzce</b>Panel</a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Oturum açmak için giriş yapın.</p>
                    <form action="<?php echo base_url(); ?>panel/login" method="post" autocomplete="off">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="E-mail adresi">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="sifre" placeholder="Şifre">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Beni Hatırla
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="<?php echo base_url(); ?>js/adminlte/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/adminlte/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>js/adminlte/adminlte.min.js"></script>

    </body>
</html>