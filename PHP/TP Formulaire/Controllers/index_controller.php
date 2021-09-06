<?php
require "utilities/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && count($_POST) > 0) {

    $errors = [];
    $finalData = [];

    $lastname = sanitizeDataNames($_POST["lastname"]);
    $firstname = sanitizeDataNames($_POST["firstname"]);
    $birthday = sanitizeSimple($_POST["birthday"]);
    $nativeCountry = sanitizeDataNames($_POST["nativeCountry"]);
    $nationality = sanitizeNationality($_POST["nationality"]);
    $adress = sanitizeDataNames($_POST["adress"]);
    $phoneNumber = sanitizeSimple($_POST["phoneNumber"]);
    $email = sanitizeDataMails($_POST["email"]);
    $diploma = sanitizeSimple($_POST["diploma"]);
    $poleEmploi = sanitizeSimple($_POST["poleEmploi"]);
    $numberOfBadges = sanitizeSimple($_POST["numberOfBadges"]);
    $codeacademyLink = sanitizeSimple($_POST["codeacademyLink"]);
    $randomQuestion1 = sanitizeSimple($_POST["randomQuestion1"]);
    $randomQuestion2 = sanitizeSimple($_POST["randomQuestion2"]);
    $randomQuestion3 = sanitizeSimple($_POST["randomQuestion3"]);
    $regexNames = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/";
    $regexDate = "/\d{4}\-\d{2}\-\d{2}/";
    $regexAdresseBis = "/(?:\d{0,3} +(bis|ter|quat)|\G(?<!^)) (\S+)/";
    $regexNationality = "/[a-zA-ZÀ-ÖØ-öø-ÿ]*/";
    $regexPhoneNumber = "/^0+[0-9]{9}$/";
    $regexPoleEmploi = "/^[0-9]{7}+[A-Z]{1}$/";
    $regexNumberOfBadges = "/^(1[0-5]?|[2-9])$/";

    if (empty($lastname)) {
        $errors["lastname"] = "Veuillez renseigner votre nom";
        $classLastname = "is-invalid";
    } else if (!preg_match($regexNames, $lastname)) {
        $errors["lastname"] = "Veuillez renseigner un nom valide";
        $classLastname = "is-invalid";
    } else {
        $finalData["lastname"] = $lastname;
        $classLastname = "is-valid";
    }

    if (empty($firstname)) {
        $errors["firstname"] = "Veuillez renseigner votre prénom";
        $classFirstname = "is-invalid";
    } else if (!preg_match($regexNames, $firstname)) {
        $errors["firstname"] = "Veuillez renseigner un prénom valide";
        $classFirstname = "is-invalid";
    } else {
        $finalData["firstname"] = $firstname;
        $classFirstname = "is-valid";
    }

    if (empty($birthday)) {
        $errors["birthday"] = "Veuillez renseigner votre date de naissance";
        $classBirthday = "is-invalid";
    } else if (!preg_match($regexDate, $birthday)) {
        $errors["birthday"] = "Veuillez renseigner une date de naissance valide";
        $classBirthday = "is-invalid";
    } else {
        $finalData["birthday"] = $birthday;
        $classBirthday = "is-valid";
    }

    if (empty($nativeCountry)) {
        $errors["nativeCountry"] = "Veuillez renseigner votre pays de naissance";
        $classNativeCountry = "is-invalid";
    } else if (!preg_match($regexNames, $nativeCountry)) {
        $errors["nativeCountry"] = "Veuillez renseigner un pays de naissance valide";
        $classNativeCountry = "is-invalid";
    } else {
        $finalData["nativeCountry"] = $nativeCountry;
        $classNativeCountry = "is-valid";
    }

    if (empty($nationality)) {   
        $errors["nationality"] = "Veuillez renseigner votre nationalité";
        $classNationality = "is-invalid";
    } else if (!preg_match($regexNationality, $nationality)) {
        $errors["nationality"] = "Veuillez renseigner une nationalité valide";
        $classNationality = "is-invalid";
    } else {
        $finalData["nationality"] = $nationality;
        $classNationality = "is-valid";
    }

    if (empty($adress)) { 
        $errors["adress"] = "Veuillez renseigner votre adresse";
        $classAdress = "is-invalid";
    } else if (!preg_match($regexAdresseBis, $adress)) {
        $errors["adress"] = "Veuillez renseigner une adresse valide";
        $classAdress = "is-invalid";
    } else {
        $finalData["adress"] = $adress;
        $classAdress = "is-valid";
    }

    if (empty($phoneNumber)) { 
        $errors["phoneNumber"] = "Veuillez renseigner votre numéro de téléphone";
        $classPhoneNumber = "is-invalid";
    } else if (!preg_match($regexPhoneNumber, $phoneNumber)) {
        $errors["phoneNumber"] = "Veuillez renseigner un numéro de téléphone valide";
        $classPhoneNumber = "is-invalid";
    } else {
        $finalData["phoneNumber"] = $phoneNumber;
        $classPhoneNumber = "is-valid";
    }

    if (empty($email)) {
        $errors["email"] = "Veuillez renseigner votre mail";
        $classEmail = "is-invalid";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Veuillez renseigner un mail valide";
        $classEmail = "is-invalid";
    } else {
        $finalData["email"] = $email;
        $classEmail = "is-valid";
    }

    if (empty($diploma)) {
        $errors["diploma"] = "Veuillez renseigner votre dernier diplôme";
    } else {
        $finalData["diploma"] = $diploma;
        $classDiploma = "checked";
    }

    if (empty($poleEmploi)) { 
        $errors["poleEmploi"] = "Veuillez renseigner votre numéro pole emploi";
        $classPoleEmploi = "is-invalid";
    } else if (!preg_match($regexPoleEmploi, $poleEmploi)) {
        $errors["poleEmploi"] = "Veuillez renseigner un numéro pole emploi valide";
        $classPoleEmploi = "is-invalid";
    } else {
        $finalData["poleEmploi"] = $poleEmploi;
        $classPoleEmploi = "is-valid";
    }

    if (empty($numberOfBadges)) { 
        $errors["numberOfBadges"] = "Veuillez renseigner votre nombre de badges";
        $classNumberOfBadges = "is-invalid";
    } else if (!preg_match($regexNumberOfBadges, $numberOfBadges)) {
        $errors["numberOfBadges"] = "Veuillez renseigner un nombre de badges valide";
        $classNumberOfBadges = "is-invalid";
    } else {
        $finalData["numberOfBadges"] = $numberOfBadges;
        $classNumberOfBadges = "is-valid";
    }

    if (empty($codeacademyLink)) { 
        $errors["codeacademyLink"] = "Veuillez renseigner une url";
        $classCodeacademyLink = "is-invalid";
    } else if (!filter_var($codeacademyLink, FILTER_VALIDATE_URL)) {
        $errors["codeacademyLink"] = "Veuillez renseigner une url valide";
        $classCodeacademyLink = "is-invalid";
    } else if (!strpos($codeacademyLink,'www.codecademy.com/') == true) {
        $errors["codeacademyLink"] = "Veuillez renseigner une url de https://www.codecademy.com/";
        $classCodeacademyLink = "is-invalid";
    } else {
        $finalData["codeacademyLink"] = $codeacademyLink;
        $classCodeacademyLink = "is-valid";
    }

    if (empty($randomQuestion1)) {
        $errors["randomQuestion1"] = "Veuillez remplir ce champ";
        $classRandomQuestion1 = "is-invalid";
    } else {
        $finalData["randomQuestion1"] = $randomQuestion1;
    }

    if (empty($randomQuestion2)) {
        $errors["randomQuestion2"] = "Veuillez remplir ce champ";
        $classRandomQuestion2 = "is-invalid";
    } else {
        $finalData["randomQuestion2"] = $randomQuestion2;
    }

    if (empty($randomQuestion3)) {
        $errors["randomQuestion3"] = "Veuillez remplir ce champ";
        $classRandomQuestion3 = "is-invalid";
    } else {
        $finalData["randomQuestion3"] = $randomQuestion3;
    }
}
