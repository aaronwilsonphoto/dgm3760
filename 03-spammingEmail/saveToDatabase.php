<?php

// LOAD variables from the form
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];

// BUILD THE DATABASE CONNECTION
$dbconnection = mysqli_connect('localhost', 'root', '@Cages01', 'dgm3760') or die ('connection failed');

// BUILD THE QUERY
$query = "INSERT INTO newsletter (first, last, email) VALUES ('$first', '$last', '$email')";

// SEND TO DATABASE
$result = mysqli_query($dbconnection, $query) or die ('query failed');

// CLOSE CONNECTION TO DB
mysqli_close($dbconnection);

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Thank You</title>
  </head>
  <body>
  <div class="container">

  <h2><br />Thank You For Signing Up</h2>
  <?php
  echo '<p><br />Thank you ' . $first . ' for registering with Aaron Wilson Photo';
  echo '<br />You are now on our mailing list.</p>';
  echo '<p>We will keep you connected through the email listed below:';
  echo '<br />' . $email . '';
  ?>

  </div> <!-- End Container -->
  </body>
</html>