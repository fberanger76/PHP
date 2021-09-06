<?php

class Clients extends Database {
    public function getClients() {
        $bdd = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `clients`';
        $queryClient = $bdd->query($myQuery);
        $fetch = $queryClient->fetchAll();
        return $fetch;
    }

    public function getTwentyClients() {
        $bdd = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `clients` LIMIT 0,20';
        $queryTwentyClient = $bdd->query($myQuery);
        $fetch = $queryTwentyClient->fetchAll();
        return $fetch;
    }

    public function getLoyaltyCard() {
        $bdd = $this->connectDatabase();
        $myQuery = 'SELECT * FROM clients
        inner join cards
        on clients.cardNumber = cards.cardNumber 
        where cardTypesId = 1';
        $queryLoyaltyClient = $bdd->query($myQuery);
        $fetch = $queryLoyaltyClient->fetchAll();
        return $fetch;
    }

    public function getClientsLastnameStartingWithM() {
        $bdd = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `clients` WHERE `lastname` LIKE "m%" ORDER BY `lastname`';
        $queryMClient = $bdd->query($myQuery);
        $fetch = $queryMClient->fetchAll();
        return $fetch;
    }

    public function getClientsInfo() {
        $bdd = $this->connectDatabase();
        $myQuery = "SELECT `lastName`, `firstName`, DATE_FORMAT(`birthDate`, '%d/%m/%Y') as `birthDate`, `cardNumber`, `card` FROM `clients`";
        $queryClientsInfo = $bdd->query($myQuery);
        $fetch = $queryClientsInfo->fetchAll();
        return $fetch;
    }
}