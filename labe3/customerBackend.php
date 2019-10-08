<?php
echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
  $Quan1= $_POST["icecream"];
  $cost1= $Quan1 * 10;

  $Quan2= $_POST["pepsi"];
  $cost2= $Quan2 * 2;

  $Quan3= $_POST["popcorn"];
  $cost3= $Quan3 * 5;

  $total= $cost1 + $cost2 + $cost3;
  $ship = $_POST["shipping"];
  $password =$_POST["password"];

  if ($ship == "0") {
    $shipType = "Free shipping";
  }
  else if ($ship == "50") {
    $shipType = "Express";
  }
  else if ($ship == "5") {
    $shipType = "Standard shipping";
  }

echo "<h>Thanks for Shoppng!</h>";
echo "<br></br>";
echo "<br><b>your password: ".$password."<b></br>";
echo "<br></br>";
echo "<b>Here is the receipt</b>";
echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th>Quantity</th>";
echo "<th>Cost Per Item</th>";
echo "<th>Sub total</th>";
echo "</tr>";

echo "<tr>";
echo "<th>Ice cream</th>";
echo "<td>".$Quan1."</td>";
echo "<td>$10</td>";
echo "<td>$".$cost1."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Pepsi</th>";
echo "<td>".$Quan2."</td>";
echo "<td>$2</td>";
echo "<td>$".$cost2."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Pop corn</th>";
echo "<td>".$Quan3."</td>";
echo "<td>$5</td>";
echo "<td>$".$cost3."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Shipping</th>";
echo "<td colspan='2'>".$shipType."</td>";
echo "<td>$".$ship."</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan='3'>Total Cost</th>";
echo "<th>$".$total."</th>";
echo "</tr>";
echo "</table>";
?>
