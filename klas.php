<?php
$naam;
$namen =[];
echo("Wat zijn de namen van de studenten?");
$naam = readline();
$namen=explode(" ",$naam);
foreach($namen as $naam) {
    echo($naam.PHP_EOL);
}