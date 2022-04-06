<?php

require_once 'Recyclage.php';
require_once 'MetauxInterface.php';

class RecyclageMetaux extends Recyclage implements MetauxInterface
{
    public function getCapacity(): int
    {
        $json = 'data/data.json';
        $data = json_decode(file_get_contents($json), true);
        $id = 8;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }

}
