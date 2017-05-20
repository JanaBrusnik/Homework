<?php
$num=123;
$a=$num%10; // 3
$num=($num-$a)/10; //12
$b=$num%10; //2
$num=($num-$b)/10; //1
echo $num+$a+$b;