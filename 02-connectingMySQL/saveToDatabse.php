<?php

// LOAD variables from the form
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$guide = $_POST['guide'];
$destination = $_POST['destination'];
$language = $_POST['language'];

// BUILD THE EMAIL
$to = 'aaronwilsonphoto@gmail.com';
$subject = 'Caeserea Info Request';
$message = "$name has requested a tour of The $destination with $guide. \n" .
  "Their preferred langauge is $language. \n" .
  "Contact them at $email or the address below: \n" .
  "$address";

// SEND THE EMAIL
mail($to, $subject, $message, 'FROM:' . $email);

// BUILD THE DATABASE CONNECTION
$dbconnection = ('localhost', 'root', '@Cages01', 'dgm3760') or die ('connection failed');


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

  <h2><br />Thank You from Caesarea Tours</h2>
  <?php
  echo '<p><br />Thank you ' . $name . ' for requesting a tour of The ' . $destination . '';
  echo '<br />Your tour guide will be ' . $guide . ' with a requested language of ' . $language . '</p>';
  echo '<p>We will contact you at the address or email listed below:';
  echo '<br />' . $address . '';
  echo '<br />' . $email . '';
  ?>

  </div> <!-- End Container -->
  </body>
</html>