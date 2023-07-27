<?php

$uri = $authority."/projet/";
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $projets= $obj->projet; 

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/projet/recuperer/ihm/afficher_ressources.php'); 
        }
        else
        {
            echo  '$indicateurs';  
        }


?>