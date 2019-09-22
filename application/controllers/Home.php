<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Proses_model','mod_proses');
		$this->load->model('Alternatif_model', 'mod_alternatif');
	}

	public function index()
	{
		$data['data'] = $this->mod_alternatif->rangking()->result_object();
		$data['content'] = 'perbandingan/v_hasil';
		$this->load->view('v_admin', $data);
	}

}