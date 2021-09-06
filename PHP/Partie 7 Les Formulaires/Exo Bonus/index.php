<?php
require "Controllers/index_controller.php";
include "Views/includes/header.php";
?>
    <div class="container w-50">
        <h1>Inscription</h1>
        <form action="index.php" method="post" novalidate>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" id="firstname" name="firstname"
                            class="form-control <?= isset($classFirstname) ? $classFirstname : "" ?>"
                            placeholder="Ex : Nicolas" aria-label="Prénom"
                            value="<?= isset($firstname) ? $firstname : "" ?>">
                        <label for="firstname">Entrez votre prénom</label>
                        <span
                            class="form-text text-danger"><?= isset($errors["firstname"]) ? $errors["firstname"] : "" ?></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" id="lastname" name="lastname"
                            class="form-control <?= isset($classLastname) ? $classLastname : "" ?>"
                            placeholder="Ex : Vallois" aria-label="Nom"
                            value="<?= isset($lastname) ? $lastname : "" ?>">
                        <label for="lastname" class="form-label">Entrez votre nom</label>
                        <span
                            class="form-text text-danger"><?= isset($errors["lastname"]) ? $errors["lastname"] : "" ?></span>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="email" id="email" name="email"
                    class="form-control <?= isset($classEmail) ? $classEmail : "" ?>"
                    placeholder="nicolas.vallois@gmail.fr" aria-label="Email"
                    value="<?= isset($email) ? $email : "" ?>">
                <label for="email" class="form-label">Entrez votre adresse mail</label>
                <span class="form-text text-danger"><?= isset($errors["email"]) ? $errors["email"] : "" ?></span>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" id="password" name="password"
                            class="form-control <?= isset($classPassword) ? $classPassword : "" ?>"
                            placeholder="Mot de passe" aria-label="Mot de passe">
                        <label for="password" class="form-label">Entrez un mot de passe</label>
                        <span
                            class="form-text text-danger"><?= isset($errors["password"]) ? $errors["password"] : "" ?></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            class="form-control <?= isset($classConfirmPassword) ? $classConfirmPassword : "" ?>"
                            placeholder="Confirmez votre mot de passe" aria-label="Confirmation mot de passe">
                        <label for="confirmPassword" class="form-label">Confirmez votre mot de passe</label>
                        <span
                            class="form-text text-danger"><?= isset($errors["confirmPassword"]) ? $errors["confirmPassword"] : "" ?></span>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>
    </div>
<?php
include "Views/includes/footer.php";
?>