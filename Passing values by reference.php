<?php declare(strict_types = 1);
function myfunc(&$num){
$num += 10;
}
$num = 5;
myfunc($num);
echo $num;
?>