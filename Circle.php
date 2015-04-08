<?php
/**
 * Demonstration for SOLID principles
 * Open/close principle,
 * Dependency Inversion
 */


namespace OpenClosePrinciple;

require_once('ShapeInterface.php');


class Circle implements Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;

    }

    public function area()
    {
        return $this->radius * $this->radius * pi();

    }

}

