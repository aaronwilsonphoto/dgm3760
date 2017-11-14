<?php
$page = 'viewEmployees';
// LOAD post data
$filepath = 'employees/';

$id  = $_POST['id'];
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone  = $_POST['phone'];

  // BUILD THE DATABASE CONNECTION
  $dbconnection = mysqli_connect('www.aaronwilsonphoto.com', 'aaronwi4_root', '@Cages01', 'aaronwi4_dgm3760') or die ('connection failed');

  // BUILD THE QUERY
  $query = "UPDATE employee_simple SET first='$first', last='$last', email='$email', phone='$phone' WHERE id=$id";

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
    
    <!-- favicon -->
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />



    <title>Update Success</title>

  </head>

  <body>

  <?php include 'header.php';?>


  <div class="container">



  <h2><br />Employee Update Success</h2>

  <?php
    // BUILD THE DATABASE CONNECTION
  $dbconnection = mysqli_connect('www.aaronwilsonphoto.com', 'aaronwi4_root', '@Cages01', 'aaronwi4_dgm3760') or die ('connection failed');

  // BUILD THE QUERY
  $query = "SELECT * FROM employee_simple WHERE id=$id";

  // SEND TO DATABASE
  $result = mysqli_query($dbconnection, $query) or die ('query failed');

  // GRAB RESULTS
  $row = mysqli_fetch_array($result);

  // CLOSE CONNECTION TO DB
  mysqli_close($dbconnection);



  echo     '<fieldset class="form-group row">
            <div class="row">
              <div class="col-sm-3">
                <img class="profile" style="max-width: 100%;" src="'.$filepath.$row['photo'].'" alt="employee photo"/>
              </div>
              <div class="col-sm-9">
                <br>Name: '. $row['first'] .' '. $row['last'] .'
                <br>Email - ' .$row['email']. ' 
                <br>Phone - ' .$row['phone']. '
                <br><a href="updateEmployee.php?id='.$row['id'].'">[update employee]</a>
                <a href="index.php">[return home]</a>
              </div>
            </div>
            </fieldset>'

  ?>

  </div> <!-- End Container -->

  <?php include 'footer.php';?>

  </body>

</html>