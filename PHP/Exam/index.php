<?php

$numeroActivite = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$nombreEnfantParActivite = [0, 20, 15, 12, 8, 9, 7, 11, 18];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Colonie de vacances</title>
</head>
<body>

<div class="container pt-2 text-center">
    <?php 

function numberOfChildrenPerActivity($numeroActivite, $nombreEnfantParActivite) {
foreach(array_combine($numeroActivite, $nombreEnfantParActivite) as $activites => $enfants) {
    if($enfants == 0) {
    ?> <p>Il n'y a pas d'enfant inscrit à l'activité <?= $activites ?></p>
    <?php } else {
        ?><p>Il y a <?= $enfants ?> enfants inscrits à l'activité <?= $activites ?></p>
    <?php }
} 
}
numberOfChildrenPerActivity($numeroActivite, $nombreEnfantParActivite);?>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
</body>
</html>