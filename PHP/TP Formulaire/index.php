<?php require "Controllers/index_controller.php"; ?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <?php
        if (isset( $finalData) && count($finalData) > 0 && count($errors) == 0) {
            echo "<p>Nom: $lastname</p>";
            echo "<p>Prénom: $firstname</p>";
            echo "<p>Date de naissance: $birthday</p>";
            echo "<p>Pays de naissance: $nativeCountry</p>";
            echo "<p>Nationalité: $nationality</p>";
            echo "<p>Adresse: $adress</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Téléphone: $phoneNumber</p>";
            echo "<p>Diplôme: $diploma</p>";
            echo "<p>Numéro pôle emploi: $poleEmploi</p>";
            echo "<p>Nombre de badge: $numberOfBadges</p>";
            echo "<p>Lien codecademy: $codeacademyLink</p>";
            echo "<p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>";
            echo "<p class=\"overflow-auto\">$randomQuestion1</p>";
            echo "<p>Racontez-nous un de vos \"hacks\" (pas forcément technique ou informatique ?</p>";
            echo "<p class=\"overflow-auto\">$randomQuestion2</p>";
            echo "<p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>";
            echo "<p class=\"overflow-auto\">$randomQuestion3</p>";
        } else {
        ?>
            <form class="row" action="index.php" method="POST">
                <div class="mb-3 col-md-4">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control <?= isset($classLastname) ? $classLastname : "" ?>" value="<?= isset($lastname) ? $lastname : "" ?>" id="lastname" name="lastname">
                    <span class="form-text text-danger"><?= isset($errors["lastname"]) ? $errors["lastname"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control <?= isset($classFirstname) ? $classFirstname : "" ?>" value="<?= isset($firstname) ? $firstname : "" ?>" id="firstname" name="firstname">
                    <span class="form-text text-danger"><?= isset($errors["firstname"]) ? $errors["firstname"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="birthday" class="form-label">Date de naissance</label>
                    <input type="date" class="form-control <?= isset($classBirthday) ? $classBirthday : "" ?>" value="<?= isset($birthday) ? $birthday : "" ?>" id="birthday" name="birthday">
                    <span class="form-text text-danger"><?= isset($errors["birthday"]) ? $errors["birthday"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nativeCountry" class="form-label">Pays de naissance</label>
                    <input type="text" class="form-control <?= isset($classNativeCountry) ? $classNativeCountry : "" ?>" value="<?= isset($nativeCountry) ? $nativeCountry : "" ?>" id="nativeCountry" name="nativeCountry">
                    <span class="form-text text-danger"><?= isset($errors["nativeCountry"]) ? $errors["nativeCountry"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nationality" class="form-label">Nationalité</label>
                    <input type="text" class="form-control <?= isset($classNationality) ? $classNationality : "" ?>" value="<?= isset($nationality) ? $nationality : "" ?>" id="nationality" name="nationality">
                    <span class="form-text text-danger"><?= isset($errors["nationality"]) ? $errors["nationality"] : "" ?></span>
                </div>
                <div class="mb-3">
                    <label for="adress" class="form-label">Adresse</label>
                    <input type="text" class="form-control  <?= isset($classAdress) ? $classAdress : "" ?>" value="<?= isset($adress) ? $adress : "" ?>" id="adress" name="adress">
                    <span class="form-text text-danger"><?= isset($errors["adress"]) ? $errors["adress"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?= isset($classEmail) ? $classEmail : "" ?>" value="<?= isset($email) ? $email : "" ?>" id="email" name="email">
                    <span class="form-text text-danger"><?= isset($errors["email"]) ? $errors["email"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="phoneNumber" class="form-label">Téléphone</label>
                    <input type="text" class="form-control <?= isset($classPhoneNumber) ? $classPhoneNumber : "" ?>" value="<?= isset($phoneNumber) ? $phoneNumber : "" ?>" id="phoneNumber" name="phoneNumber">
                    <span class="form-text text-danger"><?= isset($errors["phoneNumber"]) ? $errors["phoneNumber"] : "" ?></span>
                </div>
                <fieldset class="row gx-0 mb-3 col-md-6">
                    <legend class="col-form-label col-sm-2 pt-0">Diplôme</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="diploma" id="diploma1" value="Sans Diplôme" checked <?php if (isset($diploma)) {
                                                                                                                                        $diploma === "Sans Diplôme" ? $classDiploma : "";
                                                                                                                                    } ?>>
                            <label class="form-check-label" for="diploma1">
                                Sans Diplôme
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="diploma" id="diploma2" value="Bac" <?php if (isset($diploma)) {
                                                                                                                        $diploma === "Bac" ? $classDiploma : "";
                                                                                                                    } ?>>
                            <label class="form-check-label" for="diploma2">
                                Bac
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="diploma" id="diploma3" value="Bac +2" <?php if (isset($diploma)) {
                                                                                                                            $diploma === "Bac +2" ? $classDiploma : "";
                                                                                                                        } ?>>
                            <label class="form-check-label" for="diploma3">
                                Bac +2
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="diploma" id="diploma4" value="Bac +3 ou supérieur" <?php if (isset($diploma)) {
                                                                                                                                        $diploma === "Bac +3 ou supérieur" ? $classDiploma : "";
                                                                                                                                    } ?>>
                            <label class="form-check-label" for="diploma4">
                                Bac +3 ou supérieur
                            </label>
                        </div>
                    </div>
                    <span class="form-text text-danger"><?= isset($errors["diploma"]) ? $errors["diploma"] : "" ?></span>
                </fieldset>
                <div class="mb-3 col-md-6">
                    <label for="poleEmploi" class="form-label">Numéro pôle emploi</label>
                    <input type="text" class="form-control <?= isset($classPoleEmploi) ? $classPoleEmploi : "" ?>" value="<?= isset($poleEmploi) ? $poleEmploi : "" ?>" id="poleEmploi" name="poleEmploi">
                    <span class="form-text text-danger"><?= isset($errors["poleEmploi"]) ? $errors["poleEmploi"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="numberOfBadge" class="form-label">Nombre de badge</label>
                    <select class="form-select  <?= isset($classNumberOfBadges) ? $classNumberOfBadges : "" ?>" id="numberOfBadges" name="numberOfBadges">
                        <option><?= isset($numberOfBadges) ? $numberOfBadges : "" ?></option>
                        <?php
                        for ($i = 1; $i <= 15; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                    <span class="form-text text-danger"><?= isset($errors["numberOfBadges"]) ? $errors["numberOfBadges"] : "" ?></span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="codeacademyLink" class="form-label">Lien codecademy</label>
                    <input type="text" class="form-control <?= isset($classCodeacademyLink) ? $classCodeacademyLink : "" ?>" value="<?= isset($codeacademyLink) ? $codeacademyLink : "" ?>" id="codeacademyLink" name="codeacademyLink">
                    <span class="form-text text-danger"><?= isset($errors["codeacademyLink"]) ? $errors["codeacademyLink"] : "" ?></span>
                </div>
                <div class="mb-3">
                    <label for="randomQuestion1" class="form-label">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                    <textarea class="form-control <?= isset($classRandomQuestion1) ? $classRandomQuestion1 : "" ?>" value="<?= isset($randomQuestion1) ? $randomQuestion1 : "" ?>" placeholder="Leave a comment here" id="randomQuestion1" name="randomQuestion1" style="height: 100px"></textarea>
                    <span class="form-text text-danger"><?= isset($errors["randomQuestion1"]) ? $errors["randomQuestion1"] : "" ?></span>
                </div>
                <div class="mb-3">
                    <label for="randomQuestion2" class="form-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea class="form-control <?= isset($classRandomQuestion2) ? $classRandomQuestion2 : "" ?>" value="<?= isset($randomQuestion2) ? $randomQuestion2 : "" ?>" placeholder="Leave a comment here" id="randomQuestion2" name="randomQuestion2" style="height: 100px"></textarea>
                    <span class="form-text text-danger"><?= isset($errors["randomQuestion2"]) ? $errors["randomQuestion2"] : "" ?></span>
                </div>
                <div class="mb-3">
                    <label for="randomQuestion3" class="form-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea class="form-control <?= isset($classRandomQuestion3) ? $classRandomQuestion3 : "" ?>" value="<?= isset($randomQuestion3) ? $randomQuestion3 : "" ?>" placeholder="Leave a comment here" id="randomQuestion3" name="randomQuestion3" style="height: 100px"></textarea>
                    <span class="form-text text-danger"><?= isset($errors["randomQuestion3"]) ? $errors["randomQuestion3"] : "" ?></span>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>

            </form>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>