<?php

require_once 'Recyclage.php';
require_once 'PapierInterface.php';

class RecyclagePapier extends Recyclage implements PapierInterface
{
    public function getCapacity(): int
    {
        $json = 'data/data.json';
        $data = json_decode(file_get_contents($json), true);
        $id = 6;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }

}