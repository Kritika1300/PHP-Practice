<!DOCTYPE html>
<html lang="en">
<head>
<title>POST METHOD</title>
</head>
<body>
<form action = "phpfile.php" method = "post">
Name :<input type = "text" placeholder = "Enter your name" name="fname"/><br><br>
E-mail Id :<input type = "text" placeholder = "Enter your email" name="email"/>
<input type = "submit" name="submit1"/>
</form>   
</body>
</html>
<!--phpfie.php
<!DOCTYPE html>
<html lang="en">
<head>
<title>Form action</title>
</head>
<body>
<?php
//echo "Welcome ".$_POST['fname']."<br>"."Your Email-address is: ".$_POST['email'];
?>
</body>
</html> -->