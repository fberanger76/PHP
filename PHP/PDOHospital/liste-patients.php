<?php
require 'controllers/controller.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hôpital La Manu</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h1><i class="fas fa-users"></i> Liste des patients</h1>
                <div class="searchBox"> 
                    <form action="liste-patients.php" method="GET">
                    <div class="row justify-content-center">
                        <div class="col-3 text-end"><input type="search" name="wordSearched" class="form-control" placeholder="Rechercher un patient"></div>
                        <div class="col-1"><button type="submit" class="btn btn-outline-dark">Rechercher</button></div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row text-center pt-2">
                <div class="col fw-bold">Nom</div>
                <div class="col fw-bold">Prénom</div>
                <div class="col fw-bold">E-mail</div>
                <div class="col fw-bold">Profil</div>
                <div class="col fw-bold">Supprimer</div>
            </div>
            <hr>
            <?php
            foreach ($entriesArray as $patients) { ?>
                <div class="row text-center">
                    <div class="col"><?= $patients['lastname'] ?></div>
                    <div class="col"><?= $patients['firstname'] ?></div>
                    <div class="col"><?= $patients['mail'] ?></div>
                    <div class="col"><a href="profil-patient.php?idPatient=<?= $patients['id'] ?>"><i class="bi bi-person-circle"></i></a></div>
                    <div class="col"><i class="bi bi-trash text-danger" idPatient="<?= $patients['id'] ?>"></i></div>
                </div>
                <hr>
            <?php }
            ?>
            <div class="pagination justify-content-center" id="pagination">
                <?php
                for ($i = 1; $i <= $numberOfPagesArray; $i++) {
                    ?>
                        <a class='btn btn-outline-dark text-center m-1 <?=$i == $pageNow ? "current" : "" ?>' href='liste-patients.php?page=<?=$i . (isset($_GET['wordSearched']) ? "&wordSearched=" . $_GET['wordSearched'] : "")?>'><?=$i?></a>
                        <?php
                }
                ?>
            </div>

            <div class="card-body text-center">
                <a href="ajout-patient.php" role="button" class="btn btn-dark">Ajouter un patient</a>
                <a href="index.php" role="button" class="btn btn-outline-dark"><i class="fas fa-home"></i> Accueil</a>
            </div>

        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.bi-trash').click(function() {
            $this = $(this);
            Swal.fire({
                title: 'Voulez vous supprimer ce patient ?',
                icon: 'info',
                html: `<form method="POST"><button type="submit" name="deletePatient" value="${$this.attr('idPatient')}" class="btn btn-danger ms-3 mt-3 mb-3">Supprimer</button></form>`,
                showCloseButton: true,
                showConfirmButton: false,
                focusConfirm: false,
            })
        });
    </script>
</body>

</html>