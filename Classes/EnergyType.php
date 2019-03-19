<?php

class EnergyType{
    public $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function __toString() {
        return json_encode($this);
    }
}