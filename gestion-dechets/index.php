<?php

require_once '../gestion-dechets/dechets/Dechet.php';
require_once '../gestion-dechets/services/Recyclage.php';
require_once '../gestion-dechets/services/RecyclageVerre.php';
require_once '../gestion-dechets/services/RecyclagePapier.php';
require_once '../gestion-dechets/services/RecyclageMetaux.php';
require_once '../gestion-dechets/services/Composteur.php';


//je créé un dechets
$dechet = new Dechet();

//je lui donne un type
$dechetVerre = $dechet->setType("verre");

//je récupére le volume de ce type de dechet
$volDechetVerre = $dechetVerre->getVolume($dechetVerre->type);

echo "Volume total des déchets de type verre : ";
echo ($volDechetVerre);
echo " tonnes";
echo "<br>";

//je créais un service de recyclage de verre 
$serviceRecyclageVerre1 = new RecyclageVerre();
$serviceRecyclageVerre1->getCapacity();
$serviceRecyclageVerre1->getConsigne();
$serviceRecyclageVerre1->acceptTypeDechet($dechet);

//afficher les service de recyclage dispo pour ce type de dechets


echo "Capacité du recyclage de verre du service 1: ";
print_r($serviceRecyclageVerre1->acceptTypeDechet);
print_r($serviceRecyclageVerre1->capacity);
echo " tonnes";
echo "<br>";
echo "Consigne du service 1: ";
print_r($serviceRecyclageVerre1->consigne);
//je compare le volume de verre par rapport à la capacité du service correspondant
echo "<br>";
$difVol = $verre->volume - $serviceRecyclageVerre1->capacity;
if ($difVol > 0 ) {
    //je recherche un nouveau service disponible si non -> incineration
    //envoyer le reste dans l'incinerateur
    echo "Volume total des déchets restant  : ";
    echo $difVol;
}
echo "<br>";
echo "<br>";
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
echo " tonnes";
echo "<br>";
echo "<br>";

$metaux = new Dechet();
$metaux->getVolume("metaux");
echo "Volume total des déchets de type metaux : ";
echo ($metaux->volume);
echo " tonnes";
echo "<br>";
$serviceRecyclageMetaux = new RecyclageMetaux();
$serviceRecyclageMetaux->getCapacity();
echo "Capacité du recyclage de metaux du service 1 : ";
print_r($serviceRecyclageMetaux->capacity);
echo " tonnes";
echo "<br>";
echo "<br>";

$orga = new Dechet();
$orga->getVolume("organique");
echo "<br>";
echo "Volume total des déchets de type organique : ";
echo ($orga->volume);
echo " tonnes";
echo "<br>";
$serviceComposteur1 = new Composteur();
$serviceComposteur1->getCapacity();
echo "Capacité du composteur 1 : ";
print_r($serviceComposteur1->capacity);
echo " tonnes";
echo "<br>";
echo "<br>";
// $serviceComposteur1->getFoyer();
// echo "Nombre de foyer composteur 1 : ";
// print_r($serviceComposteur1->foyer);
// echo "<br>";
// echo "<br>";

