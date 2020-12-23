<?php
session_start();
?>
<! DOTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
$_SESSION["favcolor"] = "black";
$_SESSION["favanimal"] = "dog";
echo "Session variables have been set";

?>
</body>
</html>

//GETTING SESSION VARIABLES:.......................
<?php 
session_start();
?>
<! DOTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php print_r($_SESSION);

?>
</body>
</html>