<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Anasayfa extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

	public function __construct()
    {
        parent::__construct();
		$this->load->model("Dustatistik_Model");
		$this->load->model("Duyurular_Model");
		$this->load->model("Etkinlikler_Model");
		$this->load->model("Haberler_Model");
    }

	public function index()
	{
		$dustatistik = $this->Dustatistik_Model->get_dustatistik();
		$duyurular   = $this->Duyurular_Model->get_duyurular();
		$etkinlikler = $this->Etkinlikler_Model->get_etkinlikler();
		$haberler    = $this->Haberler_Model->get_haberler();

		$data = [
			"dustatistik" => $dustatistik,
			"duyurular"   => $duyurular,
			"etkinlikler" => $etkinlikler,
			"haberler"    => $haberler,
			"title"       => 'Düzce Üniversitesi - Anasayfa'
		];

		load_view('Anasayfa_View', $data);
	}
}
?>
