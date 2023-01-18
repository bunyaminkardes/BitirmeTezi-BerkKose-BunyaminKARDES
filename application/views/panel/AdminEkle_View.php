<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container pt-50">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url(); ?>panel/adminler/adminekle" enctype="multipart/form-data" accept-charset="utf-8" class="form-genel" autocomplete="off">
                <?php if($sonuc != NULL): ?>
                    <div class="alert alert-info" role="alert"><?php echo $sonuc; ?></div>
                <?php endif; ?>
                <h3 class="form-genel-baslik">ADMİN EKLE</h3>
                <input class="form-genel-input" type="text" placeholder="Admin İsim" name="adminIsim" required>
                <input class="form-genel-input" type="text" placeholder="Admin Soyisim" name="adminSoyisim" required>
                <input class="form-genel-input" type="text" placeholder="Admin E-mail" name="adminEmail" required>
                <input class="form-genel-input" type="password" placeholder="Admin Şifre" name="adminSifre" required>
                <span>Admin Fotoğrafı : </span><input type="file" name="adminFotograf">
                <input class="form-genel-submit-buton" type="submit" name="createAdmin" value="EKLE">
            </form>
        </div>
    </div>
</div>