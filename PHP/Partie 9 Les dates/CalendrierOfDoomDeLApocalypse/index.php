<?php
require "Controllers/index_controller.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Super Calendrier De La Mort Qui Tue</title>
    <link rel="icon" href="Assets/img/calendar-alt-regular.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center mb-2 flex-column align-items-center">
    <h1 class="my-3"><i class="fab fa-php iconColor"></i> Le Super Calendrier De La Mort Qui Tue <i class="far fa-calendar-alt iconColor"></i></h1>
    <p class="h2">Choisissez votre date</p>
    <form action="index.php" method="GET">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center">
                <label for="selectMonth" class="mr-3">Mois</label>
                <!-- Pour afficher les mois, on boucle sur le tableau créé dans le contrôleur -->
                <select name="selectMonth" id="selectMonth" class="form-select form-select-sm">
                    <?php
                    foreach ($months as $monthNumber => $month) {
                        // Cette condition permet de créer une balie option qui sera sélectionnée par défaut contenant le mois stocké par le contrôleur
                        if($monthNumber == $selectedMonth) {
                        ?>
                            <option value="<?= $monthNumber ?>" selected><?= $month ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?= $monthNumber ?>"><?= $month ?></option>
                        <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <label for="selectYear" class="mr-3">Année</label>
                <!-- Pour afficher les années, on se sert d'une boucle for qui va générer toutes les options des années -->
                <select name="selectYear" id="selectYear" class="form-select form-select-sm">
                    <option value="NULL" disabled selected>Choisissez une année</option>
                    <?php
                    for ($year=1970; $year <= 2050; $year++) { 
                        // De même que pour le mois, cette condition permet de créer une balise option qui sera sélectionnée par défaut contenant la valeur de l'année stockée par le contrôleur
                        if($year == $selectedYear) {
                        ?>
                            <option value="<?= $year ?>" selected><?= $year ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?= $year ?>"><?= $year ?></option>
                        <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-color-custom w-100">Valider</button>
            </div>
        </div>
    </form>

    </div>
    <?php
    include "Views/includes/calendar.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>