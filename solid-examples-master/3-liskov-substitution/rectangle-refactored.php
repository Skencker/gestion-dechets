<?php

interface Shape
{
    public function area();
}

class Rectangle implements Shape
{
    protected $width;
    protected $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}

class Square implements Shape
{
    protected $side;

    public function setSide($value)
    {
        $this->side = $value;
    }

    public function area()
    {
        return $this->side * $this->side;
    }
}

class Test
{
    private $shape;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function testArea()
    {
        return $shape->area();
    }
}


$s = new Square();
$s->setSide(5);

$t = new Test($s);
echo $t->testArea();