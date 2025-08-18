<?php

$gravity = 9.8;

define("GRAVITY", 9.8);


$City = "Bacolod";
$Province = "Negros Occidental";
$fName = "Dennis Richard B. Gudes";
$Age = "19";
$title = "Create";
$footer = "2025 | All rights reserved";

$hobbies = ['Gaming', 'Singing'];
$games = ['Tekken 8', 'Minecraft'];


function creatListFromArr($arrayData){
    $len = count($arrayData);
    $str = "";
    for ($i = 0; $i < $len; $i++){
        $str.= "<li> $arrayData[$i] </li>";
    }
    return $str;
}

function hello() {

    return "Hello";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title;?> </title>
    <style>
       .fancy-div{
            padding: 10px;
            color: #f3f1f1ff ;
            font-weight: bold;
            background-color: #241a85ff;
        }
        .p{
            padding: 10px;
            color: #217985ff;
            font-weight: italic;
            background-color: aliceblue;

        }
    </style>


</head>
<body>
    <p class="p">
        <?php echo "What's good, fam?"; ?> <br> 
    </p>
    <p class= "fancy-div">

        <?php echo 'I am ' . $fName; ?> <br> 
        <?php echo 'Living at ' . $City . ' City, ' . $Province; ?> <br>  
        <?php echo $Age . ' years old' ; ?> 
</p>
</div>
<div>
    <ul>
        <?= creatListFromArr($hobbies); ?>
    </ul>
</div>

        <div>
            <ul>
                <?= creatListFromArr($games); ?>
            </ul>

        </div>
<footer> <?= $footer; ?> | All rights Reserved </footer>
</body>
</html>
 


