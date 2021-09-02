<?php
require "../views/includes/header.php";
require "../controllers/controller.php";
?>
<div class="container w-50 p-3 mt-5 black_bg text-light border border-danger">
    <div class="text-center">
        <h3 class="fst-italic text-decoration-underline"><i class="fas fa-skull me-3"></i> Modifier [...] <i class="fas fa-skull ms-3"></i></h3>
    </div>

    <form action="" method="POST">
        <label for="firstname" class="form-label mt-3">Prénom:</label>
        <input type="text" name="firstname" id="firstname" value="<?= $infosPatientObjArray["firstname"] ?>" class="form-control">

        <label for="lastname" class="form-label mt-3">Nom:</label>
        <input type="text" name="lastname" id="lastname" value="<?= $infosPatientObjArray["lastname"] ?>" class="form-control">

        <label for="deathdate" class="form-label mt-3">Date de mort:</label>
        <input type="text" name="deathdate" id="deathdate" value="<?= $infosPatientObjArray["deathdate"] ?>" class="form-control deathdate">

        <label for="phone" class="form-label mt-3">Numéro de téléphone:</label>
        <input type="text" name="phone" id="phone" value="<?= $infosPatientObjArray["phone"] ?>" class="form-control input-phone-fr">

        <label for="email" class="form-label mt-3">Courriel:</label>
        <input type="email" name="email" id="email" value="<?= $infosPatientObjArray["email"] ?>" class="form-control">


        <div class="container d-flex justify-content-evenly">
            <button name="update_btn" id="toastModif" value="<?= $infosPatientObjArray["id"] ?>" class="btn btn-light btn-outline btn-outline-dark mt-4">
                Enregistrer les modifications
            </button>
            <button type="reset" class="btn btn-light btn-outline btn-outline-dark mt-4">Annuler</button>
            <a href="liste-patients.php"><button type="button" name="patientsList_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Liste des Corps</button>
                <a href="http://localhost:8888/hospital/"><button type="button" class="btn btn-light btn-outline btn-outline-dark mt-4">Accueil</button>
    </form>
</div>


</div>
<?php
require "../views/includes/footer.php";
?>