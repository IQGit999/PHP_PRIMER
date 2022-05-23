<?php 
$title = "Index";
include 'includes/header.php' ?>
    <!-- Basic html -->
    <h1><?php echo $title ?></h1>
    <br/>
    <?php
    //printing to html using echo
    echo 'hello php!';
    // You can echo Html tags
    echo '<br/>';
    echo 'second line';
    echo '<br/>';
    


    //variable need a '$'. they are not strongly typed 
    $name = 'Noor Butt';
    $age  = 21;
    // echo variable 
    echo $name;
    echo '<h1>My Name is:'.$name.' </h1>';
    echo '<h1>My age is:'.$age.' </h1>';

    echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">Click Me </button>
 <?php
  require 'includes/footer.php' ?>