
<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
<h1>Exo 1 : Afficher tous les clients</h1>
<ul>
<?php 
$clients = "SELECT * FROM clients";
$query = $bdd->query($clients);
$fetch = $query->fetchAll();
foreach ($fetch as $client) { ?>
    <li><?= $client['lastName'] ?> <?= $client['firstName'] ?></li>
<?php
    }?>
</ul>
    
<h1>Exo 2 :</h1>
<ul>
<?php 
$showtypes = $bdd->query("SELECT * FROM `showtypes`")->fetchAll();
foreach ($showtypes as $value) { ?>
    <li><?= $value['type'] ?></li>
<?php
    }?>
</ul>

<h1>Exo 3 :</h1>
<ul>
<?php
$condition = "SELECT * FROM colyseum.clients order by lastName limit 20 ";
$result = $bdd->query($condition)->fetchAll();
foreach ($result as $value) { ?>
    <li><?= $value['lastName'] ?> <?= $value['firstName'] ?></li>
<?php
    }?>
</ul>

<h1>Exo 4 :</h1>
<ul>
<?php 
$condition = "SELECT * FROM clients
    inner join cards
    on clients.cardNumber = cards.cardNumber 
    where cardTypesId = 1";
$result = $bdd->query($condition)->fetchAll();
foreach ($result as $value) { ?>
    <li><?= $value['lastName'] ?> <?= $value['firstName'] ?></li>
<?php
    }?>
</ul>

<h1>Exo 5 :</h1>
<ul>
<?php 
/* $condition = "SELECT * FROM colyseum.clients where LEFT(lastName, 1) = 'M' order by lastName"; */
$condition = "SELECT * FROM colyseum.clients where lastName like 'M%' order by lastName";
$result = $bdd->query($condition)->fetchAll();
foreach ($result as $value) { ?>
    <li>Nom : <?= $value['lastName'] ?> Prénom : <?= $value['firstName'] ?></li>
<?php
    }?>
</ul>

<h1>Exo 6 :</h1>
<ul>
<?php 
$condition = "SELECT title, performer, DATE_FORMAT(`date`, '%d/%m/%Y') as date, TIME_FORMAT(startTime, '%H h %i') as startTime FROM colyseum.shows order by title";
$result = $bdd->query($condition)->fetchAll();
foreach ($result as $value) { ?>
    <li><?= $value['title'] ?> par <?= $value['performer'] ?> le <?= $value['date'] ?> à <?= $value['startTime'] ?></li>
<?php
    }?>
</ul>

<h1>Exo 7 :</h1>
<ul>
<?php 
$condition = "SELECT lastName, firstName, DATE_FORMAT(`birthDate`, '%d/%m/%Y') as birthDate, cardNumber, `card` FROM colyseum.clients";
$result = $bdd->query($condition)->fetchAll();
foreach ($result as $value) { ?>
    <li>Nom :<b><?= $value['lastName'] ?></b></li>
    <li>Prénom : <b><?= $value['firstName'] ?></b></li>
    <li>Date de naissance : <b><?= $value['birthDate'] ?></b></li>
<?php if ($value['card'] != 0 ) { ?>
    <li>Carte de fidélité : <b>oui</b></li>
    <li>Numéro de carte : <b><?= $value['cardNumber'] ?></b></li>
<?php
    } else { ?>
    <li>Carte de fidélité : <b>non</b></li>
<?php
    }?>
    <br>
<?php
    }?>
</ul>
</body>
</html>