<!DOCTYPE html>
<html lang="en">
<head>  
<title>Function to calculate factorial</title>
</head>
<body>
<form method = "post">
Number1 : <input type = "text" name = "number1"><br><br>
Number2 : <input type = "text" name = "number2">
<input type = "submit" name = "submit1"><br><br>
</form>
<?php
if(isset($_POST['submit1'])){
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
function isGreater($n1,$n2){
    if($n1 > $n2)
      return $n1;
    else
      return $n2;
}
$greaterNumber = isGreater( $num1, $num2);
echo "The greater number out of ".$num1." and ".$num2." is ".$greaterNumber;
}
?>
</body>
</html>
