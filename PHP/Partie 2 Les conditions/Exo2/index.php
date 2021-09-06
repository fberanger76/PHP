<?php 
$isEasy = true;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>

<p><?php 
if ($isEasy) {
    echo "C'est facile !!";
}
else {
    echo "C'est difficile !!";
}  ?></p>

<p><?= ($isEasy) ? "C'est facile !!" : "C'est difficile !!" ?></p>
    
</body>
</html>