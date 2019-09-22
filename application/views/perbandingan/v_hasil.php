<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<br><h2 class="section-heading text-uppercase">Ranking Event Organizer</h2><br>
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
			<div class="row text-center">
				<div class="col-md-12">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
				</div>
			</div>
        </div>