<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Help';
		$data['content'] = 'help';
		$this->load->view('v_help', $data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */