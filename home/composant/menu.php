<!-- Active menu dans les entites -->
<?php  require_once('active_menu.php'); ?>

<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="?home">
						<img src="assets/images/logo_m.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>      
			<ul id="main-menu" class="main-menu">
			
				<li class="has-sub">
					<a href="">
					<i class="fa fa-users"></i>
						<span class="title">Operationnel</span>
					</a>
					<ul >

					<li>
							<a href="??home">
								<span class="title">Back-office</span>
							</a>
						</li>

						<li>
							<a href="?page=front_office">
								<span class="title">Front-Office</span>
							</a>
						</li>

					
						
					</ul>
				</li>
				<li>
							<a href="?home">
							<i class="fa fa-bar-chart"></i>
								<span class="title">Business intelligence</span>
							</a>
							<ul >
						<li>
							<a href="??home">
								<i class="fa fa-line-chart"></i>
								<span class="title">Indicateur</span>
							</a>

								<ul >


									<li>
										<a href="?page=ajouter_indicateur">
											<span class="title">Ajouter</span>
										</a>
									</li>

									

									<li>
										<a href="?page=recuperer_indicateurs">  
											<span class="title">Gerer</span>
										</a>
									</li>

									
									<li>
										<a href="??home">
											<span class="title">Projet</span>
										</a>
										<ul >

												<li>
													<a href="?page=ajouter_projet">
														<span class="title">Ajouter</span>
													</a>
												</li>
  
												<li>
													<a href="?page=recuperer_projets">
														<span class="title">Gerer</span>
													</a>
												</li>

										</ul>
									</li>
							
								</ul>
						</li>

						<li>
							<a href="?page=ajouter_repartition">
							<i class="fa fa-exchange"></i>
								<span class="title">Service Repartition</span>
							</a>
						</li>

						<li>
							<a href="?page=ajouter_historique">
							<i class="fa fa-history"></i>
								<span class="title">Service Historique</span>
							</a>
						</li>
						<li>
							<a href="?page=ajouter_progression">
							<i class="fa fa-bar-chart"></i>
								<span class="title">Service Progression</span>
							</a>
						</li>
						
					</ul>
				</li> 

				<li>
							<a href="?home">
							<i class="fa fa-users"></i>
								<span class="title">Referentiel</span>
							</a>
				</li> 						
				<li class="has-sub">
					<a href="forms-main.html">
					<i class="fa fa-users"></i>
						<span class="title">Agent</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_agent">
								<span class="title">Ajouter</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_agents">
								<span class="title">Gerer</span>
							</a>
						</li>

						<li>
							<a  href="?page=importer_agents">
								<span class="title">Importer</span>
							</a>
						</li>
						
					</ul>
				</li>

			

									
				<li>
						<a href="/smaas/kill.php">
						<i class="entypo-logout right"></i>	Log Out 
						</a>
					</li>
					



			</ul>
	</div>

	</div>
