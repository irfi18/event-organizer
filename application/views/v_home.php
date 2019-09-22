<!DOCTYPE html>
<html lang="en">

<head>

	<title>Event Organizer Lombok Have</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/agency/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	 <link href="<?php echo base_url('assets/agency/css/agency.css')?>" rel="stylesheet"> 

</head>

<body id="page-top">

	<!-- Navbar -->
	<?php $this->load->view('template_user/navbar'); ?>

	<!-- Header -->
	<header class="masthead">
		<div class="container">
			<div class="intro-text">
			<div class="intro-heading text-uppercase">Wellcome To Event Organizer Choiser WEBSITE</div>	
			<div class="intro-lead-in">It's more easier to choose Event Organizer</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
			</div>
		</div>
	</header>

	<!-- Services -->
	<section class="page-section" id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Services</h2>
					<h3 class="section-subheading text-muted">Pemilihan event organizer dengan metode AHP</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-6">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="services-heading">Event Organizer</h4>
					<p class="text-muted">Website ini mengumpulkan data beberapa Event Organizer legal 
						yang ada di Lombok dimana akan diberikan rangking dengan metode AHP</p>
				</div>
				<div class="col-md-6">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="services-heading">Metode AHP</h4>
					<p class="text-muted">Analithyc Hierachy Process atau AHP merupakan suatu metode pendukung keputusan yang dikembangkan oleh 
         seorang professor matematika University of Pittsburgh kelahiran Irak, Thomas L. Saaty.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Info</h2>
          <h3 class="section-subheading text-muted">Anda dapat menghubungi saat jam kerja</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
		<div class="row text-center">
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="section-heading">Name</h4>
					<p class="text-muted">Lalu Irfi Andika Putra</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="section-heading">Phone</h4>
					<p class="text-muted">(+62)87868565952 </p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="section-heading">Mail</h4>
					<p class="text-muted">dikamail18@gmail.com</p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="section-heading">Social</h4>
					<p class="text-muted">F : Lalu Irfi
					<br>I : l_irfi</p>
				</div>
			</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Rank EO -->
	<section class="page-section" id="rank">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Ranking Event Organizer</h2>
					<h3 class="section-subheading text-muted">Ranking Event Organizer dengan metode AHP</h3>
					<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama EO</th>
							<th>Kontak</th>
							<th>Rangking</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($data as $key => $value) :
						?>
						<tr>
							<td><?=$value->nama_alternatif?></td>
							<td><?=$value->email?></td>
							<td><?=$key+1?></td>
						</tr>
						<?php
							endforeach;
						?>
					</tbody>
					</table>
					<?php 

					?>
				</div>
			</div>
		</div>
	</section>


	<script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url('assets/agency/vendor/jquery/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/agency/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

	<!-- Plugin JavaScript -->
	<script src="<?php echo base_url('assets/agency/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

	<!-- Contact form JavaScript -->
	<script src="<?php echo base_url('assets/agency/js/jqBootstrapValidation.js');?>"></script>
	<script src="<?php echo base_url('assets/agency/js/contact_me.js');?>"></script>

	<!-- Custom scripts for this template -->
	<script src="<?php echo base_url('assets/agency/js/agency.min.js');?>"></script>

</body>

</html>
