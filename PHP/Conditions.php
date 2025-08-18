<?php

$age = 31;

$msg = "";

if($age == 30){
    $msg = "You are awesome";
}
else if($age < 20) {
    $msg = "You are a teen";
}
else {
    $msg = "You didn't meet any conditions";
}

print $msg;