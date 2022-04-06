<?php 
class JsonFormatter 
{
    public function getData()
    {
        $json = 'data/data.json';
        $data = json_decode(file_get_contents($json), true);
        return $data;
    }
}