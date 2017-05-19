<?php
$flag = true;

for($i = 2; $i <= 100; $i++):

    for($j = 2; $j < $i; $j++):
        if($i % $j == 0):
            $flag = false;
            break;
        endif;
    endfor;

    if($flag):
        echo $i." ";
    endif;
    $flag = true;
endfor;
