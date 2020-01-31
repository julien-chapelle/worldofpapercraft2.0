<?php

require('model/Character.php');
require('model/Hero.php');
require('model/Enemy.php');
require('view/heroArchetype.php');
require('view/enemyArchetype.php');

$hero = new Hero(2000, 0, 'Conan', 'Sabre', 250, 'armure d\'os', 600, 4);
$orc = new Enemy(3000, 0, 'Vert de gris', 'massue', 300, 'armure de cuir', 600, 4);

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
                    <p>Choix des noms :</p>
                    <div class="form-group">
                        <label for="nameHeroChoice">Héro :</label>
                        <input type="text" class="form-control" id="nameHeroChoice" aria-describedby="emailHelp" name="nameHeroChoice">
                    </div>
                    <div class="form-group">
                        <label for="nameEnemyChoice">Ennemi :</label>
                        <input type="text" class="form-control" id="nameEnemyChoice" aria-describedby="emailHelp" name="nameEnemyChoice">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-0">
                <div class="col-6">
                    <div class="card m-5 media cardBorder" style="width: 18rem;">
                        <img src="assets/img/paladinPic.png" class="card-img-top p-4" alt="Image de paladin">
                        <div class="card-body">
                            <h5 class="card-title text-center h1">PALADIN</h5>
                            <p class="card-text text-center h4">Héros des premières lignes, son rôle est de protéger ses aliés en encaissant le plus de dégâts possible.</p>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="radio" name="heroSelect" id="paladinId" value="paladin" checked>
                                <label class="form-check-label" for="paladinId">
                                    Selectionner
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-6">
                    <div class="card m-5 media cardBorder" style="width: 18rem;">
                        <img src="assets/img/magePic.png" class="card-img-top p-4" alt="Image de mage">
                        <div class="card-body">
                            <h5 class="card-title text-center h1">MAGE</h5>
                            <p class="card-text text-center h4">Héros de l'arrière-ligne, son rôle est de causer le plus de dégâts possibles en invoquant de puissants sorts.</p>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="radio" name="heroSelect" id="mageId" value="mage" checked>
                                <label class="form-check-label" for="mageId">
                                    Selectionner
                                </label>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
    </div>
    </form>



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