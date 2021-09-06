<?php require 'pages-controller.php';
var_dump($page);
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <p class="h1 text-center">Super RSS Reader</p>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid d-flex flex-row">
                <a class="navbar-brand" href="accueil.html">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Emploi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Entreprise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="sujet3.html">Industrie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="sujet4.html">Economie Française</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="sujet5.html">Economie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php
 if (isset($page) && $emploiTitle == "Emploi : Toute l’actualité sur Le Monde.fr."){
    echo $emploiImg;
}
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>