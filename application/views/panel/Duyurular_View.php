<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>DUYURULAR</h3>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body duyurular-card-body">
                    <a href="<?php echo base_url(); ?>panel/duyurular/duyuruekle" class="ekleButon" >DUYURU EKLE</a>
                    <div class="table-responsive duyurular-tablo">
                        <table class="table table-striped table-bordered table-hover table-layout-fixed" style="text-align:center;">
                            <thead class="thead-primary">
                                <tr>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Duyuru ID</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Duyuru Başlığı</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Duyuru İçeriği</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Duyuru Görseli</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">Duyuru Tarihi</th>
                                    <th class="va-middle table-th-td-ellipsis" scope="col">İşlem Yap</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($duyurular_pagination as $row): ?>
                                    <tr>
                                        <th class="col-md-1 va-middle table-th-td-ellipsis" scope="row"><?php echo $row->id; ?></th>
                                        <td class="col-md-2 va-middle table-th-td-ellipsis"><?php echo $row->duyuruBaslik; ?></td>
                                        <td class="col-md-5 va-middle table-th-td-ellipsis"><?php echo $row->duyuruIcerik; ?></td>
                                        <td class="col-md-1 va-middle table-th-td-ellipsis"><?php echo $row->duyuruGorsel; ?></td>
                                        <td class="col-md-1 va-middle table-th-td-ellipsis"><?php echo $row->duyuruTarih; ?></td>
                                        <td class="col-md-2 va-middle table-th-td-ellipsis">
                                            <a href="<?php echo base_url();?>panel/duyurular/duyurusil?id=<?php echo $row->id; ?>">
                                                <i class="fa fa-times-circle silmeIkonu"></i>
                                            </a>
                                            <a href="<?php echo base_url();?>panel/duyurular/duyuruguncelle?id=<?php echo $row->id; ?>">
                                                <i class="far fa-edit guncellemeIkonu"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php echo $duyurular_sayfalar;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>