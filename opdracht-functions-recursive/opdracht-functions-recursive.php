<?php 
    $geld = 100000;
    $rentevoet = 8;
    $looptijd = 1;
    $jaar = 8;
    function renteBerekenen($bedrag){
        global $looptijd, $rentevoet, $jaar;
        if($jaar < $looptijd){
            $renteBedrag = $bedrag *($rentevoet/100);
            $bedrag = $bedrag + $renteBedrag;
            $looptijd++;
            return renteBerekenen($bedrag);
        }
        else
        {
            return $bedrag;
        }
    }
    $boodschap = renteBerekenen($geld);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>recursive</title>
    </head>
    <body>
        <p><?php var_dump($boodschap);?></p>
    </body>
</html>