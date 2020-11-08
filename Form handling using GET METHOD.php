<!DOCTYPE html>
<html lang="en">
<head>
<title>GET METHOD</title>
</head>
<body>
<form action = "phpfile1.php" method = "get">
Name :<input type = "text" placeholder = "Enter your name" name="fname"/><br><br>
E-mail Id :<input type = "text" placeholder = "Enter your email" name="email"/>
<input type = "submit" name="submit1"/>
</form>   
</body>
</html>
<!--phpfile1.php
<!DOCTYPE html>
<html lang="en">
<head>
<title>Form action</title>
</head>
<body>
<?php
//echo "Welcome ".$_GET['fname']."<br>"."Your Email-address is: ".$_GET['email'];
?>
</body>
</html>-->