<?php
 function greet($name){
        return "walaikum aslam $name" ;  
 }
     $result= greet("Mahiba");
        // function 2
   


 
  function check($number) {
    if ($number == 0) {
        echo "The number is zero.";
    } else {
        if ($number > 0) {
            echo "The number is positive.";
        } else {
            echo "The number is negative.";
        }

        if ($number % 2 == 0) {
            echo " and it's even.";
        } else {
            echo " and it's odd.";
        }
    }
}

check(10);
check(-5);
check(1);
check(2);
check(-7);
            // function 3


 ?>
  <html>
 <header></header>
<body>
    <h1><?=$result?></h1>
    <br>

</body>

  </html>