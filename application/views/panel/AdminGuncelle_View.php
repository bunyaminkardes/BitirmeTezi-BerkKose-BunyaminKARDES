<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container pt-50">
    <div class="card">
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-genel" autocomplete="off">
                <?php if($sonuc != NULL): ?>
                    <div class="alert alert-info" role="alert"><?php echo $sonuc; ?></div>
                <?php endif; ?>
                <h3 class="form-genel-baslik">ADMİN GÜNCELLE</h3>
                <input class="form-genel-input" type="text" value="<?php echo $adminIsim; ?>" placeholder="ADMİN İSİM" name="adminIsim" required>
                <input class="form-genel-input" type="text" value="<?php echo $adminSoyisim; ?>" placeholder="ADMİN SOYİSİM" name="adminSoyisim" required>
                <input class="form-genel-input" type="text" value="<?php echo $adminEmail; ?>" placeholder="ADMİN EMAİL" name="adminEmail" required>
                <input class="form-genel-input" type="text" value="<?php echo $adminSifre; ?>" placeholder="ADMİN ŞİFRE" name="adminSifre" required>
                <span>Admin Fotoğrafı : </span><input type="file" name="adminFotograf">
                <input class="form-genel-submit-buton" type="submit" name="updateAdmin" value="GÜNCELLE">
            </form>
        </div>
    </div>
</div>  