<?php
namespace App\Dechets;


abstract class AbstractDechet
{
    public int $volume;

    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    public function getType(): string
    {
        return str_replace([__NAMESPACE__ . '\\', 'Dechets'], '', get_class($this));
    }

      /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

}
