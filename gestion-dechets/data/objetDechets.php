<?php

require_once 'Data.php';
require_once '../dechets/DechetVerre.php';
require_once '../dechets/DechetPapier.php';
require_once '../dechets/DechetMetaux.php';
require_once '../dechets/DechetOrganique.php';


$json= new JsonFormatter();
$data = $json->getData();

$dechets = $data['quartiers'];

$dechetVerre = [];
foreach ($dechets as $dechet) {
    // var_dump($dechet);
    if ($dechet["verre"] ) 
    {
        $dechetVerre[] = new DechetVerre($dechet["verre"]);
    }
}
$dechetPapier = [];
foreach ($dechets as $dechet) {
    // var_dump($dechet);
    if ($dechet["papier"] ) 
    {
        $dechetPapier[] = new DechetPapier($dechet["papier"]);
    }
}
$dechetMetaux = [];
foreach ($dechets as $dechet) {
    // var_dump($dechet);
    if ($dechet["metaux"] ) 
    {
        $dechetMetaux[] = new DechetMetaux($dechet["metaux"]);
    }
}
$dechetOrganique = [];
foreach ($dechets as $dechet) {
    // var_dump($dechet);
    if ($dechet["organique"] ) 
    {
        $dechetOrganique[] = new DechetOrganique($dechet["organique"]);
    }
}



print_r($dechetVerre);
echo "<br>";
echo "<br>";
print_r($dechetPapier);
echo "<br>";
echo "<br>";
print_r($dechetMetaux);
echo "<br>";
echo "<br>";
print_r($dechetOrganique);
