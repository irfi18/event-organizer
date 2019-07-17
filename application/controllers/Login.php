<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		// load form Login pelanggan
		$this->load->view('v_login');
	}

	public function post_admin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->User_model->cek_user($username, $password);

		if ($cek) {
			if ($cek->role != 'admin') {
				echo "User ini bukan user admin";
				return null;
			}
			$data = array(
				'nama'  => $cek->nama,
				'role' => 'admin'
			);
			$this->session->set_userdata( $data );
			redirect('admin','refresh');
		}else{
			echo "User tidak ada";
		}
	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect('home','refresh');
	}

}