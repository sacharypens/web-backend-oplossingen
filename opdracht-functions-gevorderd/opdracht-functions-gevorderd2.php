<?php 
    $pigHealth = 5;
    $maximumThrows = 8;
    function calculateHit(){
        $randomGetal = rand(1, 100);
        global $pigHealth;
        if($randomGetal > 40){
            $pigHealth -= 1;
        }
        if($pigHealth > 1){
            if($randomGetal > 40){
                return "Raak! Er zijn nog maar " . $pigHealth . " varkens over.";
            }
            else
            {
                return "Mis! Nog " . $pigHealth . " varkens in het team.";
            }
        }
        else if($pigHealth ===1)
        {
            if($randomGetal > 40){
                return "raak! Er is nog maar " . $pigHealth . " varken over.";
            }
            else
            {
                return "Mis! nog " . $pigHealth . " varken in het team.";
            }
        }
        else{
            return "";
        }
    }
    function launchAngryBird(){
        global $pigHealth, $maximumThrows;
        static $aantalKeer = 0;
        $boodschap = "";
        while($aantalKeer < $maximumThrows)
        {
            $aantalKeer++;
            $boodschap .= calculateHit() . "<br>";
            
        }
        if($pigHealth > 0){
            $boodschap .= "verloren!";
        }
        else
        {
            $boodschap .= "gewonnen!";
        }
        return $boodschap;
    }
    $boodschap = launchAngryBird();
?>
<html>
    <head>
        <title>gevorderde functies deel 2</title>
    </head>
    <body>
        <p><?php echo $boodschap;?></p>
        
    </body>
</html>