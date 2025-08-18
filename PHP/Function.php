<?php


/** 
 * Functions are resuable block of code
 * You can pass parameters (optional)
 * "function" to declare
 */

function sum (int $i, int $j) {
    return $i + $j;
}

function creatListFromArr($arrayData){
    $len = count($arrayData);
    $str = "";
    for ($i = 0; $i < $len; $i++){
        $str.= "<li> $arrayData[$i] </li>";
    }
    return $str;
}

$num1 = 1;
$num2 = 2;
$num3 = sum($num1, $num2);


$num4 = 1;
$num5 = 2;
$num6 = $num4 + $num5;

