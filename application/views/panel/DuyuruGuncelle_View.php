<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container pt-50">
    <div class="card">
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-genel" autocomplete="off">
                <?php if($sonuc != NULL): ?>
                    <div class="alert alert-info" role="alert"><?php echo $sonuc; ?></div>
                <?php endif; ?>
                <h3 class="form-genel-baslik">DUYURU GÜNCELLE</h3>
                <input class="form-genel-input" type="text" value="<?php echo $duyuruBaslik; ?>" placeholder="DUYURU BAŞLIK" name="duyuruBaslik" required>
                <textarea class="form-genel-textarea" placeholder="DUYURU İÇERİK" name="duyuruIcerik" required><?php echo $duyuruIcerik; ?></textarea>
                <span>Duyuru Görseli : </span><input type="file" name="duyuruGorsel">
                <input class="form-genel-submit-buton" type="submit" name="guncelle_submit" value="GÜNCELLE">
            </form>
        </div>
    </div>
</div>  