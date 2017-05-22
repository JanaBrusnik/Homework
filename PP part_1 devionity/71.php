<?php
$arr=array(1,10,[100,200,300],1000);
print_r($arr);
echo '<br>';

function myPrint($a){
    echo "Array( <br>";
    $len=count($a);
    foreach ($a as $key=>$value){
        if(is_array($value)){

            echo "<pre>   [$key]=>";
            echo  myPrint($value);
            echo '</pre>';
            continue;
        }
        echo "<pre>   [$key]=>$value </pre> <br>";
        if($key == ($len-1))
            echo ") <br>";
    }
}

myPrint($arr);