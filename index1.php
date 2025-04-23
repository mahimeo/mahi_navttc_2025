<?php   
$name = " Mahiba ";
$age = "19";
$dep = " navttc";
$city =" hyderabad ";

$num1 = "15";
$num2 ="5";

$studentname= "Mahiba";
$couresname= "web developer";
$batchyear="2025";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>

     <h2>Name _ <?= $name?></h1>
    <h3> Age _ <?= $age?> </h2>
    <h3> Department _ <?= $dep?> </h3>
    <h3> City _<?= $city?></h3>

    <hr>


   <h4> Sum   <?= $num1 + $num2; ?></p>
   <h4> Subtraction  <?= $num1 - $num2; ?> </p>
   <h4> Multiplication  <?= $num1 * $num2; ?> </p>
   <h4>Division <?= $num1 / $num2; ?> </p>
 
    <hr>

<h2>Welcome to abrar batch 2025 <br><?= $studentname ?><?= $couresname?><?= $batchyear?></h2>
   



</div>










</body>
</html>