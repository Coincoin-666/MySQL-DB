<?php
require "includes/header.php";
require "../controllers/controller-appointments.php";
?>

<div class="container w-50 p-3 mt-5 black_bg text-light border border-danger">
    <form action="" method="POST">
        <div class="text-center">
            <h3 class="fst-italic text-decoration-underline"><i class="fas fa-skull me-3"></i> Empaillage <i class="fas fa-skull ms-3"></i></h3>
        </div>
        <div class="row g-2 text-center">
            <div class="col-6 text-start">
                <!-- Liste des patients présents dans la db -->
                <label for="listedPatient" class="form-label">Liste des défunts:</label>
                <select id="listedPatient" name="listedPatient" class="form-select">
                    <?php
                    foreach ($listPatientsArray as $patient) {
                    ?>
                        <option value="<?= $patient['id'] ?>" <?= (isset($_GET['patientID']) && $_GET['patientID'] == $patient['id']) ? "selected" : "" ?>>
                            <?= $patient['firstname'] . " " . $patient['lastname'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
                <!-- Ici faut mettre un lien vers la page création de rdv + patient -->
                <p>Sélectionnez un patient dans la liste ou créez une nouvelle fiche.</p>

            </div>

            <div class="col-6 text-center">
                <label for="appointmentDate" class="form-label mt-3">Date:</label>
                <input type="text" name="appointmentDate" class="form-control appointmentDate">
                <label for="appointmentTime" class="form-label mt-3">Heure:</label>
                <select name="appointmentTime" class="form-select">
                    <?php
                    for ($appointmentTime = 8; $appointmentTime < 20; $appointmentTime++) {
                    ?>
                        <option value="<?= $appointmentTime . ":00" ?>">
                            <?= $appointmentTime . ":00"; ?>
                        </option>
                    <?php
                    };
                    ?>
                </select>
            </div>

            <button name="appointment_btn" class="btn btn-light btn-outline btn-outline-dark mt-4" type="submit">Enregistrer</button>
        </div>
    </form>
</div>

</div>

<div class="container d-flex justify-content-evenly">
    <a href="liste-patients.php"><button type="button" name="patientsList_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Liste des Corps</button></a>
    <a href=""><button type="button" name="patientsList_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Retour à l'Accueil</button></a>
</div>

<?php
require "includes/footer.php";
?>