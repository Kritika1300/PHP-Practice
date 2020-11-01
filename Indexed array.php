<!DOCTYPE html>
<html>
<head>
<title>Indexed Arrays</title>
<meta charset="utf-8" lang="eng">
<style>
body{
    background-color:black;
    font-family:helvetica;
    font-weight:600;
    font-size: 25px;
    color:white;
}
</style>
</head>
<body>
<center>
<h1>Indexed Array</h1>
<div>
<?php
$tech = array("HTML","CSS","BOOTSTRAP","REACT","PHP","JAVASCRIPT");
$arrlength = count($tech);
echo "<span style = color:#33A8FF> Array is [ HTML , CSS , BOOTSTRAP , REACT , PHP , JAVASCRIPT ]"."</span> <br> <br>";
for($x = 0; $x < $arrlength; $x++){
echo "Element at index <span style = color:yellow> $x </span> is <span style = color: red>".$tech[$x]."</span><br><br>";
}
?>
</div>
</center>
</body>
</html>
