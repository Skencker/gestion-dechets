<?php

//class vehicules
class Vehicle {
   protected $color;

   public function setcolor($color){
      $this->color=$color;
      return $this;
   }

   public function getcolor(){
      return $this->color;
   }
}

//creer des sous classes qui hérites de la classe vehicule (velo, voiture, moto...) camion, velo, voiture, moto
class Car extends Vehicle {
   protected $doors;

   /**
    * Get the value of doors
    */ 
    public function getDoors()
    {
       return $this->doors;
    }
 
   /**
     * Set the value of doors
     *
     * @return  self
     */ 

    public function setDoors($doors)
    {
       $this->doors = $doors;
 
       return $this;
    }
}
class Truck extends Vehicle {
   protected $doors;

   /**
    * Get the value of doors
    */ 
    public function getDoors()
    {
       return $this->doors;
    }
 
   /**
     * Set the value of doors
     *
     * @return  self
     */ 

    public function setDoors($doors)
    {
       $this->doors = $doors;
 
       return $this;
    }
}
class Bike extends Vehicle {
}
class Moto extends Vehicle {
}


$car1 = new Car();
// $car1->color ="rouge";
// $car1
//    ->setColor('vert')
//    ->setBrand("");

// $car1->setBrand('renault');



// var_dump($car1);

// echo $car1->color;

