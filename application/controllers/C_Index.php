<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Index extends CI_Controller {
	public function index()
	{
		$this->load->view('V_Index.php');
	}
}
