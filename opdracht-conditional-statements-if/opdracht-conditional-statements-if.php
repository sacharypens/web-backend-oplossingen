<?php
    $getal = 3;
    $dag ="";
    if($getal === 1){
        $dag ="maandag";
    }
    if($getal === 2){
        $dag = "dinsdag";
    }
    if($getal === 3){
        $dag = "woensdag";
    }
    if($getal === 4){
        $dag = "donderdag";
    }
    if($getal === 5){
        $dag = "vrijdag";
    }
    if($getal === 6){
        $dag = "zaterdag";
    }
    if($getal === 7){
        $dasg = "zondag";
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php echo $dag ?>
    </body>
</html>