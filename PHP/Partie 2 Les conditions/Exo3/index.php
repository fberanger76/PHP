<?php 
$age = 32;
$gender = "homme";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>

<p><?php 
if ($gender == "homme" && $age >= 18) {
    echo "Vous êtes un homme et vous êtes majeur";
}
elseif ($gender == "homme" && $age < 18) {
    echo "Vous êtes un homme et vous êtes mineur";
}  
elseif ($gender == "femme" && $age >= 18) {
    echo "Vous êtes une femme et vous êtes majeure";
}  
else {
    echo "Vous êtes une femme et vous êtes mineure";
}

?></p>
    
</body>
</html>