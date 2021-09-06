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
if (isset($_GET["day"], $_GET["month"])) {
    echo "<p>Nous sommes aujourd'hui, ";
    switch ($_GET["day"]) {
        case 1:
            echo "Lundi";
            break;
        case 2:
            echo "Mardi";
            break;
        case 3:
            echo "Mercredi";
            break;
        case 4:
            echo "Jeudi";
            break;
        case 5:
            echo "Vendredi";
            break;
        case 6:
            echo "Samedi";
            break;
        case 7:
            echo "Dimanche";
            break;
        default:
            echo "Aucun jour n'est sélectionné";
    }
    echo " du mois de ";
    switch ($_GET["month"]) {
        case 1:
            echo "Janvier";
            break;
        case 2:
            echo "Février";
            break;
        case 3:
            echo "Mars";
            break;
        case 4:
            echo "Avril";
            break;
        case 5:
            echo "Mai";
            break;
        case 6:
            echo "Juin";
            break;
        case 7:
            echo "Juillet";
            break;
        case 8:
            echo "Août";
            break;
        case 9:
            echo "Septembre";
            break;
        case 10:
            echo "Octobre";
            break;
        case 11:
            echo "Novembre";
            break;
        case 12:
            echo "Décembre";
            break;
        default:
            echo "Aucun mois n'est sélectionné";
    }
    echo ".</p>";
}
?>
    <a href="index.php?day=2&month=6"><button type="button">Lien vers l'URL à étudier</button></a>
    <a href="index.php"><button type="button">Retour à l'index "vierge"</button></a>
</body>
</html>