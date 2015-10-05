<?php 
    $getallen = array(8,7,8,7,3,2,1,2,4);
    asort(array_unique($getallen));
    //$gesorteerdeGetallen = asort($uniekegetallen);
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <p><?php var_dump($getallen); ?></p>
        
    </body>
</html>
