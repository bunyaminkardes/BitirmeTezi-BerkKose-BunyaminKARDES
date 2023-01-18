<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
    <div class="card haberdetay-kapsayici">
        <span class="haberdetay-tarih"><?php echo $haber->haberTarih; ?></span>
        <h3 class="haberdetay-baslik"><?php echo $haber->haberBaslik; ?></h3>
        <p class="haberdetay-aciklama"><?php echo $haber->haberIcerik; ?></p>
        <img class="haberdetay-resim" src="<?php echo base_url() ?>uploads/haberler/<?php echo $haber->haberGorsel; ?>">
    </div>
</div>