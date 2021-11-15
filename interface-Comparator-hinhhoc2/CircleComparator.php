<?php
include_once "Circle.php";
include_once "comparator.php";
class CircleComparator implements comparator
{
public function compareTo($objOne, $objTwo)
{
    $radiusOne = $objOne->getRadius();
    $radiusTwo = $objTwo->getRadius();
    if($radiusOne > $radiusTwo){return 1;
    }else if($radiusOne < $radiusTwo) {
        return -1;
    }else{
        return 0;
    }
}
}