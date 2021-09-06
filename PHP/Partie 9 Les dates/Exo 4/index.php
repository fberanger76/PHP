<?php
setlocale(LC_TIME, 'fr_FR.utf8');
date_default_timezone_set('Europe/paris');
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
    
<?php
echo "Timestamp actuel : " .time() . "<br>";
echo "Timestamp du mardi 2 août 2016 à 15h: ". mktime(15,0,0,8,2,2016);

?>


</body>
</html>