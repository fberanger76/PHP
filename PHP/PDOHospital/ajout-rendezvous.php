<?php
require 'controllers/appointments-controller.php';

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
                <h1><i class="far fa-calendar-plus"></i> Ajout du rendez-vous</h1>
            </div>
            <form method="POST">
                <div class="m-3">
                    <label for="lastname" class="form-label fw-bold">Veuillez choisir un patient</label>
                    <select name="id" class="form-select" aria-label="Default select example" required>
                        <option selected>Choix du patient</option>
                        <?php foreach ($listPatientsArray as $patients) {
                        ?>
                            <option value="<?= $patients['id'] ?>"><?= $patients['lastname'] ?> <?= $patients['firstname'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="m-3">
                    <label for="dateHour" class="form-label fw-bold">Date du rendez-vous</label>
                    <input type="date" class="form-control" id="dateHour" name="dateHour" aria-describedby="dateHour" required>
                </div>

                <div class="m-3">
                <label for="appointmentTime" class="form-label fw-bold">Heure du rendez-vous</label>
                    <select name="time" id="time" class="form-select" aria-label="Default select example" required>
                        <?php for ($i = 8; $i <= 18; $i++) : ?>
                            <option value="<?= $i; ?>"><?= date("h.iA", strtotime("$i:00")); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>

                <button type="submit" name="dateBtn" class="btn btn-dark ms-3 mt-3 mb-3">Enregistrer</button>
                <button type="reset" class="btn btn-outline-danger" onclick="javascript:history.back()">Annuler</button>
                <a class="btn btn-outline-dark" href="liste-rendez-vous.php" role="button">Liste des rdv</a>
            </form>
        </div>
        <div class="text-center homebtn">
            <a href="index.php" class="btn btn-lg btn-dark"><i class="fas fa-home"></i> Accueil</a>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
        if (<?= $addSuccess ?>) {
            Swal.fire({
                icon: 'success',
                title: 'Bravo !',
                text: 'Le rdv a bien été créé !',
                confirmButtonColor: '#000'
            })
        }
    </script>
</body>

</html>