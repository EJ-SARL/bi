<?php

    $uri =  $authority.'/process/';

    $result=curl_get($uri,$token);

    $obj = json_decode($result); 

    $code =  $obj->code;

    if($code ==200)
        {   
          
            $projets = $obj->projet;

            

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/progression/ajout/ihm/demande_creation.php'); 
           
        }


?>