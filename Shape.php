<?php

/**
 * Inheritance: Derive Attribute and Behavior of one Class to other which extends it.
 * Parent Class: Class which mainly has Attributes and Behaviors.
 * Sub Class: Classes which extends/inherits Parent Class.
 * Abstract Class: Contract for other sub-classes to follow.
 * Abstract Class cannot be instantiated, rather its Sub-Classes are instantiated.
 * $shape1 = new Shape; NOT VALID, Cannot ne instantiated

 * Abstract Method: Method rule that needs to be implemented on Sub-Classes of this Abstract Class.
 * Abstract Method does not have body.
 *
 * Template Method Design Pattern:
 * Class Shape
 */
abstract class Shape
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     * Sub-Classes extending this Shape Class must have getArea() method.
     */
    abstract protected function getArea();

}

/**
 * Class Square inherits Shape
 */
class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    protected  $radius = 5;

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }
}

$circle = new Circle;
echo $circle->getArea();
/**  OR  */
// (new Circle)->getArea();
