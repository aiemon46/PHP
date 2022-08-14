<?php
$c=3;
$e=$c%2;
switch($e){
    case 0:
        switch($c){
            case($c>0):
                echo"{$c} is positive even number";
                break;
            case($c<0):
                echo"{$c} is negative even number";
                break;
        }
        break;
     
     case 1:
        switch($c){
            case($c>0):
                echo"{$c} is positive odd number";
                break;
            case($c<0):
                echo"{$c} is negative odd number";
                break;
        }
   
    }