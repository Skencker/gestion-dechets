<?php

require_once 'Service.php';
require_once '../Interfaces/MetauxInterface.php';
require_once '../Interfaces/OrganiqueInterface.php';
require_once '../Interfaces/VerreInterface.php';
require_once '../Interfaces/PapierInterface.php';


class Incinerateur extends Service implements OrganiqueInterface, VerreInterface, MetauxInterface, PapierInterface
{
    public $lignFour;
    public $capaciteLign;

    public function __construct($lignFour, $capaciteLign)
    {
        $this->lignFour = $lignFour;
        $this->capaciteLign = $capaciteLign;
    }
//capacité par ligne

    // le incinerateur accepte tout
    // public function acceptTypeDechet(?Dechet $dechet)
    // {
    //     if (!$dechet instanceof VerreInterface) 
    //     {
    //         throw new Exception("", 1);
    //     }
    //     return parent::acceptTypeDechet($dechet);
    // }
}
