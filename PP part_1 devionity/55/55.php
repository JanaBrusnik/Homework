<?php
/*$f = fopen('test.txt', 'w');
fwrite($f, 'Hello worrld' . PHP_EOL . 'This is new string');
fclose($f);
*/
$str='';
$f = fopen('test.txt', 'w');
for ($i=1; $i<=10; $i++){
    for($j=1; $j<=$i; $j++){
        fwrite($f, $i);

    }

   fwrite($f,PHP_EOL  );
}
fclose($f);