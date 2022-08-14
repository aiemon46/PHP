<?php
$n=115;
$r=$n%2;
if($r==0):
    echo("I love you");
elseif($r==3):
    echo("I hate you");
else:
    echo("Jahanname ja");
endif;
echo PHP_EOL;


switch($r):
    case ($r==0):
        echo("I love you");
        break;
    case($r==1):
        echo("I Hate you");
        break;   
    endswitch;
if($r==1):
    ?>
    DHoom ma cha;
    <?php
elseif($r==0):
    ?>
    UUUU;
    <?php
endif; 