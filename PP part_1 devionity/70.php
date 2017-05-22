<?php
$num=10;
function checkNumber($a){
    $flag=true;
    for($i=2; $i<$a; $i++){
        if($a%$i == 0) {
            $flag = false;
            echo "No!";
            break;
        }
        if($flag)
            echo "Yes!";
    }

}

checkNumber($num);