<?php

// LOAD variables from the form
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = "aaronwilsonphoto@gmail.com";

// BUILD THE DATABASE CONNECTION
$dbconnection = mysqli_connect('localhost', 'root', '@Cages01', 'dgm3760') or die ('connection failed');

// BUILD THE QUERY
$query = "SELECT * FROM newsletter";

// TALK TO DATABASE
$result = mysqli_query($dbconnection, $query) or die ('query failed');

// DISPLAY WHAT WE FOUND
while ($row = mysqli_fetch_array($result)) {
  $first_name = $row['first'];
  $last_name = $row['last'];
  $to = $row['email'];
  $newMessage = "Dear $first_name $last_name, \n $message";

  mail($to, $subject, $newMessage, 'FROM: ' . $from);
  echo '<div class = "container">Message sent to ' . $to . '<br></div>';

};

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

  <title>Message Sent</title>
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

  <h2><br />You have sent a message to your Mailing List</h2>


  </div> <!-- End Container -->
  </body>
</html>