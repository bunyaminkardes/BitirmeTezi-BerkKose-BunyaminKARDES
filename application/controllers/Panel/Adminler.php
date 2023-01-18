<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Adminler extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Adminler_Model");
    }

	public function index()
	{
        $adminler = $this->Adminler_Model->get_adminler();
        $data = ["adminler" => $adminler];
        load_panel_view("panel/Adminler_View", $data);
	}

    public function AdminEkle()
    {
        $sonuc = NULL;
        
        $input_adminIsim     = $this->input->post("adminIsim");
        $input_adminSoyisim  = $this->input->post("adminSoyisim");
        $input_adminEmail    = $this->input->post("adminEmail");
        $input_adminSifre    = $this->input->post("adminSifre");
        $input_createAdmin   = $this->input->post("createAdmin");

        if( isset($input_createAdmin) ) {
            $input_adminFotograf = upload("adminFotograf", "profil-foto");
            $adminEkle = $this->Adminler_Model->create_admin($input_adminIsim, $input_adminSoyisim, $input_adminEmail, $input_adminSifre, $input_adminFotograf);
            if($adminEkle == TRUE) {
                $sonuc = "Admin başarıyla eklendi!";
            }
        }

        $data = ["sonuc" => $sonuc];

        load_panel_view("panel/AdminEkle_View", $data);
    }

    public function AdminGuncelle()
    {
        $sonuc = NULL;
        $adminID             = $this->input->get('id');
        $input_adminIsim     = $this->input->post("adminIsim");
        $input_adminSoyisim  = $this->input->post("adminSoyisim");
        $input_adminEmail    = $this->input->post("adminEmail");
        $input_adminSifre    = $this->input->post("adminSifre");
        $guncelleSubmit      = $this->input->post("updateAdmin");

        $admin = $this->Adminler_Model->get_admin($adminID);

        if( isset($guncelleSubmit) ) {
            $input_adminFotograf = upload("adminFotograf", "profil-foto");
            $adminGuncelle = $this->Adminler_Model->update_admin($adminID, $input_adminIsim, $input_adminSoyisim, $input_adminEmail, $input_adminSifre, $input_adminFotograf);
            if($adminGuncelle == TRUE) {
                $sonuc = "Admin başarıyla güncellendi.";
            }
        }

        $data = [
            "adminIsim"     => $admin->adminAd,
            "adminSoyisim"  => $admin->adminSoyad,
            "adminEmail"    => $admin->adminEmailAdress,
            "adminSifre"    => $admin->adminPassword,
            "sonuc"         => $sonuc
        ];

        load_panel_view("panel/AdminGuncelle_View", $data);
    }

    public function AdminSil()
    {
        $adminID = $this->input->get('id');

        if( isset($adminID) ) {
            $this->Adminler_Model->delete_admin($adminID);
            redirect('panel/adminler');
        }
    }
}
?>