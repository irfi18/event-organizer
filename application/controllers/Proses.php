<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proses extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('Proses_model','mod_proses');
	}
	public function index()
	{
		$data['judul'] = 'Perangkingan';
		$data['content'] = 'perbandingan/prosesview';
		$this->load->view('v_admin', $data);
        
	}

	function proseshitung()
	{
		$this->mod_proses->proseshitung();		
		if($this->mod_proses->proseshitung()==TRUE)
		{
			//set_header_message('success','Proses Beasiswa','Beasiswa telah diproses');
			//redirect(base_url(akses().'/beasiswa/beasiswa').'?id='.$id);
			echo json_encode(array('status'=>'ok'));
		}else{
			//set_header_message('danger','Proses Beasiswa','Beasiswa gagal diproses');
			//redirect(base_url(akses().'/beasiswa/beasiswa'));
			echo json_encode(array('status'=>'no'));
		}	
	}
    
    
}
