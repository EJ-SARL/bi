<?php

$id=$_GET['id'];

//URI
$uri = $authority."/indicateur/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $indicateurs= $obj->indicateur;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/indicateur/supprimer/ihm/reponse_positive.php'); 
        }
        else
        {
            echo  $indicateurs;  
        }





?>