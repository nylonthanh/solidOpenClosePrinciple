<?php
/**
 * Demonstration for SOLID principles
 * Open/close principle,
 * Dependency Inversion
 */


namespace OpenClosePrinciple;

require_once('ShapeInterface.php');


class Square implements Shape
{
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->width = $width;
        $this->height = $height;

    }

    public function area()
    {
        return $this->width * $this->height;
    }

}

