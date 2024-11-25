<?php

$texte = "Bonjour";
$entier = 3;
$booleen = true;

echo $texte;
echo $entier;
echo $booleen;

for ($i = 1; $i <= 20; $i++)  {
    if ($i % 2 === 0) {
        echo $i . PHP_EOL;
    }
}