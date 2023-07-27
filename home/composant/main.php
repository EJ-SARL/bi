<?php 
    //Authority for URI
    $authority="http://api.eliajimmy.net";

    //Import module Curl
    require_once('composant/curl.php'); 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajouter_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/ajout/api/post.php'); 
                }
            else if($demande=='modifier_client')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_client')
                {
                    
                    require_once('composant/client/supprimer/api/delete.php'); 
                }

            else if($demande=='ajouter_photo_client')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/importer_photo/api/post_image.php'); 
                }

            else if($demande=='importer_clients')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/importer_excel/api/import.php'); 
                }

            
           

                else if($demande=='ajouter_indicateur')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/indicateur/ajout/api/post.php'); 
                }
            else if($demande=='modifier_indicateur')
                {   
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/indicateur/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_indicateur')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/indicateur/supprimer/api/delete.php'); 
                }
                else if($demande=='ajouter_projet')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/projet/ajout/api/post.php'); 
                }
                else if($demande=='modifier_projet')
                {   
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/projet/modifier/api/put.php'); 
                }

                else if($demande=='supprimer_projet')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/projet/supprimer/api/delete.php'); 
                }



        }
    else if (isSet($_GET['page']))
        {
            $page=$_GET['page'];

           

             if($page=='ajouter_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/api/get_parametres.php');

                   // require_once('composant/agent/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_ressources.php'); 
                }

             else  if($page=='modifier_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_ressource.php'); 
                }
      
            else  if($page=='supprimer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_ressources.php'); 
                }

            else  if($page=='supprimer_agent')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_ressource.php'); 
                }
           
            else  if($page=='recuperer_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_ressources.php'); 
                }
            
            else  if($page=='recuperer_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_ressource.php'); 
                }

            else  if($page=='importer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_excel/ihm/demande_importation.php'); 
                }

                else  if($page=='front_office')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/dashboard/ihm/front.php'); 
                }

                if($page=='ajouter_indicateur')
                {
                    //Composant2 : recuperer la reponse de la demande

                     require_once('composant/indicateur/ajout/api/get_parametres.php');

                    //require_once('composant/indicateur/ajout/ihm/demande_creation.php'); 
                } 
           
                else  if($page=='recuperer_indicateurs')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/indicateur/recuperer/api/get_ressources.php'); 
                }
                else  if($page=='modifier_indicateur')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/indicateur/modifier/api/get_ressource.php'); 
                }
                else  if($page=='supprimer_indicateur')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/indicateur/supprimer/api/get_ressource.php'); 
                }
                if($page=='ajouter_projet')
                {
                    //Composant2 : recuperer la reponse de la demande

                    require_once('composant/projet/ajout/ihm/demande_creation.php'); 
                } 
                else  if($page=='modifier_projet')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/projet/modifier/api/get_ressource.php'); 
                }
                else  if($page=='recuperer_projets')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/projet/recuperer/api/get_ressources.php'); 
                }
                
                else  if($page=='supprimer_projet')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/projet/supprimer/api/get_ressource.php'); 
                }
                if($page=='ajouter_repartition')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/repartition/ajout/api/get_parametres.php');

                    
                }
                if($page=='ajouter_historique')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/historique/ajout/ihm/demande_creation.php'); 

                    
                }
                if($page=='ajouter_progression')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/progression/ajout/api/get_parametres.php'); 

                    
                }

            
              

               
                
                                
    



   
        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/dashboard/ihm/index.php'); 
        }
      
      
?>