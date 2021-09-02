<?php
require 'controllers/appointments-controller.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hôpital La Manu</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h1><i class="far fa-calendar-alt"></i> Liste des rendez-vous</h1>
            </div>
            <div class="row text-center pt-2">
                <div class="col fw-bold">Nom</div>
                <div class="col fw-bold">Prénom</div>
                <div class="col fw-bold">Date du rdv</div>
                <div class="col fw-bold">Heure du rdv</div>
                <div class="col fw-bold">Modifier</div>
                <div class="col fw-bold">Supprimer</div>
            </div>
            <hr>
            <?php
            foreach ($listAppointmentsArray as $appointments) { ?>
                <div class="row text-center">
                    <div class="col"><?= $appointments['lastname'] ?></div>
                    <div class="col"><?= $appointments['firstname'] ?></div>
                    <div class="col"><?= strftime('%d-%m-%Y',strtotime($appointments['dateHour'])) ?></div>
                    <div class="col"><?= strftime('%H:%M',strtotime($appointments['dateHour'])) ?></div>
                    <div class="col"><a href="modifier-rendezvous.php?idAppointment=<?= $appointments['id'] ?>" role="button"><i class="far fa-edit"></i></a></div>
                    <div class="col"><i class="fas fa-trash text-danger"></i></div>
                </div>
                <hr>
            <?php }
            ?>

            <div class="card-body text-center">
                <a href="ajout-rendezvous.php" role="button" class="btn btn-dark">Ajouter un rdv</a>
                <a href="index.php" role="button" class="btn btn-outline-dark"><i class="fas fa-home"></i> Accueil</a>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>