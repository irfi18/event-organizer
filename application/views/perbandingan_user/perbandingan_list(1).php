<script src  = "<?= base_url() ?>assets/bootstrap4/js/jquery-1.11.0.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function () {
		$("#formcari").submit(function (e) {
			e.preventDefault();
			$.ajax({
				type      : 'get',
				dataType  : 'html',
				url       : "<?=site_url('user/Perbandingan/gethtml');?>",
				data      : $(this).serialize(),
				beforeSend: function () {
					$("#matrik").html('Mengambil data matrik. Tunggu sebentar');
				},
				success: function (x) {
					$("#matrik").html(x);
				},
				error: function (jqXHR, textStatus, errorThrown) {
					$("#matrik").html('Gagal mengambil data matrik');
					alert('Error : ' + jqXHR.status);
				},
			});
		});
	});

	function showaltdata(kriteria){
	$.ajax({
			type:'get',
			dataType:'html',
			url:"<?=site_url('Perbandingan/getalt');?>",
			data:"kriteria="+kriteria,
			error:function(jqXHR, textStatus, errorThrown){
				$("#matrikalt").html('Gagal mengambil data matrik');
				alert('Error : ' + jqXHR.status);
			},
			beforeSend:function(){
				$("#matrikalt").html('Mengambil data matrik. Tunggu sebentar');
			},
			success:function(x){
				$("#matrikalt").html(x);
			},
		});
}
</script>
<br>
<?php if ($this->session->flashdata('info')) { 
	?> 
	<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('info');?>
	</div>
<?php } ?>

<div class = "row">
	<?php
	echo form_open('#',array('class'=>'form-horizontal','id'=>'formcari'));
	?>
	<br>
	<br>
	<div   class = "form-group">
	<label class = "control-label">Silahkan Klik Untuk Memulai :</label>
		<br>
		<button type = "submit" class = "btn btn-primary btn-flat">Tampilkan</button>
	</div>
	<?php
	echo form_close();
	?>
	<div id = "matrik"></div>
</div>
<script src="<?= base_url() ?>assets/jquery/jquery-1.11.0.min.js"></script>