<?php
// ex44
$a=13;
$b=15;

if($a>$b) {
    echo $a;
} elseif ($a<$b) {
    echo $b;
} else {
    echo "Bye-bye";
}
echo  '<br>';

//ex 45
$c = ($a>$b)?  $a :  $b;
echo $c;
echo '<br>';

//ex 46
switch ($a){
    case $a>$b: echo $a; break;
    case $a<$b: echo $b; break;
    case $a==$b: echo 'equal'; break;
    default;
}