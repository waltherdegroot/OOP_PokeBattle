<?php

class Weakness extends EnergyType{
    public $multiplier;

    public function __construct($weakness, $multiplier){
        $this->type = $weakness;
        $this->multiplier = $multiplier;
    }

    public function __toString() {
        return json_encode($this);
    }
}