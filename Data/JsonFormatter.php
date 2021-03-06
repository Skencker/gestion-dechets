<?php 

namespace App\Data;


class JsonFormatter 
{
    public array $data;
    public array $co2;
    
    public function getData(): array
    {
        $json = 'Data/data.json';
        $this->data = json_decode(file_get_contents($json), true);
        return $this->data;
    }
    public function getCo2(): array
    {
        $json = 'Data/co2.json';
        $this->data = json_decode(file_get_contents($json), true);
        return $this->data;
    }

}