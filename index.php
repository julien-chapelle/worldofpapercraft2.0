<?php

require('model/Character.php');
require('model/Hero.php');
require('model/Enemy.php');
require('view/enemyArchetype.php');
require('view/enemyArchetype.php');

$hero = new Hero(2000, 0, 'Conan', 'Sabre', 250, 'armure d\'os', 600);
$orc = new Enemy(3000, 'Vert de gris');

?>

<p>
    <?= $hero ?><br />
    <?= $orc ?>
</p>

<?php

while ($hero->getHealth() > 0 || $orc->getHealth() > 0) {

    $hero->Attacked($orc->getDamage());
    $cushionedAttack = ($orc->getDamage() - $hero->getShieldValue());
    $hero->RageUp(30);
    $orc->Attack($orc->getDamage());

    echo '- L\'orc ' . $orc->getOrcName() . ' attaque !' . '<br />' . 'La puissance de son coup vaut ' . $orc->getDamage() . ' de dégâts, mais votre ' . $hero->getShield() . ' en absorbe ' . $hero->getShieldValue() . ' donc vous ne perdez que ' . $cushionedAttack . ' points de vie.' . "<br />" . '(+) Il vous reste ' . $hero->getHealth()  . ' points de vie.<br />>:( Votre niveau de rage est de ' . $hero->getRage() . "<br />";

    if ($hero->getRage() >= 100) {
        $orc->CounterAttacked($hero->getWeaponDamage());
        $hero->setRage(0);
        echo '/!\ Votre rage a dépassée sa limite de 100 !!<br />=J==> Vous ripostez avec votre ' . $hero->getWeapon() . ' qui inflige ' . $hero->getWeaponDamage() . ' points de dégâts !<br />' . $orc->getOrcName() . ' n\'a plus que ' . $orc->getHealth() . ' de points de vie.<br />';

        if ($orc->getHealth() <= 0) {

            echo $orc->getOrcName() . ' est mort ! Bien joué l\'araignée !';
            break;
        };
    } else if ($hero->getHealth() <= 0) {

        echo 'WARGH ! ' . $orc->getOrcName() . ' vous a tué !!';
        break;
    };
};

?>