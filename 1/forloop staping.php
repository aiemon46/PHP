<?php
$i=10;
for(; $i>0; $i=$i-1 ){
    echo $i.":".(11-$i);
    echo ("\n");
}
echo ("\n");
$i=10;
$j=1;
for(; $i>0; $i=$i-1, $j=$j+1){
    echo($i.":".$j);
    echo ("\n");
}
?>
<?php
$number=6;
for( $i=$number, $fact=1; $i>1;$i--){
     $fact*=$i;
}
echo("{$fact}\n");