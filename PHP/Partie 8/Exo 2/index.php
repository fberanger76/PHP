<?php

session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2</title>
</head>
<body>

<a href="page2.php">Lien vers page 2</a>
<?php

$_SESSION["firstname"] = "Franck";
$_SESSION["lastname"] = "Béranger";
$_SESSION["age"] = "32";

?>
    
</body>
</html>