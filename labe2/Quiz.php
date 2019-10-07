<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$Ques1 =$_POST["q1"];
$Ques2 =$_POST["q2"];
$Ques3 =$_POST["q3"];
$Ques4 =$_POST["q4"];
$Ques5 =$_POST["q5"];
$scr_cnt = 0;

  if ($Ques1 == "12") {
    $scr_cnt = $scr_cnt + 20;
  }
  if ($Ques2 == "red") {
    $scr_cnt = $scr_cnt + 20;
  }
  if ($Ques3 == "b") {
    $scr_cnt = $scr_cnt + 20;
  }
  if ($Ques4 == "7.4") {
    $scr_cnt = $scr_cnt + 20;
  }
  if ($Ques5 == "Kansas") {
    $scr_cnt = $scr_cnt + 20;
  }

echo "Question1: what is the value of 3 + 9 ?<br>";
echo "You answered: " . $Ques1 . "<br>";
echo "Correct answer: 12<br>";
echo "<br>";

echo "estion2: what is the color of blood?<br>";
echo "You answered: " . $Ques2 . "<br>";
echo "Correct answer: red<br>";
echo "<br>";

echo "Question3: what is the second letter in the alphabet?<br>";
echo "You answered: " . $Ques3 . "<br>";
echo "Correct answer: b<br>";
echo "<br>";

echo "Question4: waht is the date of American Independence Day?<br>";
echo "You answered: " . $Ques4 . "<br>";
echo "Correct answer: 7.4<br>";
echo "<br>";

echo "Question5: Where is KU Jayhawks located?<br>";
echo "You answered: " . $Ques5 . "<br>";
echo "Correct answer: Kansas<br>";
echo "<br>";

echo "Your score: ".$scr_cnt."<br>";

?>
