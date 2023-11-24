<?php
ini_set('display_errors',0);
echo "<h1>Bien le bonjour ".htmlspecialchars($_COOKIE["username"])." !</h1>";

echo "<p>Voici ton ip : ".$_SERVER['REMOTE_ADDR']."</p>";
echo "<p>Je vais te hacher Mouahahah 👿👿!</p>";

echo $_SERVER["SCRIPT_NAME"];
