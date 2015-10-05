<?php 
    $getal = 0;
    $boodschap = "";
    while($getal < 100){
        $boodschap .= $getal . " , ";
        $getal++;
    }
    $boodschap .= $getal;
    $getal = 0;
    $boodschap2 = "";
    while($getal < 81){
        if($getal % 3 === 0 && $getal > 40 && $getal < 80){
            $boodschap2 .= $getal . ", ";
        }
        $getal++;
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p><?php echo $boodschap; ?></p>
        <p><?php echo $boodschap2; ?></p>
    </body>
</html>