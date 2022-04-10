<?php

use App\Types\MetauxInterface;
use App\Types\OrganiqueInterface;
use App\Types\PapierInterface;
use App\Types\VerreInterface;

require_once 'autoload.php';
require_once 'Dechets/objetDechets.php';
require_once 'Services/objetServices.php';
require_once 'ConsoCo2/objetConsoCo2.php';

//je récupére le volume de chaque dechet
echo "<h1 style='color:rgb(89, 6, 167)'>Répartition des déchets</h1>";
echo "<p>Volume total des déchets de type verre :";
print_r($volumeTotalVerre);
echo " tonnes </p>";

echo "<p>Volume total des déchets de type Papier : ";
print_r($volumeTotalPapier);
echo " tonnes </p>";

echo "<p>Volume total des déchets de type metaux : ";
print_r($volumeTotalMetaux);
echo " tonnes </p>";

echo "<p>Volume total des déchets de type organique : ";
print_r($volumeTotalOrganique);
echo " tonnes <p>";





$volumeVerre = 0;
$volumePapier = 0;
$volumeMetaux = 0;
$volumeOrganique = 0;

foreach ($tabServices as $services)
{
    foreach ($services as $service)
    {
        // print_r("<h2>########   SERVICES :  ".$service->getType(). "  ####### </h2>");
        foreach ($tabDechets as $dechets) 
        {
            foreach ($dechets as $dechet) 
            {
                //si le dechet est un verre et si le service accepte les verre et je verifie qu'il y a de la place dans le service
                if ($dechet instanceof VerreInterface && $service instanceof VerreInterface && $service->capacity > 0 )
                {
                    $volumeVerre += $dechet->volume;
                    $capacityRecyclageVerre = $service->capacity;
                    $resultVerre = $volumeVerre - $capacityRecyclageVerre;
                    //je met la capacité de recyclage a jour avec une condition si capacité inf a volume dechet  capacite = 0 sinon :
                    $capacityRecyclageVerre = $capacityRecyclageVerre - $volumeVerre;
                    //recuperztion du co2 rejeter
                    $co2Verre = $dechet->rejetCo2 * $volumeVerre;
                }
               
                //si le dechet est un papier...
                if ($dechet instanceof PapierInterface && $service instanceof PapierInterface && $service->capacity > 0)
                {
                    $capacityRecyclagePapier = $service->capacity;
                    $volumePapier += $dechet->volume;
                    $resultPapier = $volumePapier - $capacityRecyclagePapier;
                    //je met la capacité de recyclage a jour
                    $capacityRecyclagePapier = $capacityRecyclagePapier - $volumePapier;
                    //recuperztion du co2 rejeter
                    $co2Papier = $dechet->rejetCo2 * $volumePapier;
                }
                //si le dechet est un metaux....
                if ($dechet instanceof MetauxInterface && $service instanceof MetauxInterface && $service->capacity > 0)
                {
                    $capacityRecyclageMetaux = $service->capacity;
                    $volumeMetaux += $dechet->volume;
                    $resultMetaux = $volumeMetaux - $capacityRecyclageMetaux;
                    //je met la capacité de recyclage a jour
                    $capacityRecyclageMetaux = $capacityRecyclageMetaux - $volumeMetaux;
                    //recuperztion du co2 rejeter
                    $co2Metaux = $dechet->rejetCo2 * $volumeMetaux;
                }
                //si le dechet est un papier
                if ($dechet instanceof OrganiqueInterface && $service instanceof OrganiqueInterface && $service->capacity > 0)
                {
                    $capacityRecyclageOrganique = $service->capacity;
                    $volumeOrganique += $dechet->volume;
                    $resultOrganique = $volumeOrganique - $capacityRecyclageOrganique;
                    //je met la capacité de recyclage a jour
                    $capacityRecyclageOrganique = $capacityRecyclageOrganique - $volumeOrganique;
                    //recuperztion du co2 rejeter
                    $co2Organique = $dechet->rejetCo2 * $volumeOrganique;
                }
            }
        }
    }
}

//total co2 rejeter par le recyclage
$totalCo2Rejeter = $co2Verre + $co2Papier + $co2Metaux + $co2Organique;


//affichage des données
echo "<br>";
print_r("<h2>########   SERVICES :  Recyclage Verre  ####### </h2>");
echo "Total déchets verre :  ";
print_r($volumeVerre);
echo " tonnes ";
echo "<br>";
echo "Rejet co2 :  ";
print_r($co2Verre);
echo "  ppm   ";
echo "<br>";
echo "Volume restante de dechet :  ";
print_r($resultVerre);
echo " tonnes ";
echo "<hr>  ";

echo "<br>";
print_r("<h2>########   SERVICES :  Recyclage papier  ####### </h2>");
echo "Total déchets papier :  ";
print_r($volumePapier);
echo " tonnes ";
echo "<br>";
echo "Rejet co2 :  ";
print_r($co2Papier);
echo "  ppm  ";
echo "<br>";
echo "Volume restante de dechet :  ";
print_r($resultPapier);
echo " tonnes ";
echo "<hr>  ";

echo "<br>";
print_r("<h2>########   SERVICES :  Recyclage Métaux ####### </h2>");
echo "Total déchets metaux :  ";
print_r($volumeMetaux);
echo " tonnes ";
echo "<br>";
echo "Rejet co2 :  ";
print_r($co2Metaux);
echo "  ppm   ";
echo "<br>";
echo "Volume restante de dechet :  ";
print_r($resultMetaux);
echo " tonnes ";
echo "<hr>  ";

echo "<br>";
print_r("<h2>########   SERVICES :  Composteurs    ####### </h2>");
echo "Total déchets Organique :  ";
print_r($volumeOrganique);
echo " tonnes ";
echo "<br>";
echo "Rejet co2 :  ";
print_r($co2Organique);
echo "  ppm    ";
echo "<br>";
echo "Volume restante de dechet :  ";
print_r($resultOrganique);
echo " tonnes ";
echo "<hr>  ";
echo "<br>";

echo "<p>Volume total de Co2 rejeté par le recyclage : ";
print_r($totalCo2Rejeter);
echo " ppm <p>";