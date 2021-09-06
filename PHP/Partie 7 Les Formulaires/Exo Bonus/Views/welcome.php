<?php
session_start();
include "includes/header.php";
?>
<!-- affiche les données du formulaire -->
    <div class="container">
        <h1>Récapitulatif de votre inscription</h1>
        <ul>
            <li>Votre prénom : <?= $_SESSION["firstname"] ?></li>
            <li>Votre nom : <?= $_SESSION["lastname"] ?></li>
            <li>Votre adresse mail : <?= $_SESSION["email"] ?></li>
            <li>Votre mot de passe mais que vous ne reconnaîtrez jamais : <?= $_SESSION["password"] ?></li>
        </ul>
    </div>
<?php
include "includes/footer.php";
?>