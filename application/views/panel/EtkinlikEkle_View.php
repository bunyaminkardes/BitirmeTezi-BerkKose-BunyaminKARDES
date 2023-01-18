<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container pt-50">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url(); ?>panel/etkinlikler/etkinlikekle" enctype="multipart/form-data" accept-charset="utf-8" class="form-genel" autocomplete="off">
                <?php if($sonuc != NULL): ?>
                    <div class="alert alert-info" role="alert"><?php echo $sonuc; ?></div>
                <?php endif; ?>
                <h3 class="form-genel-baslik">ETKİNLİK EKLE</h3>
                <input class="form-genel-input" type="text" placeholder="ETKİNLİK BAŞLIK" name="etkinlikBaslik" required>
                <textarea class="form-genel-textarea" placeholder="ETKİNLİK İÇERİK" name="etkinlikIcerik" required></textarea>
                <span>Etkinlik Görseli : </span><input type="file" name="etkinlikGorsel">
                <input class="form-genel-submit-buton" type="submit" value="EKLE">
            </form>
        </div>
    </div>
</div>