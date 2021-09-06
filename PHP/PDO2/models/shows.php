<?php

class Shows extends Database {
    public function getShowTypes() {
        $bdd = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `showTypes`';
        $queryShowTypes = $bdd->query($myQuery);
        $fetch = $queryShowTypes->fetchAll();
        return $fetch;
    }

    public function getAllShows() {
        $bdd = $this->connectDatabase();
        $myQuery = "SELECT `title`, `performer`, DATE_FORMAT(`date`, '%d/%m/%Y') as `date`, TIME_FORMAT(startTime, '%H h %i') as `startTime` FROM `shows` order by title";
        $queryAllShows = $bdd->query($myQuery);
        $fetch = $queryAllShows->fetchAll();
        return $fetch;
    }
}