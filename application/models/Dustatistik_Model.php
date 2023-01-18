<?php
class Dustatistik_Model extends CI_Model {

    public function get_dustatistik()
    {
        $query = $this->db->get('dustatistik'); //SELECT * FROM dustatistik
		$row = $query->row(); // tek bir satır döndürür.
		$dustatistik = [
			"dustatistik_fakulteler"        => $row->fakulteler,
			"dustatistik_yuksekokul"        => $row->yuksekokul,
			"dustatistik_ogrencisayisi"     => $row->ogrencisayisi,
			"dustatistik_mezunsayisi"       => $row->mezunsayisi,
			"dustatistik_akademisyensayisi" => $row->akademisyensayisi,
			"dustatistik_tubitakprojesi"    => $row->tubitakprojesi,
			"dustatistik_bapprojesi"        => $row->bapprojesi,
			"dustatistik_lisansprogrami"    => $row->lisansprogrami
		];
        return $dustatistik;
    }
}
?>