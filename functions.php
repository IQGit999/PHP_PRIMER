<?php 
$title = "Functions";
include 'includes/header.php' ?>
    <h1><?php echo $title ?></h1>

    <?php

       /*Defining a Function */

       function writeMessage(){
           echo "You are really a nice person, Have a nice time! <br/>";
       }

       /* Calling a Function */
       writeMessage();
       
       echo "<hr/>";

       writeMessage();

       /* Function with parameters */

       function addfunction($num1, $num2){
           $sum = $num1 + $num2;
           $num2 = $num2 + 1;
           echo "the sum of $num1 and $num2 is: $sum <br/>";
       }
    /* Pass by reference - use amperstand in parameter */
       function changeNum(&$num){
           $num = $num + 10;
           // $num+= 10;
       }

       function returnProduct($num1, $num2){
           $prod = $num1 * $num2;
           return $prod;
       }

       $num = 500;
         addfunction(10, 20);
         addfunction(10, $num);
         addfunction('10', "50");

         changeNum($num);
         echo $num . '<br/>';

         $return_value = returnProduct(10, 10);
         echo $return_value . '<br/>';
       ?>
 <?php require 'includes/footer.php' ?>