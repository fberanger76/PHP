<?php

require './models/patients.php';
require './models/appointments.php';

$errors = [];
$addSuccess = false;

if (isset($_POST["deletePatient"])) {
    $patientProfilObj = new Patients();
    $patientProfilObj->deletePatient($_POST["deletePatient"]);
}

if (isset($_POST["submit"]) && count($errors) == 0) {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $birthdate = $_POST["birthdate"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];

    $patientsObj = new Patients();
    $patientsObj->addPatient($lastname, $firstname, $birthdate, $phoneNumber, $email);
    $addSuccess = true;
}

$listPatientsObj = new Patients();
$listPatientsArray = $listPatientsObj->getAllPatients();

if (isset($_GET["idPatient"])) {
    $patientProfilObj = new Patients();
    $patientProfilArray = $patientProfilObj->getOnePatient($_GET["idPatient"]);
}

if (isset($_POST["modify"]) && count($errors) == 0) {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $birthdate = $_POST["birthdate"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $id = $_POST["id"];

    $modifyPatientObj = new Patients();
    $modifyPatientObj->modifyPatient($lastname, $firstname, $birthdate, $phoneNumber, $email, $id);
    $addSuccess = true;
    $patientProfilArray = $patientProfilObj->getOnePatient($id);
}

$pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
$limX = ($pageNow - 1) * 5;
$limY = 5;

$entriesObj = new Patients();


$search = null;
if (isset($_GET['wordSearched']) && !empty($_GET['wordSearched'])) {
    $entriesArray = $entriesObj->searchPatient();
    $search = $_GET['wordSearched'];
} else {
    $entriesArray = $entriesObj->getEntriesForCurrentPage();
}


$numberOfPagesObj = new Patients();
$numberOfPagesArray = $numberOfPagesObj->getTotalNumberOfPages("%".$search."%");

if (isset($_POST["submitPatientAndAppointment"]) && count($errors) == 0) {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $birthdate = $_POST["birthdate"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $dateHour = $_POST["dateHour"] . " " . $_POST["time"] . ":00";

    $patientsObj = new Patients();
    $patientsObj->addPatient($lastname, $firstname, $birthdate, $phoneNumber, $email);
    $patientId = $patientsObj->getDb()->lastInsertId();
    $dateHour = $_POST["dateHour"] . " " . $_POST["time"] . ":00";

    $appointmentsObj = new Appointments();
    $appointmentsObj->addAppointment($dateHour, $patientId);
    $addSuccess = true;
}
