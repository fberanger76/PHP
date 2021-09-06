<?php
$strJsonFileContents = file_get_contents("assets/ADS.json");
$array = json_decode($strJsonFileContents, true);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Ads</title>
</head>
<body>
<div class="container">
        <div class="row">
<?php
foreach ($array as $ads) {?>
<div class="col-lg-4 col-sm-12 pt-5 d-flex justify-content-center">
<div class="card" style="width: 25rem;">
        <div class="card-body text-center">
          <h5 class="card-title"><?=$ads['name_categories'];?></h5>
          <p class="card-text"><?=$ads['ads_title'];?></p>
          <img class="card-img-top" src="<?=$ads['images_src'];?>" alt="">
          <p class="card-text fw-bold fs-3"><?=$ads['ads_price'];?> €</p>
          <p class="card-text"><?=$ads['ads_desc'];?></p>
          <p class="card-text">contactez le vendeur : <?=$ads['ads_email'];?></p>
        </div>
      </div>
    </div>
<?php }?>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>