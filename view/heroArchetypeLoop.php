<?php

if (isset($_POST['fight'])) {
    // CREATION HERO
    foreach ($heroArchetype as $key => $value) {
        if ($key != $_POST['heroSelect']) {
            continue;
        };
        $heroType = $_POST['heroSelect'];
        $heroName = $_POST['nameHeroChoice'];

        foreach ($value as $key2 => $value2) {

            $heroPic = $value['pics'];
            $heroDescription = $value['description'];
            $heroHealth = $value['health'];
            $heroRage = $value['rage'];
            $heroWeapon = $value['weapon'];
            $heroWeaponDamage = $value['weaponDamage'];
            $heroShield = $value['shield'];
            $heroShieldValue = $value['shieldValue'];
            $heroMultiplicatorDamage = $value['multiplicatorDamage'];
        };
    };
};
