<?php

require('model/Character.php');
require('model/Hero.php');
require('model/Enemy.php');
require('view/heroArchetype.php');
require('view/enemyArchetype.php');
require('view/heroArchetypeLoop.php');
require('view/enemyArchetypeLoop.php');

if (isset($_POST['fight'])) {
    $hero = new Hero($heroHealth, $heroRage, $heroName, $heroWeapon, $heroWeaponDamage, $heroShield, $heroShieldValue, $heroMultiplicatorDamage);
    $enemy = new Enemy($enemyHealth, $enemyRage, $enemyName, $enemyWeapon, $enemyWeaponDamage, $enemyShield, $enemyShieldValue, $enemyMultiplicatorDamage);
};

// if (isset($_POST['newFight'])) {
//     header('Refresh: 0');
// };

// var_dump($heroHealth);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>World Of PaperCraft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />


</head>

<body class="font">
    <div class="container-fluid p-0">
        <div id="selectVisibility">
            <div class="row text-center m-5 m-0">
                <div class="col headerTitle">
                    <p>World Of PaperCraft</p>
                </div>
            </div>
            <div class="row m-5 m-0 justify-content-center">
                <div class="col">
                    <form method="POST" action="index.php">
                        <button type="submit" class="nameChoice mx-5" name="newFight">Nouveau combat</button>
                    </form>
                </div>
            </div>
            <form method="POST" action="index.php">
                <div class="row text-center m-5 m-0">
                    <div class="col nameChoice">
                        <div class="form-group input-group-lg">
                            <label for="nameHeroChoice">Nom du héro :</label>
                            <input type="text" class="form-control text-center" id="nameHeroChoice" name="nameHeroChoice">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center m-0">
                    <?php foreach ($heroArchetype as $key => $value) { ?>
                        <div class="col-3">
                            <?php
                            $count = 0;
                            foreach ($value as $key2 => $value2) {
                                $count++;
                                if ($count == 2) {
                                    break;
                                }; ?>
                                <div class="card m-5 media cardBorder" style="width: 18rem;">
                                    <img src="assets/img/<?= $value['pics'] ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $key ?>">
                                    <div class="card-body">
                                        <h5 class="card-title text-center textSize1"><?= $key ?></h5>
                                        <p class="card-text text-center textSize2"><?= $value['description'] ?></p>
                                        <div class="form-check text-center">
                                            <input class="form-check-input" type="radio" name="heroSelect" id="<?= $key . 'Id' ?>" value="<?= $key ?>" checked>
                                            <label class="form-check-label textSize1" for="<?= $key . 'Id' ?>">
                                                Selectionner
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    <?php }; ?>
                </div>
                <div class="row text-center m-5 m-0">
                    <div class="col nameChoice">
                        <div class="form-group input-group-lg">
                            <label for="nameEnemyChoice">Nom de l'ennemi :</label>
                            <input type="text" class="form-control text-center" id="nameEnemyChoice" name="nameEnemyChoice">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center m-0">
                    <?php foreach ($enemyArchetype as $key => $value) { ?>
                        <div class="col-3">
                            <?php
                            $count = 0;
                            foreach ($value as $key2 => $value2) {
                                $count++;
                                if ($count == 2) {
                                    break;
                                }; ?>
                                <div class="card m-5 media cardBorder" style="width: 18rem;">
                                    <img src="assets/img/<?= $value['pics'] ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $key ?>">
                                    <div class="card-body">
                                        <h5 class="card-title text-center textSize1"><?= $key ?></h5>
                                        <p class="card-text text-center textSize2"><?= $value['description'] ?></p>
                                        <div class="form-check text-center">
                                            <input class="form-check-input" type="radio" name="enemySelect" id="<?= $key . 'Id' ?>" value="<?= $key ?>" checked>
                                            <label class="form-check-label textSize1" for="<?= $key . 'Id' ?>">
                                                Selectionner
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    <?php }; ?>
                </div>
                <div class="row m-5 m-0">
                    <input type="submit" class="col nameChoice mx-5 media" name="fight" value="FIGHT !" />
                </div>
                <?php if (isset($_POST['fight']) && !empty($_POST)) { ?>
                    <div class="row m-5 m-0">
                        <a type="button" class="col nameChoice mx-5 media" id="fight">
                            <span class="mx-auto textColor1"><i class="fas fa-arrow-down"></i> Voir le combat <i class="fas fa-arrow-down"></i></span>
                        </a>
                    </div>
                <?php } ?>
            </form>
        </div>
        <div id="arenaVisibility">
            <div class="row text-center m-5 m-0">
                <div class="col headerTitle">
                    <p>WOP ARENA</p>
                </div>
            </div>
            <div class="row justify-content-center m-0">
                <div class="col-3">
                    <div class="card m-5 media cardBorder" style="width: 18rem;">
                        <img src="assets/img/<?= $heroPic ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $heroType ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center textSize1"><?= $heroName ?></h5>
                            <p class="card-text text-left textSize2"><i class="fas fa-user-ninja"></i><?= ' - ' . $heroType ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-heartbeat"></i><?= ' - ' . $heroHealth ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-khanda"></i><?= ' - ' . $heroWeapon . ' : ' . $heroWeaponDamage . ' points' ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-user-shield"></i><?= ' - ' . $heroShield . ' : ' . $heroShieldValue . ' points'  ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-fire-alt"></i><?= ' - ' . $heroRage ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card m-5 media cardBorder" style="width: 18rem;">
                        <img src="assets/img/<?= $enemyPic ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $enemyType ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center textSize1"><?= $enemyName ?></h5>
                            <p class="card-text text-left textSize2"><i class="fas fa-user-ninja"></i><?= ' - ' . $enemyType ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-heartbeat"></i><?= ' - ' . $enemyHealth ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-khanda"></i><?= ' - ' . $enemyWeapon . ' : ' . $enemyWeaponDamage . ' points' ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-user-shield"></i><?= ' - ' . $enemyShield . ' : ' . $enemyShieldValue . ' points'  ?></p>
                            <p class="card-text text-left textSize2"><i class="fas fa-fire-alt"></i><?= ' - ' . $enemyRage ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['fight']) && !empty($_POST)) {


                while ($hero->getHealth() > 0 || $enemy->getHealth() > 0) {

                    $hero->Attacked($enemy->getWeaponDamage());
                    $heroCushionedAttack = ($enemy->getWeaponDamage() - $hero->getShieldValue());
                    $hero->RageUp($heroRageUp);
                    $hero->Attack($hero->getWeaponDamage());

                    $enemy->Attacked($hero->getWeaponDamage());
                    $enemyCushionedAttack = ($hero->getWeaponDamage() - $enemy->getShieldValue());
                    $enemy->RageUp($enemyRageUp);
                    $enemy->Attack($enemy->getWeaponDamage());



            ?>
                    <div class="row justify-content-center m-0">
                        <div class="col-3">
                            <div class="card m-5 media cardBorder" style="width: 18rem;">
                                <div class="card-body">
                                    <p class="card-text text-left textSize2"><?= '- ' . $enemyName . ' attaque !' ?></p>
                                    <p class="card-text text-left textSize2"><?= '- La puissance de son coup vaut ' . $enemy->getWeaponDamage() . ' de dégâts, mais votre ' . $hero->getShield() . ' en absorbe ' . $hero->getShieldValue() . ' donc vous ne perdez que ' . $heroCushionedAttack . ' points de vie.' ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card m-5 media cardBorder" style="width: 18rem;">
                                <img src="assets/img/<?= $heroPic ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $heroType ?>">
                                <div class="card-body">
                                    <h5 class="card-title text-center textSize1"><?= $heroName ?></h5>
                                    <p class="card-text text-left textSize2"><i class="fas fa-user-ninja"></i><?= ' - ' . $heroType ?></p>
                                    <p class="card-text text-left textSize1"><i class="fas fa-heartbeat"></i><?= ' - ' . $hero->getHealth() ?></p>
                                    <p class="card-text text-left textSize2"><i class="fas fa-khanda"></i><?= ' - ' . $heroWeapon . ' : ' . $heroWeaponDamage . ' points' ?></p>
                                    <p class="card-text text-left textSize2"><i class="fas fa-user-shield"></i><?= ' - ' . $heroShield . ' : ' . $heroShieldValue . ' points'  ?></p>
                                    <p class="card-text text-left textSize1"><i class="fas fa-fire-alt"></i><?= ' - ' . $hero->getRage() ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card m-5 media cardBorder" style="width: 18rem;">
                                <img src="assets/img/<?= $enemyPic ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $enemyType ?>">
                                <div class="card-body">
                                    <h5 class="card-title text-center textSize1"><?= $enemyName ?></h5>
                                    <p class="card-text text-left textSize2"><i class="fas fa-user-ninja"></i><?= ' - ' . $enemyType ?></p>
                                    <p class="card-text text-left textSize1"><i class="fas fa-heartbeat"></i><?= ' - ' . $enemy->getHealth() ?></p>
                                    <p class="card-text text-left textSize2"><i class="fas fa-khanda"></i><?= ' - ' . $enemyWeapon . ' : ' . $enemyWeaponDamage . ' points' ?></p>
                                    <p class="card-text text-left textSize2"><i class="fas fa-user-shield"></i><?= ' - ' . $enemyShield . ' : ' . $enemyShieldValue . ' points'  ?></p>
                                    <p class="card-text text-left textSize1"><i class="fas fa-fire-alt"></i><?= ' - ' . $enemy->getRage() ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card m-5 media cardBorder" style="width: 18rem;">
                                <div class="card-body">
                                    <p class="card-text text-left textSize2"><?= '- ' . $heroName . ' attaque !' ?></p>
                                    <p class="card-text text-left textSize2"><?= '- La puissance de son coup vaut ' . $hero->getWeaponDamage() . ' de dégâts, mais votre ' . $enemy->getShield() . ' en absorbe ' . $enemy->getShieldValue() . ' donc vous ne perdez que ' . $enemyCushionedAttack . ' points de vie.' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($hero->getHealth() <= 0) { ?>
                        <div class="row text-center m-5 m-0">
                            <div class="col headerTitle">
                                <p><?= $heroName . ' est mort ! Victoire de ' . $enemyName ?></p>
                            </div>
                        </div>
                    <?php break;
                    } elseif ($enemy->getHealth() <= 0) { ?>
                        <div class="row text-center m-5 m-0">
                            <div class="col headerTitle">
                                <p><?= $enemyName . ' est mort ! Victoire de ' . $heroName ?></p>
                            </div>
                        </div>
            <?php break;
                    };
                };
            }; ?>

            <div class="row m-5 m-0">
                <a type="button" class="col nameChoice mx-5 media" id="returnSelect">
                    <span class="mx-auto textColor1">RETOUR SELECTION COMBATTANTS</span>
                </a>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/script/script.js"></script>
</body>

</html>