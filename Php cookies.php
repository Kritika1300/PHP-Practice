<?php
$cookie_name = "User";
$cookie_value = "Kritika";
setrawcookie($cookie_name, $cookie_value, time() + (86400), "/"); ?>
<! DOTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
   echo "The cookie named ".$cookie_name." is not set!";
}
else{
   echo "The cookie named ".$cookie_name." is set!<br>";
   echo "The value of cookie named ".$cookie_name." is ".$_COOKIE[$cookie_name];
}

?>
</form>
</body>
</html>