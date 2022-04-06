<?php

require_once 'Service.php';
// require_once '../data/Data.php';

class Recyclage extends Service {
    
    public array $capacity;

    /**
     * Get the value of capacity
     */ 
    public function getCapacity(): array
    {

        // $data = new JsonFormatter();
        // $data->getData();
        $json = 'data/data.json';
        $data = json_decode(file_get_contents($json), true);
        $services = $data["services"];
        // var_dump($services);
        //si type = recyclage papier alors tu me donne la clé capacity
        foreach ($services as $key=>$service) {

            echo '<br>';
            var_dump($service["capacite"]);
            foreach ($service as $serv){
                // var_dump($serv->capacite);
            }
            // if( $key= "recyclagePapier"){
            //     var_dump($service[);
               
            // }
        }
        return $this->capacity;

    }
}
