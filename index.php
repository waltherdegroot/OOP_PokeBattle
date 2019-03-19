<?php 
    require __DIR__ . '/vendor/autoload.php';

    $pikachu = new PokeMon('Pikachu', 60, 'lightning', [ new Attack('Electric Ring',50), new Attack('Pika Punch',20)  ], new Weakness('Fire', 1.5), new Resistance('Lightning',20));

    $pikachu->Dump();

    echo $pikachu->energyType;

    $charmeleon = new PokeMon('Charmeleon', 60, 'Fire', [ new Attack('Head Butt',10), new Attack('Flare', 30)], new Weakness('Water', 2),new Resistance('Lightning',10));

    $charmeleon->Dump();

    