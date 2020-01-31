<?php

require('model/Character.php');
require('model/Hero.php');
require('model/Enemy.php');
require('view/heroArchetype.php');
require('view/enemyArchetype.php');

$hero = new Hero(2000, 0, 'Conan', 'Sabre', 250, 'armure d\'os', 600, 4);
$orc = new Enemy(3000, 0, 'Vert de gris', 'massue', 300, 'armure de cuir', 600, 4);

// var_dump($heroArchetype);

foreach ($heroArchetype as $key => $value) {
    echo '----' . $key . '----<br />';
    foreach ($value as $key2 => $value2) {

        echo $key2 . ' --> ' . $value2 . '<br />';
    };
};
echo '=================<br />';

foreach ($enemyArchetype as $key => $value) {
    echo '----' . $key . '----<br />';
    foreach ($value as $key2 => $value2) {

        echo $key2 . ' --> ' . $value2 . '<br />';
    };
};
?>

<p>
    <?= $hero ?><br />
    <?= $orc ?>
</p>

<?php

while ($hero->getHealth() > 0 || $orc->getHealth() > 0) {

    $hero->Attacked($orc->getWeaponDamage());
    $cushionedAttack = ($orc->getWeaponDamage() - $hero->getShieldValue());
    $hero->RageUp(30);
    $orc->Attack($orc->getWeaponDamage());

    echo '- L\'orc ' . $orc->getEnemyName() . ' attaque !' . '<br />' . 'La puissance de son coup vaut ' . $orc->getWeaponDamage() . ' de dégâts, mais votre ' . $hero->getShield() . ' en absorbe ' . $hero->getShieldValue() . ' donc vous ne perdez que ' . $cushionedAttack . ' points de vie.' . "<br />" . '(+) Il vous reste ' . $hero->getHealth()  . ' points de vie.<br />>:( Votre niveau de rage est de ' . $hero->getRage() . "<br />";

    if ($hero->getRage() >= 100) {
        $orc->Attacked($hero->getWeaponDamage());
        $hero->setRage(0);
        echo '/!\ Votre rage a dépassée sa limite de 100 !!<br />=J==> Vous ripostez avec votre ' . $hero->getWeapon() . ' qui inflige ' . $hero->getWeaponDamage() . ' points de dégâts !<br />' . $orc->getEnemyName() . ' n\'a plus que ' . $orc->getHealth() . ' de points de vie.<br />';

        if ($orc->getHealth() <= 0) {

            echo $orc->getEnemyName() . ' est mort ! Bien joué l\'araignée !';
            break;
        };
    } else if ($hero->getHealth() <= 0) {

        echo 'WARGH ! ' . $orc->getEnemyName() . ' vous a tué !!';
        break;
    };
};

?>