<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proses_model extends CI_Model
{	
	private $tbRata = 'rata_alternatif';
	private $tbRata1 = 'rata_kriteria';
    function __construct()
    {
    	parent::__construct(); 
        $this->load->library('m_db');
		$this->load->model('Kriteria_model','mod_kriteria');
		
	}

	function simpanrata1($data){
		// echo '<pre>';
		// var_dump($data);
		$this->db->where(['id_kriteria' => $data['id_kriteria']]);
		$isi=$this->db->get('rata_kriteria');
		if($isi->num_rows() > 0)
		{
			$this->db->where(['id_kriteria' => $data['id_kriteria']]);
			$this->db->update('rata_kriteria', $data);
		} else{
			$this->db->insert('rata_kriteria', $data);
		}
	}
	
	function simpanrata($data){
		$this->db->where(['id_alternatif' => $data['id_alternatif'], 'id_kriteria' => $data['id_kriteria']]);
		$isi=$this->db->get('rata_alternatif');
		if($isi->num_rows() > 0)
		{
			$this->db->where(['id_alternatif' => $data['id_alternatif'], 'id_kriteria' => $data['id_kriteria']]);
			$this->db->update('rata_alternatif', $data);
		} else{
			$this->db->insert('rata_alternatif', $data);
		}
	}

	function simpanRangking($data){
		$this->db->where(['id_alternatif' => $data['id_alternatif']]);
		$isi=$this->db->get('rangking');
		if($isi->num_rows() > 0)
		{
			$this->db->where(['id_alternatif' => $data['id_alternatif']]);
			$this->db->update('rangking', $data);
		} else{
			$this->db->insert('rangking', $data);
		}
	}

	public function rata_data($where=array(),$orderK="id ASC")
    { 		
	    $d=$this->m_db->get_data($this->tbRata,$where,$orderK);
        return $d;
	}

	public function rata1_data($where=array(),$orderK="id ASC")
    { 		
	    $d=$this->m_db->get_data($this->tbRata1,$where,$orderK);
        return $d;
	}
    
}