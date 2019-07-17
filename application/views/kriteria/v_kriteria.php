<?php if ($this->session->flashdata('info')) { ?>	
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
  <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>.
</div>
<?php } ?>

<br>
<a href="<?php echo site_url('kriteria/tambah'); ?>" class="btn btn-primary">
	Tambah
</a>
<br>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<td>ID Kriteria</td>
			<td>Nama Kriteria</td>
			<td>Keterangan</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($isi_tabel as $key) { ?>
			
		<tr>
			<td>
			<?php echo $key->id_kriteria; ?>
			</td>
			<td>
				<?php echo $key->nama_kriteria; ?> 
			</td>
			
			<td>
			<a class="btn btn-primary btn-sm" href="<?php echo site_url('kriteria/edit/'.$key->id_kriteria); ?>">Edit</a>
			<a class="btn btn-danger btn-sm" href="<?php echo site_url('kriteria/hapus/'.$key->id_kriteria); ?>" onclick="return confirm('Yakin ??')">Hapus</a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>