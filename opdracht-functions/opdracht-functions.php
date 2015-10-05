<?php 
    function berekenSom($getal1, $getal2){
        return $getal1 + $getal2;
    }
    function vermenigvuldig($getal1, $getal2){
        return $getal1 * $getal2;
    }
    function isEven($getal){
        if($getal % 2 === 0){
            return true;
        } 
        else {
            return false;
        }
    }
    $optelling = berekenSom(5,5);
    $maal = vermenigvuldig(5,5);
    $isheteven = isEven(5);
    function geefLengteEnUppercase($string){
        return array(strtoupper($string), strlen($string));
    }
    $boodschap = geefLengteEnUppercase("schildpad");
                     
?>
<!DOCTYPE html>
<html>
    <head>
        <title>functions</title>
    </head>
    <body>
        <p><?php echo $optelling;?></p>
        <p><?php echo $maal;?></p>
        <p><?php var_dump($isheteven);?></p>
        <p><?php var_dump($boodschap);;?></p>
    </body>
</html>