<?php
require "includes/header.php";
require "../controllers/controller-appointments.php";
?>

<div class="container w-50 p-3 mt-5 black_bg text-light border border-danger">
    <div class="row">
        <form method="POST">
            <label for="newAppointmentDate" class="form-label mt-3">Date:</label>
            <input name="newAppointmentDate" class="form-control appointmentDate">
            <label for="newAppointmentTime" class="form-label mt-3">Heure:</label>
            <select name="newAppointmentTime" class="form-select"></select>
            <button name="saveUpdate" type="submit" class="btn btn-light btn-outline btn-outline-dark">Enregistrer</button>
        </form>
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