<?php 
class JsonFormatter 
{
    public array $data;
    
    public function getData(): array
    {
        $json = 'data.json';
        $this->data = json_decode(file_get_contents($json), true);
        // var_dump($this->data["services"]);
        return $this->data;
    }

}