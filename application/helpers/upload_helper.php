<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

/*
upload işlemi projede birçok kez kullanacağımız bir yapı. bunu da tekrar tekrar yazmak yerine tek bir fonksiyon haline
getirmek daha mantıklı olur.
*/

function upload($file, $path)
{
    $ci = get_instance(); //helper içerisinde $this kullanılamaz. o yüzden bunu yazıyoruz.
    
    //görsel yüklenecekse gerekli ön ayarlamalar yapılsın.
    $config['upload_path']          = './uploads/'.$path; //dosya hangi konuma yüklensin?
    $config['allowed_types']        = '*'; //tüm dosya uzantılarına izin ver.
    $config['max_size']             = 2048; //izin verilecek maksimum dosya boyutu
    $config['max_width']            = 6000; //izin verilecek maksimum dosya genişliği
    $config['max_height']           = 6000; //izin verilecek maksimum dosya yüksekliği
    $ci->load->library('upload', $config); //dosya yükleme için gerekli kütüphaneyi yükleyelim.
    $ci->upload->do_upload($file); //dosyayı yükleyelim.
    $uploadEdilmisVeri = $ci->upload->data(); //upload edilmiş veri hakkında bilgileri return eder.
    $input_haberGorsel = $uploadEdilmisVeri["file_name"]; //yüklediğimiz dosyanın ismini saklayalım.
    //echo $this->upload->display_errors(); //display_errors ile dosya yüklerken hataları görmemiz için.

    return $input_haberGorsel; //yüklenilen dosyanın ismini return etsin.
}



?>