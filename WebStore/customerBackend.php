<?php
  echo "<html>";
  echo "<head>";
  echo "<link type='text/css' rel='stylesheet' href='style.css'></link>";
  echo "</head>";
  echo "<body>";

  echo "<div class='title'><h1>Hello, " . $_POST["username"] . "! Your Password: " . $_POST["password"] . "</h1></div>";

  echo "<div class='form'>";
  echo "<table>";

  //headers
  echo "<tr>";
  echo "<th></th>";
  echo "<th>Quantity</th>";
  echo "<th>Cost Per Item</th>";
  echo "<th>Sub Total</th>";
  echo "</tr>";

  //beef
  echo "<tr>";
  echo "<th>Beef</th>";
  echo "<td>" . $_POST["beefQnty"] . "</td>";
  echo "<td>$0.50</td>";
  echo "<td>$" . number_format($_POST["beefQnty"] * 0.50, 2) . "</td>";
  echo "</tr>";

  //pork
  echo "<tr>";
  echo "<th>Pork</th>";
  echo "<td>" . $_POST["porkQnty"] . "</td>";
  echo "<td>$0.40</td>";
  echo "<td>$" . number_format($_POST["porkQnty"] * 0.40, 2) . "</td>";
  echo "</tr>";

  //chicken
  echo "<tr>";
  echo "<th>Chicken</th>";
  echo "<td>" . $_POST["chknQnty"] . "</td>";
  echo "<td>$0.30</td>";
  echo "<td>$" . number_format($_POST["chknQnty"] * 0.30, 2) . "</td>";
  echo "</tr>";

  //shrimp
  echo "<tr>";
  echo "<th>Shrimp</th>";
  echo "<td>" . $_POST["shrimpQnty"] . "</td>";
  echo "<td>$0.20</td>";
  echo "<td>$" . number_format($_POST["shrimpQnty"] * 0.20, 2) . "</td>";
  echo "</tr>";

  //miso
  echo "<tr>";
  echo "<th>Miso</th>";
  echo "<td>" . $_POST["misoQnty"] . "</td>";
  echo "<td>$0.10</td>";
  echo "<td>$" . number_format($_POST["misoQnty"] * 0.10, 2) . "</td>";
  echo "</tr>";

  //shipping
  echo "<tr>";
  echo "<th>Shipping</th>";
  switch ($_POST["shipping"]) {
    case 0:
      echo "<td colspan='2'>Free 7-Day</td>";
      break;
    case 50:
      echo "<td colspan='2'>$50.00 Overnight</td>";
      break;
    case 5:
      echo "<td colspan='2'>$5.00 3-Day</td>";
      break;
  }
  echo "<td>$" . number_format($_POST["shipping"], 2) . "</td>";
  echo "</tr>";

  //total
  $total = $_POST["beefQnty"] * 0.50 + $_POST["porkQnty"] * 0.40 + $_POST["chknQnty"] * 0.30 + $_POST["shrimpQnty"] * 0.20 + $_POST["misoQnty"] * 0.10;
  echo "<th colspan='3'>Total Cost</th>";
  echo "<td>$" . number_format($total, 2) . "</td>";

  echo "</table><br>";

  echo "Thank you for shopping with us today!";
  echo "</div>";
  echo "</body>";
  echo "</html>";
?>
