<?php
// On définit d'abord la locale afin de formater correctement les dates que l'on va manipuler
setlocale(LC_ALL, "fr_FR.UTF8");
// Le tableau créé ci-dessous permettra l'affichage du select contenant tous les mois dans l'index
$months = [
    1 => "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
];

// Petit bonus :) Les jours fériés
$daysThatAreCOOL = [
    1 => [
        1 => "Jour de l'an"
    ],
    5 => [
        1 => "Fête du travail",
        8 => "Victoire des alliés 1945"
    ],
    7 => [
        14 => "Fête nationale"
    ],
    8 => [
        15 => "Assomption"
    ],
    11 => [
        1 => "Armistice 1918"
    ],
    12 => [
        25 => "Noël"
    ]
];

// On récupère ici le mois et l'année actuels, à noter que nous avons de parser la valeur du mois car les index sont 01, 02 etc... au lieu de 1, 2 etc...
$actualMonth = (int)strftime("%m", time());
$actualYear = strftime("%Y", time());

// Si la requête envoyée est en GET et que le tableau superglobal GET n'est pas vide alors nous allons procéder à la validation des champs (TOUJOURS VALIDER SES CHAMPS MEME SI CE SONT DES SELECTS !!!), si il n'y a pas de requête en GET ou que le tableau des GET est vide, alors on stocke dans de nouvelles variables les valeurs du mois et de l'année
if($_SERVER["REQUEST_METHOD"] == "GET" && count($_GET) > 0) {
    // Si la valeur sélectionnée par l'utilisateur pour le mois n'est pas présent dans les index du tableau $months ou encore si la valeur ne correspond pas à la regex, alors on stocke un message d'erreur
    if(!array_key_exists($_GET["selectMonth"], $months) || !preg_match("/^[0-9]{1,2}$/", $_GET["selectMonth"])) {
        $errorMonth = "Veuillez choisir une valeur présente dans la liste !";
    }
    // Si la valeur sélectionnée par l'utilisateur pour l'année ne correspond pas à la regex, alors on stocke un message d'erreur
    if(!preg_match("/^[0-9]{4}$/", $_GET["selectYear"])) {
        $errorYear = "Veuillez choisir une valeur présente dans la liste !";
    }
    // Enfin, si aucun des 2 messages d'erreur n'est présent, alors nous pouvons stocker sereinement les valeurs récupérées des champs du formulaire, sinon, les valeurs de mois et d'année sont reset à celles d'origine (à savoir celles du moment présent)
    if(!isset($errorMonth, $errorYear)) {
        $selectedMonth = $_GET["selectMonth"];
        $selectedYear = $_GET["selectYear"];
    } else {
        $selectedMonth = $actualMonth;
        $selectedYear = $actualYear;   
    }
} else {
    $selectedMonth = $actualMonth;
    $selectedYear = $actualYear;
}

// Une fois que nous sommes sûrs d'avoir récupéré des valeurs pour le mois et l'année, nous pouvons nous attaquer aux fonctions qui feront tourner l'intégralité de notre calendrier !

// OBLIGATOIRE : on récupère le nombre de jours dans le mois et la position du premier jour du mois dans la semaine (qui nous servira à placer correctement le mois dans le calendrier)
$numberOfDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, $selectedYear);
$firstDayOfMonthInWeek = strftime("%u", mktime(12, 0, 0, $selectedMonth, 1, $selectedYear));

// FACULTATIF : si vous voulez ajouter les jours du mois précédent dans le calendrier, il faudra ajouter cette portion de code afin de récupérer les informations du mois précédent. Les 2 initialisations de variable au début servent à gérer le cas particulier du mois de janvier (1 - 1 = 0, or il n'y pas de mois 0...), il faut penser aussi ) décrémenter l'année si le mois en cours est janvier : Ex : on afficher Janvier 2021 avec les jours de Décembre 2020 ! 
$previousMonth = $selectedMonth == 1 ? 12 : $selectedMonth - 1;
$previousMonthsYear = $selectedMonth == 1 ? $selectedYear - 1 : $selectedYear;
$numberOfDaysInPreviousMonth = cal_days_in_month(CAL_GREGORIAN, $previousMonth, $previousMonthsYear);
$firstDayToDisplayBeforeCalendar = $numberOfDaysInPreviousMonth - $firstDayOfMonthInWeek + 2;

// FACULTATIF : cette partie sert à calculer quel sera le mois suivant
$nextMonth = $selectedMonth == 12 ? 1 : $selectedMonth + 1;
$nextMonthsYear = $selectedMonth == 12 ? $selectedYear + 1 : $selectedYear;

// La variable currentDay servira de compteur afin d'afficher les jours du mois dans le calendrier final
$currentDay = 1;
// La variable ci-dessous servira de compteur afin d'afficher les jours qui se trouvent APRES le mois sélectionné
$firstDayToDisplayAfterCalendar = 1;
// La variable ci-dessous permet de styliser différement en fonction du nombre de semaines nécessaires à afficher pour générer le calendrier (certains mois peuvent s'étaler sur 6 semaines)
$numberOfTDToGenerate = $firstDayOfMonthInWeek >= 6 ? 42 : 35;

// Cette variable servira à créer le titre du tableau en montrant à l'utilisateur le mois et l'année sélectionnés
$tableCaption = ucfirst(strftime("%B %Y", mktime(12, 0, 0, $selectedMonth, 1, $selectedYear)));

// BONUS Partie 2 : les jours fériés liés à Pâques :)
$easterDays = [
    0 => [(int)strftime("%m", easter_date($selectedYear) + 2 * (24 * 3600)) => [(int)strftime("%d", easter_date($selectedYear) + 2 * (24 * 3600)) => "Lundi de Pâques"]],
    1 => [(int)strftime("%m", easter_date($selectedYear) + 40 * (24 * 3600)) => [(int)strftime("%d", easter_date($selectedYear) + 40 * (24 * 3600)) => "Ascension"]],
    2 => [(int)strftime("%m", easter_date($selectedYear) + 51 * (24 * 3600)) => [(int)strftime("%d", easter_date($selectedYear) + 51 * (24 * 3600)) => "Pentecôte"]]
];