<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container pt-50">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url(); ?>panel/duyurular/duyuruekle" enctype="multipart/form-data" accept-charset="utf-8" class="form-genel" autocomplete="off">
                <?php if($sonuc != NULL): ?>
                    <div class="alert alert-info" role="alert"><?php echo $sonuc; ?></div>
                <?php endif; ?>
                <h3 class="form-genel-baslik">DUYURU EKLE</h3>
                <input class="form-genel-input" type="text" placeholder="DUYURU BAŞLIK" name="duyuruBaslik" required>
                <textarea class="form-genel-textarea" placeholder="DUYURU İÇERİK" name="duyuruIcerik" required></textarea>
                <span>Duyuru Görseli : </span><input type="file" name="duyuruGorsel">
                <input class="form-genel-submit-buton" type="submit" value="EKLE">
            </form>
        </div>
    </div>
</div>