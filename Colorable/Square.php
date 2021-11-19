<?php
include_once "Rectangle.php";
include_once "howToColor.php";
class Square extends Rectangle implements Color
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function howToColor()
    {
        echo "Color all four sides..";
    }
}