<?php

$id=$_GET['id'];

//URI
$uri = $authority."/projet/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $projets= $obj->projet;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            $nom=$projets[0]->projet;

            $description=$projets[0]->description;
            
            $id=$projets[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/projet/supprimer/ihm/demande_supprimer.php'); 
        }
        else  
        {
            echo $projets;  
        }



        

?>