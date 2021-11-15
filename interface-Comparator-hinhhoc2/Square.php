<?php

class Square
{
public $chieuRong;
public $name;
public function __construct($name,$chieuRong)
{
    $this->name = $name;
    $this->chieuRong = $chieuRong;
}

    /**
     * @return mixed
     */
    public function getChieuRong()
    {
        return $this->chieuRong;
    }

    /**
     * @param mixed $chieuRong
     */
    public function setChieuRong($chieuRong)
    {
        $this->chieuRong = $chieuRong;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}