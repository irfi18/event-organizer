<form action="<?php echo site_url('alternatif/update'); ?>" method="post">
<br>
<input type="hidden" name="id_alternatif" value="<?php echo $isi_tabel->id_alternatif; ?>">
	<div class="form-group">
		<label>Nama Alternatif</label>
		<input type="text" name="nama_alternatif" class="form-control input-sm" value="<?php echo $isi_tabel->nama_alternatif; ?>">
	</div>
    <div class="form-group">
		<label>E-Mail</label>
		<input type="text" name="email" class="form-control input-sm" value="<?php echo $isi_tabel->email; ?>">
	</div>
    <div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control input-sm" value="<?php echo $isi_tabel->alamat; ?>">
	</div>
	
	<div class="form-group">
		<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Simpan">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('alternatif'); ?>">Kembali</a>
	</div>
</form>