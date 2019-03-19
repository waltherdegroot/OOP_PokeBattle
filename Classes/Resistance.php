<?php

class Resistance extends EnergyType{
    public $value;

    public function __construct($energyType, $value){
        $this->type = $energyType;
        $this->value = $value;
    }

    public function __toString() {
        return json_encode($this);
    }
}