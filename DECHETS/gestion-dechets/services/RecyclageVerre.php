<?php


require_once 'Recyclage.php';
require_once 'VerreInterface.php';

class RecyclageVerre extends Recyclage implements VerreInterface
{
    public int $consigne;

    /**
     * Get the value of consigne
     */ 
    public function getConsigne(): int
    {
        return $this->consigne = 3;
    }

    public function getCapacity(): int
    {
        $json = 'data/data.json';
        $data = json_decode(file_get_contents($json), true);
        // var_dump($data["services"]);
        $id = 7;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }
}
