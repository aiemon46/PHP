 <?php
 $emonSSCpass=true;
 $emonHSCpass=false;
 $emonVerpass=true;
 if($emonSSCpass){
     echo("Emon HSc porte parbe");
     echo("\n");
     if($emonHSCpass){
         echo("Emon Versity porbe");
         echo("\n");
         if($emonVerpass){
             echo("Emon Job korbe");
             echo("\n");
         }else{
             echo("Emon Job korte parbe na");
         }
     }else{
         echo("Emon versity porte parbe na");
     }
 }else{
     echo("Emon HSC porte parbe na");
 }
 