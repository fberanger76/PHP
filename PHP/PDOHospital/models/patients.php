<?php
require './models/database.php';

class Patients extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addPatient($lastname, $firstname, $birthdate, $phoneNumber, $email)
    {
        $bdd = $this->getDb();
        $req = $bdd->prepare("INSERT INTO `patients`(lastname, firstname, birthdate, phone, mail) VALUES(:lastname, :firstname, :birthdate, :phone, :mail)");
        $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $req->bindValue(':phone', $phoneNumber, PDO::PARAM_STR);
        $req->bindValue(':mail', $email, PDO::PARAM_STR);
        $req->execute();
    }
    public function getTotalNumberOfPages(?string $search)
    {
        $bdd = $this->getDb();
        if ($search !=null){
            $query = $bdd->prepare("SELECT CEILING(COUNT(*) / 5) `pages` FROM `patients` WHERE (`lastname` LIKE :search) OR (`firstname`LIKE :search)");
            $query->bindValue(':search', $search, PDO::PARAM_STR);
        } else {
            $query = $bdd->prepare("SELECT CEILING(COUNT(*) / 5) `pages` FROM `patients` ");
        }
        $query->execute();
        $pageTotal = $query->fetchColumn();
        return $pageTotal;
    }

    public function getEntriesForCurrentPage()
    {
        $bdd = $this->getDb();
        $pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
        $limX = ($pageNow - 1) * 5;
        $limY = 5;
        $query = $bdd->prepare("SELECT * FROM `patients` ORDER BY `id` LIMIT $limX, $limY");
        $query->execute();
        $patients = $query->fetchAll();
        return $patients;
    }

    public function searchPatient() {
        $bdd = $this->getDb();
        $pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
        $limX = ($pageNow - 1) * 5;
        $limY = 5;
        $search = htmlspecialchars($_GET['wordSearched']);
        $query = $bdd->prepare('SELECT * FROM `patients` WHERE (`lastname` LIKE :search) OR (`firstname`LIKE :search) ORDER BY `id` LIMIT :limX, :limY');
        $query->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
        $query->bindValue(':limX', $limX, PDO::PARAM_INT);
        $query->bindValue(':limY', $limY, PDO::PARAM_INT);
        $query->execute();
        $searchPatients = $query->fetchAll();
        return $searchPatients;
    }

    public function getAllPatients()
    {
        $bdd = $this->getDb();
        $query = "SELECT * FROM `patients`";
        $queryAllPatients = $bdd->query($query);
        $allPatientsArray = $queryAllPatients->fetchAll();
        return $allPatientsArray;
    }

    public function getOnePatient($idPatient)
    {
        $bdd = $this->getDb();
        $query = "SELECT * FROM `patients` WHERE `id` = :idPatient";
        $queryOnePatient = $bdd->prepare($query);
        $queryOnePatient->bindValue(':idPatient', $idPatient, PDO::PARAM_STR);
        $queryOnePatient->execute();
        $onePatientArray = $queryOnePatient->fetch();
        return $onePatientArray;
    }

    public function modifyPatient($lastname, $firstname, $birthdate, $phoneNumber, $email, $id)
    {
        $bdd = $this->getDb();
        $req = $bdd->prepare("UPDATE `patients` SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail WHERE id = :id");
        $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $req->bindValue(':phone', $phoneNumber, PDO::PARAM_STR);
        $req->bindValue(':mail', $email, PDO::PARAM_STR);
        $req->bindvalue(':id', $id, PDO::PARAM_STR);
        $req->execute();
    }

    public function deletePatient($idPatient)
    {
        $bdd = $this->getDb();
        $query = "DELETE FROM `patients` WHERE `id` = :idPatient";
        $queryOnePatient = $bdd->prepare($query);
        $queryOnePatient->bindValue(':idPatient', $idPatient, PDO::PARAM_STR);
        $queryOnePatient->execute();
    }
}
