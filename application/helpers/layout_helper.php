<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

/*
layout view'larını yüklerken şu şekilde yapıyoruz :
    $this->load->view("header");
    $this->load->view("falancaView");
    $this->load->view("footer");

bu şekilde olunca sürekli her metodun içerisinde header ve footer gibi alanları tekrar tekrar yazarak yüklemek zorunda kalıyoruz.
halbuki bunu tek bir fonksiyon haline getirip halledebiliriz.
*/

function load_view($view, $data = NULL)
{
    $ci = get_instance(); //helper içerisinde $this kullanılamaz. o yüzden bunu yazıyoruz.
    $ci->load->view("layout/header", $data);
    $ci->load->view($view, $data);
    $ci->load->view("layout/footer");
}

function load_panel_view( $view, $data = NULL )
{
    $ci = get_instance(); //helper içerisinde $this kullanılamaz. o yüzden bunu yazıyoruz.
    $ci->load->view("layout/panel_header");
    $ci->load->view($view, $data);
    $ci->load->view("layout/panel_footer");
}



?>