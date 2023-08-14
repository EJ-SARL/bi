<?php

require_once("jpgraph/jpgraph.php");
require_once("jpgraph/jpgraph_pie.php");

function repartition()
    {
        $donnees = array(12,23,9,58,23,26,57,48,12);

        $largeur = 750;
        $hauteur = 600;

        // Initialisation du graphique
        $graphe = new PieGraph($largeur, $hauteur);

        // Creation du camembert
        $camembert = new PiePlot($donnees);
        // Ajout du camembert au graphique
        $graphe->add($camembert);

        // Ajout du titre du graphique
        $graphe->title->set("SMS Score");

        // Affichage du graphique
        $graphe->stroke('composant/graphique/images/repartition.jpg');
    }
?>