<?php 

$enemyArchetype = [
    'revenant' => [
                'pics' => ('revenantPic.png'),
                'description' => ('Ennemi commun, le Revenant est un amas de chair et d\'os qui tient debout grâce au pouvoir des nécromanciens. '),
                'health' => (random_int(1000,1300)),
                'rage' => (0),
                'name'=>('$_POST["enemyName"]'),
                'weapon'=>('ongles'), 
                'weaponDamage'=>(random_int(200,400)),
                'shield'=>('la peau et les os'),
                'shieldValue'=>(0),
                'multiplicatorDamage'=>(300)
                ],
    'uruk Haï' => [
                'pics' => ('UrukHaïPic.png'),
                'description' => ('Ennemi puissant, l\'Uruk Haï est issu de la fusion de deux affreuses créatures.'),
                'health' => (random_int(1500,2000)),
                'rage' => (0),
                'name'=>('$_POST["enemyName"]'),
                'weapon'=>('fléau'),
                'weaponDamage'=>(random_int(500,800)),
                'shield'=>('armure de piques'),
                'shieldValue'=>(random_int(700,1000)),
                'multiplicatorDamage'=>(0)
                ],
    'coronuviras' => [
                'pics' => ('coronuvirasPic.png'),
                'description' => ('Ennemi dévastateur, le Coronuviras ne porte aucune attaque inutile.'),
                'health' => (random_int(2000,3000)),
                'rage' => (0),
                'name'=>('$_POST["enemyName"]'),
                'weapon'=>('masse'),
                'weaponDamage'=>(random_int(700,1000)),
                'shield'=>('armure en peau de chauve-souris'),
                'shieldValue'=>(random_int(500,700)),
                'multiplicatorDamage'=>(0)
                ],
    'le Bug' => [
                'pics' => ('leBugPic.png'),
                'description' => ('Hantise de tous les Développeurs Web, le Bug ne recule devant rien pour éradiquer son adversaire.'),
                'health' => (random_int(1,9999)),
                'rage' => (0),
                'name'=>('$_POST["enemyName"]'),
                'weapon'=>('airemeTiréAireÉfÉToile'),
                'weaponDamage'=>(random_int(500,800)),
                'shield'=>('armure d\'erreurs système'),
                'shieldValue'=>(random_int(10,600)),
                'multiplicatorDamage'=>(0)
                ]
    ];


?>