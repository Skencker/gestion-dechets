<?php

namespace App\Services;

use App\Data\JsonFormatter;
use App\Services\Incinerateur;
use App\Services\Composteur;
use App\Services\RecyclageMetaux;
use App\Services\RecyclagePapier;
use App\Services\RecyclageVerre;
use App\Services\RecyclagePlastique;

require_once 'Dechets/objetDechets.php';

$dechets = $tabDechets;


$json= new JsonFormatter();
$data = $json->getData();

$services = $data['services'];

// var_dump($services);

$incinerateur = [];
$composteur = [];
$recyclagePapier = [];
$recyclagePlastique = [];
$recyclageMetaux = [];
$recyclageVerre = [];


foreach ($services as $service) {
    // var_dump($service["type"]);
    if ($service["type"] == "incinerateur" ) 
    {
        $incinerateur[] = new Incinerateur($service["ligneFour"], $service["capaciteLigne"]);
    
    }
    if ($service["type"] == "composteur" ) 
    {
        $composteur[] = new Composteur($service["capacite"], $service["foyers"]);
    }
    if ($service["type"] == "recyclagePapier" ) {

        $recyclagePapier[] = new RecyclagePapier($service["capacite"]);
    }
    if ($service["type"] == "recyclageVerre" ) {

        $recyclageVerre[] = new RecyclageVerre($service["capacite"]);
    }
    if ($service["type"] == "recyclagePlastique" ) {

        $recyclagePlastique[] = new RecyclagePlastique($service["capacite"]);
    }
    if ($service["type"] == "recyclageMetaux" ) {

        $recyclageMetaux[] = new RecyclageMetaux($service["capacite"]);
    }

    $tabServices = [
        $incinerateur,
        $composteur,
        $recyclagePapier,
        $recyclageMetaux,
        $recyclageVerre,
    ];
}





// print_r($incinerateur);
// echo "<br>";
// echo "<br>";
// print_r($composteur);
// echo "<br>";
// echo "<br>";
// print_r($recyclageVerre);
// echo "<br>";
// echo "<br>";
// print_r($recyclageMetaux);
