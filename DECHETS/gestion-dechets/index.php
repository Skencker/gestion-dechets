<?php

require_once '../gestion-dechets/dechets/Dechet.php';

$verre = new Dechet();
$verre->getVolume("verre");

$papier = new Dechet();
$papier->getVolume("papier");

$metaux = new Dechet();
$metaux->getVolume("métaux");

$orga = new Dechet();
$orga->getVolume("organique");

// require_once '../gestion-dechets/dechets/DechetVerre.php';
// require_once '../gestion-dechets/dechets/DechetPapier.php';
// require_once '../gestion-dechets/dechets/DechetMetaux.php';
// require_once '../gestion-dechets/dechets/DechetOrganique.php';

// $verre = new DechetVerre();
// $verre->getVolume();

// $papier = new DechetPapier();
// $papier->getVolume();

// $metaux = new DechetMetaux();
// $metaux->getVolume();

// $orga = new DechetOrganique();
// $orga->getVolume();


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