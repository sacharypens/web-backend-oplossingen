<?php
    $boodschappenlijstje = array("kaas", "melk", "water", "brood");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>boodschappen</title>
    </head>
    <body>
        <ul>
            <li><?php echo $boodschappenlijstje[0]; ?></li>
            <li><?php echo $boodschappenlijstje[1]; ?></li>
            <li><?php echo $boodschappenlijstje[2]; ?></li>
            <li><?php echo $boodschappenlijstje[3]; ?></li>
        </ul>
    </body>
</html>