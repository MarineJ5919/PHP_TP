<?php

$produits = [
    [
    "nom" => "Biscuit",
    "prix" => "2",
    "stock" => "10",
],

[
    "nom" => "Chips",
    "prix" => "1.50",
    "stock" => "25",
],

[
    "nom" => "Boissons",
    "prix" => "2.50",
    "stock" => "17",
    ],
];

$sommmeStock = 0;

foreach ($produits as $produit) {
    $sommeStock += $produit["stock"];
};

echo $sommeStock . PHP_EOL;

function Palindrome($mot) {
    $mot = strtolower(str_replace(' ', '', $mot));
    return $mot === strrev($mot);
}
$mot = "radar";
echo $mot . " est " . (Palindrome($mot) ? "un palindrome" : "pas un palindrome");