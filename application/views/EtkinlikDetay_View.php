<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
    <div class="card haberdetay-kapsayici">
        <span class="haberdetay-tarih"><?php echo $etkinlik->etkinlikTarih; ?></span>
        <h3 class="haberdetay-baslik"><?php echo $etkinlik->etkinlikBaslik; ?></h3>
        <p class="haberdetay-aciklama"><?php echo $etkinlik->etkinlikIcerik; ?></p>
        <img class="haberdetay-resim" src="<?php echo base_url() ?>uploads/etkinlikler/<?php echo $etkinlik->etkinlikGorsel; ?>">
    </div>
</div>