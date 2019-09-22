<script type="text/javascript">
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
			<th>Hasil X<br>Rata" Kriteria</th>
			<!-- <th>Rangking</th> -->
			</thead>
			<?php
			$dAlternatif = $this->m_db->get_data('alternatif');
			if (!empty($dAlternatif)) {
				$noRata1=0;
				foreach ($dAlternatif as $rAlternatif) {
					$noRata1+=1;
					$alternatifID = $rAlternatif->id_alternatif;
					$nama_alternatif = field_value('alternatif', 'id_alternatif', $alternatifID, "nama_alternatif");
					?>
					<tr>
						<td><?= $nama_alternatif; ?></td>
						
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
						<!-- <td><?= ucwords($rAlternatif->rangking); ?></td> -->

					</tr>
					<?php
				}
			} else {
				return false;
			}
			?>
		</table>
<input class="btn btn-primary btn-md" type="submit" value='Simpan'>

	</div>

	<?php
}
echo form_close();
?>
<!-- <a href="javascript:;" onclick="proseshitung();" class="btn btn-primary btn-md"> Simpan Rangking</a> -->
