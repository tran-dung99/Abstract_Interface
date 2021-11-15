<?php
include_once "Rectangle.php";
include_once "Resize.php";
class Square extends Rectangle implements Resizeable
{

public function __construct($name, $width)
{
    parent::__construct($name, $width, $width);
}
public function resize($number)
{
    $this->width = $this->width * $number;
}
}