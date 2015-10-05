<?php 
    $tafels = array();
    $tafelrij = array();
    for($a=0;$a < 11; $a++){
        for($b=0; $b < 11; $b++){
            $tafelrij[$b] = $a*$b;
        }
        $tafels[$a] = $tafelrij;
    }
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
            <thead>
                <tr>
                    <?php for($k=0; $k < 11;$k++): ?>
                        <th>
                            <?php if($k === 0){
                                    echo "Tafel";
                                    }
                                    else{
                                    echo $k;
                                    } ?>
                        </th>
                    <?php endfor ?>
                </tr>
            </thead>
            <?php for($i=0;$i < 11; $i++): ?>
                <tr>
                    <?php for($j=0; $j < 12; $j++): ?>
                        <td class="<?php echo (($j*$i) % 2 > 0) ? "oneven": ""; ?>">
                            <?php if($j !== 0){ 
                                echo $tafels[$i][$j-1];}
                            else{
                                echo $i;
                            }?>
                        </td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
        
    </body>
</html>