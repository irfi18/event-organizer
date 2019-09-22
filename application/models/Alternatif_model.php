<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{

   public function get_all() 
	{
		return $this->db->get('alternatif')->result();
	}

	function rangking(){
		return $this->db->query("select * from rangking, alternatif where rangking.id_alternatif=alternatif.id_alternatif order by rangking.nilai DESC");
	}

	//select data berdasarkan primary key dari tabel
	public function get_id($param)
	{
		$this->db->where('id_alternatif', $param);
		return $this->db->get('alternatif')->row();
	}

	// untuk tambah data ke database
	public function create($data)
	{
		return $this->db->insert('alternatif', $data);
	}

	// update tabel berdasarkan id / primary key
	public function update($param_id, $param_data)
	{
		$this->db->where('id_alternatif', $param_id);
		return $this->db->update('alternatif', $param_data);
	}

	public function delete($param_id)
	{
		$this->db->where('id_alternatif', $param_id);
		return $this->db->delete('alternatif');
	}

}
