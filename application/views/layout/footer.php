<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>       
       
       <!-- FOOTER BAŞLANGIÇ -->
       <div id="master-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 ortala">
                        <a href="<?php echo base_url(); ?>">
                            <img id="master-footer-logo" src="<?php echo base_url(); ?>img/logo.png" alt="düzce üniversitesi logosu">
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="footer-yazilar ortala fs-13">
                            <i class="fa fa-map-marker"></i>
                            <span>Düzce Üniversitesi, 81620, Düzce, Türkiye</span>
                        </div>
                        <div class="footer-yazilar ortala fs-13 mt-10">
                            <i class="fa fa-envelope"></i>
                            <span>deneme.deneme.edu.tr</span>
                        </div>                   
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="footer-yazilar ortala fs-14">
                            <i class="fa fa-phone"></i>
                            <span>TEL : 0850 800 81 81</span>
                        </div>
                        <div class="footer-yazilar ortala fs-14 mt-10">
                            <i class="fa fa-fax"></i>
                            <span>FAX : 0380 542 11 03</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-logolar ortala">
                        <a href="https://www.instagram.com/duzceuniversite/" target="_blank"><i class="fa fa-instagram fs-40"></i></a>
                        <a href="https://tr-tr.facebook.com/DuzceUniversite/" target="_blank"><i class="fa fa-facebook  fs-40"></i></a>
                        <a href="https://twitter.com/duzceuniversite" target="_blank"><i class="fa fa-twitter   fs-40"></i></a>
                        <a href="#"><i class="fa fa-whatsapp  fs-40"></i></a>
                        <a href="https://www.youtube.com/duzceuniversite" target="_blank"><i class="fa fa-youtube   fs-40"></i></a>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- boş :) -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="footer-appstore-playstore">
                            <a href="https://play.google.com/store/apps/details?id=com.duzce.mobil&hl=tr&gl=US&pli=1">
                                <img src="<?php echo base_url(); ?>img/google-play.png"> <!-- inline css -->
                            </a>
                        </div>
                        
                        <div class="footer-appstore-playstore">
                            <a href="https://apps.apple.com/au/app/t-c-d%C3%BCzce-%C3%BCniversitesi/id1253964981">
                                <img  src="<?php echo base_url(); ?>img/app-store.png"> <!-- inline css -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="master-footer-kusak">
            <span>&copy; 2022 Düzce Üniversitesi. Tüm Hakları Saklıdır.</span>
        </div>
        <!-- FOOTER BİTİŞ -->

        <div id="basa-don"><a href="#"><i style="padding-right:0px;" class="fa fa-angle-up"></i></a> </div> <!-- inline css -->

        <script>
            
            // not : getElementById() metodu elementi bulamazsa null return eder.
            
            let hizliErisim = document.getElementById("hizli-erisim");
            let hizliErisimAcilirMenu = document.getElementById("hizli-erisim-acilir-menu");
            let headerKusak = document.getElementById("master-header-kusak");
            let header = document.getElementById("master-header");
            let logo = document.getElementById("master-header-logo");
            let basaDonButonu = document.getElementById("basa-don");
            let slider = document.getElementById("slider");
            let duyurularVeEtkinlikler = document.getElementById("duyurular-etkinlikler");
            let haberler = document.getElementById("haberler");
            let hamburgerMenu = document.getElementById("hamburger-menu");
            let hamburgerMenuAcilirMenu = document.getElementById("hamburger-menu-acilir-menu");

            let headerUzunluk = headerKusak.offsetHeight + header.offsetHeight; //header'in toplam uzunluğu.
            

            //DUSTATİSTİK SAYAÇ İŞLEMLERİ
            //slider, duyurular, etkinlikler ve haberler her sayfada yok. dolayısıyla hata ile karşılaşmamak için bunlar var mı diye ön kontrol yapalım.
            if( slider != null && duyurularVeEtkinlikler != null && haberler != null ) {
                let sliderUzunluk = slider.offsetHeight;
                let duyurularVeEtkinliklerUzunluk = duyurularVeEtkinlikler.offsetHeight;
                let haberlerUzunluk = haberler.offsetHeight;
                function dustatistikSayac() {
                    let suAnkiKonum = window.pageYOffset || document.documentElement.scrollTop;
                    Uzunluk = headerUzunluk + sliderUzunluk + duyurularVeEtkinliklerUzunluk + haberlerUzunluk;
                    if( suAnkiKonum >= Uzunluk - 300 ) { // - 300 gibi bir değer vermezsek haberleri tamamen geçtiğimizde ancak çalışıyor sayaç.
                        $('.count').counterUp({
                            delay: 10,
                            time: 2000
                        });
                        window.removeEventListener("scroll", dustatistikSayac);
                    }}
            }

            hizliErisim.onclick = function() { //hızlı erişim linkine tıklandığında :
                if( hizliErisimAcilirMenu.style.display === "block" ) { //hızlı erişim açılır menüsü zaten açıksa :
                    hizliErisimAcilirMenu.style.display = "none"; //hızlı erişim açılır menüsünü kapat.
                    hizliErisim.style.borderBottom = "none"; //hızlı erişim linki altındaki border efektini kaldır.
                }
                else { //hızlı erişim açılır menüsü açık değilse :
                    hizliErisimAcilirMenu.style.display = "block"; //hızlı erişim açılır menüsünü aç.
                    hizliErisim.style.borderBottom = "3px solid #FFF"; //hızlı erişim linki altına border efekti ekle.
                }
            };

            hamburgerMenu.onclick = function() {
                if( hamburgerMenuAcilirMenu.style.display === "block" ) {
                    hamburgerMenuAcilirMenu.style.display = "none";
                }
                else {
                    hamburgerMenuAcilirMenu.style.display = "block";
                }
            }

            function seffafHeader() {
                var suAnkiKonum = window.pageYOffset || document.documentElement.scrollTop;
                if( suAnkiKonum >= headerUzunluk ) { // şu anki konum header uzunluğundan büyük veya eşitse :
                    header.classList.add("seffafHeader"); //header şeffaf olsun.
                    logo.setAttribute("src", "<?php echo base_url(); ?>img/logo.png"); //logo da şeffaflığa uygun biçimde değişsin.
                    basaDonButonu.style.display = "block"; //başa dön butonu gözüksün.
                    hizliErisimAcilirMenu.classList.add("hizli-erisim-seffaf");
                    hamburgerMenuAcilirMenu.classList.add("hamburger-menu-acilir-menu-seffaf");
                }
                else {
                    header.classList.remove("seffafHeader");
                    logo.setAttribute("src", "<?php echo base_url(); ?>img/logo-2.png");
                    basaDonButonu.style.display = "none";
                    hizliErisimAcilirMenu.classList.remove("hizli-erisim-seffaf");
                    hamburgerMenuAcilirMenu.classList.remove("hamburger-menu-acilir-menu-seffaf");
                }
            }

            window.addEventListener("scroll", seffafHeader); //scroll yapıldıkça seffafHeader fonksiyonu çağrılsın.
            window.addEventListener("scroll", dustatistikSayac); //scroll yapıldıkça dustatistikSayac fonksiyonu çağrılsın.
        </script>


    </body>
</html>