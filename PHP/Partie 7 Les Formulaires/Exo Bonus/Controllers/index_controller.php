<?php
session_start();
require "utilities/functions.php";

$alreadyExistingMails = [
    "nicolas.vallois@novei.fr",
    "toto@toto.fr",
    "marlene@gouv.fr"
];

if($_SERVER["REQUEST_METHOD"] == "POST" && count($_POST) > 0) {

    $errors = [];

    $lastname = sanitizeDataNames($_POST["lastname"]);
    $firstname = sanitizeDataNames($_POST["firstname"]);
    $email = sanitizeDataMails($_POST["email"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $regexName = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/";
//si le champ est vide, mettre une erreur & class invalide
    if(empty($lastname)) {
        $errors["lastname"] = "Veuillez renseigner votre nom";
        $classLastname = "is-invalid";
    } else if(!preg_match($regexName, $lastname)) {
        $errors["lastname"] = "Veuillez renseigner un nom valide";
        $classLastname = "is-invalid";
    } else {
        $_SESSION["lastname"] = $lastname;
        $classLastname = "is-valid";
    }

    if(empty($firstname)) {
        $errors["firstname"] = "Veuillez renseigner votre prénom";
        $classFirstname = "is-invalid";
    } else if(!preg_match($regexName, $firstname)) {
        $errors["firstname"] = "Veuillez renseigner un prénom valide";
        $classFirstname = "is-invalid";
    } else {
        $_SESSION["firstname"] = $firstname;
        $classFirstname = "is-valid";
    }

    if(empty($email)) {
        $errors["email"] = "Veuillez renseigner votre mail";
        $classEmail = "is-invalid";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Veuillez renseigner un mail valide";
        $classEmail = "is-invalid";
    } else {
        if(in_array($email, $alreadyExistingMails)) {
            $errors["email"] = "Cette adresse mail est déjà utilisée";
            $classEmail = "is-invalid";
        } else {
            $_SESSION["email"] = $email;
            $classEmail = "is-valid";
            array_push($alreadyExistingMails, $email);
        }
    }

    if(empty($password) || empty($confirmPassword)) {
        if(empty($password) && empty($confirmPassword)) {
            $errors["password"] = "Veuillez renseigner un mot de passe";
            $errors["confirmPassword"] = "Veuillez renseigner un mot de passe";
            $classPassword = "is-invalid";
            $classConfirmPassword = "is-invalid";
        } else if(empty($password)) {
            $errors["password"] = "Veuillez renseigner un mot de passe";
            $classPassword = "is-invalid";
        } else {
            $errors["confirmPassword"] = "Veuillez renseigner un mot de passe";
            $classConfirmPassword = "is-invalid";
        }
    } else if($password !== $confirmPassword) {
        $errors["confirmPassword"] = "Les deux mots de passe ne correspondent pas";
        $classConfirmPassword = "is-invalid";
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION["password"] = $passwordHash;
        $classPassword = "is-valid";
        $classConfirmPassword = "is-valid";
    }

    if (empty($errors)) {
        header("Location: Views/welcome.php", true, 301);
    }
}