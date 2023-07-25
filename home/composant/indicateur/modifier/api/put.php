<?php
$id=$_POST['id'];

$uri = $authority."/indicateur/".$id;

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
$result=curl_put($uri, $token, $data);

    $indicateurs=json_decode($result);
    $code =  $indicateurs->code;
    if($code ==200)
        {   
            $projet =  $indicateurs->projet;
            $nom =  $indicateurs->nom;
            $description =  $indicateurs->description;
            $frequence = $indicateurs->frequence;
            $ordre = $indicateurs->ordre;
            $unite = $indicateurs->unite;
          
           
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/indicateur/modifier/ihm/reponse_positive.php'); 
            }
            else
            {
                echo  $indicateurs;  
            }
    
    
    
?>