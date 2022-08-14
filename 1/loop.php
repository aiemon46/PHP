<?php
$n=1;
for( ; $n<10; $n=$n+3){
    for($k=10; $k>$n; $k=$k-1)
    {
        echo("*");
    }
echo PHP_EOL;
}
  
$n=1;
for( ; $n<10; $n=$n+3):
    for($k=10; $k>$n; $k=$k-1):
    
        echo("*");
    endfor;
echo PHP_EOL;
endfor;
echo("\n");
$i=0;
while($i<10){
    $i++;
    echo("{$i} \n");
}
echo PHP_EOL;

$i=0;
do{
    $i++;
    echo("{$i}\n");
}while($i<10);