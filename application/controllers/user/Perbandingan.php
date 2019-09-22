<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perbandingan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();        
		$this->load->model('Kriteria_model','mod_kriteria');
		$this->load->model('Proses_model','mod_proses');
	}
	public function index ()
	{
		$data['judul'] = 'Hitung Perbandingan';
		$data['content'] = 'perbandingan_user/perbandingan_list';
		$this->load->view('v_home',$data);
	}

    function gethtml()
    {
		$id=$this->input->get('kriteria');
		$idk = $this->mod_kriteria->kriteria_info($id,'id_kriteria');
		$output=array();
		$dKriteria=$this->mod_kriteria->kriteria_data();
		if(!empty($dKriteria)){
		foreach($dKriteria as $rK)
		{
			$output[$rK->id_kriteria]=$rK->nama_kriteria;
		}}
		$d['arr']=$output;
		// $d['id_kriteria']=$idk;
		// var_dump($d);
    	$this->load->view('perbandingan/matriks/matrikutama', $d);
	}

	function getaltcontainer()
	{
		$d['kriteria']=$this->mod_kriteria->kriteria_data();
		$this->load->view('perbandingan/matriks/altcontainer',$d);
	}
	
	function getalt()
	{		
		$id=$this->input->get('kriteria');
    	$namaKriteria=$this->mod_kriteria->kriteria_info($id,'nama_kriteria');
    	$dAlt=$this->mod_kriteria->alternatif_data();
    	$output=array();
    	if(!empty($dAlt))
    	{					
		foreach($dAlt as $rK)
		{
			$output[$rK->id_alternatif]=$rK->nama_alternatif;
		}
		}
    	$d['arr']=$output;
    	$d['kriteriaid']=$id;
    	$d['namakriteria']=$namaKriteria;
    	$this->load->view('perbandingan/matriks/matrikalt', $d);
	}

	function updateutama()
    {
    	$error=FALSE;
    	$msg="";
    	$s=array(
    	'id_kriteria_nilai !='=>''
    	);
    	$this->m_db->delete_row('kriteria_nilai',$s);
    	    	
    	$cr=$this->input->post('crvalue');
    	if($cr > 0.1)
    	{
    		$msg="Gagal diupdate karena nilai CR lebih dari 0.1 (Data tidak konsisten)";
			$error=TRUE;
		}else{
			foreach($_POST as $k=>$v)
			{
				if($k!="crvalue" )
				{									
				foreach($v as $x=>$x2)
				{
					$d=array(
					'kriteria_id_dari'=>$k,
					'kriteria_id_tujuan'=>$x,
					'nilai'=>$x2,
					);
					$this->m_db->add_row('kriteria_nilai',$d);
				}
				}
			}
			$msg="Berhasil update nilai kriteria";
			$error=FALSE;
		}
    			
    	
    	if($error==FALSE)
    	{			
			echo json_encode(array('status'=>'ok','msg'=>$msg));
		}else{
			echo json_encode(array('status'=>'no','msg'=>$msg));
		}
		
	}

	function updaterata1(){
		// var_dump($_POST);
		$id_kriteria = $this->input->post('id_kriteria[]');
		// echo '<pre>';
		// var_dump($id_kriteria);
		$data = [];
		foreach($id_kriteria as $key => $val){
			$data = [
				'id_kriteria' => $key,
				'nilai' => $val,
			];
			$this->mod_proses->simpanrata1($data);
			$this->session->set_flashdata('info', 'Nilai rata kriteria berhasil disimpan');
			return redirect('Perbandingan','refresh');
		}
	}

	function updaterata(){
		// echo '<pre>';
		// var_dump($_POST);
		$id_kriteria =$this->input->post('id_kriteria');
		$id_alternatif = $this->input->post('id_alternatif[]'); 
		// for($i = 1; $i <= $id_alternatif.length; $i++ ){
		// 	echo $i
		// }
		$data = [];
		foreach($id_alternatif as $key => $val){
			// echo $key . ' - '. $val . '<br>';
			$data = [
				'id_alternatif' => $key,
				'id_kriteria' => $id_kriteria,
				'nilai' => $val,
			];
			$this->mod_proses->simpanrata($data);
			$this->session->set_flashdata('info', 'Nilai rata alternatif berhasil disimpan');
			return redirect('Perbandingan','refresh');
			// var_dump[$data];
			// echo $data['nilai'];
		}
	}

	function updatealt()
    {
    	$error=FALSE;
    	$kriteriaid=$this->input->post('kriteriaid');
    	if(!empty($kriteriaid))
    	{
    	$msg="";
    	$s=array(
    	'id_kriteria'=>$kriteriaid,
    	);
    	$this->m_db->delete_row('alternatif_nilai',$s);
    	    	
    	$cr=$this->input->post('crvalue');
    	if($cr > 0.1)
    	{
    		$msg="Gagal diupdate karena nilai CR lebih dari 0.1 (Data tidak konsisten)";
			$error=TRUE;
		}else{
			foreach($_POST as $k=>$v)
			{
				if($k!="crvalue" && $k!="kriteriaid")
				{									
					foreach($v as $x=>$x2)
					{
						$d=array(
						'id_kriteria'=>$kriteriaid,
						'alternatif_id_dari'=>$k,
						'alternatif_id_tujuan'=>$x,
						'nilai'=>$x2,
						);
						$this->m_db->add_row('alternatif_nilai',$d);
					}
				}
			}
			$msg="Berhasil update nilai alternatif";
			$error=FALSE;
		}
    			
    	if($error==FALSE)
    	{			
			echo json_encode(array('status'=>'ok','msg'=>$msg));
		}else{
			echo json_encode(array('status'=>'no','msg'=>$msg));
		}
		}else{
			$msg="Gagal mengubah nilai alternatif";
			echo json_encode(array('status'=>'no','msg'=>$msg));
		}
		
	}

}
