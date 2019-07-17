<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Help</title>
	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url('assets/bootstrap4/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap4/css/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/validetta/validetta.css'); ?>" rel="stylesheet" type="text/css"
		media="screen">

</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('template_admin/navbar'); ?>
	<div class="row">
		<div class="col-md-3">
			<!-- side-menu -->
			<?php $this->load->view('template_admin/sidebar'); ?>
		</div>

		<div class="col-md-8">
			<br>
			<div class="card ">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs pull-right" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="teori-tab" data-toggle="tab" href="#teori" role="tab"
								aria-controls="teori" aria-selected="true">Teori AHP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="prinsip-tab" data-toggle="tab" href="#prinsip" role="tab"
								aria-controls="prinsip" aria-selected="false">Prinsip AHP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="aturan-tab" data-toggle="tab" href="#aturan" role="tab"
								aria-controls="aturan" aria-selected="false">Aturan Nilai AHP</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="teori" role="tabpanel" aria-labelledby="teori-tab">
							<p>
								AHP dikembangkan oleh Prof. Thomas L.
								Saaty, seorang Guru Besar Matematika dari
								University of Pittsburgh pada tahun 1970.
							</p>
							<p>
								AHP merupakan metoda pengambilan keputusan
								yang melibatkan sejumlah kriteria dan alternatif
								yang dipilih berdasarkan pertimbangan semua
								kriteria terkait (Saaty, 2004).
							</p>
							<p>
								Kriteria memiliki derajat kepentingan yang
								berbeda-beda; demikian pula halnya alternatif
								memiliki preferensi yang berbeda menurut
								masing-masing kriteria yang ada.
							</p>
						</div>
						<div class="tab-pane fade" id="prinsip" role="tabpanel" aria-labelledby="prinsip-tab">
							<img src="<?php echo base_url('assets/prinsip.png'); ?>" alt="Prinsip">
						</div>
						<div class="tab-pane fade" id="aturan" role="tabpanel" aria-labelledby="aturan-tab">
							<table class="table">
								<thead class="thead-dark">
									<tr>
										<th scope="col">Nilai</th>
										<th scope="col">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Kriteria/Alternatif A sama penting dengan
											kriteria/alternatif B</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>A sedikit lebih penting dari B</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>A lebih penting dari B</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>A sangat lebih penting dari B</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>Mutlak lebih penting dari B</td>
									</tr>
									<tr>
										<th scope="row">2, 4, 6, 8</th>
										<td>Apabila ragu-ragu antara dua nilai yang berdekatan</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap4/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/validetta/validetta.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/validetta/lang/validettaLang-ID.js'); ?>"></script>

	<script>
		$(document).ready(function () {
			$("#form").validetta({
				bubblePosition: 'bottom',
				realTime: true,
			});
		});
	</script>
</body>

</html>
