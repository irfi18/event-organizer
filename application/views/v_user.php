<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<!-- Bootstrap core CSS-->
<link href="<?php echo base_url('assets/bootstrap4/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap4/css/bootstrap.css') ?>" rel="stylesheet">
<!-- <link href="<?php echo base_url('assets/validetta/validetta.css'); ?>" rel="stylesheet" type="text/css" media="screen" > -->
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('template_user/navbar2'); ?>
	<div class="row">
	<div class="col-md-3">
	<!-- side-menu -->
	<?php $this->load->view('template_user/sidebar'); ?>
	</div>
	
	<div class="col-md-8">
		<?php $this->load->view($content); ?>
	</div>
	</div>
	
	
	<script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap4/js/bootstrap.min.js') ?>"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url('assets/validetta/validetta.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/validetta/lang/validettaLang-ID.js'); ?>"></script> -->

	<!-- <script>
		$(document).ready(function() {
			$("#form").validetta({
				 bubblePosition: 'bottom',
				 realTime : true,
			});
		});
	</script> -->
</body>
</html>
