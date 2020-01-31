<?php

if (isset($_POST['fight'])) {
    // CREATION ENEMY
    foreach ($enemyArchetype as $key => $value) {
        if ($key != $_POST['enemySelect']) {
            continue;
        };
        $enemyType = $_POST['enemySelect'];
        $enemyName = $_POST['nameEnemyChoice'];

        foreach ($value as $key2 => $value2) {

            $enemyPic = $value['pics'];
            $enemyDescription = $value['description'];
            $enemyHealth = $value['health'];
            $enemyRage = $value['rage'];
            $enemyRageUp = $value['rageUp'];
            $enemyWeapon = $value['weapon'];
            $enemyWeaponDamage = $value['weaponDamage'];
            $enemyShield = $value['shield'];
            $enemyShieldValue = $value['shieldValue'];
            $enemyMultiplicatorDamage = $value['multiplicatorDamage'];
        };
    };
};
