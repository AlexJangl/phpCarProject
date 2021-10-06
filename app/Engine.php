<?php

abstract class Engine
{
    private $year;
    private $fuel;

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getFuel()
    {
        return $this->fuel;
    }
    public function __construct() {
        $this->year = date("d.m.y");
        $this->fuel = 'gas';
    }
}