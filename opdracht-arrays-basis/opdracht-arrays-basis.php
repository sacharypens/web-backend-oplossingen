<?php
    $dieren[0] = "aap";
    $dieren[1] = "schildpad";
    $dieren[2] = "hond";
    $dieren[3] = "paard";
    $dieren[4] = "koe";
    $dieren[5] = "schaap";
    $dieren[6] = "kat";
    $dieren[7] = "mug";
    $dieren[8] = "vlieg";
    $dieren[9] = "tijger";

    $voertuigen = array('landvoertuigen' => array('auto', "fiets", "tank", "bromfiets", "paard en kar"), 'watervoertuigen' => array('boot', "waterfiets", "speedboot", "onderzeeër", "schildpad"), 'luchtvoertuigen' => array("vliegtuig", "helicopter", "zeppelin", "de auto uit harry potter", "raket"));
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php var_dump($dieren); ?>
        <p><?php var_dump($voertuigen); ?></p>
    </body>
</html>