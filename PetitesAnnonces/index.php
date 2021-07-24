<?php

$data_array = [
    [
        'card_id' => 1,
        'card_title' => 'bugatti',
        'card_price' => 15000000,
        'card_text' => 'Vends Bugatti Veyron, 4km, très bon état, à saisir.',
        'card_contact' => 'voiturespascheres@dubai.dub',
        'card_img_path' => 'img/car-49278_1280.jpg',
        'card_cat' => 'voitures',
    ],
    [
        'card_id' => 2,
        'card_title' => 'macbook',
        'card_price' => 9999,
        'card_text' => 'Il est un peu cher mais il est en platine.',
        'card_contact' => 'shutupand@takemymoney.org',
        'card_img_path' => 'img/laptop-336373_1280.jpg',
        'card_cat' => 'ordinateurs',
    ],
    [
        'card_id' => 3,
        'card_title' => 'voie lactée',
        'card_price' => 999999999,
        'card_text' => "EXCLUETOTALE Vous POUVEZ acheter la galaxie pour être le chef de l'univers",
        'card_contact' => 'god@stairwaytoheaven.ch',
        'card_img_path' => 'img/milky-way-1030765_1280.jpg',
        'card_cat' => 'pièces détachées',
    ],
    [
        'card_id' => 4,
        'card_title' => 'table de mixage',
        'card_price' => 2,
        'card_text' => "C'est juste une photo en fait.",
        'card_contact' => 'wish@wishisascam.cn',
        'card_img_path' => 'img/mixer-1284507_1280.jpg',
        'card_cat' => 'sono',
    ],
    [
        'card_id' => 5,
        'card_title' => 'N54-787I8JFK80',
        'card_price' => 750000,
        'card_text' => 'À saisir! Planète inhabitable de 3 mètres de diamètre',
        'card_contact' => 'hello@dumbasses.com',
        'card_img_path' => 'img/planet-3149121_1280.jpg',
        'card_cat' => 'pièces détachées',
    ],
    [
        'card_id' => 6,
        'card_title' => 'AlienSimulator 17',
        'card_price' => 444,
        'card_text' => "C'est un simulateur d'aliénation. Occasion 5ème main. Risque de décompensation.",
        'card_contact' => 'psychogaming@hahaha.co.uk',
        'card_img_path' => 'img/ufo-1668223_1280.jpg',
        'card_cat' => 'jeux vidéos',

    ],
];
var_dump($data_array);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PetitesAnnonces_w/Anousone</title>
</head>

<body>
    <section class="container w-75 border border-primary">
        <?php
        foreach ($data_array as $sellingCard) {
        ?>
            <article class="card border border-secondary">
                <div class="card-header text muted">
                    <?= $sellingCard['card_title']; ?>
                </div>
                <img src="<?= $sellingCard['card_img_path']; ?>" alt="" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">
                    <?= $sellingCard['card_title']; ?>
                    </h3>
                    <h4 class="card-text">
                    <?= $sellingCard['card_price']; ?>
                    </h4>
                    <hr>
                    <p class="card-text">
                    <?= $sellingCard['card_text']; ?>
                    </p>
                    <p class="card-text">
                    <?= $sellingCard['card_cat']; ?>
                    </p>
                    <p class="card-text">
                        Envoyer un message au vendeur:
                    <a mailto href="<?= $sellingCard['card_contact']; ?>"><?= $sellingCard['card_contact']; ?></a>
                    </p>
                </div>
            </article>
        <?php
        }
        ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>