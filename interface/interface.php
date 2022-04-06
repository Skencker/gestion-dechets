<?php

interface MovableInterface
{
    public function move();
}

class Vehicle implements MovableInterface
{
    public function move()
    {
        echo 'move vehicle'.PHP_EOL;
    }
}

class Person implements MovableInterface
{
    public function move()
    {
        echo 'move person'.PHP_EOL;
    }    
}

class Fruit
{
}

class Project
{
    private $objects = [];

    public function addObject(MovableInterface $obj)
    {
        $this->objects[] = $obj;
    }
    
    public function moveAll()
    {
        foreach ($this->objects as $o) {
            $o->move();
        }
    }
}


$p = new Project();
$p->addObject(new Vehicle());
$p->addObject(new Person());
// TypeError must implement interface MovableInterface
// $p->addObject(new Fruit());
$p->moveAll();
