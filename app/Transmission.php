<?php

abstract class Transmission
{
    private int $gear;
    private int $maxGear;


    public function __construct()
    {
        $this->gear = 0;
        $this->maxGear = 5;
    }
    public function getMaxGear()
    {
        return $this->maxGear;
    }


    public function getGear()
    {
        return $this->gear;
    }

    public function setGear(int $gear)
    {
        $this->gear = $gear;
    }
    abstract public function addGear();
    abstract public function subGear();

}