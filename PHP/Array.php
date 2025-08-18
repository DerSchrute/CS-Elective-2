<?php

// PHP ARRAY

// Empty Array
$arrayOfFruits = [];

// Index Array
$arrayOfFruits = [ 'Apple', 'Orange', 'Banana', 'Avocado'];
// Adding items
$arrayOfFruits[] = 'Manga';
// Updating items
$arrayOfFruits[1] = 'Atis' ;

// Accesing items
echo $arrayOfFruits[1];

$len = count($arrayOfFruits);
echo '<br/> Len ' .$len . '<br/>';

//loop
for ($i=0; $i < $len ; $i++) {
    echo " $i ==> " . $arrayOfFruits [$i] . '<br/>';




}