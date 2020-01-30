<?php 

$heroArchetype = [
'paladin' => [
            'health' => (random_int(2000,3000)),
            'rage' => (0),
            'name'=>('$_POST["heroName"]'),
            'weapon'=>('espadon'), 
            'weaponDamage'=>(random_int(400,600)),
            'shield'=>('armure de plaques'),
            'shieldValue'=>(random_int(800,1500)),
            'multiplicatorDamage'=>(3)
            ],
'mage' => [
            'health' => (random_int(1000,1500)),
            'rage' => (0),
            'name'=>('$_POST["heroName"]'),
            'weapon'=>('bâton des flammes froides'),
            'weaponDamage'=>(random_int(600,800)),
            'shield'=>('robe noire'),
            'shieldValue'=>(random_int(500,700)),
            'multiplicatorDamage'=>(4)
            ],
'assassin' => [
            'health' => (random_int(800,1300)),
            'rage' => (0),
            'name'=>('$_POST["heroName"]'),
            'weapon'=>('dague empoisonée'),
            'weaponDamage'=>(random_int(600,800)),
            'shield'=>('cape de voleur'),
            'shieldValue'=>(random_int(300,400)),
            'multiplicatorDamage'=>(2)
            ],
'développeur web' => [
            'health' => (random_int(1500,1800)),
            'rage' => (0),
            'name'=>('$_POST["heroName"]'),
            'weapon'=>('ordinateur vieillissant'),
            'weaponDamage'=>(random_int(400,700)),
            'shield'=>('armure de câbles RJ-45'),
            'shieldValue'=>(random_int(300,500)),
            'multiplicatorDamage'=>(0)
            ]
];

?>