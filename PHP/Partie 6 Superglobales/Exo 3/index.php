<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>
<body>
    <?php
    if(isset($_GET["startDate"], $_GET["endDate"])){
        ?>
        <p><?= "la formation commence le " . $_GET["startDate"] . " et termine le " . $_GET["endDate"] ?></p>
        <?php
    } 
    ?>
    <a href="index.php?startDate=03/26/2021&endDate=24/09/2021"><button type="button">Lien vers l'URL à étudier</button></a>
    <a href="index.php"><button type="button">Retour à l'index "vierge"</button></a>
</body>
</html>