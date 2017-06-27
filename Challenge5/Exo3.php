<?php
//EXERCICE 3
$fruits = ['orange', 'banane', 'pomme', 'fraise', 'tomate', 'framboise', 'noix de coco', 'ananas'];
$moinsunfruit = array_pop($fruits);
$moinsdeuxfruits = array_pop($fruits);
$corbeille= [$moinsunfruit, $moinsdeuxfruits];
print_r($corbeille);
?>