
	<div class="col-md-3">
		<ul class="list-group">
		  <?php	  
		  if(!empty($kriteria))
		  {
		  	foreach($kriteria as $rk)
		  	{
				echo '<li class="list-group-item"><a href="javascript:;" onclick="showaltdata('.$rk->id_kriteria.');">'.$rk->nama_kriteria.'</a></li>';
			}
		  }
		  ?>
		</ul>
	</div>
	<div>
	</div>
	<div class="col-md-16">
		<div id="matrikalt"></div>
	</div>
