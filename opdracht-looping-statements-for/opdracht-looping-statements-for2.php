<?php 
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>deel 2</title>
        <style>
            .oneven{
                background-color: green;
            }
        </style>
    </head>
    <body>
        <table>
            <?php for($i=0;$i < 11; $i++): ?>
                <tr>
                    <?php for($j=0; $j < 11; $j++): ?>
                        <td class="<?php echo (($j*$i) % 2 > 0) ? "oneven": ""; ?>">
                            <?php echo ($i*$j); ?>
                        </td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
    </body>
</html>