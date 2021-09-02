<?php
//------------------------------------------------------------
// 4 – QUATRIÈME ÉTAPE:
// Fin de l'exercice 1 – Création du formulaire permattant l'ajout de nouveaux patients.
//------------------------------------------------------------
require "includes/header.php";
require "../controllers/controller.php";
?>

<form action="" method="POST" class="container w-50 p-3 mt-5 black_bg text-light border border-danger">
    <div class="text-center">
        <h3 class="fst-italic text-decoration-underline"><i class="fas fa-skull me-3"></i> Ajouter une dépouille <i class="fas fa-skull ms-3"></i></h3>
    </div>
    <label for="firstname" class="form-label mt-3">Prénom:</label>
    <input type="text" name="firstname" id="firstname" placeholder="Cruella" class="form-control" value="">

    <label for="lastname" class="form-label mt-3">Nom:</label>
    <input type="text" name="lastname" id="lastname" placeholder="Denfer" class="form-control">

    <label for="deathdate" class="form-label mt-3">Date de Décès:</label>
    <input name="deathdate" id="deathdate" placeholder="Peut-être demain..." class="form-control deathdate">

    <label for="phone" class="form-label mt-3">Numéro de téléphone:</label>
    <input name="phone" placeholder="06 66 69 66 66" class="form-control input-phone-fr">

    <label for="email" class="form-label mt-3">Courriel:</label>
    <input type="email" name="email" id="email" placeholder="monsieurSatan@gouv.fr" class="form-control">

    <div class="container d-flex justify-content-evenly">
        <button name="submission_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">
            <span class="text-muted">(se)</span>Soumettre
        </button>
        <a href="liste-patients.php"><button type="button" name="patientsList_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Liste des Corps</button>
            <a href="http://localhost:8888/hospital/"><button type="button" name="patientsList_btn" class="btn btn-light btn-outline btn-outline-dark mt-4">Accueil</button>
    </div>
</form>
  
<?php
require "includes/footer.php";
?>