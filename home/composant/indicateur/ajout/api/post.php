
<?php
$uri =  $authority.'/indicateur/';
//Recuperer les variables POST
$projet=$_POST['projet'];
$nom=$_POST['nom'];
$description=$_POST['description'];
$frequence=$_POST['frequence'];
$ordre=$_POST['ordre'];
$unite=$_POST['unite'];
$data = array(
    
    'projet' => $projet,
    'nom' => $nom,
    'description' => $description,
    'frequence' => $frequence,
    'ordre'=> $ordre,
	'unite'=> $unite,
	
);
$result=curl_post($uri, $token, $data);
$indicateurs=json_decode($result);

$code =   $indicateurs->code;
    
if($code ==201)
        {   
            $projet =  $indicateurs->projet;
            $nom =  $indicateurs->nom;
            $description =  $indicateurs->description;
            $frequence = $indicateurs->frequence;
            $ordre = $indicateurs->ordre;
            $unite = $indicateurs->unite;
            $id = $indicateurs->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/indicateur/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/indicateur/ajout/ihm/reponse_negative.php');   
        }


?>