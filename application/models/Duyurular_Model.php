<?php
class Duyurular_Model extends CI_Model {

    public function create_duyuru($input_duyuruBaslik, $input_duyuruIcerik, $input_duyuruGorsel = "yok") //duyuru ekler.
    {
        $now = datetimenow();

        $data = [
            'duyuruBaslik' => $input_duyuruBaslik,
            'duyuruIcerik' => $input_duyuruIcerik,
            'duyuruGorsel' => $input_duyuruGorsel,
            'duyuruTarih'  => $now
        ];
        
        $this->db->insert("duyurular", $data);
        
        $num_rows = $this->db->count_all_results();
        
        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function get_duyuru($id) //id parametresine göre ilgili duyuruyu return eder.
    {
        return $this->db->select('*')->from('duyurular')->where('id', $id)->get()->row();
    }

    public function get_duyurular() //anasayfada listelenecek olan 5 duyuru için.
	{
        return $this->db->select('*')->from('duyurular')->order_by('id', 'DESC')->limit(5)->get()->result_object();
	}

    public function get_duyurular_pagination($limit, $offset)
    {
        return $this->db->select('*')->from('duyurular')->order_by('id', 'DESC')->limit($limit, $offset)->get()->result();
    }

    public function delete_duyuru($id) //id parametresine göre ilgili duyuruyu siler.
    {
        $this->db->where('id', $id)->delete("duyurular");
    }

    public function update_duyuru($id, $duyuruBaslik, $duyuruIcerik, $duyuruGorsel = NULL)
    {
        $now = datetimenow();

        $data = [
            'duyuruBaslik' => $duyuruBaslik,
            'duyuruIcerik' => $duyuruIcerik,
            'duyuruGorsel' => $duyuruGorsel,
            'duyuruTarih'  => $now
        ];

        if($duyuruGorsel == NULL) {
            unset($data['duyuruGorsel']);
        }

        $this->db->where('id', $id)->update("duyurular", $data);
        
        $num_rows = $this->db->count_all_results();
        
        return $num_rows > 0 ? true : false; //$num_rows 0'dan büyükse true, değilse false döndür. işlemin sonucunu anlayacağız buradan.
    }

    public function count_duyurular() //duyurular tablosundaki toplam satır sayısını return eder.
    {
        return $this->db->count_all_results("duyurular");
    }
}
?>