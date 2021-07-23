<?php

$array = [
  [
    'user_id' => 1,
    'user_fname' => 'jean',
    'user_lname' => 'castex',
    'user_job' => 'developpeur',
    'user_desc' => 'je suis jeune et dynamique',
    'avatar_src' => 'img/male.jpg'
  ],
  [
    'user_id' => 2,
    'user_fname' => 'michel',
    'user_lname' => 'platini',
    'user_job' => 'developpeur',
    'user_desc' => 'je suis jeune et dynamique',
    'avatar_src' => 'img/male.jpg'
  ],
  [
    'user_id' => 3,
    'user_fname' => 'paul',
    'user_lname' => 'pogba',
    'user_job' => 'designer',
    'user_desc' => 'je suis jeune et dynamique',
    'avatar_src' => 'img/male.jpg'
  ],
  [
    'user_id' => 4,
    'user_fname' => 'pierre',
    'user_lname' => 'caillou',
    'user_job' => 'influencer',
    'user_desc' => 'je suis jeune et dynamique',
    'avatar_src' => 'img/default.jpg'
  ],
  [
    'user_id' => 5,
    'user_fname' => 'jeanette',
    'user_lname' => 'do',
    'user_job' => 'mannequin',
    'user_desc' => 'je suis jeune et dynamique',
    'avatar_src' => 'img/female.jpg'
  ],
  [
    'user_id' => 6,
    'user_fname' => 'marlène',
    'user_lname' => 'shiappa',
    'user_job' => 'responsable de communication',
    'user_desc' => 'je suis jeune et dynamique',
    'avatar_src' => 'img/female.jpg'
  ],
];
var_dump($array);
var_dump($array[1]);
var_dump($array[1]['user_fname']);

?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Cards_w/Anousone</title>
</head>

<body>
  <?php
    foreach ($array as $value) {
  ?>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?= $value['avatar_src']; ?>" alt="avatar">
        <div class="card-body text-center">
          <h5 class="card-title"><?= $value['user_fname'] . " " . $value['user_lname']; ?></h5>
          <h6 class="card-subtitle"><?= $value['user_job']; ?></h6>
          <p class="card-text"><?= $value['user_desc']; ?></p>
          <a href="#" class="btn btn-primary">+ d'infos</a>
        </div>
      </div>
  <?php
    }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>