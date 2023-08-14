<?php
//require_once("include_path_inc.php");

require_once("jpgraph/jpgraph.php");
require_once("jpgraph/jpgraph_bar.php");

$donnees = array(12,23,9,58,23,26,57,48,12);

$largeur = 750;
$hauteur = 400;

// Initialisation du graphique
$graphe = new Graph($largeur, $hauteur);
// Echelle lineaire ('lin') en ordonnee et pas de valeur en abscisse ('text')
// Valeurs min et max seront determinees automatiquement
$graphe->setScale("textlin");

// Creation de l'histogramme
$histo = new BarPlot($donnees);
// Ajout de l'histogramme au graphique
$graphe->add($histo);

// Ajout du titre du graphique
$graphe->title->set("SMS Score");

// Affichage du graphique
$graphe->stroke();
?>