<!-- En vrai si on aurait vraiment voulu avoir l'heure en temps réèle, ça aurait été
mieux de le faire en asynchrone -->

<?php
ini_set('display_errors',0);
setlocale(LC_ALL, 'fr_FR');
date_default_timezone_set('Europe/Paris');
$date = new DateTimeImmutable();
echo "<h1>Aujourd'hui nous somme le ".strftime("%A %d %B %Y", mktime(0, 0, 0, date("m"),date("d"), date(Y)))." et il est ".date("h")."h".date("i").":".date("s")."</h1>";