<!DOCTYPE html>
<!-- ICS2O-Unit5-02-HTML-ProductOfNumbers-->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This program will calculate the sum of two positive integers through the use of a FOR loop.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    
    <!-- For the Favicon on this page -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">

    <!-- the title of the page :) -->
    <title>Looping to the Sum</title>
  </head>
<body>
  <!-- Header, more specifically the largest header possible, primarily for visual structural aesthetic. -->
  <center>
    <?php 
      echo "<h1>Looping to the Sum</h1>";
    ?>
    <br>
    <br>
    <!-- an image (visual aide) that will show you what the sum is. -->
    <img src="./images/the-sum.jpg" alt="the sum, in all of its glory">
    <br>
    <br>

    <!-- some basic text explaining the function of this website and how to use it -->
    <?php
      echo "<p>Look at the sum! There it is. One of the greatest quests of our lives is to go to the sum. It is what the man at the local Denny's told me, and we all know the Denny's people would never lie to me. Anyways enter two positive integers and then press calculate and you will go to the sum!</p>"
    ?>
    <br>
    <!-- drop down form to collect the user's numbers -->
    <form action="./results.php" method="post" target="calculated-sum">
      <label for="first-num">First positive integer:</label>
      <input type="number" name="first-number" id="first-number" min="0" step="1" placeholder="First Positive Integer...">
      <br>
      <br>
      <label for="second-number">Second positive integer:</label>
      <input type="number" name="second-number" id="second-number" min="0" step="1" placeholder="Second Positive Integer...">
      <br>
      <br>
      <input type="submit" value="Calculate the Sum">
    </form>
    <br>
    <br>
    <!-- frame where the results will go -->
    <iframe id="calculated-sum" name="calculated-sum">
    </iframe>
  </center>
</body>
</html>