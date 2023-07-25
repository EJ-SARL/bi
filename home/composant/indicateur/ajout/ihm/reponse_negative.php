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
	<div class="alert alert-danger"><strong>Echec</strong> Code : <?php echo  $httpCode;?></div>
</div>

</div>

<br />
		
<div class="row">
			
			<div class="col-md-12">
						
				<div class="panel panel-primary" data-collapsed="0">
						
					<div class="panel-heading">
		
						<div class="panel-title" style="text-align: center;v">
											
						</div>
										
						<h2 style="text-align: center;">Ajouter un Indicateur </h2>
		
					</div>
							
					<div class="panel-body">
								
					<form method="POST" action="index.php?demande=ajouter_indicateur"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
			

			<div class="form-group">		
					<label class="col-sm-3 control-label">Projet</label>
						<div class="col-sm-5">
							<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<select name="projet" id=""  class="form-control">
									<option value="">--Selectionner un Projet--</option>
									<?php
										for($i=0; $i < count($projets); $i++)
											{         
												echo"  
														<option value=" . $projets[$i]->id ."> " . $projets[$i]->projet ."</option>                       
														
												";
															
											}
									?>
									
								</select>
								
								

								<span class="input-group-addon"><i class=""></i></span>
							</div>
						</div>
				</div>

				<div class="form-group">		
					<label class="col-sm-3 control-label" >Nom  <abbr style="color:green; font-size:15px;">**</abbr></label>
						<div class="col-sm-5">
							<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<input type="text" name="nom" class="form-control" placeholder="nom de l'indicateur" required="required">
								<span class="input-group-addon"><i class="r"></i></span>
							</div>
						</div>
				</div>

				<div class="form-group">		
					<label class="col-sm-3 control-label">Description<abbr style="color:green; font-size:15px;">**</abbr></label>			
						<div class="col-sm-5">
							<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<input type="text" name="description" class="form-control" placeholder=" description" required="required">
								<span class="input-group-addon"><i class=""></i></span>
							</div>
						</div>
				</div>

				<div class="form-group">		
					<label class="col-sm-3 control-label">Fréquence<abbr style="color:green; font-size:15px;">**</abbr></label>			
						<div class="col-sm-5">
							<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<input type="text" name="frequence" class="form-control" placeholder=" frequence" required="required">
								<span class="input-group-addon"><i class=""></i></span>
							</div>
						</div>
				</div>

				<div class="form-group">		
					<label class="col-sm-3 control-label">Ordre<abbr style="color:green; font-size:15px;">**</abbr></label>			
						<div class="col-sm-5">
							<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<select  name="ordre" id="monselect"  class="form-control" required="required">
								<option value="" selected>Ordre</option>
									<option value="Masculin">Croissant</option>
									<option value="Femmin">Decroissant</option>
								</select>
								<span class="input-group-addon"><i class=""></i></span>
							</div>
						</div>
				   </div>

				   <div class="form-group">		
					<label class="col-sm-3 control-label">L'unité<abbr style="color:green; font-size:15px;">**</abbr></label>			
						<div class="col-sm-5">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input type="text" name="unite" class="form-control" placeholder=" Unité" required="required">
								<span class="input-group-addon"><i class=""></i></span>
							</div>
						</div>
				</div> 
 
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-success">Ajouter</button>
								</div>
							</div>
									
						</form>
								
					</div>
							
				</div>
					
			</div>
				
		</div>