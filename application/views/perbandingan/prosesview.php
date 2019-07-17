<script type="text/javascript">
function proseshitung()
{
	$.ajax({
		type:'get',
		dataType:'json',
		url:"<?=base_url('Proses/proseshitung');?>",
		error:function(){
			$("#respon").html('Proses seleksi event organizer gagal');
			$("#error").show();
		},
		beforeSend:function(){
			$("#error").hide();
			$("#respon").html("Sedang bekerja, tunggu sebentar");
		},
		success:function(x){
			if(x.status=="ok")
			{
				alert('Proses seleksi berhasil. Halaman akan direfresh');
				window.location=window.location;
			}else{
				$("#respon").html('Proses seleksi gagal');
				$("#error").show();
			}
		},
	});
}
</script>

<div id="respon" class="hidden-print"></div>
<?php
$sql="Select COUNT(*) as m FROM alternatif";
$c=$this->m_db->get_query_row($sql,'m');
if($c < 1)
{
	echo '<div class="alert alert-warning hidden-print" id="error">Seleksi belum diproses. Klik <a href="javascript:;" onclick="proseshitung();">di sini</a> untuk proses</div>';
}else{	
?>

<br><br>
<div class="table-responsive">
<h3>Perangkingan</h3><br>
<table class="table table-bordered ">
<thead>
	<th>Kriteria / <br>Alternatif</th>
	<?php
	$dKriteria=$this->mod_kriteria->kriteria_data();
	if(!empty($dKriteria))
	{
		foreach($dKriteria as $rKriteria)
		{
			echo '<th>'.$rKriteria->nama_kriteria.'</th>';
		}
	}
	?>
	<th>X Rata-Rata <br> Kriteria </th>
	<th>Hasil</th>
	<th>Rangking</th>	
</thead>
<?php
	$dAlternatif=$this->m_db->get_data('alternatif');
	if(!empty($dAlternatif))
	{
		foreach($dAlternatif as $rAlternatif)
		{
			$alternatifID=$rAlternatif->id_alternatif;
			$nama_alternatif=field_value('alternatif','id_alternatif',$alternatifID,"nama_alternatif");
			?>
			<tr>
				<td><?=$nama_alternatif;?></td>
				<?php
				$total=0;
				$noUtama2=0;
				if(!empty($dKriteria))
				{
					foreach($dKriteria as $rKriteria)
					{						
						$kriteriaid=$rKriteria->id_kriteria;
						$alternatif=alternatif_nilai($alternatifID,$kriteriaid);
						// $nilaiID=field_value('alternatif','id_alternatif',$alternatif,'id_nilai');
						// $nilai=field_value('nilai_kategori','id_nilai',$nilaiID,'nama_nilai');
						// $prioritas=ambil_nilai($alternatif);
						// $total+=$prioritas;
						$noUtama2+=1;
						// echo '<td><input type="text" class="form-control" id="matriks/matrikutama.pri-b'.$noUtama2.'" value="0" readonly=""/></td>';
					    echo '<td>'.number_format((float)"pri-b'.$noUtama2.'",2).'</td>';
					}
				}
				?>
				<td><?=number_format(0,2);?></td>
				<td><?=number_format(0,2);?></td>
				<td><?=number_format(0);?></td>
				<!-- <td><?=ucwords($rAlternatif->rangking);?></td> -->
				
			</tr>			
			<?php
		}
	}else{
		return false;
	}
}
?>
</table>
</div>
<!-- <a href="javascript:;" onclick="proseshitung();" class="btn btn-primary btn-md"> Hitung</a> -->