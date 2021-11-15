<?php
include_once "CircleComparator.php";
include_once "SquareComparator.php";


$circleOne = new Circle('Circle1',5);
$circleTwo = new Circle('Circle2',10);
$circleComparator = new CircleComparator();

echo ($circleComparator->compareTo($circleOne,$circleTwo));
echo"<br>";
$squareOne = new Square('hinh vuong 1', 5);
$squareTwo = new Square('hinh vuong 2', 5);
$squareComparator = new SquareComparator();
echo($squareComparator->compareTo($squareOne,$squareTwo));