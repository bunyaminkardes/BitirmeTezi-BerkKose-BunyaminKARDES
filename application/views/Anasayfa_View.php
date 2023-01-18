<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

        <!-- SLIDER BAŞLANGIÇ -->
            <div class="anasayfa-slider" id ="slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="anasayfa-slider-resimler" src="<?php echo base_url(); ?>img/slider-foto-1.jpg" alt="birinci slayt resmi">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img class="anasayfa-slider-resimler" src="<?php echo base_url(); ?>img/slider-foto-2.jpg" alt="ikinci slayt resmi">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img class="anasayfa-slider-resimler" src="<?php echo base_url(); ?>img/slider-foto-3.jpg" alt="üçüncü slayt resmi">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        <!-- SLIDER BİTİŞ -->

        <!-- DUYURULAR VE ETKİNLİKLER BAŞLANGIÇ -->
        <div class="anasayfa-duyurular-kapsayici" id="duyurular-etkinlikler">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h3 class="anasayfa-duyurular-baslik">
                            DUYURULAR
                        </h3>
                        <div class="anasayfa-duyurular-baslik-cizgi"></div>
                        <div class="anasayfa-duyurular">
                            <?php foreach($duyurular as $row) : ?>
                                <a href="<?php echo base_url() ?>duyurular/duyuru/<?php echo $row->id; ?>">
                                    <div class="anasayfa-duyurular-duyuru">
                                        <div class="anasayfa-duyurular-duyuru-tarih">
                                            <span class="anasayfa-duyurular-duyuru-tarih-tarih-gun">13</span>
                                            <span class="anasayfa-duyurular-duyuru-tarih-tarih-ay">Kas</span>
                                        </div>
                                        <h3 class="anasayfa-duyurular-duyuru-baslik"><?php echo $row->duyuruBaslik; ?></h3>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <button class="tumunu-gor-buton"><a href="<?php echo base_url() ?>duyurular">Tüm Duyuruları Gör</a></button>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h3 class="anasayfa-duyurular-baslik">
                            ETKİNLİKLER
                        </h3>
                        <div class="anasayfa-duyurular-baslik-cizgi"></div>
                        <div class="anasayfa-etkinlikler">
                            <?php foreach ($etkinlikler as $row): ?>
                                <a href="<?php echo base_url() ?>etkinlikler/etkinlik/<?php echo $row->id; ?>">
                                    <div class="anasayfa-etkinlikler-etkinlik">
                                        <div class="anasayfa-etkinlikler-etkinlik-tarih">
                                            <span class="anasayfa-etkinlikler-etkinlik-tarih-tarih-gun">13</span>
                                            <span class="anasayfa-etkinlikler-etkinlik-tarih-tarih-ay">Kas</span>
                                        </div>
                                        <h3 class="anasayfa-etkinlikler-etkinlik-baslik"><?php echo $row->etkinlikBaslik; ?></h3>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <button class="tumunu-gor-buton"><a href="<?php echo base_url() ?>etkinlikler">Tüm Etkinlikleri Gör</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- DUYURULAR VE ETKİNLİKLER BİTİŞ -->


        <!-- HABERLER BAŞLANGIÇ -->
        <div class="anasayfa-haberler-kapsayici" id="haberler">
            <h3 class="anasayfa-haberler-baslik">
                HABERLER
            </h3>
            <div class="anasayfa-duyurular-baslik-cizgi"></div>
            <div class="container">
                <div class="row">
                    <?php foreach($haberler as $row): ?>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="anasayfa-haberler">
                                <a href="<?php echo base_url() ?>haberler/haber/<?php echo $row->id; ?>">
                                    <img class="anasayfa-haberler-fotograf" src="<?php echo base_url()."uploads/haberler/".$row->haberGorsel; ?>">
                                </a>
                                <h3 class="anasayfa-haberler-alt-baslik"><?php echo $row->haberBaslik; ?></h3>
                                <span class="anasayfa-haberler-aciklama"><?php echo $row->haberIcerik; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="tumunu-gor-buton"><a href="<?php echo base_url() ?>haberler">Tüm Haberleri Gör</a></button>
            </div>
        </div>
        <!-- HABERLER BİTİŞ -->

        <!-- DÜSTATİSTİK BAŞLANGIÇ -->

        <div class="dustatistik-kapsayici">
            <h3 class="dustatistik-baslik">DÜSTATİSTİK</h3>
            <div class="dustatistik-baslik-cizgi"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-university dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_fakulteler"]; ?></span>
                        <span class="dustatistik-aciklama">FAKÜLTELER</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-book dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_yuksekokul"]; ?></span>
                        <span class="dustatistik-aciklama">YÜKSEKOKUL</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-users dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_ogrencisayisi"]; ?></span>
                        <span class="dustatistik-aciklama">ÖĞRENCİ SAYISI</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-graduation-cap dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_mezunsayisi"]; ?></span>
                        <span class="dustatistik-aciklama">MEZUN SAYISI</span>
                    </div>
                </div>
                <div class="row" style="padding-top:50px;"> <!-- inline css -->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-id-card-o dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_akademisyensayisi"]; ?></span>
                        <span class="dustatistik-aciklama">AKADEMİSYEN SAYISI</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-pencil dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_tubitakprojesi"]; ?></span>
                        <span class="dustatistik-aciklama">TÜBİTAK PROJESİ</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-check dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_bapprojesi"]; ?></span>
                        <span class="dustatistik-aciklama">BAP PROJESİ</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 dustatistik-ikonlar-kapsayici">
                        <i class="fa fa-suitcase dustatistik-ikonlar"></i>
                        <span class="dustatistik-sayilar count"><?php echo $dustatistik["dustatistik_lisansprogrami"]; ?></span>
                        <span class="dustatistik-aciklama">LİSANS PROGRAMI</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- DÜSTATİSTİK BİTİŞ -->


        <div class="du-yardim">
            <h3 class="du-yardim-baslik">Yardıma mı ihtiyacınız var?</h3>
            <div class="du-yardim-buton"><a href="https://rehber.duzce.edu.tr/">İletişime Geçin</a></div>
        </div>