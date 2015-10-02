<?php
    $getallen = array(1,2,3,4,5);
    $optelling = 0;
    $onevengetallen = "";
    $opgetelde = "";
    for($i=0; count($getallen) > $i; $i++){
        $optelling += $getallen[$i];
    }
    //makkelijker: array_sum($getallen);
    for($i=0; count($getallen) > $i; $i++){
        if($getallen[$i] % 2 !== 0){
            $onevengetallen .= $getallen[$i] . " ";
        }
    }
    $omgedraaidegetallen = array_reverse($getallen);
    
    for($i; count($getallen) > $i; $i++){
        $opgetelde .= ($getallen + $omgedraaidegetallen) . " ";
    }
    
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p><?php echo $optelling; ?></p>
        <p><?php var_dump($getallen); ?></p>
        <p><?php echo $onevengetallen; ?></p>
        <p><?php var_dump($omgedraaidegetallen); ?></p>
        <p><?php var_dump($opgetelde); ?></p>
    </body>
</html>