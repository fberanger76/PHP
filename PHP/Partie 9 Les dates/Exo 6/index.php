<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>
<body>

<?php 
$numberOfDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo "il y avait $numberOfDays jours en février 2016";

?>
    
</body>
</html>