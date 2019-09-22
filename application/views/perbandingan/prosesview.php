<script type="text/javascript">
<<<<<<< HEAD
<?php $jumlahK=funkriteria();
	  $jumlahA=funalternatif();
	  $funIdalternatif = funIdalternatif();
?>
window.onload = 
	function() {
		var js_array = [<?php echo '"'.implode('","', $funIdalternatif).'"' ?>];
		// var fruits = ["apple", "orange", "cherry"];
		js_array.forEach(myFunction);
 	};
	 function myFunction(item, index) {
  			// document.getElementById("demo").innerHTML += index + ":" + item + "<br>"; 
			//   for (i = 1; i <= <?=$jumlahA;?> ; i++) {
			var jml = 0;
			for (x = 1; x <= <?=$jumlahK;?> ; x++) {
				var prio = $("#prio-b" + x).text();
				var nilai = $("#k" + item + "b" + x).text();
				var rumus = parseFloat(nilai) * parseFloat(prio);
				var fx = rumus;
				jml += parseFloat(rumus);
			}
			$("#jml"+item ).text(jml.toFixed(3));
			$("#alt"+item ).val(jml.toFixed(3));
			console.log(jml)
	}
		
		// }
=======
	function proseshitung() {
		$.ajax({
			type: 'get',
			dataType: 'json',
			url: "<?=base_url('Proses/proseshitung');?>",
			error: function () {
				$("#respon").html('Proses seleksi event organizer gagal');
				$("#error").show();
			},
			beforeSend: function () {
				$("#error").hide();
				$("#respon").html("Sedang bekerja, tunggu sebentar");
			},
			success: function (x) {
				if (x.status == "ok") {
					alert('Proses seleksi berhasil. Halaman akan direfresh');
					window.location = window.location;
				} else {
					$("#respon").html('Proses seleksi gagal');
					$("#error").show();
				}
			},
		});
	}
>>>>>>> 9c56200ba947d4b9c6257837051e961127858712
</script>

<?php if ($this->session->flashdata('info')) { 
	?> 
	<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('info');?>
	</div>
<?php } ?>

<div id="respon" class="hidden-print"></div>
<?php
$sql = "Select COUNT(*) as m FROM alternatif";
$c = $this->m_db->get_query_row($sql, 'm');
if ($c < 1) {
	echo '<div class="alert alert-warning hidden-print" id="error">Seleksi belum diproses. Klik <a href="javascript:;" onclick="proseshitung();">di sini</a> untuk proses</div>';
} else {
	?>
<<<<<<< HEAD
	<br><br>
	<div class="table-responsive">
		<h3>Perangkingan </h3><br>
		<div id='demo'></div>
		<table class="table table-bordered ">
		<thead>
			<th>Kriteria</th>
			<th>Rata-Rata <br> Kriteria</th>
			</thead>
			<?php
			$dKriteria = $this->m_db->get_data('kriteria');
			$noRata=0;
			if (!empty($dKriteria)) {
				foreach ($dKriteria as $rKriteria) {
					$noRata+=1;
					$kriteriaID = $rKriteria->id_kriteria;
					$nama_kriteria = field_value('kriteria', 'id_kriteria', $kriteriaID, "nama_kriteria");
					?>
					<tr>
						<td><?= $nama_kriteria; ?></td>
						<?php
							$kriteriaid = $rKriteria->id_kriteria;
							echo '<td id="prio-b'.$noRata.'" value="0">' .number_format(floatval(nilai_rata1( $kriteriaid)), 3) . '</td>';
							
						}
						?>
					</tr>
					<?php
				}
			?>
		</table>
		<?=form_open('Proses/simpanRangking');?>
		<table class="table table-bordered " >
=======

	<br><br>
	<div class="table-responsive">
		<h3>Perangkingan</h3><br>
		<table class="table table-bordered ">
>>>>>>> 9c56200ba947d4b9c6257837051e961127858712
			<thead>
			<th>Kriteria / <br>Alternatif</th>
			<?php
			$dKriteria = $this->mod_kriteria->kriteria_data();
			if (!empty($dKriteria)) {
				foreach ($dKriteria as $rKriteria) {
					echo '<th>' . $rKriteria->nama_kriteria . '</th>';
				}
			}
			?>
<<<<<<< HEAD
			<th>Hasil X<br>Rata" Kriteria</th>
			<!-- <th>Rangking</th> -->
=======
			<th>X Rata-Rata <br> Kriteria</th>
			<th>Hasil</th>
			<th>Rangking</th>
>>>>>>> 9c56200ba947d4b9c6257837051e961127858712
			</thead>
			<?php
			$dAlternatif = $this->m_db->get_data('alternatif');
			if (!empty($dAlternatif)) {
<<<<<<< HEAD
				$noRata1=0;
				foreach ($dAlternatif as $rAlternatif) {
					$noRata1+=1;
=======
				foreach ($dAlternatif as $rAlternatif) {
>>>>>>> 9c56200ba947d4b9c6257837051e961127858712
					$alternatifID = $rAlternatif->id_alternatif;
					$nama_alternatif = field_value('alternatif', 'id_alternatif', $alternatifID, "nama_alternatif");
					?>
					<tr>
						<td><?= $nama_alternatif; ?></td>
<<<<<<< HEAD
						
						<?php
						$noRata2=0;
						if (!empty($dKriteria)) {
							foreach ($dKriteria as $rKriteria) {
								$noRata2+=1;
								$kriteriaid = $rKriteria->id_kriteria;
								echo '<td id="k'.$alternatifID.'b'.$noRata2.'">' .number_format(floatval(nilai_rata($alternatifID, $kriteriaid)), 3) . '</td>';
							}
						}
						
						echo '<td id="jml'.$alternatifID.'"></td>';
						?>
						<input type="hidden" id='alt<?=$alternatifID?>' name='alt[<?=$alternatifID?>]'>
						<!-- <td><?= number_format(0); ?></td> -->
=======
						<?php
						$total = 0;
						$noUtama2 = 0;
						if (!empty($dKriteria)) {
							foreach ($dKriteria as $rKriteria) {
								$kriteriaid = $rKriteria->id_kriteria;
//								$alternatif = alternatif_nilai($alternatifID, $kriteriaid);
								// $nilaiID=field_value('alternatif','id_alternatif',$alternatif,'id_nilai');
								// $nilai=field_value('nilai_kategori','id_nilai',$nilaiID,'nama_nilai');
								// $prioritas=ambil_nilai($alternatif);
								// $total+=$prioritas;
								$noUtama2 += 1;
								// echo '<td><input type="text" class="form-control" id="matriks/matrikutama.pri-b'.$noUtama2.'" value="0" readonly=""/></td>';
								echo '<td>' .number_format(floatval(nilai_rata($alternatifID, $kriteriaid)), 2) . '</td>';
							}
						}
						?>
						<td><?= number_format(0, 2); ?></td>
						<td><?= number_format(0, 2); ?></td>
						<td><?= number_format(0); ?></td>
>>>>>>> 9c56200ba947d4b9c6257837051e961127858712
						<!-- <td><?= ucwords($rAlternatif->rangking); ?></td> -->

					</tr>
					<?php
				}
			} else {
				return false;
			}
			?>
		</table>
<<<<<<< HEAD
<input class="btn btn-primary btn-md" type="submit" value='Simpan'>

	</div>

=======
	</div>
>>>>>>> 9c56200ba947d4b9c6257837051e961127858712
	<?php
}
echo form_close();
?>
<<<<<<< HEAD
<!-- <a href="javascript:;" onclick="proseshitung();" class="btn btn-primary btn-md"> Simpan Rangking</a> -->
=======
<!-- <a href="javascript:;" onclick="proseshitung();" class="btn btn-primary btn-md"> Hitung</a>-->
>>>>>>> 9c56200ba947d4b9c6257837051e961127858712
