<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>HABERLER</h3>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body haberler-card-body">
                    <a href="<?php echo base_url(); ?>panel/haberler/haberekle" class="ekleButon" >HABER EKLE</a>
                    <div class="table-responsive haberler-tablo">
                        <table class="table table-striped table-bordered table-hover table-layout-fixed" style="text-align:center;">
                            <thead class="thead-primary">
                                <tr>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Haber ID</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Haber Başlığı</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Haber İçeriği</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Haber Görseli</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Haber Tarihi</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">İşlem Yap</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($haberler_pagination as $row): ?>
                                    <tr>
                                        <th class="col-md-1 va-middle table-th-td-ellipsis" scope="row"><?php echo $row->id; ?></th>
                                        <td class="col-md-2 va-middle table-th-td-ellipsis"><?php echo $row->haberBaslik; ?></td>
                                        <td class="col-md-5 va-middle table-th-td-ellipsis"><?php echo $row->haberIcerik; ?></td>
                                        <td class="col-md-1 va-middle table-th-td-ellipsis"><?php echo $row->haberGorsel; ?></td>
                                        <td class="col-md-1 va-middle table-th-td-ellipsis"><?php echo $row->haberTarih; ?></td>
                                        <td class="col-md-2 va-middle table-th-td-ellipsis">
                                            <a href="<?php echo base_url();?>panel/haberler/habersil?id=<?php echo $row->id; ?>">
                                                <i class="fa fa-times-circle silmeIkonu"></i>
                                            </a>
                                            <a href="<?php echo base_url();?>panel/haberler/haberguncelle?id=<?php echo $row->id; ?>">
                                                <i class="far fa-edit guncellemeIkonu"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php echo $haberler_sayfalar;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>