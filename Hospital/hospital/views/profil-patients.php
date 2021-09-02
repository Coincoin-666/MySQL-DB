<?php
//------------------------------------------------------------
// 8 – HUITIÈME ÉTAPE:
// Profil Patient:
// -Toutes les infos disponibles sur le patient sélectionné
// -Bouton de modification
// -Bouton d'ajout de rendez-vous
// -Retour au formulaire ? Liste ?
//------------------------------------------------------------
require "includes/header.php";
require "../controllers/controller.php";
?>

<div class="container w-50 p-3 mt-5 black_bg text-light border border-danger">
    <div class="row">
        <?php
        // Les urls précédemment créées permettent l'accès à une fiche patient grâce à la superglobale $_GET
        if (isset($_GET["patientID"]) && !empty($infosPatientObjArray)) {
        ?>
            <ul class="list-unstyled col-6 ps-5">
                <li>† <span class="fw-bold text-danger">N° d'Identification:</span> <?= $infosPatientObjArray["id"] ?></li>
                <li>† <span class="fw-bold text-danger">Prénom:</span> <?= $infosPatientObjArray["firstname"] ?></li>
                <li>† <span class="fw-bold text-danger">Nom:</span> <?= $infosPatientObjArray["lastname"] ?></li>
                <li>† <span class="fw-bold text-danger">Courriel:</span> <?= $infosPatientObjArray["email"] ?></li>
                <li>† <span class="fw-bold text-danger">Téléphone:</span> <?= $infosPatientObjArray["phone"] ?></li>
                <li>† <span class="fw-bold text-danger">Date de Mort:</span> <?= strftime('%d-%m-%Y', strtotime($infosPatientObjArray["deathdate"])) ?></li>
            </ul>
        <?php
        } else {
        ?>
        <!-- Ici ça serait cool de mettre une swal -->
            <p>Merci de sélectionner un patient dans la liste.</p>
        <?php
        }
        ?>
        <div class="col-6 text-center">
            <p><a href="modif-patients.php?patientID=<?= $infosPatientObjArray["id"] ?>"><button class="btn btn-light btn-outline btn-outline-dark"><i class="fas fa-edit"></i></button></a></p>
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