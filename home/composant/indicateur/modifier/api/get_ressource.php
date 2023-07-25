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
            $projet=$indicateurs[0]->projet; 
            $nom=$indicateurs[0]->nom;
            $description=$indicateurs[0]->description;
            $frequence=$indicateurs[0]->frequence;
            $ordre=$indicateurs[0]->ordre;
            $unite=$indicateurs[0]->unite;
            
            $id=$indicateurs[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/indicateur/modifier/ihm/demande_modification.php'); 
        }
        else
        { 
            echo  $indicateurs;  
        }




?>