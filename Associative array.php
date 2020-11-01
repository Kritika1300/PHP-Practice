<html>
<head>
<title>Associative Array</title>
<meta charset="utf-8" lang="eng">
<style>
body{
    background-color:black;
    font-family:helvetica;
    font-weight:600;
    font-size: 30px;
    color:white;
    justify-content: center;
    display:flex;
    align-items:center;
}
h1{
   color:white;
}
</style>
</head>
<body>
<center>
<h1>Associative Array</h1>
<div>
<?php
$marks = array("Riya" => "90","Kriti" => "95","Tina" => "80","Vani" => "70");
$arrlength = count($marks);
echo "<span style = color:#3EC33A> Array is [ Riya => 90 , Kriti => 95 , Tina => 80 , Vani => 70 ]"."</span> <br> <br>";
foreach($marks as $x => $x_value){
    echo "Key =  <span style = color:red>".$x." </span> , Value = <span style=color:yellow> ".$x_value."</span><br><br>";
}
?>
</div>
</center>
</body>
</html>
