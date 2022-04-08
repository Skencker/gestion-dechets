<?php 
class JsonFormatter 
{
    public array $data;
    
    public function getData(): array
    {
        $json = 'data.json';
        $this->data = json_decode(file_get_contents($json), true);
        return $this->data;
    }

}