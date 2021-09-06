<?php
$gender = "Homme";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
</head>
<body>

<p><?php
if ($gender != "Homme") {
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}
?></p>

</body>
</html>