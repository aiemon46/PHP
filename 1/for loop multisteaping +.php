<?php
for($i=0,$j=0;$i<100; $i=$i+7,$j=$j+11){
    echo("{$i}\n");
    echo $j<100 ? $j ."\n"  : '';
}