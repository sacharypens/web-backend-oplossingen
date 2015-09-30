<?php 
    $fruit = "kokosnoot";
    $fruitaantalkarakters = strlen($fruit);
    $positieO = strpos($fruit, "o");
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p><?php echo $fruit; ?></p>
        <p><?php echo $fruitaantalkarakters; ?></p>
        <p><?php echo $positieO; ?></p>
    </body>
</html>