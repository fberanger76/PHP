<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 9</title>
</head>
<body>
    
<?php
    $newTable = ["02"=>"Aisne", "59"=>"Nord", "60"=>"Oise", "62"=>"Pas-de-Calais", "80"=>"Somme"];

    foreach($newTable as $key => $element) {
        echo "$element<br>"; 
    }

?>
</body>
</html>