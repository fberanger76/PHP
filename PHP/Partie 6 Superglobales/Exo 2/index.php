<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
</head>
<body>
    <?php
    if(isset($_GET["age"])){
        ?>
        <p><?= $_GET["age"] ?></p>
        <?php
    } else {
        ?>
        <p><?= "Il manque le paramètre age" ?></p>
        <?php
    }
    ?>
    <a href="index.php?lastname=Tutor&firstname=Janine"><button type="button">Lien vers l'URL à étudier</button></a>
    <a href="index.php"><button type="button">Retour à l'index "vierge"</button></a>
</body>
</html>