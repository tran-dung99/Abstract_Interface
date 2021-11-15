<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');


$circle = new Circle('Circle 01', 3);
echo 'Diện tích hình tròn: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$circle->resize(2);
echo 'Diện tích hình tròn sau : ' . $circle->calculateArea() . '<br />';


$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Diện tích hình trụ: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
$cylinder->resize(2);
echo 'Diện tích hình trụ sau: ' . $cylinder->calculateArea() . '<br />';
$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Diện tích HCN: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
$rectangle->resize(2);
echo 'Diện tích HCN sau: ' . $rectangle->calculateArea() . '<br />';
$square = new Square('Square 01', 4);
echo 'Diện tích hình vuông: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
$square->resize(2);
echo 'Diện tích hình vuông sau: ' . $square->calculateArea() . '<br />';
