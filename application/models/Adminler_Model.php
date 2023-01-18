<?php
class Adminler_Model extends CI_Model {

    public function panel_login($email, $sifre) {
        $query = $this->db->get('adminler');
        $results = $query->result_array(); //bunun yerine result() veya result_object() metodunu çağırırsan nesne versiyonlusunu yaparsın.
        foreach($results as $row) {
            if($email == $row['adminEmailAdress'] && $sifre == $row['adminPassword']) {
                $data = [
                    "admin_ad_soyad" => $row["adminAd"]." ".$row["adminSoyad"],
                    "admin_foto"     => $row["adminFotograf"],
                    "admin_rutbe"    => $row["adminRutbe"]
                ];
                return $data;
            }
        }
        return false;
    }

    public function count_adminler() //adminler tablosundaki toplam satır sayısını return eder.
    {
        return $this->db->count_all_results("adminler");
    }

    public function get_admin($id)
    {
        return $this->db->select('*')->from('adminler')->where('id', $id)->get()->row();
    }

    public function get_adminler()
    {
        return $this->db->select('*')->from('adminler')->order_by('id', 'DESC')->get()->result_object();
    }

    public function create_admin($input_adminIsim, $input_adminSoyisim, $input_adminEmail, $input_adminSifre, $input_adminFotograf)
    {
        $data = [
            'adminUsername'     => "girilmemis",
            'adminEmailAdress'  => $input_adminEmail,
            'adminPassword'     => $input_adminSifre,
            'adminAd'           => $input_adminIsim,
            'adminSoyad'        => $input_adminSoyisim,
            'adminFotograf'     => $input_adminFotograf
        ];

        $this->db->insert("adminler", $data);
        
        $num_rows = $this->db->count_all_results();
        
        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function update_admin($adminID, $input_adminIsim, $input_adminSoyisim, $input_adminEmail, $input_adminSifre, $input_adminFotograf = NULL)
    {
        $data = [
            'adminUsername'     => "girilmemis",
            'adminEmailAdress'  => $input_adminEmail,
            'adminPassword'     => $input_adminSifre,
            'adminAd'           => $input_adminIsim,
            'adminSoyad'        => $input_adminSoyisim,
            'adminFotograf'     => $input_adminFotograf
        ];

        if($input_adminFotograf == NULL) {
            unset($data['adminFotograf']);
        }

        $this->db->where('id', $adminID)->update("adminler", $data);
        
        $num_rows = $this->db->count_all_results();
        
        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function delete_admin($id)
    {
        $this->db->where('id', $id)->delete("adminler");
    }
    
}
?>