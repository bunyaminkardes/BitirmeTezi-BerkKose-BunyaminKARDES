<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

/*
pagination ayarları çok sayıda kod satırı içeriyor ve uygulamada birden çok yerde kullanıyoruz.
bunları sürekli tekrar tekrar yazmak yerine fonksiyon haline getirmek daha mantıklı.
*/

function get_pagination_configs($baseURL)
{
    $ci = get_instance(); //helper içerisinde $this kullanılamaz. o yüzden bunu yazıyoruz.

    $ci->load->model("Duyurular_Model");
    $ci->load->model("Etkinlikler_Model");
    $ci->load->model("Haberler_Model");

    if($baseURL == "duyurular") {
        $total_rows = $ci->Duyurular_Model->count_duyurular();
        $sayfa = ($ci->uri->segment(3)) ? $ci->uri->segment(3) : 0;
    }
    else if($baseURL == "etkinlikler") {
        $total_rows = $ci->Etkinlikler_Model->count_etkinlikler();
        $sayfa = ($ci->uri->segment(3)) ? $ci->uri->segment(3) : 0;
    }
    else if($baseURL == "haberler") {
        $total_rows = $ci->Haberler_Model->count_haberler();
        $sayfa = ($ci->uri->segment(3)) ? $ci->uri->segment(3) : 0;
    }
    else if($baseURL == "panel/duyurular") {
        $total_rows = $ci->Duyurular_Model->count_duyurular();
        $sayfa = ($ci->uri->segment(4)) ? $ci->uri->segment(4) : 0;
    }
    else if($baseURL == "panel/etkinlikler") {
        $total_rows = $ci->Etkinlikler_Model->count_etkinlikler();
        $sayfa = ($ci->uri->segment(4)) ? $ci->uri->segment(4) : 0;
    }
    else if($baseURL == "panel/haberler") {
        $total_rows = $ci->Haberler_Model->count_haberler();
        $sayfa = ($ci->uri->segment(4)) ? $ci->uri->segment(4) : 0;
    }

    $baseURL = $baseURL.'/index';

    $configs = array(
        "base_url"         => $config['base_url']         = base_url($baseURL),
        "total_rows"       => $config['total_rows']       = $total_rows,
        "per_page"         => $config['per_page']         = 8,
        "use_page_numbers" => $config['use_page_numbers'] = TRUE,
        "full_tag_open"    => $config['full_tag_open']    = '<ul class="pagination">',
        "full_tag_close"   => $config['full_tag_close']   = '</ul>',
        "prev_link"        => $config['prev_link']        = '&laquo',
        "next_link"        => $config['next_link']        = '&raquo',
        "cur_tag_open"     => $config['cur_tag_open']     = '<li class="active"><a href="#">', //current tag
        "cur_tag_close"    => $config['cur_tag_close']    = '</a></li>'
    );

    if($sayfa > 0)  // Eğer sayfa 0 dan büyükse
    {
        $offset = ($sayfa*$config['per_page']) - $config['per_page'];  // Offset değerimizi bu işlemler ile buluyoruz
    }
    else
    {
        $offset = $sayfa; // Eğer Sayfa 0 dan küçükse veya eşitse direk sayfa değişkeninin değerini al
    }

    $configs["offset"] = $offset; //config dizisine offset'i de ekleyelim.

    return $configs; //son olarak da tüm config dizisini return edelim.
}
?>