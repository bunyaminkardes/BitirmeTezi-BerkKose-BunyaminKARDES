<?php
class Haberler_Model extends CI_Model {

    public function create_haber($input_haberBaslik, $input_haberIcerik, $input_haberGorsel = "yok") //haber ekler.
    {
        $now = datetimenow();

        $data = [
            'haberBaslik' => $input_haberBaslik,
            'haberIcerik' => $input_haberIcerik,
            'haberGorsel' => $input_haberGorsel,
            'haberTarih'  => $now
        ];

        $this->db->insert("haberler", $data);

        $num_rows = $this->db->count_all_results();

        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function get_haber($id) //id parametresine göre ilgili haberi return eder.
    {
        return $this->db->select('*')->from('haberler')->where('id', $id)->get()->row(); //row() sadece tek bir satır döndürüleceğinde kullanılmalıdır.
    }
    
    public function get_haberler() //anasayfada listelenecek olan 3 haber için.
	{
        return $this->db->select('*')->from('haberler')->order_by('id', 'DESC')->limit(3)->get()->result_object(); //result_object() sorguyu nesne olarak döndürür.
	}

    public function get_haberler_pagination($limit, $offset)
    {
        return $this->db->select('*')->from('haberler')->order_by('id', 'DESC')->limit($limit, $offset)->get()->result(); //result() veya result_array() sorguyu dizi olarak döndürür.
    }

    public function delete_haber($id) //id parametresine göre ilgili haberi siler.
    {
        $this->db->where('id', $id)->delete("haberler");
    }

    public function update_haber($id, $haberBaslik, $haberIcerik, $haberGorsel = NULL)
    {
        $now = datetimenow();

        $data = [
            'haberBaslik' => $haberBaslik,
            'haberIcerik' => $haberIcerik,
            'haberGorsel' => $haberGorsel,
            'haberTarih'  => $now
        ];

        if($haberGorsel == NULL) { //eğer haber görseli güncellenmeyecekse bunu array'den silelim.
            unset($data['haberGorsel']);
        }

        $this->db->where('id', $id)->update("haberler", $data);

        $num_rows = $this->db->count_all_results();

        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function count_haberler() //haberler tablosundaki toplam satır sayısını return eder.
    {
        return $this->db->count_all_results("haberler");
    }
}
?>