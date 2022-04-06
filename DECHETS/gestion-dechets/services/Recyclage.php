<?php

require_once 'Service.php';
// require_once '../data/Data.php';

class Recyclage extends Service {
    
    public int $capacity;

    /**
     * Get the value of capacity
     */ 
    public function getCapacity(): int
    {
        $json = 'data/data.json';
        $data = json_decode(file_get_contents($json), true);
        $id = null;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }
}
