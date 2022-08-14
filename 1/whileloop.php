<?php
$i=0;
while($i<=100){
    if($i%2==0 && $i>50){
    echo("{$i}");
    echo("\n");
    }
    $i++;
}
echo"==========\n";
$i=0;
while($i<=100){
    if($i%2==0 && $i>50){
    echo("{$i}");
    echo("\n");
    }
    ++$i;
}