<?php

require './models/database.php';
require './models/clients.php';
require './models/shows.php';

$clientsObj = new Clients();
$allClientsArray = $clientsObj->getClients();

$showTypesObj = new Shows();
$allShowTypesArray = $showTypesObj->getShowTypes();

$twentyClientsObj = new Clients();
$TwentyClientsArray = $twentyClientsObj->getTwentyClients();

$loyaltyClientsObj = new Clients();
$LoyaltyCardClientsArray = $loyaltyClientsObj->getLoyaltyCard();

$clientsObj = new Clients();
$ClientsLastnameStartingWithMArray = $clientsObj->getClientsLastnameStartingWithM();

$allShowsObj = new Shows();
$allShowsArray = $allShowsObj->getAllShows();

$clientsInfoObj = new Clients();
$clientsInfoArray = $clientsInfoObj->getClientsInfo();
