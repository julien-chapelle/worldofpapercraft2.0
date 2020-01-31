<?php

require('model/Character.php');
require('model/Hero.php');
require('model/Enemy.php');
require('view/heroArchetype.php');
require('view/enemyArchetype.php');
require('view/heroArchetypeLoop.php');
require('view/enemyArchetypeLoop.php');

$hero = new Hero($heroHealth, $heroRage, $heroName, $heroWeapon, $heroWeaponDamage, $heroShield, $heroShieldValue, $heroMultiplicatorDamage);
$orc = new Enemy($enemyHealth, $enemyRage, $enemyName, $enemyWeapon, $enemyWeaponDamage, $enemyShield, $henemyShieldValue, $enemyMultiplicatorDamage);

var_dump($_POST);

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
                <p>WOP ARENA</p>
            </div>
        </div>
        <div class="row justify-content-center m-0">
            <div class="col-3">
                <div class="card m-5 media cardBorder" style="width: 18rem;">
                    <img src="assets/img/<?= $heroPic ?>" class="card-img-top p-4 img-fluid" alt="<?= 'Image de ' . $key ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center h1"><?= $key ?></h5>
                        <p class="card-text text-center h4"><?= $heroHealth ?></p>
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