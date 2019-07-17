<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proses_model extends CI_Model
{	
    function __construct()
    {
    	parent::__construct(); 
        $this->load->library('m_db');
        $this->load->model('Kriteria_model','mod_kriteria');
	}
	
	function simpanrata($data, $id=0){
		

		$this->db->where(['id_alternatif' => $data['id_alternatif'], 'id_kriteria' => $data['id_kriteria']]);
		$isi=$this->db->get('rata_rata');
		if($isi->num_rows() > 0)
		{
			$this->db->where(['id_alternatif' => $data['id_alternatif'], 'id_kriteria' => $data['id_kriteria']]);
			$this->db->update('rata_rata', $data, $id);
		} else{
			$this->db->insert('rata_rata', $data);
		}
	}
    
	function proseshitung()
	{
		$dKriteria=$this->mod_kriteria->kriteria_data();
		$dAlternatif=$this->m_db->get_data('alternatif');
		if(!empty($dAlternatif))
		{
			foreach($dAlternatif as $rAlternatif)
			{
				$alternatifID=$rAlternatif->id_alternatif;
				$nama_alternatif=field_value('alternatif','id_alternatif',$alternatifID,'nama_alternatif');			
				if(!empty($dKriteria))
				{
					// $total=0;
					foreach($dKriteria as $rKriteria)
					{						
						$kriteriaid=$rKriteria->id_kriteria;
						$alternatif=alternatif_nilai($alternatifID,$kriteriaid);
						// $nilaiID=field_value('alternatif','id_alternatif',$alternatif,'id_nilai');
						// $nilai=field_value('nilai_kategori','id_nilai',$nilaiID,'nama_nilai');
						// $prioritas=ambil_nilai($alternatif);
						// $total+=$prioritas;							
					}						
				}			
				// $shasil=array('id_alternatif'=>$alternatifID,);
				// $dhasil=array('total'=>$total,);
				// $this->m_db->edit_row('alternatif',$dhasil,$shasil);
				
				// $dPH=$this->m_db->get_data('alternatif');
				// $kuota = 100;
				// $rank=0;
				// foreach($dPH as $rPH)
				// {
				// 	$rank+=1;
				// 	$d=array();
				// 	// if($rank <= $kuota)
				// 	// {
				// 	// 	$d=array('status'=>'Unggulan',);
				// 	// }else{
				// 	// 	$d=array('status'=>'Belum Unggulan',);
				// 	// }
				// 	$this->m_db->edit_row('alternatif',$d,array('id_alternatif'=>$rPH->id_alternatif));
				// }
				return true;
			}								
		}else{
			return false;
		}
	}
}