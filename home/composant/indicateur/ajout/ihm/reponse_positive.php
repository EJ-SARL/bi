<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_indicateurs">Indicateur</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-success"><strong>Success !!!</strong> Votre demande de la création du nouveau indicateur ci-dessous est executée avec success. <br><br> <?php require_once('composant/agent/importer_photo/ihm/ajout_photo.php');?></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
					<tr>
						 	
							<th></th>
							<th></th>
													
						</tr>
						<tr>
						
							
						
					</thead>
					<tbody>
						<tr>
							<?php
								echo "
									
									<tr><td>Projet : </td><td>$projet</td>
									<tr><td>Nom :</td><td>$nom</td>
									<tr><td>Description:</td><td>$description</td>
									<tr><td>Frequence :</td><td>$frequence</td>
									<tr><td>Ordre: </td><td>$ordre</td>
									<tr><td>Unite: </td><td>$unite</td>
								";
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>
 