<?php if ($this->session->flashdata('info')) { ?>	
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
  <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>.
</div>
<?php } ?>

<br>
<a href="<?php echo site_url('alternatif/tambah'); ?>" class="btn btn-primary">
	Tambah
</a>
<br>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<td>ID Alternatif</td>
			<td>Nama Alternatif</td>
            <td>E-mail</td>
            <td>Alamat</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($isi_tabel as $key) { ?>
			
		<tr>
			<td>
			<?php echo $key->id_alternatif; ?>
			</td>
			<td>
				<?php echo $key->nama_alternatif; ?> 
			</td>
            <td>
				<?php echo $key->email; ?> 
			</td>
            <td>
				<?php echo $key->alamat; ?> 
			</td>
			
			<td>
			<a class="btn btn-primary btn-sm" href="<?php echo site_url('alternatif/edit/'.$key->id_alternatif); ?>">Edit</a>
			<a class="btn btn-danger btn-sm" href="<?php echo site_url('alternatif/hapus/'.$key->id_alternatif); ?>" onclick="return confirm('Yakin ??')">Hapus</a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>