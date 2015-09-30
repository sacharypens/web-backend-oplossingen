<?php
    $voornaam = "Sacha";
    $familienaam = "De Pauw";
    $volledigeNaam = $voornaam . $familienaam;
    $tekstlengte = strlen($volledigeNaam);
?>
<!DOCTYPE>
<html>
    <head></head>
    <body>
        <p><?php echo $volledigeNaam; ?></p>
        
        <p><?php echo $tekstlengte; ?></p>
    </body>
</html>