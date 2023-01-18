<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Duyurular extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Duyurular_Model');
    }

	public function index()
	{
        $config = get_pagination_configs("duyurular");
        $this->pagination->initialize($config);
        
        $data = array(
            "duyurular_pagination"   => $this->Duyurular_Model->get_duyurular_pagination($config['per_page'], $config['offset']),
            "duyurular_sayfalar"     => $this->pagination->create_links(),
            "title"                  => 'Düzce Üniversitesi - Duyurular'
        );

        load_view("Duyurular_View", $data);
	}

    public function duyuru($id)
    {
        $duyuru = $this->Duyurular_Model->get_duyuru($id);
        $data = [
            "duyuru" => $duyuru,
            "title"  => 'Düzce Üniversitesi - Duyurular'
        ];
        load_view("DuyuruDetay_View", $data);
    }
}
?>