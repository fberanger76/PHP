<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>
<body>
    
<?php
$date1 = new DateTime("2016-05-16");
$date2 = new DateTime("2021-06-21");
$diff = $date2->diff($date1)->format("%a");
echo $diff;

?>


</body>
</html>