<?php

class Car implements MovableInterface
{
    private $engineCar;
    private $avTransmission;
    private $speed;
    private $maxSpeed;


    public function __construct($power, $maxSpeed)
    {
        $this->engineCar = new engineCar($power);
        $this->avTransmission = new automaticTransmission();
        $this->speed = 0;
        $this->maxSpeed = $maxSpeed + ($power * 0.1);
    }

    public function getEngineCar()
    {
        return $this->engineCar->getEngineStart();
    }


    public function getSpeed()
    {
        return $this->speed;
    }

    public function getAvTransmission()
    {
        return $this->avTransmission->getGear();
    }

    public function start(){
        if ($this->engineCar->getEngineStart() !== true){
            $this->engineCar->setEngineStart(true);
        }
    }
    public function stop(){
        if ($this->engineCar->getEngineStart() !== false){
            $this->engineCar->setEngineStart(false);
        }
    }

    public function up(){
        if($this->speed < $this->maxSpeed-20){
            $this->speed += 20;
        }
        else{
            $this->speed = $this->maxSpeed;
        }
        return $this->speed;

    }
    public function down(){
        if($this->speed > 20){
            $this->speed -= 20;
        }
        else{
            $this->speed = 0;
        }
        return $this->speed;
    }
    public function drive(){
        if (!$this->engineCar->getEngineStart()){
            $this->start();
        }
        if ($this->speed === 0){
            $this->avTransmission->addGear();
        }
        $this->up();
        if($this->speed > $this->avTransmission->getGear()*40){
            $this->avTransmission->addGear();
        }

    }
    public function braking(){
        if($this->speed/40 < $this->avTransmission->getGear() && $this->speed !== 0){
            $this->avTransmission->subGear();
        }
        $this->down();
        if($this->speed === 0){
            $this->avTransmission->subGear();
            $this->stop();
        }

    }

}