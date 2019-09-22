<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proses extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('Proses_model','mod_proses');
		$this->load->model('Kriteria_model');
	}
	public function index()
	{
		$data['judul'] = 'Perangkingan';
		$data['content'] = 'perbandingan_user/prosesview';
		$this->load->view('v_home', $data);
		// $this->funkriteria();
        
	}

	function simpanRangking(){
		// $id_kriteria =$this->input->post('id_kriteria');
		$id_alternatif = $this->input->post('alt[]'); 
		// for($i = 1; $i <= $id_alternatif.length; $i++ ){
		// 	echo $i
		// }
		$data = [];
		foreach($id_alternatif as $key => $val){
			// echo $key . ' - '. $val . '<br>';
			$data = [
				'id_alternatif' => $key,
				'nilai' => $val,
			];
		$this->mod_proses->simpanRangking($data);
		$this->session->set_flashdata('info', 'Nilai perangkingan berhasil disimpan');
		return redirect('Proses','refresh');
	}

}
}