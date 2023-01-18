<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Etkinlikler extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Etkinlikler_Model');
    }

	public function index()
	{
        $config = get_pagination_configs("etkinlikler");
        $this->pagination->initialize($config);
        
        $data = array(
            "etkinlikler_pagination"   => $this->Etkinlikler_Model->get_etkinlikler_pagination($config['per_page'], $config['offset']),
            "etkinlikler_sayfalar"     => $this->pagination->create_links(),
            "title"                    => 'Düzce Üniversitesi - Etkinlikler'
        );

        load_view("Etkinlikler_View", $data);
	}

    public function etkinlik($id)
    {
        $etkinlik = $this->Etkinlikler_Model->get_etkinlik($id);
        $data = [
            "etkinlik" => $etkinlik,
            "title"    => 'Düzce Üniversitesi - Etkinlikler'
        ];
        load_view("EtkinlikDetay_View", $data);
    }
}
?>
