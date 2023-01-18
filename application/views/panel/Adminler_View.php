<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>ADMİNLER</h3>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body adminler-card-body">
                    <a href="<?php echo base_url(); ?>panel/adminler/adminekle" class="ekleButon" >ADMİN EKLE</a>
                    <div class="table-responsive adminler-tablo">
                        <table class="table table-striped table-bordered table-hover table-layout-fixed" style="text-align:center;">
                            <thead class="thead-primary">
                                <tr>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Admin ID</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Admin Ad</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Admin Soyad</th>
                                    <?php if( $this->session->userdata("RUTBE") == "superAdmin" ) : ?>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Admin E-mail</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Admin Şifre</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Admin Fotoğraf</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">İşlem Yap</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($adminler as $row): ?>
                                    <tr>
                                        <th class="col-md-2 va-middle table-th-td-ellipsis" scope="row"><?php echo $row->id; ?></th>
                                        <td class="col-md-3 va-middle table-th-td-ellipsis"><?php echo $row->adminAd; ?></td>
                                        <td class="col-md-3 va-middle table-th-td-ellipsis"><?php echo $row->adminSoyad; ?></td>
                                        <?php if( $this->session->userdata("RUTBE") == "superAdmin" ) : ?>
                                        <td class="col-md-3 va-middle table-th-td-ellipsis"><?php echo $row->adminEmailAdress; ?></td>
                                        <td class="col-md-3 va-middle table-th-td-ellipsis"><?php echo $row->adminPassword; ?></td>
                                        <td class="col-md-3 va-middle table-th-td-ellipsis"><?php echo $row->adminFotograf; ?></td>
                                        <td class="col-md-2 va-middle table-th-td-ellipsis">
                                            <a href="<?php echo base_url();?>panel/adminler/adminsil?id=<?php echo $row->id; ?>">
                                                <i class="fa fa-times-circle silmeIkonu"></i>
                                            </a>
                                            <a href="<?php echo base_url();?>panel/adminler/adminguncelle?id=<?php echo $row->id; ?>">
                                                <i class="far fa-edit guncellemeIkonu"></i>
                                            </a>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>