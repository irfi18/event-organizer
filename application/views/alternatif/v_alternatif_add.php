<form id="form" action="<?php echo site_url('alternatif/store'); ?>" method="post" enctype="multipart/form-data">
	<br><br>
	<div class="form-group">
		<label>Nama Alternatif</label>
		<input type="text" name="nama_alternatif" class="form-control input-sm" data-validetta="required,minLength[5]">
	</div>
    <div class="form-group">
		<label>E-Mail</label>
		<input type="text" name="email" class="form-control input-sm" data-validetta="required,minLength[5]">
	</div>
    <div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control input-sm" data-validetta="required,minLength[5]">
	</div>
	<div class="form-group">
		<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Simpan">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('alternatif'); ?>">Kembali</a>
	</div>
</form>