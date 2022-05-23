<?php 
$title = "While Loop";
include 'includes/header.php' ?>
    <h1><?php echo $title ?></h1>
    <?php
    $grade = 0;
    // Infinite loop 
    // while($grade , 10){
    // echo '<p>I am Less Than 10!</p>';
    // }
    // Pre-condition
    while($grade < 10){
        echo '<p>I am Less Than 10!</p>';
        $grade++;
    }
      
    echo 'EXIT LOOP!';

?>
    <h1>Do-While Loop</h1>
    <?php
    //Psot-condition Loop
    $grade = 0;
      do{
       echo '<p>I am Do While Loop!</p>';
       $grade++;   
      }while($grade < 10);
      
      echo 'EXIT LOOP!';
?>
 <?php require 'includes/footer.php' ?>