<?php
	$authority="http://api.eliajimmy.net/";
	require_once('home/composant/connexion/api/demande_connexion.php');
?>	

	
	<html lang="fr">

		<!--Composant1 : head du html!-->
		<?php
			require_once('home/composant/connexion/head.php')
		?> 
	
		<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


			<div class="login-container">
				
			<!--Composant2 : header du body (logo, titre,...)!-->
			<?php
				require_once('home/composant/connexion/header.php')
			?> 

			<!--Composant3 : contenu du body (formulaire,...)!-->
			<?php
				require_once('home/composant/connexion/main.php')
			?> 			

			</div>

			<!--Composant4 : Footer du body (Javascript,...)!-->
			<?php
				require_once('home/composant/connexion/footer.php')
			?> 

		</body>

	</html>
