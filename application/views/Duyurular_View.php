<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
    <h3 class="haberler-ana-baslik">DUYURULAR</h3>
    <div class="haberler-ana-baslik-serit"></div>

    <div class="row">
        <?php foreach($duyurular_pagination as $row): ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card haberler-kapsayici">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 haberler-resim-kapsayici">
                            <img class="haberler-resim-resim" src="<?php echo base_url()?>./uploads/duyurular/<?php echo $row->duyuruGorsel; ?>" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 haberler-yazi-kapsayici">
                            <a class="haberler-yazi-baslik" href="<?php echo base_url() ?>duyurular/duyuru/<?php echo $row->id; ?>"><?php echo $row->duyuruBaslik; ?></a>
                            <p class="haberler-yazi-aciklama"><?php echo $row->duyuruIcerik; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php echo $duyurular_sayfalar;?>
    </div>
</div>