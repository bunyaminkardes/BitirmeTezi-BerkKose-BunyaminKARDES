<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Dustatistik extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Dustatistik_Model");
    }

	public function index()
	{
        load_panel_view("panel/Dustatistik_View");
	}
}
?>