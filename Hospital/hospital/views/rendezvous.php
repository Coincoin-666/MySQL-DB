<?php
require "includes/header.php";
require "../controllers/controller-appointments.php";
?>

<div class="container w-50 p-3 mt-5 black_bg text-light border border-danger">
    <div class="row">

            <h3><?= $infosOneAppointment['firstname'] . " " . $infosOneAppointment['lastname'] ?></h3>
            <p>Le patient n°<?= $infosOneAppointment['idPatient'] ?> aura rendez-vous le <?= $infosOneAppointment['dateHour'] ?>.</p>

        <div class="col-6 text-center">
            <p><a href="modif-rendezvous.php?patientID=<?= $infosOneAppointment['idPatient'] ?>"><button class="btn btn-light btn-outline btn-outline-dark"><i class="fas fa-edit"></i></button></a></p>
            <p><a href=""><button type="submit" class="btn btn-danger btn-outline btn-outline-dark"><i class="fas fa-trash"></i></button></a></p>
        </div>

    </div>
    <div class="d-flex justify-content-evenly">
        <a href="../index.php"><button class="btn btn-light btn-outline btn-outline-dark">Accueil</button></a>
        <a href="liste-patients.php"><button class="btn btn-light btn-outline btn-outline-dark">Liste</button></a>
        <a href="ajout-patients.php"><button class="btn btn-light btn-outline btn-outline-dark">Formulaire</button></a>
    </div>
</div>

<?php
require "includes/footer.php";
?>