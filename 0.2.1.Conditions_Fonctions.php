<?php

function Age($age) {
    if ($age >= 18) {
        return "Je suis majeur";
    }
    else {
        return "Je suis mineur";
    }
}

echo Age(25).PHP_EOL;
echo Age(15).PHP_EOL;