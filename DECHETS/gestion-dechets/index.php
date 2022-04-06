<?php

require_once '../gestion-dechets/dechets/Dechet.php';
require_once '../gestion-dechets/services/Recyclage.php';

$verre = new Dechet();
$volVerre = $verre->getVolume("verre");
// $co2IncinerationVerre = $verre->getCo2Incineration();


$papier = new Dechet();
$papier->getVolume("papier");

$metaux = new Dechet();
$metaux->getVolume("métaux");

$orga = new Dechet();
$orga->getVolume("organique");

// require_once '../gestion-dechets/dechets/DechetVerre.php';
// require_once '../gestion-dechets/dechets/DechetPapier.php';
// require_once '../gestion-dechets/dechets/DechetMetaux.php';
// require_once '../gestion-dechets/dechets/DechetOrganique.php';

// $verre = new DechetVerre();
// $verre->getVolume();

// $papier = new DechetPapier();
// $papier->getVolume();

// $metaux = new DechetMetaux();
// $metaux->getVolume();

// $orga = new DechetOrganique();
// $orga->getVolume();

// répartition du vol de chaque déchet :
echo "Volume total des déchets de type verre : ";
echo ($verre->volume);
// echo ($verre->co2Incineration);
echo " tonnes";
echo "<br>";
echo "Volume total des déchets de type papier : ";
echo ($papier->volume);
echo " tonnes";
echo "<br>";
echo "Volume total des déchets de type metaux : ";
echo ($metaux->volume);
echo " tonnes";
echo "<br>";
echo "Volume total des déchets de type organique : ";
echo ($orga->volume);
echo " tonnes";
echo "<br>";

// recuperation des données
$json = 'data/data.json';
$data = json_decode(file_get_contents($json), true);
$services = $data["services"];
//capacity du recyclage du papier


$capa = new Recyclage();
$capa->getCapacity();

// var_dump(($capa));

//creation nouveau composteur 
$composteur1 = new Composteur(3, 61);
$composteur2 = new Composteur(3, 73);
$composteur3 = new Composteur(1, 76);

