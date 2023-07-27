
<?php
$uri =  $authority.'/historique/';
//Recuperer les variables POST

$date=$_POST['date'];


$data = array(
    
    
    'date' => $date,
    
    
	
);
$result=curl_post($uri, $token, $data);
$dates=json_decode($result);

$code =   $dates->code;
    
if($code ==201)
        {   
           
            $date = $dates->date;
            
            
            $id = $dates->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/historique/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/historique/ajout/ihm/reponse_negative.php');   
        }


?>