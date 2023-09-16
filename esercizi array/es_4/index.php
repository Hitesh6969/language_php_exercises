<?php

$arr = array(2,34,1,45,21,3,4,42,6,44);
$pos = 0;

while(1)
{
    echo "inserire il numero da cercare: ";
    $n = readline();
    for($i = 0; $i < 10; $i++)
    {
        if($arr[$i] == $n)
        {
            echo $i;
            echo "\n";
        }
    }
}
?>