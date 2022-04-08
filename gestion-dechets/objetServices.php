<?php

require_once 'Data.php';
require_once 'Incinerateur.php';
require_once 'Composteur.php';
require_once 'RecyclagePapier.php';
require_once 'RecyclagePlastique.php';
require_once 'RecyclageMetaux.php';
require_once 'RecyclageVerre.php';

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
