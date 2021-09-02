<!-- Footer -->

<footer class="bg-dark text-light text-center footer fixed-bottom">
    <div class="container">
        <ul class="list-unstyled">
            <li>&#127279; IML</li>
            <li>Usage réservé au personnel de l'Institut Médico-Légal.</li>
            <li>Tout contrevenant s'expose à un écartèlement en mode colysée, romains et tutti cuanti.</li>
        </ul>
    </div>
</footer>

<!-- Scripts src -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/7a84f0a28f.js" crossorigin="anonymous">
</script>
<script src="../assets/node_modules/cleave.js/dist/cleave.min.js">
</script>
<script src="../assets/node_modules/cleave.js/dist/addons/cleave-phone.fr.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="/assets/js/script.js">
</script>
<!-- Scripts -->
<!-- Obligé de les mettre ici sinon ça fout le bordel dans le js à part, principalement à cause des balises php – faut voir json.encode()/decode() -->
<script>
    // Cleave, pour formater les inputs. Seulement visuel, dynamisme ++
    var cleave = new Cleave('.input-phone-fr', {
        phone: true,
        phoneRegionCode: 'FR'
    });
    var cleave = new Cleave('.deathdate', {
        date: true,
        delimiter: '-',
        datePattern: ['d', 'm', 'Y']
    });
</script>
<!-- Les librairies JS (en tous cas ces deux-là) oblige à séparer chaque script sinon ça marche pas. -->
<!-- Nicoooooooooo ? Heeeeeeeelp ? Pourquoi ça fait çaaaaaaa ? -->
<script>
    var cleave = new Cleave('.appointmentDate', {
        date: true,
        delimiter: '-',
        datePattern: ['d', 'm', 'Y']
    });
</script>
<!-- Il faut impérativement src le script swal juste avant la fonction -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert, pour faire des alertes sexy.
    // Les propriétés sont définies par la librairie.
    // RTFM
    // Je suis obligé de le mettre ici parce dans le script ça fonctionne pas.
    // La fonction json_encode est utile mais ne permets pas les balises php en paramètres
    //
    if (<?= $addPatientSuccess ?>) {
        Swal.fire({
            icon: 'success',
            iconColor: '#94050d',
            title: 'YES!',
            text: 'Nouveau macchabée! On fait la fête!',
            footer: 'miam.',
            confirmButtonColor: '#94050d',
            background: '#151513',
            timer: '6666'
        })
    };
</script>
<script>
    if (<?= $appointmentSuccess ?>) {
        Swal.fire({
            icon: 'success',
            iconColor: '#94050d',
            title: 'OK',
            text: 'Le rendez-vous du patient n°<?= (isset($_GET['patientID'])) ? $_GET['patientID'] : $_POST['listedPatient'] ?> a bien été enregistré.',
            footer: 'Vous pouvez fermer cette fenêtre.',
            confirmButtonColor: '#94050d',
            background: '#151513',
            timer: '6666'
        })
    };
</script>

</body>

</html>