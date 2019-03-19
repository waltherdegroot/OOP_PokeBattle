<?php

class PokeMon
{
    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks = array();
    public $weakness;
    public $resistance;

    public function __construct($name, $hitpoints, $energyType, $attacks, $weakness, $resistance){
        $this->name = $name;
        $this->hitpoints = $hitpoints;
        $this->energyType = $energyType;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function Dump(){
        var_dump($this);
    }

    public function __toString() {
        return json_encode($this);
    }
}