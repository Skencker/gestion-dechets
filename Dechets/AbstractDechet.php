<?php
namespace App\Dechets;


abstract class AbstractDechet
{
    public int $volume;
    public int $rejetCo2;

    public function __construct($volume, $rejetCo2)
    {
        $this->volume = $volume;
        $this->rejetCo2 = $rejetCo2;
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
