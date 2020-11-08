<!DOCTYPE html>
<html lang="en">
<head>  
<title>Function to calculate factorial</title>
</head>
<body>
<form method = "post">
Number : <input type = "text" name = "number1">
<input type = "submit" name = "submit1"><br>
</form>
<?php
if(isset($_POST['submit1'])){
$num = $_POST['number1'];
function Factorial($n){
    $fact = 1;
    for($i = 1; $i <=$n; $i++){
         $fact = $fact * $i;
    }
    return $fact;
    }
    $factorial = Factorial($num);
    echo "Factorial of ".$num." is ". $factorial;
}
?>
</body>
</html>
