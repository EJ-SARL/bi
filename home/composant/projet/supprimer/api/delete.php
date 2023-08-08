<?php

$id=$_GET['id'];

//URI
$uri = $authority."/projet/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    
    $projets= $obj->projet;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/projet/supprimer/ihm/reponse_positive.php'); 
        }
        else
        {
            echo  $projets;  
        }





?>