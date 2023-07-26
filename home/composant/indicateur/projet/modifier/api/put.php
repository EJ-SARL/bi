<?php
$id=$_POST['id'];

$uri = $authority."/projet/".$id;


$nom=$_POST['nom'];
$description=$_POST['description'];


$data = array(
    
   
    'nom' => $nom,
    'description' => $description,
    
	
);
$result=curl_put($uri, $token, $data);

    $projets=json_decode($result);
    $code =   $projets->code;
    if($code ==200)
        {   
           
            $nom =   $projets->nom;
            $description =   $projets->description;
            
          
           
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/indicateur/projet/modifier/ihm/reponse_positive.php'); 
            }
            else
            {
                echo  $projets;  
            }
    
    
    
?>