<?php
$arr=array();
$max=0;
$min=0;
$keymax =0;
$keymin =0;
for($i=0;$i<10; $i++)
{
    $arr[]=rand(1,100);
    if($arr[$i]>$max){
        $max=$arr[$i];
        $keymax=$i;
    }
    if($arr[$i]<$min){
        $min=$arr[$i];
        $keymin=$i;
    }
}
print_r($arr);
echo '<br>';

$buf = $arr[$keymax];
$arr[$keymax] = $arr[$keymin];
$arr[$keymin] = $buf;


print_r($arr);
