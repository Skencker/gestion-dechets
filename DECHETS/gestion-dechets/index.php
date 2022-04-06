<?php

require_once '../gestion-dechets/dechets/Dechet.php';
require_once '../gestion-dechets/services/Recyclage.php';
require_once '../gestion-dechets/services/RecyclageVerre.php';
require_once '../gestion-dechets/services/RecyclagePapier.php';


//traiement des dechets verre
$verre = new Dechet();
$verre->getVolume("verre");

echo "Volume total des déchets de type verre : ";
echo ($verre->volume);
echo " tonnes";
echo "<br>";

//je créais un nouveau service de recyclage de verre 
$serviceRecyclageVerre1 = new RecyclageVerre();
$serviceRecyclageVerre1->getCapacity();
$serviceRecyclageVerre1->getConsigne();

echo "Capacité du recyclage de verre du service 1: ";
print_r($serviceRecyclageVerre1->capacity);
echo "<br>";
//je compare le volume de verre par rapport à la capacité du service correspondant
$difVol = $verre->volume - $serviceRecyclageVerre1->capacity;
if ($difVol > 0 ) {
    //je recherche un nouveau service disponible si non -> incineration
    //envoyer le reste dans l'incinerateur
    // var_dump($difVol);
}
$papier = new Dechet();
$papier->getVolume("papier");
echo "Volume total des déchets de type papier  : ";
echo ($papier->volume);
echo " tonnes";
echo "<br>";
$serviceRecyclagePapier = new RecyclagePapier();
$serviceRecyclagePapier->getCapacity();
echo "Capacité du recyclage de papier du service 1 : ";
print_r($serviceRecyclagePapier->capacity);

$metaux = new Dechet();
$metaux->getVolume("metaux");

$orga = new Dechet();
$orga->getVolume("organique");
echo "<br>";
echo "Volume total des déchets de type metaux : ";
echo ($metaux->volume);
echo " tonnes";
echo "<br>";
echo "Volume total des déchets de type organique : ";
echo ($orga->volume);
echo " tonnes";
echo "<br>";

// // recuperation des données
// $json = 'data/data.json';
// $data = json_decode(file_get_contents($json), true);
// $services = $data["services"];
// //capacity du recyclage du papier


// $capa = new Recyclage();
// $capa->getCapacity();

// // var_dump(($capa));

// //creation nouveau composteur 
// $composteur1 = new Composteur(3, 61);
// $composteur2 = new Composteur(3, 73);
// $composteur3 = new Composteur(1, 76);

