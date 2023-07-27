
<?php
$uri =  $authority.'/projet/';
//Recuperer les variables POST

$nom=$_POST['nom'];
$description=$_POST['description'];

$data = array(
    
    
    'nom' => $nom,
    'description' => $description,
    
	
);
$result=curl_post($uri, $token, $data);
$projets=json_decode($result);

$code =   $projets->code;
    
if($code ==201)
        {   
           
            $nom = $projets->nom;
            $description =  $projets->description;
            
            $id = $projets->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/projet/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/projet/ajout/ihm/reponse_negative.php');   
        }


?>