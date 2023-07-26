<?php

    $uri =  $authority.'/process/';

    $result=curl_get($uri,$token);

    $obj = json_decode($result); 

    $code =  $obj->code;

    if($code ==200)
        {   
          
            $projets = $obj->projet;

            $indicateurs= $obj->indicateur;

            $periodes= $obj->periode;

            $roles= $obj->role;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/repartition/ajout/ihm/demande_creation.php'); 
           
        }


?>