<?php

    $arr = [];
    $length = 5;
    for($i = 0; $i < $length; $i++)
    {
        echo "inserire il ";
        echo $i + 1;
        echo " numero ";
        $arr[$i] = readline();
    }

    echo "l'array al contrario\n";

    for($i = 4; $i >= 0; $i--)
    {
        echo $arr[$i];
    }

?>