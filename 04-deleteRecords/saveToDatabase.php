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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <title>Thank You</title>
  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.html">Innova Digital</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="infoRequest.html">Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailList.html">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="makeMessage.php">Send</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="showMailList.php">Delete</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

  <div class="container">

  <h2><br />Thank You For Signing Up</h2>
  <?php
  echo '<p><br />Thank you ' . $first . ' for registering with Innova Digital';
  echo '<br />You are now on our mailing list.</p>';
  echo '<p>We will keep you connected through the email listed below:';
  echo '<br />' . $email . '';
  ?>

  </div> <!-- End Container -->
  </body>
</html>