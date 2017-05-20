<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$row=rand(1,10);
$col=rand(1,10);
$value=0;
$len=count($colors);

?>

<table border="4">
    <tbody>
    <?php
    for ($i=1; $i<=$row;$i++) {
        echo '<tr>';
        for ($j=1; $j<=$col;$j++){
            $col=rand(1,($len-1));
            $value=rand(1,10000);
            echo '<td  bgcolor=',$colors[$col],'>', $value, '</td>';
        }
        echo '</tr> <br>';
    }
    ?>
    </tbody>
</table>