<meta charset="utf-8" lang="eng">
<style>
td{
    text-align: center;
    padding: 15px;
}
table{
    width :300px;
    height:200px;
    border-spacing: 0px;
}
body{
    background-color:black;
    font-family:helvetica;
    font-weight:600;
    font-size: 30px;
    color:white;
}
table, th, td {
  border: 2px solid #F3D652;
}
</style>
</head>
<body>
<center>
<div>
<h1>Multidimensional Array</h1>
<?php
$cars = array (
    array("Product","Stock","Sold"),
    array("Milk",100,50),
    array("Chips",123,97),
    array("Waffers",120,100)
    );
echo "<span style='font-size:25px;color:#52F3CA '>The Array is [ [ Product, Stock, Sold ] , [ Milk, 100, 50 ] , [ Chips, 123, 97 ] , [ Waffers, 120, 100 ] ] </span><br><br>";    
echo "<table> <tr style = color:red ><td>". $cars[0][0]."</td><td>".$cars[0][1]."</td><td> ".$cars[0][2]."</td></tr>";
echo "<tr><td>". $cars[1][0]."</td><td>".$cars[1][1]."</td><td> ".$cars[1][2]."</td></tr>";
echo "<tr><td>". $cars[2][0]."</td><td>".$cars[2][1]."</td><td> ".$cars[2][2]."</td></tr>";
echo "<tr><td>". $cars[3][0]."</td><td>".$cars[3][1]."</td><td> ".$cars[3][2]."</td></tr></table>";
?>
</div>
</center>
</body>
</html>
