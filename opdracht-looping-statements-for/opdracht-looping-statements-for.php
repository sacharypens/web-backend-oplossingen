<?php
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>opdrachtjeesssss!</title>
    </head>
    <body>
        <table>
            <?php for($i=0; $i < 10;$i++): ?>
                <tr>
                    <?php for($j=0;$j < 10;$j++): ?>
                        <td><?php echo "kolom"?></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
       
    </body>
</html>