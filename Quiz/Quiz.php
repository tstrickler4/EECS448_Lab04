<?php
  echo "<strong>How many planets are there in the solar system?</strong><br>";
  echo "You answered: " . $_POST["q1"] . "<br>";
  echo "Correct answer: 8<br><br>";

  echo "<strong>How many dwarf planets are there in the solar system?</strong><br>";
  echo "You answered: " . $_POST["q2"] . "<br>";
  echo "Correct answer: 5<br><br>";

  echo "<strong>How many moons does Mars have?</strong><br>";
  echo "You answered: " . $_POST["q3"] . "<br>";
  echo "Correct answer: 2<br><br>";

  echo "<strong>How many moons does Pluto have?</strong><br>";
  echo "You answered: " . $_POST["q4"] . "<br>";
  echo "Correct answer: 5<br><br>";

  echo "<strong>Approximately how many Earth years is the orbital period of Saturn?</strong><br>";
  echo "You answered: " . $_POST["q5"] . "<br>";
  echo "Correct answer: 29<br><br>";

  $answers = array("q1"=>8, "q2"=>5, "q3"=>2, "q4"=>5, "q5"=>29);
  $correct = 0;
  foreach ($answers as $i => $i_value) {
    if ($_POST[$i] == $answers[$i]) {
      $correct++;
    }
  }

  echo "You got " . $correct . " out of 5 correct.<br>";
  echo "You got " . floor($correct / 5 * 100) . "%.";
  if ($correct == 5) {
    echo " Good job!";
  }
?>
