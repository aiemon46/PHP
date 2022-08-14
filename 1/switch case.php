<?php
 $n=100/25;
 switch($n){
     case 12:
        echo "{$n} is mine";
        break;
     case $n%2==0:
        echo("{$n} is not mine");
        break;

     default:
         echo("I love you");
     }
     echo("\n");

 $color="yellow";
 switch($color){
    case 'red':
      echo("My favorite color");
      break;
   case 'green':
   case 'yellow':
      echo("{$color} is my favorite color");
      break;
   default:
      echo("I love you");
 }