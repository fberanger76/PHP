<?php
date_default_timezone_set('Europe/paris');

// Get mois précédent et mois suivant
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // Ce mois
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Aujourd'hui
$today = date('Y-m-j', time());

// Titre H3
$html_title = date('m / Y', $timestamp);

// Liens mois précédents et suivants     mktime(heure,minute,seconde,mois,jour,année)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

// Nombre de jours dans un mois
$day_count = date('t', $timestamp);
 
// 0:Lundi 1:Mardi ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 0, date('Y', $timestamp)));


// Calendrier
$weeks = array();
$week = '';

// Rajout de case vide
$week = str_repeat('<td></td>', $str);

for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<td class="table-warning">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
     
    // Fin de semaine Ou Fin du mois
    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // rajout de case vide
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Semaine prochaine
        $week = '';
    }

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Calendrier</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center"><a href="?ym=<?php echo $prev; ?>"><i class="bi bi-arrow-left-circle"></i></a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>"><i class="bi bi-arrow-right-circle"></i></a></h3>
        <table class="table table-bordered">
            <tr>
                <th>L</th>
                <th>M</th>
                <th>M</th>
                <th>J</th>
                <th>V</th>
                <th>S</th>
                <th>D</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>