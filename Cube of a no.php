<?php
echo "Enter an integer upto which cubes have to listed : ";
$int = 5;
echo $int;
echo "<br>";
for($x = 1; $x <= $int; $x++){
    echo "The cube of ".$x." is ".$x*$x*$x ;
    echo "<br>";
}
?>