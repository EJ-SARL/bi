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
            $prenom=$indicateurs[0]->projet; 
            $nom=$agents[0]->nom;
            $description=$indicateurs[0]->description;
            $frequence=$indicateurs[0]->frequence;
            $ordre=$indicateurs[0]->ordre;
            $unite=$indicateurs[0]->unite;
            $id=$indicateurs[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/indicateur/supprimer/ihm/demande_supprimer.php'); 
        }
        else
        {
            echo  $indicateurs;  
        }




?>