<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Profil Event Organizer</title>
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
							<a class="nav-link active" id="1-tab" data-toggle="tab" href="#1" role="tab"
								aria-controls="1" aria-selected="true">Baja</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="2-tab" data-toggle="tab" href="#2" role="tab"
								aria-controls="2" aria-selected="true">Yankees</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="3-tab" data-toggle="tab" href="#3" role="tab"
								aria-controls="3" aria-selected="false">Mata Angin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab"
								aria-controls="4" aria-selected="false">Potensi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab"
								aria-controls="5" aria-selected="true">Mataram Tenda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab"
								aria-controls="6" aria-selected="false">Biru Langit</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="7-tab" data-toggle="tab" href="#7" role="tab"
								aria-controls="7" aria-selected="false">Giga</a>
						</li><li class="nav-item">
							<a class="nav-link" id="8-tab" data-toggle="tab" href="#8" role="tab"
								aria-controls="8" aria-selected="true">Dek</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="9-tab" data-toggle="tab" href="#9" role="tab"
								aria-controls="9" aria-selected="false">Glow</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="10-tab" data-toggle="tab" href="#10" role="tab"
								aria-controls="10" aria-selected="false">Titik Terang</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="fungsi" role="tabpanel" aria-labelledby="fungsi-tab">
							<h4>Fungsi-fungsi menu</h4><br>
							<p>Dashboard : Menampilkan halaman awal</p>
							<p>Perangkingan-Kriteria : Memasukan nilai-nilai kriteria yang diinginkan sesuai kebutuhan</p>
							<p>Perangkingan-Hitung Rangking : Menampilkan halaman perhitungan rangking</p>
							<p>Perangkingan-Hasil Rangking : Menampilkan hasil urutan EO terbaik dari hasil perhitungan dengan metode AHP</p>
							<p>Login : Menampilkan halaman login sebagai admin</p>
						</div>
						<div class="tab-pane fade" id="teori" role="tabpanel" aria-labelledby="teori-tab">
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
								<p><b>NOTE : </b>Judul pada kolom tabel sebagai subjek "A" dan 
								Judul pada Baris tabel Sebagai subjek "B"</p>
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
