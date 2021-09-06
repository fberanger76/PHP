<?php

$array = [
    [
        'user_id' => 1,
        'user_fname' => 'jean',
        'user_lname' => 'castex',
        'user_job' => 'developpeur',
        'user_desc' => 'je suis jeune et dynamique',
        'avatar_src' => 'male.jpg',
    ],
    [
        'user_id' => 2,
        'user_fname' => 'michel',
        'user_lname' => 'platini',
        'user_job' => 'developpeur',
        'user_desc' => 'je suis jeune et dynamique',
        'avatar_src' => 'male.jpg',
    ],
    [
        'user_id' => 3,
        'user_fname' => 'paul',
        'user_lname' => 'pogba',
        'user_job' => 'designer',
        'user_desc' => 'je suis jeune et dynamique',
        'avatar_src' => 'male.jpg',
    ],
    [
        'user_id' => 4,
        'user_fname' => 'pierre',
        'user_lname' => 'caillou',
        'user_job' => 'influencer',
        'user_desc' => 'je suis jeune et dynamique',
        'avatar_src' => 'default.jpg',
    ],
    [
        'user_id' => 5,
        'user_fname' => 'jeanette',
        'user_lname' => 'do',
        'user_job' => 'mannequin',
        'user_desc' => 'je suis jeune et dynamique',
        'avatar_src' => 'female.jpg',
    ],
    [
        'user_id' => 6,
        'user_fname' => 'marlène',
        'user_lname' => 'shiappa',
        'user_job' => 'responsable de communication',
        'user_desc' => 'je suis jeune et dynamique',
        'avatar_src' => 'female.jpg',
    ],
];
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>
  <div class="container">
        <div class="row">
    <?php
foreach ($array as $user) {
    ?>
          <div class="col-lg-4 pt-5">
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="assets/img/<?=$user['avatar_src'];?>" alt="">
        <div class="card-body text-center">
          <h5 class="card-title"><?=$user['user_fname'] . " " . $user['user_lname'];?></h5>
          <p class="card-text"><?=$user['user_job'];?></p>
          <p class="card-text"><?=$user['user_desc'];?></p>
          <a href="#" class="btn btn-primary">+ d'infos</a>
        </div>
      </div>
    </div><?php
}
?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>