<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container pt-50">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url(); ?>panel/haberler/haberekle" enctype="multipart/form-data" accept-charset="utf-8" class="form-genel" autocomplete="off">
                <?php if($sonuc != NULL): ?>
                    <div class="alert alert-info" role="alert"><?php echo $sonuc; ?></div>
                <?php endif; ?>
                <h3 class="form-genel-baslik">HABER EKLE</h3>
                <input class="form-genel-input" type="text" placeholder="HABER BAŞLIK" name="haberBaslik" required>
                <textarea class="form-genel-textarea" placeholder="HABER İÇERİK" name="haberIcerik" required></textarea>
                <span>Haber Görseli : </span><input type="file" name="haberGorsel">
                <input class="form-genel-submit-buton" type="submit" value="EKLE">
            </form>
        </div>
    </div>
</div>