<?php

class Pokemon
{
    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks = array();
    public $weakness;
    public $resistance;

    public function __construct($name, $hitpoints, $energyType, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->hitpoints = $hitpoints;
        $this->energyType = $energyType;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function dump()
    {
        var_dump($this);
    }

    public function recieveDamage(Attack $attack)
    {
        $this->hitpoints = ($this->hitpoints - $attack->damage);
    }

    public function doDamage(Attack $attack, Pokemon $target)
    {
        echo $this->name . " is attacking " . $target->name . " with " . $attack->name . "<br/>";

        $target->recieveDamage($attack);

        echo $this->name . " is done with attacking " . $target->name . "<br/>";
    
        echo $target->name . " has " . $target->hitpoints . " HP Remaining <br />";
    }

    public function __toString() 
    {
        return json_encode($this);
    }
}