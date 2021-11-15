<?php
include_once "ComparableCircle.php";
$circleOne = new ComparableCircle(5,'circleOne');
$circleTwo = new ComparableCircle(10,'circleTwo');

$check = $circleOne->compareTo($circleTwo);
echo $check;