<?php
$firstValue = 100;
$secondValue = 60;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>
<body>

<p>
<?php
while ($firstValue >= 10) {
    echo ($firstValue * $secondValue);
    $firstValue--;
}

?>
</p>
    
</body>
</html>