<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>
<body>
    <?php
    if(isset($_GET["age"], $_GET["gender"])){
        ?>
        <p><?= "Vous avez " . $_GET["age"] . " ans et vous êtes un " . $_GET["gender"] ?></p>
        <?php
    } 
    ?>
    <a href="index.php?age=17&gender=male"><button type="button">Lien vers l'URL à étudier</button></a>
    <a href="index.php"><button type="button">Retour à l'index "vierge"</button></a>
</body>
</html>