<?php
//Inside lab4_E1.php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function printer()
{
  echo "<table>";
    for ($i=0; $i <=100 ; $i++)
    {
      echo "<tr>";
      for ($j=0; $j <=100 ; $j++)
      {
        if ($i==0 && $j==0) {
          echo "<td> </td>";
        }
        else if ($j == 0) {
          echo "<th>".$i."</th>";
        }
        else if ($i == 0) {
          echo "<th>".$j."</th>";
        }
        else{
        echo "<td>".$i*$j."</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
}
printer();
?>
