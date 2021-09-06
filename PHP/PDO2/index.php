<?php
require 'controllers/controller.php';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Exo 2 PDO</title>
</head>
<body>
    
<div class="container">
        <div class="row">

    <div class="card m-2" style="width: 18rem;">
  <div class="card-header fw-bold">
    Exercice 1
  </div>
  <ul class="list-group list-group-flush">
  <?php
foreach ($allClientsArray as $client) {?>
<li class="list-group-item"><?=$client['lastName']?> <?=$client['firstName']?></li>

<?php }
?>
  </ul>
</div>

<div class="card m-2" style="width: 18rem;">
  <div class="card-header fw-bold">
    Exercice 2
  </div>
  <ul class="list-group list-group-flush">
  <?php
foreach ($allShowTypesArray as $showTypes) {?>
<li class="list-group-item"><?=$showTypes['type']?></li>

<?php }
?>
  </ul>
</div>

<div class="card m-2" style="width: 18rem;">
  <div class="card-header fw-bold">
    Exercice 3
  </div>
  <ul class="list-group list-group-flush">
  <?php
foreach ($TwentyClientsArray as $twentyClient) {?>
<li class="list-group-item"><?=$twentyClient['id']?> <?=$twentyClient['lastName']?> <?=$twentyClient['firstName']?></li>

<?php }
?>
  </ul>
</div>

<div class="card m-2" style="width: 18rem;">
  <div class="card-header fw-bold">
    Exercice 4
  </div>
  <ul class="list-group list-group-flush">
  <?php
foreach ($LoyaltyCardClientsArray as $client) {?>
<li class="list-group-item"><?=$client['lastName']?> <?=$client['firstName']?></li>

<?php }
?>
  </ul>
</div>

<div class="card m-2" style="width: 18rem;">
  <div class="card-header fw-bold">
    Exercice 5
  </div>
  <ul class="list-group list-group-flush">
  <?php
foreach ($ClientsLastnameStartingWithMArray as $mClient) {?>
<li class="list-group-item">Nom : <?=$mClient['lastName']?> <p>Prénom : <?=$mClient['firstName']?></p></li>
<?php }
?>
  </ul>
</div>

<div class="card m-2" style="width: 18rem;">
  <div class="card-header fw-bold">
    Exercice 6
  </div>
  <ul class="list-group list-group-flush">
  <?php
foreach ($allShowsArray as $shows) {?>
<li class="list-group-item"><?=$shows['title']?> par <?= $shows['performer'] ?>, le <?= $shows['date'] ?> à <?= $shows['startTime'] ?>.</li>
<?php }
?>
  </ul>
</div>

<div class="card m-2" style="width: 18rem;">
  <div class="card-header fw-bold">
    Exercice 7
  </div>
  <ul class="list-group list-group-flush">
  <?php
foreach ($clientsInfoArray as $clients) {?>
<li class="list-group-item">Nom : <?=$clients['lastName']?> <p>Prénom : <?=$clients['firstName']?></p> <p>Date de naissance : <?=$clients['birthDate']?></p>
<?php if ($clients['card'] == 1) {?> <p>Carte de fidélité : Oui <?php } else {?> <p>Carte de fidélité : Non <?php } ?></p>
<?php if ($clients['card'] == 1) {?> <p>Numéro de carte : <?= $clients['cardNumber'] ?> <?php } else {} ?></p></li>
<?php }
?>
  </ul>
</div>


</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>