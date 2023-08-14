<?php

/*$uri = $authority."/indicateur/";
   

$result=curl_get($uri, $token);

$obj = json_decode($result);                      
    
$indicateurs= $obj->indicateur; 

    $code =  $obj->code;

    if($code ==200)
        { */  
             
            require_once("composant/graphique/repartition.php");
            repartition();
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/repartition/ihm/afficher_ressources.php'); 
       /* }
        else
        {
            echo  '$indicateurs';  
        }

*/
?>