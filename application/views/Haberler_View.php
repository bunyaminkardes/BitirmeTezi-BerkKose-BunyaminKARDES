<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
    <h3 class="haberler-ana-baslik">HABERLER</h3>
    <div class="haberler-ana-baslik-serit"></div>

    <div class="row">
        <?php foreach($haberler_pagination as $row): ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card haberler-kapsayici">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 haberler-resim-kapsayici">
                            <img class="haberler-resim-resim" src="<?php echo base_url()?>./uploads/haberler/<?php echo $row->haberGorsel; ?>" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 haberler-yazi-kapsayici">
                            <a class="haberler-yazi-baslik" href="<?php echo base_url() ?>haberler/haber/<?php echo $row->id; ?>"><?php echo $row->haberBaslik; ?></a>
                            <p class="haberler-yazi-aciklama"><?php echo $row->haberIcerik; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php echo $haberler_sayfalar;?>
    </div>
</div>