<?php
$num=442158755745;
$str=(string)$num;
//echo $str;
$count=0;
$arr=str_split($str);
//print_r($arr);
$len=strlen($num);
$a=5;
foreach($arr as $value)
{
    if($value==$a)
        $count++;
}
echo $count;

// есть ли функция, котороя бы сразу число разбила на массив? без строки