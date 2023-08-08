<?php

$uri = $authority."/indicateur/";
   

$result=curl_get($uri, $token);

$obj = json_decode($result);                      
    
$indicateurs= $obj->indicateur; 

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/indicateur/recuperer/ihm/afficher_ressources.php'); 
        }
        else
        {
            echo  '$indicateurs';  
        }


?>