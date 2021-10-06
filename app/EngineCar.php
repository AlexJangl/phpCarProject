<?php

class EngineCar extends Engine
{
    private $power;
    private $engineStart;

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }
    public function __construct($power){
        parent::__construct();
        $this->power = $power;
        $this->engineStart = false;
    }

    public function getEngineStart()
    {
        return $this->engineStart;
    }

    public function setEngineStart(bool $engineStart)
    {
        $this->engineStart = $engineStart;
    }


}