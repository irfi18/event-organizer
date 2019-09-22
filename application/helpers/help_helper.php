<?php
if (!function_exists('ambil_nilai_kriteria')) {
	function ambil_nilai_kriteria($dari, $tujuan)
	{
		$CI =& get_instance();
		$CI->load->library('m_db');
		$s = array(
			'kriteria_id_dari' => $dari,
			'kriteria_id_tujuan' => $tujuan,
		);
		$item = $CI->m_db->get_row('kriteria_nilai', $s, 'nilai');
		return $item;
	}
}

if (!function_exists('ambil_nilai_alternatif')) {
	function ambil_nilai_alternatif($kriteriaid, $dari, $tujuan)
	{
		$CI =& get_instance();
		$CI->load->library('m_db');
		$s = array(
			'id_kriteria' => $kriteriaid,
			'alternatif_id_dari' => $dari,
			'alternatif_id_tujuan' => $tujuan,
		);
		$item = $CI->m_db->get_row('alternatif_nilai', $s, 'nilai');
		return $item;
	}
}

if (!function_exists('field_value')) {
	function field_value($table, $key, $keyval, $output)
	{
		$CI =& get_instance();
		$CI->load->library('m_db');
		$s = array(
			$key => $keyval,
		);
		$item = $CI->m_db->get_row($table, $s, $output);
		return $item;
	}
}

if (!function_exists('alternatif_nilai')) {
	function alternatif_nilai($alternatifID, $kriteriaID)
	{
		$CI =& get_instance();
		$CI->load->library('m_db');
		$s = array(
			'id_alternatif_nilai' => $alternatifID,
			'id_kriteria' => $kriteriaID,
		);
		$item = $CI->m_db->get_row('alternatif_nilai', $s, 'id_nilai');
		return $item;
	}
}

if (!function_exists('nilai_rata1')) {
	function nilai_rata1($kriteriaID)
	{
		$CI =& get_instance();
		$CI->load->library('m_db');
		$s = array(
			'id_kriteria' => $kriteriaID,
		);
		$item = $CI->m_db->get_row('rata_kriteria', $s, 'nilai');
		return $item;
	}
}

if (!function_exists('nilai_rata')) {
	function nilai_rata($alternatifID, $kriteriaID)
	{
		$CI =& get_instance();
		$CI->load->library('m_db');
		$s = array(
			'id_alternatif' => $alternatifID,
			'id_kriteria' => $kriteriaID,
		);
		$item = $CI->m_db->get_row('rata_alternatif', $s, 'nilai');
		return $item;
	}
}

if (!function_exists('funkriteria')) {
	function funkriteria(){
		$output=array();
		$CI =& get_instance();
		$CI->load->model('Kriteria_model', 'mod_kriteria');
		$dKriteria=$CI->mod_kriteria->kriteria_data();
		if(!empty($dKriteria)){
		foreach($dKriteria as $rK)
		{
			$output[$rK->id_kriteria]=$rK->nama_kriteria;
		}
		}
		return count($output);
	}
}

if (!function_exists('funalternatif')) {
	function funalternatif(){
		$output=array();
		$CI =& get_instance();
		$CI->load->model('Kriteria_model', 'mod_alternatif');
		$dAlternatif=$CI->mod_alternatif->alternatif_data();
		if(!empty($dAlternatif)){
		foreach($dAlternatif as $rK)
		{
			$output[$rK->id_alternatif]=$rK->nama_alternatif;
		}
		}
		return count($output);
	}
}

if (!function_exists('funIdalternatif')) {
	function funIdalternatif(){
		$output=array();
		$CI =& get_instance();
		$CI->load->model('Kriteria_model', 'mod_alternatif');
		$dAlternatif=$CI->mod_alternatif->alternatif_data();
		if(!empty($dAlternatif)){
		foreach($dAlternatif as $rK)
		{
			$output[$rK->id_alternatif]=$rK->id_alternatif;
		}
		}
		return $output;
	}
}