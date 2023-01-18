<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Duyurular extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Duyurular_Model'); //Duyurular Modelini her metodda tekrar tekrar yüklemek yerine bu şekilde yükleyelim.
    }

	public function index()
	{
        $config = get_pagination_configs("panel/duyurular");
        $this->pagination->initialize($config);
        
        $data = array(
            "duyurular_pagination"   => $this->Duyurular_Model->get_duyurular_pagination($config['per_page'], $config['offset']),
            "duyurular_sayfalar"     => $this->pagination->create_links()
        );

        load_panel_view("panel/Duyurular_View", $data);
	}

    public function DuyuruEkle()
    {
        $sonuc = NULL;
        $input_duyuruBaslik = $this->input->post("duyuruBaslik"); //duyuru ekle'den gelecek inputlar
        $input_duyuruIcerik = $this->input->post("duyuruIcerik"); //duyuru ekle'den gelecek inputlar

        if( isset($input_duyuruBaslik) && isset($input_duyuruIcerik) ) {
            $input_duyuruGorsel = upload("duyuruGorsel", "duyurular");
            $duyuruEkle = $this->Duyurular_Model->create_duyuru($input_duyuruBaslik, $input_duyuruIcerik, $input_duyuruGorsel);
            if($duyuruEkle == TRUE) {
                $sonuc = "Duyuru başarıyla eklendi.";
            }
        }

        $data = ["sonuc" => $sonuc];

        load_panel_view("panel/DuyuruEkle_View", $data);
    }

    public function DuyuruGuncelle()
    {
        $sonuc = NULL;
        $duyuruID           = $this->input->get('id'); //güncellenecek duyuru ID'si.
        $guncelleSubmit     = $this->input->post("guncelle_submit"); // güncelle butonuna basılıp basılmadığı.
        $input_duyuruBaslik = $this->input->post("duyuruBaslik"); // güncellenecek başlık bilgisi
        $input_duyuruIcerik = $this->input->post("duyuruIcerik"); // güncellenecek içerik bilgisi

        $duyuru = $this->Duyurular_Model->get_duyuru($duyuruID);

        if( isset($guncelleSubmit) ) { //güncelle butonuna basıldıysa
            $input_duyuruGorsel = upload("duyuruGorsel", "duyurular");
            $duyuruGuncelle = $this->Duyurular_Model->update_duyuru($duyuruID, $input_duyuruBaslik, $input_duyuruIcerik, $input_duyuruGorsel);
            if($duyuruGuncelle == TRUE) {
                $sonuc = "Duyuru başarıyla güncellendi.";
            }
        }

        $data = [
            "duyuruBaslik" => $duyuru->duyuruBaslik,
            "duyuruIcerik" => $duyuru->duyuruIcerik,
            "duyuruGorsel" => $duyuru->duyuruGorsel,
            "duyuruTarih"  => $duyuru->duyuruTarih,
            "sonuc"        => $sonuc
        ];

        load_panel_view("panel/DuyuruGuncelle_View", $data);
    }

    public function DuyuruSil()
    {
        $duyuruID = $this->input->get('id');

        if( isset($duyuruID) ) { //duyuruID tanımlanmışsa duyuru silme işlemi yapılsın.
            $this->Duyurular_Model->delete_duyuru($duyuruID);
            redirect('panel/duyurular');
        }
    }
    
}

?>