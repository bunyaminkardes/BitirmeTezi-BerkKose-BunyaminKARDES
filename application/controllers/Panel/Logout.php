<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
class Logout extends CI_Controller { // class ismi dosya ismiyle aynı olmak zorunda.

	public function index()
	{
        $this->session->unset_userdata('GIRISYAPANKULLANICI');
        redirect('panel/login');
	}
}
?>
