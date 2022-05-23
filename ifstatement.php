<?php 
$title = "IFELSE-statementss";
include 'includes/header.php' ?>
    <h1><?php echo $title ?></h1>
    <?php
    echo '<h2>if Statement</h2>';

    $grade = 80;
    // ===, ==, >, < , <=, >=,
    if($grade >= 50){
        echo '<h3 style="color: green">You Have Passed</h3>';
    }
    else{
        echo '<h3 tyle="color: red">You Have failed</h3>';
    }
    $grade = 'A';
    // if-Else If-Else
    if($grade == 'A'){
        echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
    }
    elseif($grade == 'B'){
        echo '<h2 style="color: blue">YOU ARE A Villian!</h2>';
    }
    else{

        echo '<h2 style="color: red">You Have failed</h2>';
    }
    ?>

<?php require 'includes/footer.php' ?>