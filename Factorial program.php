<?php  
echo "Given number : ";
$num = 5;  
echo "$num <br>";
$factorial = 1;  
for ($x=1; $x<=$num; $x++)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>  