<?php 
    $md5HashKey = "d1fa402db91a7a93c4f414b8278ce073";
    function functie1($character)
    {
        global $md5HashKey;
        $getal = 0;
        for($i=0; strlen($md5HashKey) > $i; $i++){
            if(substr($md5HashKey, $i, 1)=== $character){
                $getal++;
            }
        }
        return ($getal / strlen($md5HashKey))*100 . "%";
    }
    function functie2($character, $HashKey)
    {
        
        $getal = 0;
        for($i=0; strlen($HashKey) > $i; $i++){
            if(substr($HashKey, $i, 1)=== $character){
                $getal++;
            }
        }
        return ($getal / strlen($HashKey))*100 . "%";
    }
    function functie3($character)
    {
        $HashKey =  $GLOBALS["md5HashKey"];
        $getal = 0;
        for($i=0; strlen($HashKey) > $i; $i++){
            if(substr($HashKey, $i, 1)=== $character){
                $getal++;
            }
        }
        return ($getal / strlen($HashKey))*100 . "%";
    }
    $boodschap1 = functie1("2");
    $boodschap2 = functie2("8", $md5HashKey);
    $boodschap3 = functie3("a");
?>
<html>
    <head>
        <title>gevorderde functies</title>
    </head>
    <body>
        <p><?php echo $boodschap1;?></p>
        <p><?php echo $boodschap2;?></p>
        <p><?php echo $boodschap3;?></p>
        
    </body>
</html>