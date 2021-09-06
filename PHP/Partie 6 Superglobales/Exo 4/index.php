<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>
</head>
<body>
    <?php
    if(isset($_GET["language"], $_GET["server"])){
        ?>
        <p><?= $_GET["language"] . " " . $_GET["server"] ?></p>
        <?php
    } else {
        ?>
        <p><?= "Veuiller selectionner un langage et un environnement de développement" ?></p>
        <?php
    }
    ?>
    <a href="index.php?language=PHP&server=WAMP"><button type="button">Lien vers l'URL à étudier</button></a>
    <a href="index.php"><button type="button">Retour à l'index "vierge"</button></a>
</body>
</html>