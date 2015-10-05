<?php 
    function drukArrayAf($array){
        $boodschap = "";
        foreach($array as $key => $value){
            $boodschap .= "helden[ " . $key . " ] heeft de waarde '" . $value . "'<br>";
        }
        return $boodschap;
    }
    $helden = array("Billy Joel", "George RR Martin", "patrick Rothfuss");
    $boodschap = drukArrayAf($helden);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>nog meer functies</title>
    </head>
    <body>
        <?php echo $boodschap; ?>
    </body>
</html>