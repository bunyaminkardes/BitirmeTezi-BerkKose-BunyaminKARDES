<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Login extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

	public function index()
	{
        $this->load->view('panel/Login_View');

        $input_email = $this->input->post("email");
        $input_sifre = $this->input->post("sifre");

        if( isset($input_email) && isset($input_sifre) ) { //formdan inputlar yollanmış mı diye bak.
            $this->load->model("Adminler_Model");
            $login_sonuc = $this->Adminler_Model->panel_login($input_email, $input_sifre);

            if($login_sonuc == false) {
                echo "Giriş Başarısız!";
            }
            else{
                $this->session->set_userdata("GIRISYAPANKULLANICI", $login_sonuc["admin_ad_soyad"]); //session oluşturalım.
                $this->session->set_userdata("KULLANICIFOTO", $login_sonuc["admin_foto"]);
                $this->session->set_userdata("RUTBE", $login_sonuc["admin_rutbe"]);
                redirect('panel');
            }
        }
	}
}
?>
