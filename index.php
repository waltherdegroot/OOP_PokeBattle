<?php 
    require __DIR__ . '/vendor/autoload.php';

    $pikachu = new Pokemon(
        'Pikachu',
        60,
        new EnergyType('Lightning'), 
        [ new Attack('Electric Ring',50), new Attack('Pika Punch',20)  ], 
        new Weakness(new EnergyType('Fire'), 1.5), 
        new Resistance(new EnergyType('Lightning'),20)
    );

    $charmeleon = new Pokemon(
        'Charmeleon', 
        60, 
        new EnergyType('Fire'), 
        [ new Attack('Head Butt',10), new Attack('Flare', 30)], 
        new Weakness(new EnergyType('Water'), 2),
        new Resistance(new EnergyType('Lightning'),10)
    );
    
    $pikachu->doDamage($pikachu->attacks[0], $charmeleon);
    echo "<br/>";
    $charmeleon->doDamage($charmeleon->attacks[1], $pikachu);


