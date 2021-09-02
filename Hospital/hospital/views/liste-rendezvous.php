<?php
require "includes/header.php";
require "../controllers/controller-appointments.php";
?>

<div class="container w-75 p-3 mt-5 text-light border border-danger black_bg patientList">
    <table class="table table-dark table-hover table-bordered text-center rdvArray">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Date & Heure du Rendez-vous</th>
                <th scope="col">Modification</th>
                <th scope="col">Suppression</th>
            </tr>
        </thead>
        <?php
        foreach ($listAppointmentsObj as $appointment) {
        ?>
            <tbody>
                <tr class="infosAppointments">
                    <a href="profil-patient.php?patientID=<?= $appointment['idPatient'] ?>">
                        <td><?= $appointment['appointmentID'] ?></td>
                        <td><?= $appointment['firstname'] ?></td>
                        <td><?= $appointment['lastname'] ?></td>
                        <td><?= $appointment['phone'] ?></td>
                        <td><?= $appointment['dateHour'] ?></td>
                        <td><a href="rendezvous.php?appointmentID=<?= $appointment['appointmentID'] ?>"><i class="fas fa-edit"></i></a></td>
                        <td><i class="fas fa-trash text-danger"></i></td>
                </tr>
                </a>

            <?php
        }
            ?>
            </tbody>
    </table>

    <div class="d-flex justify-content-evenly">
        <a href="ajout-rendezvous.php"><button class="btn btn-light btn-outline btn-outline-dark">Nouveau RDV</button></a>
        <a href="../index.php"><button class="btn btn-light btn-outline btn-outline-dark">Accueil</button></a>
        <a href="ajout-patients.php"><button class="btn btn-light btn-outline btn-outline-dark">Nouveaux Restes</button></a>
    </div>
</div>

<?php
require "includes/footer.php";
?>