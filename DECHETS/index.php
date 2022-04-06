<?php

require_once 'classes/Dechets/Dechet.php';
require_once 'fonctions.php';

$verre = new Dechet();
$verre->getVolume("verre");


$papier = new Dechet();
$papier->getVolume("papier");

$metaux = new Dechet();
$metaux->getVolume("métaux");

$orga = new Dechet();
$orga->getVolume("organique");

echo "Volume total des déchets de type verre : ";
echo ($verre->volume);
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


























//recupération des fichier data
// $jsonService = "services.json";
// $jsonDechet = "dechets.json";
// $jsonCo2 = "co2.json";

// transformation en array
// $datasDechet = json_decode(file_get_contents($jsonDechet), true);
// $datasService = json_decode(file_get_contents($jsonService), true);
// $datasCo2 = json_decode(file_get_contents($jsonCo2), true);


// $services = $datasService;
// $dechets = $datasDechet["quartiers"];
// $co2s = $datasCo2;11

//affichage des données
// echo 'Services : ';
// echo "<br>";  
// echo "<br>";
// foreach ($services as $service) {
//     print_r (json_encode($service));
//     echo "<br>";  
// }
// echo "<br>";  
// echo 'Déchets : ';
// echo "<br>";  
// echo "<br>";  

//calcul la somme du volume des verre
// $totalVerre[] = [];
// foreach ($dechets as $dechet) {
//     array_push($totalVerre, (int)$dechet["verre"]);  
// }
// $totalV = array_sum($totalVerre);
// echo 'Volume de verre total : '. (json_encode($totalV));
// echo "<br>";  



//calcul la somme du volume des papiers
// $totalPapier[] = [];
// foreach ($dechets as $dechet) {
//     array_push($totalPapier, (int)$dechet["papier"]);  
// }
// $totalP = array_sum($totalPapier);
// echo 'Volume de papier total : '. (json_encode($totalP));
// echo "<br>";  



//calcul la somme du volume des ddechets orga
// $totalOrganique[] = [];
// foreach ($dechets as $dechet) {
//     array_push($totalOrganique, (int)$dechet["organique"]);  
// }
// $totalO = array_sum($totalOrganique);
// echo 'Volume de déchets orga total : '. (json_encode($totalO));
// echo "<br>";  

//calcul la somme du volume des métaux
// $totalMetaux[] = [];
// foreach ($dechets as $dechet) {
//     array_push($totalMetaux, (int)$dechet["métaux"]);  
// }
// $totalM = array_sum($totalMetaux);
// echo 'Volume de métaux total : '. (json_encode($totalM));
// echo "<br>";  

//calcul la somme du volume des déchets autres
// $totalAutre[] = [];
// foreach ($dechets as $dechet) {
//     array_push($totalAutre, (int)$dechet["autre"]);  
// }
// $totalA = array_sum($totalAutre);
// echo 'Volume de déchets autre total : '. (json_encode($totalA));
// echo "<br>";  


// echo "<br>";  
// echo "<br>";  
// echo "<br>";  
// echo 'Consommations co2 : ';
// echo "<br>";  
// echo "<br>";  
// foreach ($co2s as $co2) {
//     print_r (json_encode($co2));
//     echo "<br>";
// }
// echo "<br>";
// echo "<br>";
// echo "<br>";




