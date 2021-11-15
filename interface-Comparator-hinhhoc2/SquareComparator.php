<?php
include_once "comparator.php";
include_once "Square.php";
class SquareComparator implements comparator
{
    public function compareTo($objO, $objT)
    {
       $obj1 = $objO->getChieuRong();
       $obj2 = $objT->getChieuRong();
       if($obj1 > $obj2) {
           return 1;
       }else if($obj1 < $obj2) {
           return -1;
       }else{
           return 0;
       }
    }
}
