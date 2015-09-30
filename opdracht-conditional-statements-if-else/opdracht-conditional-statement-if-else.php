<?php 
    $jaar = 1600;
    $schrikkeljaar = false;
    if($jaar % 4 === 0 && $jaar % 100 !== 0)
    {
        
        $schrikkeljaar = true;
    }
    else if($jaar % 400 === 0)
    {
       
            $schrikkeljaar = true;
       
    }
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <?php echo var_dump($schrikkeljaar); ?>
    </body>
</html>