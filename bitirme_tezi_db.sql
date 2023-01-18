-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Oca 2023, 12:41:56
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bitirme_tezi_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminler`
--

DROP TABLE IF EXISTS `adminler`;
CREATE TABLE IF NOT EXISTS `adminler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminUsername` varchar(255) NOT NULL,
  `adminEmailAdress` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL,
  `adminAd` varchar(255) NOT NULL,
  `adminSoyad` varchar(255) NOT NULL,
  `adminFotograf` varchar(255) NOT NULL,
  `adminRutbe` varchar(255) NOT NULL DEFAULT 'admin',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `adminler`
--

INSERT INTO `adminler` (`id`, `adminUsername`, `adminEmailAdress`, `adminPassword`, `adminAd`, `adminSoyad`, `adminFotograf`, `adminRutbe`) VALUES
(1, 'bunyamin4141', 'bunyaminkardes@outlook.com', '123456', 'Bünyamin', 'KARDEŞ', 'bunyamin.jpeg', 'superAdmin'),
(2, 'berk', 'berk.kose@gmail.com', '12345678', 'Berk', 'KÖSE', 'berk.jpeg', 'superAdmin'),
(4, 'girilmemis', 'test@gmail.com', '123456', 'TEST', 'ADMİN', 'Ders_Programı.PNG', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dustatistik`
--

DROP TABLE IF EXISTS `dustatistik`;
CREATE TABLE IF NOT EXISTS `dustatistik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fakulteler` int(11) NOT NULL,
  `yuksekokul` int(11) NOT NULL,
  `ogrencisayisi` int(11) NOT NULL,
  `mezunsayisi` int(11) NOT NULL,
  `akademisyensayisi` int(11) NOT NULL,
  `tubitakprojesi` int(11) NOT NULL,
  `bapprojesi` int(11) NOT NULL,
  `lisansprogrami` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fakulteler` (`fakulteler`,`yuksekokul`,`ogrencisayisi`,`mezunsayisi`,`akademisyensayisi`,`tubitakprojesi`,`bapprojesi`,`lisansprogrami`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `dustatistik`
--

INSERT INTO `dustatistik` (`id`, `fakulteler`, `yuksekokul`, `ogrencisayisi`, `mezunsayisi`, `akademisyensayisi`, `tubitakprojesi`, `bapprojesi`, `lisansprogrami`) VALUES
(1, 14, 12, 29626, 118256, 332, 77, 1092, 84);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

DROP TABLE IF EXISTS `duyurular`;
CREATE TABLE IF NOT EXISTS `duyurular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duyuruBaslik` varchar(255) NOT NULL,
  `duyuruIcerik` text NOT NULL,
  `duyuruGorsel` varchar(255) NOT NULL,
  `duyuruTarih` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`id`, `duyuruBaslik`, `duyuruIcerik`, `duyuruGorsel`, `duyuruTarih`) VALUES
(105, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:17'),
(106, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:21'),
(107, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:27'),
(108, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:32'),
(109, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:37'),
(110, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:41'),
(111, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:46'),
(112, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:50'),
(113, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:20:54'),
(114, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:21:21'),
(115, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:21:35'),
(116, ' Temel İtalyan Mutfağı Workshop Kursu Düzenlendi', 'Üniversitemiz Yaşam Boyu Eğitim, Araştırma ve Uygulama Merkezi ile Akçakoca Turizm İşletmeciliği ve Otelcilik Yüksekokulu Gastronomi ve Mutfak Sanatları bölümü iş birliğinde Temel İtalyan Mutfağı Workshop kursu düzenlendi.\r\n\r\nÜniversitemiz öğrencileri, akademik ve idari personelleri ile dış katılımcıların yer aldığı etkinlikte Akçakoca Turizm İşletmeciliği ve Otelcilik Yüksekokulu Gastronomi ve Mutfak Sanatları Öğretim Görevlisi Atıf Akkil, “Ulusal ve Uluslararası Temel Mutfak Uygulamaları Lazanya ve Makarna Yapımı” hakkında deneyimlerini paylaştı.', 'italyan.jpg', '28/12/2022 03:23:42'),
(117, 'Metaverse ile İş Dünyasının Sınırları Ortadan Kalkacak', 'Üniversitemiz tarafından düzenlenen “Metaverse” konulu konferansta; İş Adamı, Araştırmacı, Yazar ve aynı zamanda Türkiye Düşünce Platformu Yönetim Kurulu Başkanı Taşkın Koçak, öğrencilerimizle bir araya geldi.\r\n\r\nCumhuriyet Konferans Salonu’nda gerçekleştirilen programa; Rektörümüz Prof. Dr. Nedim Sözbir, davetli konuşmacı Taşkın Koçak, davetli konuklar, akademik ve idari personellerimiz ile öğrencilerimiz katıldı.\r\n\r\nMetaverse kavramının, 2001 yılının ekim ayında Mark Zuckerberg tarafından dünyaya açıklandığını belirten Taşkın Koçak, Citibank’ın 2030 yılı tahminlerine göre Metaverse kullanıcı sayısının 5 milyar, ekonomik büyüklüğünün ise 13 trilyon dolara ulaşacağını ifade etti.\r\n\r\nMetaverse evrenlerini oluşturan; internet, web 3.0, xr (vr, ar, mr), blockchain ve yapay zeka teknolojileri hakkında önemli bilgiler paylaşan Koçak; eğitim, sosyal, eğlence, turizm, spor, iş dünyası, sanayi, finans ve sağlık başta olmak üzere birçok alanda Metaverse kullanımıyla ilgili örnekler aktardı.\r\n\r\nMetaverse ile birlikte iş hayatının sınırlarının kalkacağını dile getiren Taşkın Koçak, insanların evinden mağaza veya fabrika gibi alanlarda çalışabileceğini, birçok yeni iş kolunun ortaya çıkacağını sözlerine ekledi.\r\n\r\nBugün bile Metaverse kullanıcı sayısının 500 milyon olduğunu söyleyen davetli konuşmacı, 2030 yılının yıkıcı teknolojilerin geleceği yıl olacağını ifade etti. İnsanların her alanda sanalla karşılaşacağına dikkat çeken Koçak, şimdiden Metaverse ile ilgili hazırlıkların yapılması gerektiğine vurgu yaparak öğrencilerimizin sorularını yanıtladı.\r\n\r\nProgram, Rektörümüz Prof. Dr. Nedim Sözbir tarafından Taşkın Koçak’a teşekkür belgesi ve hediyesinin takdim edilmesiyle sona erdi.', 'metaverse.jpg', '28/12/2022 03:24:58'),
(118, 'Ege Üniversitesi Öğrencileri Duyusal Pazarlama ve İkna Konusunda Bilgilendirildi', 'Üniversitemiz İletişim ve Tanıtım Koordinatörlüğü Öğretim Görevlisi Berkant Yılmaz, Ege Üniversitesi Kariyer Söyleşileri kapsamında düzenlenen programa konuk oldu.\r\n\r\nEge Üniversitesi İletişim Fakültesi ile Kariyer Planlama ve Başarı Koordinatörlüğü tarafından düzenlenen ve Reklamcılık Bölümü Öğretim Üyesi Doç. Dr. Uğur Bakır’ın moderatörlüğünde gerçekleştirilen söyleşide Öğr. Gör. Berkant Yılmaz, “Duyusal Pazarlama ve İkna” konusunda öğrencileri bilgilendirdi.', 'ege.jpg', '28/12/2022 03:26:31'),
(119, 'İznik Roma Tiyatrosu Kazı Çalışmalarının Son Durumu Değerlendirildi', 'Bitinya Arkeolojisi Uygulama ve Araştırma Merkezi tarafından düzenlenen “İznik Roma Tiyatrosu Kazı ve Restorasyon Çalışmalarında Son Durum” başlıklı konferans, Fen Edebiyat Fakültesi Kutadgu Bilig Konferans Salonu’nda gerçekleştirildi.\r\n\r\nKonferansın davetli konuşmacısı Dokuz Eylül Üniversitesi Edebiyat Fakültesi Arkeoloji Bölümü Öğretim Üyesi Doç. Dr. Aygün Ekin Meriç, İznik şehrinin tarihsel süreci, tiyatronun yapılışı, Osmanlı dönemi çini işlemeleri ve tiyatronun özellikleri gibi konulara değindi.\r\n\r\nİznik Roma Tiyatrosu kazı çalışmalarının 1980-2006 yılları arasında Bedri Yalman tarafından başlatıldığını ve 2016 yılından itibarense Bursa Büyükşehir Belediyesi’nin destekleri ile kendilerinin ekip olarak kazıya devam ettiklerini belirten Doç. Dr. Aygün Ekin Meriç, yıllarca süren çalışmalarda sona geldiklerini, restorasyon çalışmalarının ardından alanın ziyarete 2023 yılında açılacağını sözlerine ekledi.', 'iznik.jpg', '28/12/2022 03:27:52'),
(120, 'TED Düzce Koleji ile Üniversitemiz Arasında İş Birliği Protokolü İmzalandı', 'TED Düzce Koleji ile Üniversitemiz Eğitim Fakültesi arasında “Eğitimi Geliştirme ve İş Birliği Protokolü” imzalandı.\r\n\r\nEğitim Fakültesi’nde gerçekleştirilen imza töreninde iş birliği protokolünü Üniversitemiz adına Eğitim Fakültesi Dekanı Prof. Dr. Mustafa Koç imzalarken, TED Düzce Koleji adına ise Okul Müdürü Kadir Zileli imzaladı.', 'ted.jpg', '28/12/2022 03:28:44'),
(121, '12412041240124120910221021201211*24091*2091241204912490129401094210940129401294012940914209120491209412490', '123123', '', '05/01/2023 09:42:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

DROP TABLE IF EXISTS `etkinlikler`;
CREATE TABLE IF NOT EXISTS `etkinlikler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etkinlikBaslik` varchar(255) NOT NULL,
  `etkinlikIcerik` text NOT NULL,
  `etkinlikGorsel` varchar(255) NOT NULL,
  `etkinlikTarih` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`id`, `etkinlikBaslik`, `etkinlikIcerik`, `etkinlikGorsel`, `etkinlikTarih`) VALUES
(34, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:15'),
(35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:21'),
(36, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:26'),
(37, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:31'),
(38, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:38'),
(39, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:42'),
(40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:49'),
(41, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:10:52'),
(42, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:11:00'),
(43, 'Depremin Ardından Psikolojimizi Anlamak', ' ', 'deprem.jpg', '28/12/2022 03:13:02'),
(44, 'Enerji verimliliği ve Enerji yöneticiliği', ' ', 'enerji.jpg', '28/12/2022 03:13:55'),
(45, 'Ekslibris Üzerine Seminer & Workshop Etkinliği', ' ', 'ekslibris.jpg', '28/12/2022 03:14:28'),
(46, 'Açık Kampüs', ' ', 'acik_kampus.jpg', '28/12/2022 03:15:01'),
(47, 'Mehmet Akif Ersoy\'u Anma Günü', ' ', 'mehmet_akif_ersoy.png', '28/12/2022 03:18:09'),
(48, '1241241924ı912ı4ı1092490ı12904ı091249010924ı0912ı4090912ı40912ı9040912ı40912094ı092140ı91092ı409124', '1 ', '', '06/01/2023 04:43:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

DROP TABLE IF EXISTS `haberler`;
CREATE TABLE IF NOT EXISTS `haberler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `haberBaslik` varchar(255) NOT NULL,
  `haberIcerik` text NOT NULL,
  `haberGorsel` varchar(255) NOT NULL,
  `haberTarih` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `haberBaslik`, `haberIcerik`, `haberGorsel`, `haberTarih`) VALUES
(103, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:03:40'),
(104, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:03:56'),
(105, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:04:07'),
(106, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:04:14'),
(107, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:04:25'),
(108, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:04:30'),
(109, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:04:35'),
(110, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:04:41'),
(111, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '28/12/2022 03:04:48'),
(112, '3x3 Sokak Basketbolu Turnuvası ile Etkin Zaman Kullanımına Dikkat Çekildi', 'Üniversitemiz Spor Bilimleri Fakültesi’nin düzenlediği “Sokaktan Gelen Rekabete Hazır Mısınız?” başlıklı 3x3 Sokak Basketbolu turnuvası başladı.', 'd2.jpg', '28/12/2022 03:05:46'),
(113, 'Üniversitemiz Korumalı Futbol Takımı 1. Lig Maçını Farklı Skorla Kazandı', 'Üniversitemiz Stadyumunda gerçekleştirilen maçta Panthers takımımız, hızlı başlayarak ardı sıra puanlar kazandı. Müsabakada oldukça başarılı bir oyun sergileyen Üniversitemiz, farklı skorla maçı kazanan taraf oldu.', 'h2.jpg', '28/12/2022 03:08:24'),
(114, 'İznik Roma Tiyatrosu Kazı Çalışmalarının Son Durumu Değerlendirildi', 'Bitinya Arkeolojisi Uygulama ve Araştırma Merkezi tarafından düzenlenen “İznik Roma Tiyatrosu Kazı ve Restorasyon Çalışmalarında Son Durum” başlıklı konferans, Fen Edebiyat Fakültesi Kutadgu Bilig Konferans Salonu’nda gerçekleştirildi.', 'h3.jpg', '28/12/2022 03:09:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
