<?php
$r=-3;
$k=$r%2;
    switch(true){
        case($r>0 && $k==0):
            echo("{$r} is a positive even number");
            break;
        case ($r<0 && $k==0):
            echo("{$r} is a negative even number");
            break;
        case($r>0 && $k==1):
                echo("{$r} is a positive odd number");
                break;
        case ($r<0 && $k==-1):
                echo("{$r} is a negative odd number");
                break;   
        }