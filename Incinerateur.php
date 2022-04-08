<?php

require_once 'Service.php';
require_once 'MetauxInterface.php';
require_once 'OrganiqueInterface.php';
require_once 'VerreInterface.php';
require_once 'PapierInterface.php';


class Incinerateur extends Service implements OrganiqueInterface, VerreInterface, MetauxInterface, PapierInterface
{
    public $lignFour;
    public $capaciteLign;

    public function __construct($lignFour, $capaciteLign)
    {
        $this->lignFour = $lignFour;
        $this->capaciteLign = $capaciteLign;
    }
}
