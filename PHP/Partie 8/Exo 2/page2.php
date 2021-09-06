<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2 Exo2</title>
</head>
<body>

<?php
// 1ere methode :
print_r($_SESSION);?> <br>
<?php

//2e methode :
echo "Mon nom est " . $_SESSION["firstname"] . $_SESSION["lastname"] . " et j'ai " . $_SESSION["age"] . "ans.";

?>
    
</body>
</html>