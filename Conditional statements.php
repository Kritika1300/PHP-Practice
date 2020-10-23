<?php
echo "Given temperature value : ";
$temp = 450;
echo $temp;
echo "<br>";
if($temp < 0){
    echo "Freezing weather";
}
else if ($temp >=0 && $temp < 10){
    echo "Very Cold weather";
}
else if ($temp >=10 && $temp < 20){
    echo "Cold weather";
}
else if ($temp >=20 && $temp < 30){
    echo "Normal in Temp";
}
else if ($temp >=30 && $temp < 40){
    echo "Its Hot";
}
else{
    echo "Its Very Hot";
}

?>