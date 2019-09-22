<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Profil';
		$this->load->view('v_profil', $data);
	}

}