<?php
namespace App\Dechets;


class AbstractDechet
{
    public int $volume;

    public function __construct($volume)
    {
        $this->volume = $volume;
    }

      /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }
  
}
