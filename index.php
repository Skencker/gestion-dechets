<?php

require_once 'autoload.php';

require_once 'Dechets/objetDechets.php';
require_once 'Services/objetServices.php';

//je récupére le volume de chque dechets

echo "Volume total des déchets de type verre : ";
print_r($volumeTotalVerre);
echo " tonnes";
echo "<br>";

echo "Volume total des déchets de type Papier : ";
print_r($volumeTotalPapier);
echo " tonnes";
echo "<br>";

echo "Volume total des déchets de type metaux : ";
print_r($volumeTotalMetaux);
echo " tonnes";
echo "<br>";

echo "Volume total des déchets de type organique : ";
print_r($volumeTotalOrganique);
echo " tonnes";
echo "<br>";




