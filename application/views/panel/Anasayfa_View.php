<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>DASHBOARD</h3>
            </div>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
          <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $duyuruSayisi; ?></h3>
                <p>DUYURU SAYISI</p>
              </div>
              <div class="icon">
                <i class="ion ion-speakerphone"></i>
              </div>
              <a href="<?php echo base_url() ?>panel/duyurular" class="small-box-footer">Detaylar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $etkinlikSayisi; ?></h3>
                <p>ETKİNLİK SAYISI</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="<?php echo base_url() ?>panel/etkinlikler" class="small-box-footer">Detaylar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $haberSayisi; ?></h3>
                <p>HABER SAYISI</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="<?php echo base_url() ?>panel/haberler" class="small-box-footer">Detaylar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $adminSayisi; ?></h3>
                <p>ADMİN SAYISI</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="<?php echo base_url() ?>panel/adminler" class="small-box-footer">Detaylar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
</div>