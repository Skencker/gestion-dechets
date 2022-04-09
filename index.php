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
echo "<br>";
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
echo "<br>";
echo "<br>";


foreach ($tabServices as $services)
{
    foreach ($services as $service)
    {
        print_r("<h2>########   SERVICES :  ".$service->getType(). "  ####### </h2>");
        foreach ($tabDechets as $dechets) 
        {
            foreach ($dechets as $dechet) 
            {
                //si le dechet est un verre
                if ($dechet instanceof VerreInterface)
                {
                    // si le service accepte les verre
                    if ($service instanceof VerreInterface)
                    {
                        //je verifie qu'il y a de la place dans le service
                        if($service->capacity > 0)
                        {
                            $capacityRecyclageVerre = $service->capacity;
                            $volumeVerre = $volumeTotalVerre;
                            $result = $volumeVerre - $capacityRecyclageVerre;
                            //je met la capacité de recyclage a jour avec une condition si capacité inf a volume dechet  capacite = 0 sinon :
                            $capacityRecyclageVerre = $capacityRecyclageVerre - $volumeVerre;
                            echo "<br>";
                            echo "Consommation de co2 :  ";
                            $co2Verre = $consoCo2["verre"]["recyclage"]*$volumeVerre;
                            print_r($co2Verre);
                            echo "  Volume de co2 rejeté    ";
                            echo "<br>";
                            echo "Volume restante de dechet :  ";
                            print_r($result);
                            echo " tonnes ";
                            echo "<hr>  ";
                            break;
                        }
                    }
                }
                //si le dechet est un papier
                if ($dechet instanceof PapierInterface)
                {
                    // si le service accepte les verre
                    if ($service instanceof PapierInterface)
                    {
                        //je verifie qu'il y a de la place dans le service
                        if($service->capacity > 0)
                        {
                            $capacityRecyclagePapier = $service->capacity;
                            $volumePapier = $volumeTotalPapier;
                            $result = $volumePapier - $capacityRecyclagePapier;
                            //je met la capacité de recyclage a jour

                            $capacityRecyclagePapier = $capacityRecyclagePapier - $volumePapier;
                            echo "<br>";
                            echo "Consommation de co2 :  ";
                            $co2Papier = $consoCo2["papier"]["recyclage"] * $volumePapier;
                            print_r($co2Papier);
                            echo "  Volume de co2 rejeté    ";
                            echo "<br>";
                            echo "Volume restante de dechet :  ";
                            print_r($result);
                            echo " tonnes ";
                            echo "<hr>  ";
                            break;
                        }
                    }
                }
                //si le dechet est un papier
                if ($dechet instanceof MetauxInterface)
                {
                    // si le service accepte les verre
                    if ($service instanceof MetauxInterface)
                    {
                        //je verifie qu'il y a de la place dans le service
                        if($service->capacity > 0)
                        {
                            $capacityRecyclageMetaux = $service->capacity;
                            $volumeMetaux = $volumeTotalMetaux;
                            $result = $volumeMetaux - $capacityRecyclageMetaux;
                            //je met la capacité de recyclage a jour
                            $capacityRecyclageMetaux = $capacityRecyclageMetaux - $volumeMetaux;
                            echo "<br>";
                            echo "Consommation de co2 :  ";
                            $co2Metaux = $consoCo2["metaux"]["recyclage"]*$volumeMetaux;
                            print_r($co2Metaux);
                            echo "  Volume de co2 rejeté    ";
                            echo "<br>";
                            echo "Volume restante de dechet :  ";
                            print_r($result);
                            echo " tonnes ";
                            echo "<hr>  ";
                            break;
                        }
                    }
                }
                //si le dechet est un papier
                if ($dechet instanceof OrganiqueInterface)
                {
                    // si le service accepte les verre
                    if ($service instanceof OrganiqueInterface)
                    {
                        //je verifie qu'il y a de la place dans le service
                        if($service->capacity > 0)
                        {
                            $capacityRecyclageOrganique = $service->capacity;
                            $volumeOrganique = $volumeTotalOrganique;
                            $result = $volumeOrganique - $capacityRecyclageOrganique;
                            //je met la capacité de recyclage a jour
                            $capacityRecyclageOrganique = $capacityRecyclageOrganique - $volumeOrganique;
                            echo "<br>";
                            echo "Consommation de co2 :  ";
                            $co2Organique = $consoCo2["organique"]["compostage"]*$volumeOrganique;
                            print_r($co2Organique);
                            echo "  Volume de co2 rejeté    ";
                            echo "<br>";
                            echo "Volume restante de dechet :  ";
                            print_r($result);
                            echo " tonnes ";
                            echo "<hr>  ";
                            break;
                        }
                    }
                }
            }
        }
        echo "<br>";
        echo "<br>";
    }
}

echo "<br>";