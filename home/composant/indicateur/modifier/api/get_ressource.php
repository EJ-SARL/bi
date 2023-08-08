<?php

$id=$_GET['id'];

//URI
$uri = $authority."/indicateur/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);  
                        
    $indicateurs= $obj->indicateur;

    $code =  $obj->code;

    if($code ==200)
        {   
            $projet=$indicateurs->projet_id; 
            $nom=$indicateurs->indicateur;
            $description=$indicateurs->description;
            $frequence=$indicateurs->frequence;
            $ordre=$indicateurs->ordre;
            $unite=$indicateurs->unite;
            
            $id=$indicateurs->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/indicateur/modifier/ihm/demande_modification.php'); 
        }
        else
        { 
            echo  $indicateurs;  
        }




?>