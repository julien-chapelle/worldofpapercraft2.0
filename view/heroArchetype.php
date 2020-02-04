<?php

$heroArchetype = [
    'paladin' => [
        'pics' => ('paladinPic.png'),
        'description' => ('Héros des premières lignes, son rôle est de protéger ses aliés en encaissant le plus de dégâts possible.'),
        'health' => (random_int(2000, 3000)),
        'rage' => (0),
        'rageUp' => (10),
        'weapon' => ('espadon'),
        'weaponDamage' => (random_int(400, 600)),
        'shield' => ('armure de plaques'),
        'shieldValue' => (random_int(800, 1500)),
        'multiplicatorDamage' => (3)
    ],
    'mage' => [
        'pics' => ('magePic.png'),
        'description' => ('Héros de l\'arrière-ligne, son rôle est de causer le plus de dégâts possibles en invoquant de puissants sorts.'),
        'health' => (random_int(1000, 1500)),
        'rage' => (0),
        'rageUp' => (10),
        'weapon' => ('bâton des flammes froides'),
        'weaponDamage' => (random_int(600, 800)),
        'shield' => ('robe noire'),
        'shieldValue' => (random_int(500, 700)),
        'multiplicatorDamage' => (4)
    ],
    'assassin' => [
        'pics' => ('assassinPic.png'),
        'description' => ('Héros de l\'ombre, l\'Assassin se faufile dans les rangs ennemis afin d\'en finir le plus rapidement possible.'),
        'health' => (random_int(800, 1300)),
        'rage' => (0),
        'rageUp' => (25),
        'weapon' => ('dague empoisonée'),
        'weaponDamage' => (random_int(600, 800)),
        'shield' => ('cape de voleur'),
        'shieldValue' => (random_int(300, 400)),
        'multiplicatorDamage' => (2)
    ],
    'développeur web' => [
        'pics' => ('developeurWebPic.png'),
        'description' => ('Héros de support, le Développeur Web a pour but de réparer les soi-disant bugs qui ont causé la chute de son Paladin protecteur.'),
        'health' => (random_int(1500, 1800)),
        'rage' => (0),
        'rageUp' => (40),
        'weapon' => ('ordinateur vieillissant'),
        'weaponDamage' => (random_int(400, 700)),
        'shield' => ('armure de câbles RJ-45'),
        'shieldValue' => (random_int(300, 500)),
        'multiplicatorDamage' => (0)
    ]
];

