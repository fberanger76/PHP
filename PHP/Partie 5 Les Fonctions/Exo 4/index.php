    
<?php
function numbers(int $firstNumber=5, int $secondNumber=8) {
    if ($firstNumber > $secondNumber) {
        return "$firstNumber est plus grand que $secondNumber";
    }
    elseif ($firstNumber < $secondNumber) {
        return "$firstNumber est plus petit que $secondNumber";
    }
    else {
        return "$firstNumber est égal à $secondNumber";
    }

}
echo numbers();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>
</head>
<body>



</body>
</html>