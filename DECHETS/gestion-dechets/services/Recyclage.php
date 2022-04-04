<?php

require_once 'Service.php';

class Recyclage extends Service {
    
    public array $capacity;

    /**
     * Get the value of capacity
     */ 
    public function getCapacity(): array
    {
        $json = '../data/data.json';
        $data = json_decode(file_get_contents($json), true);
        $this->capacity = $data["prestations"];
        // var_dump($this->capacity);
        //si type = recyclage papier alors tu me donne la clé capacity
        $cap = array_column($this->capacity, "recyclagePapier");
        var_dump($cap);
        foreach ($this->capacity as $cap) {

            // echo '<br>';
            // if( $cap["capacité"] && $cap["type"]= "recyclagePapier"){
            //     var_dump($cap["capacité"]);
               
            // }
        }
        return $this->capacity;

    }
}
