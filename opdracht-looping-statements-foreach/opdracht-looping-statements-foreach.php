<?php
    $text = file_get_contents("text-file.txt");
    $textChars = array();
    for($i=0; strlen($text) > $i; $i++)
    {
        $textChars[$i] = substr($text, $i, 1);
    }
    arsort($textChars);
    $teller = array();
    foreach($textChars as $value){
        if(isset ($teller[$value]))
        {
            $teller[$value] +=1;
        }
        else{
            $teller[$value] = 1;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>foreach</title>
        
    </head>
    <body>
        <!--<p><?php var_dump($text);?></p>
        <p><?php var_dump($textChars); ?></p>-->
        <p><?php var_dump($teller)?></p>
    </body>
</html>