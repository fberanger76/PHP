<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>
<body>

<p>
<?php
// for ($value = 1; $value <= 10; $value += $value/2) {
//     echo $value;
// }

$value = 1;

    while ($value <= 10) {
        $value += $value / 2;
        echo $value;
    }

?>
</p>
    
</body>
</html>