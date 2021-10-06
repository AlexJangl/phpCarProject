<?php

class automaticTransmission extends Transmission
{
    public function addGear(){
        $gear = $this->getGear();
        if ($gear < $this->getMaxGear()){
            $this->setGear(++$gear);
            $gear = $this->getGear();
            return $gear;
        }
        return $gear;
    }
   public function subGear(){
        $gear = $this->getGear();
        if ($gear !== 0){
            $this->setGear(--$gear);
            $gear = $this->getGear();
            return $gear;
        }
            return 0;
    }
}