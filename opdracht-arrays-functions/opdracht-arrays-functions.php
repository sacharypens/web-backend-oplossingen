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
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <p><?php echo $aantaldieren; ?></p>
        <p><?php echo $boodschap; ?></p>
    </body>
</html>
