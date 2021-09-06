<?php
require "classes/Character.php";
require "classes/Hero.php";
require "classes/Orc.php";
$hero = new Hero(2000, 0, "arc", 250, "La Dure", 600);
$orc = new Orc(500, 0, rand(600, 800));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO exos</title>
</head>
<body>
<p>Le héro à <?= $hero->getHealth() ?> de points de vie, <?= $hero->getRage() ?> de rage, <?= $hero->getWeapon() ?> comme arme faisant <?= $hero->getWeaponDamage() ?> de dommage, une armure appelée <?= $hero->getShield() ?> encaissant jusqu'à <?= $hero->getShieldValue() ?> de dégâts.</p>
<p>L'orc à <?= $orc->getHealth() ?> de points de vie, <?= $orc->getRage() ?> de rage et fait <?= $orc->getDamage() ?> de dégâts.</p>

<?php
    while ($hero->getHealth() > 0) {
        $isEnraged = false;
        $orc->attack();
        $hero->attacked($orc->getDamage());
        if($hero->getRage() >= 100){
            $isEnraged = true;
            $orc->attacked($hero->getWeaponDamage());
            $hero->setRage(0);
        }
        if($hero->getHealth() >= 0) {
        ?>
        <ul>
            <li>Dégâts de l'orc : <?= $orc->getDamage() ?></li>
            <li>Dégâts absorbés : <?= $orc->getDamage() < $hero->getShieldValue() ? $orc->getDamage() : $hero->getShieldValue() ?></li>
            <li>Dégâts subis : <?= $orc->getDamage() < $hero->getShieldValue() ? 0 : $orc->getDamage() - $hero->getShieldValue() ?></li>
            <li>Points de vie restants : <?= $hero->getHealth() ?></li>
            <li>Points de rage : <?= $hero->getRage() ?></li>
            <li>Dégâts subis par l'orc grâce à l'attaque de Rage : <?= $isEnraged == false ? 0 : $hero->getWeaponDamage() ?></li>
            <li>Points de vie restants à l'orc : <?= $orc->getHealth() ?></li>
        </ul>
        <?php if ($orc->getHealth() <= 0){
            ?>
            <p>CHE il est mort !</p>
        <?php break; }
        } 
        else {
            ?>
            <p>Bravo vous êtes mort !</p>
            <?php
        }
    }
    ?>
    
</body>
</html>