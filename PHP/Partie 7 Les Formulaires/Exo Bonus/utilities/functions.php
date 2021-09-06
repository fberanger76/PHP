<?php
//formate les données pour lastname & firstname
function sanitizeDataNames($data) {
    //tout mettre en minuscule
    $newData = strtolower($data);
    //enlève les espaces vides
    $newData = trim($newData);
    //mets en majuscule la première lettre
    $newData = ucfirst($newData);
    //convertit les entités HTML spéciales en caractères
    $newData = htmlspecialchars($newData);
    return $newData;
}

//formate les données pour email
function sanitizeDataMails($data) {
    $newData = strtolower($data);
    $newData = trim($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}