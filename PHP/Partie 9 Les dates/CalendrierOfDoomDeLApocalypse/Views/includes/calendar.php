<div class="container-fluid">
    <div class="row">
        <div class="col-1 d-flex align-items-center justify-content-center">
            <a href="index.php?selectMonth=<?= $previousMonth ?>&selectYear=<?= $previousMonthsYear ?>"><i class="fas fa-arrow-circle-left iconColor arrows" style="font-size: 3em"></i></a>
        </div>
        <div class="col-10">
        <table class="table">
    <caption><?= $tableCaption ?></caption>
    <thead>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        <th>Vendredi</th>
        <th>Samedi</th>
        <th>Dimanche</th>
    </thead>
    <tbody>
    <?php
    // Cette boucle sert à générer les cases du tableau du calendrier, on générera soit 35 soit 42 cases en fonction du nombre de semaines nécessaires à l'affichage du mois sélectionné
    for ($day = 1; $day <= $numberOfTDToGenerate; $day++) { 

        // Cette condition sert à créer une nouvelle ligne dans le calendrier
        if($day % 7 == 1) {
            ?>
            <tr>
            <?php
        }

        // Cette condition permet à la fois de démarrer l'affichage du mois au bon jour dans la semaine mais également à stoper l'affichage des jours une fois que nous avons atteint le nombre de jours dans le mois
        if($day >= $firstDayOfMonthInWeek && $currentDay <= $numberOfDaysInMonth) {
            if(array_key_exists($selectedMonth, $daysThatAreCOOL) && isset($daysThatAreCOOL[$selectedMonth][$currentDay])) {
                ?>
                <td class="border freeDays <?= $numberOfTDToGenerate == 35 ? "td5Weeks" : "td6Weeks" ?>"><?= $currentDay ?> - <?= $daysThatAreCOOL[$selectedMonth][$currentDay] ?></td>
                <?php
                $currentDay++;
            } else if(array_key_exists($selectedMonth, $easterDays[0]) && isset($easterDays[0][$selectedMonth][$currentDay])) {
                ?>
                <td class="border freeDays <?= $numberOfTDToGenerate == 35 ? "td5Weeks" : "td6Weeks" ?>"><?= $currentDay ?> - <?= $easterDays[0][$selectedMonth][$currentDay] ?></td>
                <?php
                $currentDay++;
            } else if (array_key_exists($selectedMonth, $easterDays[1]) && isset($easterDays[1][$selectedMonth][$currentDay])){
                ?>
                <td class="border freeDays <?= $numberOfTDToGenerate == 35 ? "td5Weeks" : "td6Weeks" ?>"><?= $currentDay ?> - <?= $easterDays[1][$selectedMonth][$currentDay] ?></td>
                <?php
                $currentDay++;
            } else if (array_key_exists($selectedMonth, $easterDays[2]) && isset($easterDays[2][$selectedMonth][$currentDay])){
                ?>
                <td class="border freeDays <?= $numberOfTDToGenerate == 35 ? "td5Weeks" : "td6Weeks" ?>"><?= $currentDay ?> - <?= $easterDays[2][$selectedMonth][$currentDay] ?></td>
                <?php
                $currentDay++;
            } else {
                ?>
                <td class="border <?= $numberOfTDToGenerate == 35 ? "td5Weeks" : "td6Weeks" ?>"><?= $currentDay ?></td>
                <?php
                $currentDay++;
            }
        } else if($day < $firstDayOfMonthInWeek) { // Cette condition sert à gérer l'affichage des jours AVANT le premier jour du mois
            ?>
            <td class="border tdOffMonth <?= $numberOfTDToGenerate == 35 ? "td5Weeks" : "td6Weeks" ?>"><?= $firstDayToDisplayBeforeCalendar ?></td>
            <?php
            $firstDayToDisplayBeforeCalendar ++;
        } else { // Cette condition sert à gérer l'affichage des jours APRES la fin de l'affichage des jours du mois sélectionné
            ?>
            <td class="border tdOffMonth <?= $numberOfTDToGenerate == 35 ? "td5Weeks" : "td6Weeks" ?>"><?= $firstDayToDisplayAfterCalendar ?></td>
            <?php
            $firstDayToDisplayAfterCalendar ++;
        }

        // Cette condition sert à fermer la ligne actuelle du calendrier
        if($day % 7 == 0) {
            ?>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
        </div>
        <div class="col-1 d-flex align-items-center justify-content-center">
            <a href="index.php?selectMonth=<?= $nextMonth ?>&selectYear=<?= $nextMonthsYear ?>"><i class="fas fa-arrow-circle-right iconColor arrows" style="font-size: 3em"></i></a>
        </div>
    </div>
</div>