<?php
// LOAD post data
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone  = $_POST['phone'];
$page = 'addEmployee';
$date = date("Y-m-d");

// Make photo path and name
$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
$filename = $first . $last .time().'.'.$ext;
$filepath = 'employees/';

// Verify Image
$validImage = true;

// if missing
if ($_FILES['photo']['size'] == 0) {
  echo 'Image not selected';
  $validImage = false;
};

// if too large
if ($_FILES['photo']['size'] > 504800) {
  echo 'Image is larger than 500kb';
  $validImage = false;
};

if ($_FILES['photo']['type'] == 'image/gif' || $_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/pjpeg' || $_FILES['photo']['type'] == 'image/png')  {

} else {
  echo 'Sorry Wrong Format';
  $validImage = false;
};

if ($validImage == true) {
  // upload file
  $tmp_name = $_FILES['photo']['tmp_name'];
  move_uploaded_file($tmp_name, "$filepath$filename");
  @unlink($_FILES['photo']['tmp_name']);

  // BUILD THE DATABASE CONNECTION
  $dbconnection = mysqli_connect('www.aaronwilsonphoto.com', 'aaronwi4_root', '@Cages01', 'aaronwi4_dgm3760') or die ('connection failed');

  // BUILD THE QUERY
  $query = "INSERT INTO employee_simple (date, first, last, email, phone, photo) VALUES ('$date', '$first', '$last', '$email', '$phone', '$filename')";

  // SEND TO DATABASE
  $result = mysqli_query($dbconnection, $query) or die ('query failed');

  // CLOSE CONNECTION TO DB
  mysqli_close($dbconnection);

} else {
  // try again
  echo '<br><a href="addEmployee.php"> Please Try Again</a>';

};


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
    
    <!-- favicon -->
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />



    <title>Success</title>

  </head>

  <body>

  <?php include 'header.php';?>

  <div class="container">


  <h2><br />Employee Profile Successfully Submitted</h2>
  <p><small><em>*Pending Approval</em></small></p>

  <?php

  echo        '<div class="row">
              <div class="col-sm-3">
              <img class="profile" style="max-width: 100%;" src="'.$filepath.$filename.'" alt="employee photo"/>
              </div>
              <div class="col-sm-9">
              <br>Name: '. $first .' '. $last .'
              <br>Email - ' .$email. ' 
              <br>Phone - ' .$phone. '
              </div>
              </div>'

  ?>

  <a href="addEmployee.php">Add another Employee?</a>
  <br />
  <a href="index.php">Return Home</a>


  </div> <!-- End Container -->

  <?php include 'footer.php';?>

  </body>

</html>