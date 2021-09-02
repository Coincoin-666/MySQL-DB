<?php
require 'controllers/controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Exercice PDO</title>

</head>


<body>
<h1>Exo 1 : Afficher tous les clients</h1>
<ul>
<?php 
foreach ($allClientsArray as $client) { ?>
    <li><?= $client['lastName'] ?> <?= $client['firstName'] ?></li>
<?php
    }?>
</ul>   

</body>

</html>