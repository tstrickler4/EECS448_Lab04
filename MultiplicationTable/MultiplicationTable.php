<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "<table>";
  echo "<tr><th></th>";
  for ($i = 1; $i <= 100; $i++) {
    echo "<th>{$i}</th>";
  }
  echo "</tr>";
  for ($i = 1; $i <= 100; $i++) {
    echo "<tr><th>{$i}</th>";
    for ($j = 1; $j <= 100; $j++) {
      echo "<td>{$i * $j}</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
