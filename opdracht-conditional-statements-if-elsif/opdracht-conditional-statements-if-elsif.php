<?php
    $getal = rand(1,100);
    $roundgetal = round($getal, -1);
    $onder = 0;
    $boven = 0;
    if($roundgetal > $getal)
    {
        $onder = $roundgetal - 10;
        $boven = $roundgetal;
    }
    else{
        $onder = $roundgetal;
        $boven = $roundgetal + 10;
    }
    $boodschap = "het getal ligt tussen " . $onder . " en " . $boven;
    $omgekeerd = "";
    for($i = strlen($boodschap); $i > -1; $i--)
    {
        $omgekeerd = $omgekeerd . substr($boodschap, $i, 1);
    }
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p><?php echo $getal; ?></p>
       
        <p><?php echo $boodschap; ?></p>
        <p><?php echo $omgekeerd; ?></p>
    </body>
</html>