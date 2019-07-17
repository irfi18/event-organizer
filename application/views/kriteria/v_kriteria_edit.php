<form action="<?php echo site_url('kriteria/update'); ?>" method="post">
<input type="hidden" name="id_kriteria" value="<?php echo $isi_tabel->id_kriteria; ?>">
	<div class="form-group">
		<label>Nama Kriteria</label>
		<input type="text" name="nama_kriteria" class="form-control input-sm" value="<?php echo $isi_tabel->nama_kriteria; ?>">
	</div>
	
	<div class="form-group">
		<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Simpan">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('kriteria'); ?>">Kembali</a>
	</div>
</form>