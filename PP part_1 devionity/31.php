<form method="post" action="/31.php" >
    <input type="text" name="username"/> <br>
    <input type="text" name="email"/> <br>
    <input type="textarea" name="message"> <br>
    <input type="submit" />

</form>

<?php
$arr=$_POST;
print_r($arr);
echo '<br>';
echo serialize($arr);


?>
