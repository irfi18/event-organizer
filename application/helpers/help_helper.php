<?php
if(!function_exists('ambil_nilai_kriteria'))
{
	function ambil_nilai_kriteria($dari,$tujuan)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$s=array(
		'kriteria_id_dari'=>$dari,
		'kriteria_id_tujuan'=>$tujuan,
		);
		$item=$CI->m_db->get_row('kriteria_nilai',$s,'nilai');
		return $item;
	}
}

if(!function_exists('ambil_nilai_alternatif'))
{
	function ambil_nilai_alternatif($kriteriaid,$dari,$tujuan)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$s=array(
		'id_kriteria'=>$kriteriaid,
		'alternatif_id_dari'=>$dari,
		'alternatif_id_tujuan'=>$tujuan,
		);
		$item=$CI->m_db->get_row('alternatif_nilai',$s,'nilai');
		return $item;
	}
}

if(!function_exists('field_value'))
{
	function field_value($table,$key,$keyval,$output)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$s=array(
		$key=>$keyval,
		);
		$item=$CI->m_db->get_row($table,$s,$output);
		return $item;
	}
}

if(!function_exists('alternatif_nilai'))
{
	function alternatif_nilai($alternatifID,$kriteriaID)
	{
		$CI=& get_instance();
		$CI->load->library('m_db');
		$s=array(
		'id_alternatif_nilai'=>$alternatifID,
		'id_kriteria'=>$kriteriaID,
		);
		$item=$CI->m_db->get_row('alternatif_nilai',$s,'id_nilai');
		return $item;
	}
}