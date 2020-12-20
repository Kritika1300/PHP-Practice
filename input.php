<!DOCTYPE html>
<html>
<head>
<title>Even/Odd</title>
<meta charset="utf-8" lang="eng">
<style>
form{width: 100%;
padding: 12px 50px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid;}
</style>
</head>
<body>
<div id="phpForm">
<center>
<form method="post">
<strong>Enter a Number</strong>
<input type="number" name="number1"><br><br>
<input type="submit" name="submit" value="Enter"><br><br>
<?php
if(isset($_POST['submit']))
{$a = $_POST['number1'];
if ($a%2==0)
{echo "The given number <strong>".$a."</strong> is even";}
else
{echo "The given number <strong>".$a."</strong> is odd";}}
?>
</form>
</center>
</div>
</body>
</html>