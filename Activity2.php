<?php


function grade_to_letter ($grades) {
if ($grades >= 90 && $grades <= 100) {
    return "A";
} else if ($grades >= 80 && $grades <= 89) {
     return "B";
} else if ($grades >= 70 && $grades <= 79) {
     return "C";
} else if ($grades >= 60 && $grades <= 69) {
     return "D";
}   else if ($grades < 59) { 
        return "F";
}

}
$grades = 85;

$letter = grade_to_letter ($grades);

echo "Your grade is $grades which is $letter";