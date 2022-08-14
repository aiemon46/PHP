<?php
$fname="Ahammed";
$lname="IBRAHIM";
echo"My first name's $fname last name is $lname","\n";
$fnamee=strtoupper($fname);
$lnamee=strtolower($lname);
echo "My first name is $fnamee last nae is $lnamee","\n";
echo "My first name is {$fnamee} last nae is {$lnamee}","\n";
printf("My first name is %s last name is %s \n", strtoupper($fname), $lname);
printf("My first name is %s last name is %s", strtoupper($fname), strrev($lname));
?>