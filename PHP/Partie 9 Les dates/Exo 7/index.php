<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>
    
<?php
$date1 = date("Y-m-d");
setlocale(LC_TIME, "fr_FR.utf8");
date_default_timezone_set("Europe/paris");
echo strftime("%A %d %B %Y", strtotime($date1. ' + 20 days'));

?>
</body>
</html>