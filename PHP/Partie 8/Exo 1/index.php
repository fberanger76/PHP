<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 1</title>
</head>
<body>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . " " . "L adresse IP de l utilisateur est : " . $_SERVER['REMOTE_ADDR'] . "." . "Le nom du serveur est " . $_SERVER['SERVER_NAME'];
?>


</body>
</html>