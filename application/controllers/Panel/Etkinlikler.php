<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Etkinlikler extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Etkinlikler_Model'); //Etkinlikler Modelini her metodda tekrar tekrar yüklemek yerine bu şekilde yükleyelim.
    }

	public function index()
	{
        $config = get_pagination_configs("panel/etkinlikler"); 
        $this->pagination->initialize($config);
        
        $data = array(
            "etkinlikler_pagination"   => $this->Etkinlikler_Model->get_etkinlikler_pagination($config['per_page'], $config['offset']),
            "etkinlikler_sayfalar"     => $this->pagination->create_links()
        );

        load_panel_view("panel/Etkinlikler_View", $data);
	}

    public function EtkinlikEkle()
    {
        $sonuc = NULL;
        $input_etkinlikBaslik = $this->input->post("etkinlikBaslik"); //etkinlik ekle'den gelecek inputlar
        $input_etkinlikIcerik = $this->input->post("etkinlikIcerik"); //etkinlik ekle'den gelecek inputlar

        if( isset($input_etkinlikBaslik) && isset($input_etkinlikIcerik) ) {
            $input_etkinlikGorsel = upload("etkinlikGorsel", "etkinlikler");
            $etkinlikEkle = $this->Etkinlikler_Model->create_etkinlik($input_etkinlikBaslik, $input_etkinlikIcerik, $input_etkinlikGorsel);
            if($etkinlikEkle == TRUE) {
                $sonuc = "Etkinlik başarıyla eklendi.";
            }   
        }

        $data = ["sonuc" => $sonuc];

        load_panel_view("panel/EtkinlikEkle_View", $data);
    }

    public function EtkinlikGuncelle()
    {
        $sonuc = NULL;
        $etkinlikID           = $this->input->get('id'); //güncellenecek etkinlik ID'si.
        $guncelleSubmit       = $this->input->post("guncelle_submit"); // güncelle butonuna basılıp basılmadığı.
        $input_etkinlikBaslik = $this->input->post("etkinlikBaslik"); // güncellenecek başlık bilgisi
        $input_etkinlikIcerik = $this->input->post("etkinlikIcerik"); // güncellenecek içerik bilgisi

        $etkinlik = $this->Etkinlikler_Model->get_etkinlik($etkinlikID);

        if( isset($guncelleSubmit) ) { //güncelle butonuna basıldıysa
            $input_etkinlikGorsel = upload("etkinlikGorsel", "etkinlikler");
            $etkinlikGuncelle = $this->Etkinlikler_Model->update_etkinlik($etkinlikID, $input_etkinlikBaslik, $input_etkinlikIcerik, $input_etkinlikGorsel);
            if($etkinlikGuncelle == TRUE) {
                $sonuc = "Etkinlik başarıyla güncellendi.";
            }
        }

        $data = [
            "etkinlikBaslik" => $etkinlik->etkinlikBaslik,
            "etkinlikIcerik" => $etkinlik->etkinlikIcerik,
            "etkinlikGorsel" => $etkinlik->etkinlikGorsel,
            "etkinlikTarih"  => $etkinlik->etkinlikTarih,
            "sonuc"          => $sonuc
        ];

        load_panel_view("panel/EtkinlikGuncelle_View", $data);
    }

    public function EtkinlikSil()
    {
        $etkinlikID = $this->input->get('id');

        if( isset($etkinlikID) ) { //etkinlikID tanımlanmışsa etkinlik silme işlemi yapılsın.
            $this->Etkinlikler_Model->delete_etkinlik($etkinlikID);
            redirect('panel/etkinlikler');
        }
    }
    
}
?>