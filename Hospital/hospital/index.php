<!--------------------------------------------------------------
// 3 – TROISIÈME ÉTAPE:
// Consiste en l'exercice 1: créer une page d'accueil avec un bouton qui redirige vers le formulaire d'ajout de patient.
// Le header et le footer ont eu besoin d'une copie propre à l'index pour éviter les conflits de chemin vers les fichiers respectifs.
------------------------------------------------------------ -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PlurimaMortisImago</title>
</head>

<body>
    <header class="black_bg p-2">
        <a href="http://localhost:8888/hospital/">
            <h1 class="text-center text-light">† Plurima Mortis Imago †</h1>
        </a>
        <h2 class="text-center text-danger fst-italic fs-4">"Partout, une image de mort."</h2>
    </header>
    <main>

        <div class="container d-flex justify-content-evenly w-50 pt-5 pb-5 mt-5 text-center bg-dark text-light border border-danger">
            <div class="container">
                <div class="row">
                    <h3 class="fst-italic p-5">On autopsie, on embaume, on enterre.*</h3>
                    <p class="text-muted">*(pas forcément dans cet ordre)</p>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <p><i class="fas fa-skull-crossbones fs-1"></i></p>
                        <a href="views/ajout-patients.php"><button type="button" class="btn btn-light btn-outline btn-outline-dark">Ajouter un cadavre</button></a>
                    </div>
                    <div class="col-4 text-center">
                        <p><i class="fas fa-book-dead fs-1"></i></p>
                        <a href="views/ajout-rendezvous.php"><button type="button" class="btn btn-light btn-outline btn-outline-dark">Nouvel empaillage</button></a>
                    </div>
                    <div class="col-4 text-center">
                        <p><i class="fas fa-book-dead fs-1"></i></p>
                        <a href="views/liste-rendezvous.php"><button type="button" class="btn btn-light btn-outline btn-outline-dark">Prochains empaillages</button></a>
                    </div>
                    <div class="col-4 text-center">
                        <p><i class="fas fa-skull-crossbones fs-1"></i></p>
                        <a href="views/liste-patients.php"><button type="button" class="btn btn-light btn-outline btn-outline-dark">Lister les cadavres</button></a>
                    </div>
                </div>
            </div>
        </div>

        <figure class="text-center black_bg text-light pt-3 pb-3 mt-5">
            <blockquote class="blockquote">
                <p>Chez nous, on traite pas les vivants.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Monsieur Satan <cite title="Source Title">LaViCéDlaMerD</cite>
            </figcaption>
        </figure>

    </main>

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

    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/7a84f0a28f.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js" integrity="sha512-KaIyHb30iXTXfGyI9cyKFUIRSSuekJt6/vqXtyQKhQP6ozZEGY8nOtRS6fExqE4+RbYHus2yGyYg1BrqxzV6YA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="assets/js/script.js">
    </script>

</body>

</html>