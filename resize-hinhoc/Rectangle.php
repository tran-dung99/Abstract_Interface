<?php
include_once "Shape.php";
include_once "Resize.php";
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;
    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
    public function calculatePerimeter()
    {
        return ($this->height+$this->width)*2;
    }

    function resize($number)
    {
        $this->height = $this->height * $number;
        $this->width = $this->width * $number;

    }
}