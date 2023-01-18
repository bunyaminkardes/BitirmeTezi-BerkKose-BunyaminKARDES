<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
    <div class="card haberdetay-kapsayici">
        <span class="haberdetay-tarih"><?php echo $duyuru->duyuruTarih; ?></span>
        <h3 class="haberdetay-baslik"><?php echo $duyuru->duyuruBaslik; ?></h3>
        <p class="haberdetay-aciklama"><?php echo $duyuru->duyuruIcerik; ?></p>
        <img class="haberdetay-resim" src="<?php echo base_url() ?>uploads/duyurular/<?php echo $duyuru->duyuruGorsel; ?>">
    </div>
</div>