<?php
echo "<table border =\"1\" style='border-collapse: collapse'>"; //creating the border outline
echo "<td> x </td>";
for ($row=1; $row <= 16; $row++) {  // first loop
echo "<tr> \n";
for ($col=1; $col <= 16; $col++) { //2nd loop
  $p = $col * $row; //computing values
  echo "<td>$p</td> \n";
  }
     echo "</tr>";
}
echo "</table>"; //closing the table
?>