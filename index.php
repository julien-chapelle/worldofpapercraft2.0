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
    $orc = new Enemy($enemyHealth, $enemyRage, $enemyName, $enemyWeapon, $enemyWeaponDamage, $enemyShield, $enemyShieldValue, $enemyMultiplicatorDamage);
};

// if(isset($_POST['fight'])){
//     header('Location: arena.php');
// };

// var_dump($_POST);
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
        <div class="row text-center m-5 m-0">
            <div class="col headerTitle">
                <p>World Of PaperCraft</p>
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
                                    <h5 class="card-title text-center h1"><?= $key ?></h5>
                                    <p class="card-text text-center h4"><?= $value['description'] ?></p>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="radio" name="heroSelect" id="<?= $key . 'Id' ?>" value="<?= $key ?>" checked>
                                        <label class="form-check-label h2" for="<?= $key . 'Id' ?>">
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
                                    <h5 class="card-title text-center h1"><?= $key ?></h5>
                                    <p class="card-text text-center h4"><?= $value['description'] ?></p>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="radio" name="enemySelect" id="<?= $key . 'Id' ?>" value="<?= $key ?>" checked>
                                        <label class="form-check-label h2" for="<?= $key . 'Id' ?>">
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
                <input type="submit" class="col nameChoice mx-5 media" id="nameEnemyChoice" name="fight" value="FIGHT !" />
            </div>
        </form>
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
                        <h5 class="card-title text-center h1"><?= $heroName ?></h5>
                        <p class="card-text text-left h5"><?= 'Type - ' . $heroType ?></p>
                        <p class="card-text text-left h5"><?= 'Santé - ' . $heroHealth ?></p>
                        <p class="card-text text-left h5"><?= 'Arme - ' . $heroWeapon . ' : ' . $heroWeaponDamage . ' points' ?></p>
                        <p class="card-text text-left h5"><?= 'Armure - ' . $heroShield . ' : ' . $heroShieldValue . ' points'  ?></p>
                        <p class="card-text text-left h5"><?= 'Rage - ' . $heroRage ?></p>
                        <div class="form-check text-center"></div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card m-5 media cardBorder" style="width: 18rem;">
                    <img src="assets/img/<?= $enemyPic ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $enemyType ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center h1"><?= $enemyName ?></h5>
                        <p class="card-text text-left h5"><?= 'Type - ' . $enemyType ?></p>
                        <p class="card-text text-left h5"><?= 'Santé - ' . $enemyHealth ?></p>
                        <p class="card-text text-left h5"><?= 'Arme - ' . $enemyWeapon . ' : ' . $enemyWeaponDamage . ' points' ?></p>
                        <p class="card-text text-left h5"><?= 'Armure - ' . $enemyShield . ' : ' . $enemyShieldValue . ' points'  ?></p>
                        <p class="card-text text-left h5"><?= 'Rage - ' . $enemyRage ?></p>
                        <div class="form-check text-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-5 m-0">
            <a type="button" href="index.php" class="col nameChoice mx-5 media">
                <span class="mx-auto">RETOUR SELECTION HERO</span>
            </a>
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