<?php
class Etkinlikler_Model extends CI_Model {

    public function create_etkinlik($input_etkinlikBaslik, $input_etkinlikIcerik, $input_etkinlikGorsel = "yok") //etkinlik ekler.
    {
        $now = datetimenow();

        $data = [
            'etkinlikBaslik' => $input_etkinlikBaslik,
            'etkinlikIcerik' => $input_etkinlikIcerik,
            'etkinlikGorsel' => $input_etkinlikGorsel,
            'etkinlikTarih'  => $now
        ];
        
        $this->db->insert("etkinlikler", $data);

        $num_rows = $this->db->count_all_results();

        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function get_etkinlik($id) //id parametresine göre ilgili etkinliği return eder.
    {
        return $this->db->select('*')->from('etkinlikler')->where('id', $id)->get()->row();
    }

    public function get_etkinlikler() //anasayfada listelenecek olan 5 etkinlik için.
	{
        return $this->db->select('*')->from('etkinlikler')->order_by('id', 'DESC')->limit(5)->get()->result_object();
	}

    public function get_etkinlikler_pagination($limit, $offset)
    {
        return $this->db->select('*')->from('etkinlikler')->order_by('id', 'DESC')->limit($limit, $offset)->get()->result();
    }

    public function delete_etkinlik($id) //id parametresine göre ilgili etkinliği siler.
    {
        $this->db->where('id', $id)->delete("etkinlikler");
    }

    public function update_etkinlik($id, $etkinlikBaslik, $etkinlikIcerik, $etkinlikGorsel = NULL)
    {
        $now = datetimenow();

        $data = [
            'etkinlikBaslik' => $etkinlikBaslik,
            'etkinlikIcerik' => $etkinlikIcerik,
            'etkinlikGorsel' => $etkinlikGorsel,
            'etkinlikTarih'  => $now
        ];

        if($etkinlikGorsel == NULL) {
            unset($data['etkinlikGorsel']);
        }
        
        $this->db->where('id', $id)->update("etkinlikler", $data);

        $num_rows = $this->db->count_all_results();

        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function count_etkinlikler() //etkinlikler tablosundaki toplam satır sayısını return eder.
    {
        return $this->db->count_all_results("etkinlikler");
    }
}
?>