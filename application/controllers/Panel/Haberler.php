<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Haberler extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Haberler_Model'); //Haberler Modelini her metodda tekrar tekrar yüklemek yerine bu şekilde yükleyelim.
    }

	public function index()
	{
        $config = get_pagination_configs("panel/haberler"); 
        $this->pagination->initialize($config);
        
        $data = array(
            "haberler_pagination"   => $this->Haberler_Model->get_haberler_pagination($config['per_page'], $config['offset']),
            "haberler_sayfalar"     => $this->pagination->create_links()
        );

        load_panel_view("panel/Haberler_View", $data);
	}

    public function HaberEkle()
    {
        $sonuc = NULL; //işlem sonucu bu değişkende saklanarak view'a yollanacak. varsayılan olarak NULL olsun.
        $input_haberBaslik = $this->input->post("haberBaslik"); //haber ekle'den gelecek inputlar
        $input_haberIcerik = $this->input->post("haberIcerik"); //haber ekle'den gelecek inputlar

        if( isset($input_haberBaslik) && isset($input_haberIcerik) ) {
            $input_haberGorsel = upload("haberGorsel", "haberler"); //input olarak gelecek görseli upload edelim.
            $haberEkle = $this->Haberler_Model->create_haber($input_haberBaslik, $input_haberIcerik, $input_haberGorsel);
            if($haberEkle == TRUE) {
                $sonuc = "Haber başarıyla eklendi.";
            }
        }

        $data = ["sonuc" => $sonuc];

        load_panel_view("panel/HaberEkle_View", $data);
    }

    public function HaberGuncelle()
    {
        $sonuc = NULL; //işlem sonucu bu değişkende saklanarak view'a yollanacak. varsayılan olarak NULL olsun.
        $haberID           = $this->input->get('id'); //güncellenecek haber ID'si.
        $guncelleSubmit    = $this->input->post("guncelle_submit"); // güncelle butonuna basılıp basılmadığı.
        $input_haberBaslik = $this->input->post("haberBaslik"); // güncellenecek başlık bilgisi
        $input_haberIcerik = $this->input->post("haberIcerik"); // güncellenecek içerik bilgisi

        $haber = $this->Haberler_Model->get_haber($haberID); //yollanan ID'ye ait haber bilgilerini getir.

        if( isset($guncelleSubmit) ) { //güncelle butonuna basıldıysa
            $input_haberGorsel = upload("haberGorsel", "haberler");
            $haberGuncelle = $this->Haberler_Model->update_haber($haberID, $input_haberBaslik, $input_haberIcerik, $input_haberGorsel);
            if($haberGuncelle == TRUE) {
                $sonuc = "Haber başarıyla güncellendi.";
            }
        }

        $data = [
            "haberBaslik" => $haber->haberBaslik,
            "haberIcerik" => $haber->haberIcerik,
            "haberGorsel" => $haber->haberGorsel,
            "haberTarih"  => $haber->haberTarih,
            "sonuc"       => $sonuc
        ];

        load_panel_view("panel/HaberGuncelle_View", $data);
    }

    public function HaberSil()
    {
        $haberID = $this->input->get('id');

        if( isset($haberID) ) { //haberID tanımlanmışsa haber silme işlemi yapılsın.
            $this->Haberler_Model->delete_haber($haberID);
            redirect('panel/haberler');
        }
    }
    
}
?>