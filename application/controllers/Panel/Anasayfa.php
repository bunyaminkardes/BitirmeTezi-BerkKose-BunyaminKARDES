<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Anasayfa extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Duyurular_Model");
        $this->load->model("Etkinlikler_Model");
        $this->load->model("Haberler_Model");
        $this->load->model("Adminler_Model");
    }

	public function index()
	{
        if($this->session->userdata("GIRISYAPANKULLANICI")) { //session tanımlı mı diye ön kontrol yapalım.

            $duyuruSayisi   = $this->Duyurular_Model->count_duyurular();
            $etkinlikSayisi = $this->Etkinlikler_Model->count_etkinlikler();
            $haberSayisi    = $this->Haberler_Model->count_haberler();
            $adminSayisi    = $this->Adminler_Model->count_adminler();

            $data = [
                "duyuruSayisi"    => $duyuruSayisi,
                "etkinlikSayisi"  => $etkinlikSayisi,
                "haberSayisi"     => $haberSayisi,
                "adminSayisi"     => $adminSayisi
            ];

            load_panel_view("panel/Anasayfa_View", $data); //session tanımlıysa admin panelini yükleyelim.
        }
        else
        {
           redirect('panel/login'); //session tanımlı değilse giris metoduna yönlendirsin.
        }
	}
}
?>
