<?Php
$n="5balls";
switch($n){
    case 5:
        echo("is nothing");
        break;
    case '5balls':
        echo("is string");
        break;
    case 5:
        echo("is a not string");
        break;
}