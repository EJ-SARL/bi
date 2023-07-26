<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_projets">Projet</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer le projet ci-dessous ? .</strong> <a href='?page=recuperer_projets'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_projet&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							<th>Projet</th>
							<th>Nom</th>
							<th >Description</th>
							<th >Frequence</th>
							<th >Ordre</th>
							<th >Unite</th>
				 			
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								
										echo"<tr><td>". $id." </td><td>". $projet." </td><td> " . $nom ." </td><td> ". $description." </td><td> ". $frequence." </td><td> ". $ordre." </td><td> ". $unite." </td><tr>";
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>
  