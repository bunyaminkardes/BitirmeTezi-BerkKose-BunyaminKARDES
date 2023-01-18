<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Haberler extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Haberler_Model');
    }

	public function index()
	{
        $config = get_pagination_configs("haberler");
        $this->pagination->initialize($config);
        
        $data = array(
            "haberler_pagination"   => $this->Haberler_Model->get_haberler_pagination($config['per_page'], $config['offset']),
            "haberler_sayfalar"     => $this->pagination->create_links(),
            "title"                 => 'Düzce Üniversitesi - Haberler'
        );

        load_view("Haberler_View", $data);
	}

    public function haber($id)
    {
        $haber = $this->Haberler_Model->get_haber($id);
        $data = [
            "haber" => $haber,
            "title"  => 'Düzce Üniversitesi - Haberler'
        ];
        load_view("HaberDetay_View", $data);
    }
}
?>