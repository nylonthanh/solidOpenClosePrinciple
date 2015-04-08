<?php
/**
 * Demonstration for SOLID principles
 * Open/close principle,
 * Dependency Inversion
 */


namespace OpenClosePrinciple;
use OpenClosePrinciple;

require_once('Square.php');
require_once('Circle.php');


class AreaCalculator
{

    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $area[]= $shape->area();

        }

        return $area;

    }
}
