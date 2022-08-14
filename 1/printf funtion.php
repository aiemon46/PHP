<?php
$fname= "Ahammed";
$lname="Ibrahim";
$mname= "Emon";
printf('My name is %2$s %3$s %1$s', $fname, $lname,$mname);
printf('the binary %1$d is %1$b',14);
echo "\n";
printf("The binary of %d eqivelent is %b", 14,14);
echo "\n";

$num1=20.3;
$num2=2.1;
printf("%.2f, %.2f",$num1, $num2);
echo "\n";
printf("%09.5f, %07.2f", $num1,$num2);