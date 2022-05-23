<?php 
$title = "PHP Sting Manipulation";
include 'includes/header.php' ?>
    <h1><?php echo $title ?></h1>
    <?php
    //Concatenation of strings
          $pharse1 = "student who came late";
          $pharse2 = "in class, stand with rock"; 
          $name = "noor butt";  
          echo $pharse1 .", named Noor, ". $pharse2;
          echo '<br/>';
          echo '<hr/>';

          //string transformation
          echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
          echo 'Uppercase first letter: ' . ucwords($name).'<br/>';
          echo 'Upper case: ' . strtoupper($name).'<br/>';
          echo 'Lower case: ' . strtolower($name).'<br/>';
          echo '<hr/>';
          echo 'Repeat String: ' . str_repeat('a',10). '<br/>';
          echo 'Repeat string - Nested Function: ' . strtoupper(str_repeat('a',10))
          . '<br/>';
          echo 'Get a subdtring: ' . substr($name, 3, 4).'<br/>';

          echo 'Get position of string: ' . strpos($name,'b++
          ').'<br/>';
          // return null
          // echo Get postion of string: ' . strpos($combine, 'z').'<br/>';
          echo 'find character "R": ' . strchr($name, 'R').'<br/>';
          echo 'find character "r": ' . strchr($name, 'r').'<br/>';
          echo 'find character "s": ' . strchr($name, 's').'<br/>';
          echo 'find character "e": ' . strchr($name, 'e').'<br/>';

          echo 'find length of string: ' . strlen($name) .'<br/>';

          echo 'Without trim: '. "A" . " B C D " . "E" . '<br/>';
          echo 'trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
          echo 'trim spaces on right sides: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
          echo 'trim spaces on left sides: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

          echo 'Replace string with another: '. str_replace("stand", "sit",$pharse2 ) . '<br/>';
    ?>
 <?php require 'includes/footer.php' ?>