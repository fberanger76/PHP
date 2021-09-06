    
<?php
function identity(string $gender="homme", int $age=32) {
    if ($gender == "homme" && $age >= 18){
        return "Vous êtes un homme et vous êtes majeur";
    }
    elseif ($gender == "homme" && $age < 18){
        return "Vous êtes un homme et vous êtes mineur";
    }
    elseif ($gender == "femme" && $age >= 18){
        return "Vous êtes une femme et vous êtes majeure";
    }
    else return "Vous êtes une femme et vous êtes mineure";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>



</body>
</html>