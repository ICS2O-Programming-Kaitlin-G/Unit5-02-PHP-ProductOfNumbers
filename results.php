<?php
  //getting user input
  $firstNum = intval($_POST["first-number"]);
  $secondNum = intval($_POST["second-number"]);
  $sum = 0;
  //for loop that will do the repeat addition required to produce the sum of the two numbers 
  for ($counter = 0; $counter < $secondNum; $counter++) {
    $sum = $sum + $firstNum;
  }
  //echo element that will display the counter
  echo "<p>Oh wow! You've reached the sum!! The product of the sum is " . $sum;
?>