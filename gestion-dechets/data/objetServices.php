<?php

require_once 'Data.php';
require_once '../services/Incinerateur.php';
require_once '../services/Composteur.php';
require_once '../services/RecyclagePapier.php';
require_once '../services/RecyclagePlastique.php';
require_once '../services/RecyclageMetaux.php';

$json= new JsonFormatter();
$data = $json->getData();

$services = $data['services'];

// var_dump($services);

$incinerateur = [];
foreach ($services as $service) {
    // var_dump($service["type"]);
    if ($service["type"] == "incinerateur" ) 
    {
        $incinerateur[] = new Incinerateur($service["ligneFour"], $service["capaciteLigne"]);
    }
}

$composteur = [];
foreach ($services as $service) {
    // var_dump($service["type"]);
    if ($service["type"] == "composteur" ) 
    {
        $composteur[] = new Composteur($service["capacite"], $service["foyers"]);
    }
}
$recyclagePapier = [];
foreach ($services as $service) {
    // var_dump($service["type"]);
    if ($service["type"] == "recyclagePapier" ) {

        $recyclagePapier[] = new RecyclagePapier($service["capacite"]);
    }
}

$recyclagePlastique = [];
foreach ($services as $service) {
    // var_dump($service["type"]);
    if ($service["type"] == "recyclagePlastique" ) {

        $recyclagePlastique[] = new RecyclagePlastique($service["capacite"]);
    }
}

$recyclageMetaux = [];
foreach ($services as $service) {
    // var_dump($service["type"]);
    if ($service["type"] == "recyclageMetaux" ) {

        $recyclageMetaux[] = new RecyclageMetaux($service["capacite"]);
    }
}


print_r($incinerateur);
echo "<br>";
echo "<br>";
print_r($composteur);
echo "<br>";
echo "<br>";
print_r($recyclagePapier);
echo "<br>";
echo "<br>";
print_r($recyclageMetaux);
