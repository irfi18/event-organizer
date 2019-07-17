<form id="form" action="<?php echo site_url('kriteria/store'); ?>" method="post" enctype="multipart/form-data">
	<br><br>
	<div class="form-group">
		<label>Nama Kriteria</label>
		<input type="text" name="nama_kriteria" class="form-control input-sm" data-validetta="required,minLength[5]">
	</div>
	<div class="form-group">
		<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Simpan">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('kriteria'); ?>">Kembali</a>
	</div>
</form>