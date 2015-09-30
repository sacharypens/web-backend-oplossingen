<?php 
    $seconden = 221108521;
    $minuten = round($seconden/60);
    $uren = round($minuten/60);
    $dagen = round($uren/24);
    $weken = round($dagen/7);
    $maanden = round($dagen/31);
    $jaren = round($dagen/365);
                   
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <p><?php echo $seconden; ?></p>
        <p><?php echo $minuten; ?></p>
        <p><?php echo $uren; ?></p>
        <p><?php echo $dagen; ?></p>
        <p><?php echo $weken; ?></p>
        <p><?php echo $maanden; ?></p>
        <p><?php echo $jaren; ?></p>
    </body>
</html>