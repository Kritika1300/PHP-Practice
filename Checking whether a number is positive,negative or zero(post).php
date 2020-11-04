<html>  
<head> 
<link rel="stylesheet" href = "./3c.css">
<title>Checking whether a number is positive,negative or zero</title>  
</head>  
<body>  
<h2>Checking whether a number is positive,negative or zero</h2>
<form method="post" id="form1">  
Enter a Number:<br><br>  
<input id="t1" type="number" name="number" id="number">  
<input id="b1" type="submit" name="submit" value="Submit" />  
</form>  
<?php   
  if($_POST){  
   $num = $_POST['number']; 
   if($num > 0){
   echo "The number is POSITIVE";
   }
   else if($num < 0){
   echo "The number is NEGATIVE";
   }
   else{
   echo "The number is ZERO"; 
   }
}
?>  
</body>  
</html>
