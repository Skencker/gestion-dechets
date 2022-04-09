<?php

namespace App\Services;

use App\Types\MetauxInterface;
use App\Types\OrganiqueInterface;
use App\Types\PapierInterface;
use App\Types\VerreInterface;
use App\Services\AbstractService;


class Incinerateur extends AbstractService implements OrganiqueInterface, VerreInterface, MetauxInterface, PapierInterface
{
    public $lignFour;
    public $capaciteLign;

    public function __construct($lignFour, $capaciteLign)
    {
        $this->lignFour = $lignFour;
        $this->capaciteLign = $capaciteLign;
    }

}
