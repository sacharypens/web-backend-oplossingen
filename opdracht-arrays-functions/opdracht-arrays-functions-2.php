<?php 
    $dieren = array("kip", "neushoorn", "hond", "giraf", "aap");
    $aantaldieren = count($dieren);
    $teZoekenDier = in_array("paard", $dieren);
    $boodschap = "";
    if($teZoekenDier === true){
        $boodschap = "gevonden";
    }
    
    else
    {
        $boodschap = "niet gevonden";
    }
    asort($dieren);
    $zoogdieren = array("olifant", "tijger", "schildpad");
    $dierenlijst = array_merge($dieren, $zoogdieren);
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <p><?php echo $aantaldieren; ?></p>
        <p><?php echo $boodschap; ?></p>
        <p><?php var_dump($dieren);?></p>
        <p><?php var_dump($dierenlijst); ?></p>
    </body>
</html>
