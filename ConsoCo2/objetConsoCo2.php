<?php

namespace App\ConsoCo2;

use App\Data\JsonFormatter;
use App\ConsoCo2\ConsoCo2Verre;
use App\ConsoCo2\ConsoCo2Papier;
use App\ConsoCo2\ConsoCo2Meraux;

$json= new JsonFormatter();
$consoCo2 = $json->getCo2();

$recyclageVerre = $consoCo2["verre"]["incineration"];


       
// $consoCo2Papier[] = new ConsoCo2Papier($conso->papier->incineration, $conso->papier->recyclage);
// $consoCo2Metaux[] = new ConsoCo2Metaux($conso->metaux->incineration, $conso->meraux->recyclage);


// $consoCo2Dechets = [
//     $consoCo2Verre,
//     $consoCo2Papier,
//     $consoCo2Metaux,
// ];

