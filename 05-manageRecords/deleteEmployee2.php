<?php
$page = 'deleteEmployee';
$filepath = "employees/";

    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect('www.aaronwilsonphoto.com', 'aaronwi4_root', '@Cages01', 'aaronwi4_dgm3760') or die ('connection failed');

    // DELETE SELCETED RECORD (FROM POST)

    if (isset($_POST['submit'])) {

      // BUILD A SELECT QUERY
      $query = "DELETE FROM employee_simple WHERE id=$_POST[id]";

      // TALK TO DATABASE
      $result = mysqli_query($dbconnection, $query) or die ('delete query failed');
        //delete image
        @unlink($_POST['photo']);

      // REDIRECT
      header("Location: http://aaronwilsonphoto.com/dgm3760/05-manageRecords/deleteEmployee.php");

      // MAKE SURE CODE DOESN'T EXECUTE ON REDIRECT
      exit;

    };




    // BUILD THE QUERY TO DISPLAY ALL RECORDS
    $employee_id = $_GET['id'];
    $query = "SELECT * FROM employee_simple WHERE id=$employee_id";

    // TALK TO DATABASE
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    // ADD RESULTS TO VARIABLE
    $row = mysqli_fetch_array($result);

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

  <title>Confirm Delete Employee</title>
  </head>
  <body>

  <?php include 'header.php';?>

  <div class="jumbotron">
    <div class="container">
    <h1>Innova Digital</h1>
    </div>
  </div>

    <div class="container">
    <br />
    <h2>Delete Employee</h2>
    <hr />

    <form action='deleteEmployee2.php' method='POST' >

    <?php

     // DISPLAY RECORD
    echo '<div class="delete-container list-group group-area">';
    echo '<label>';
    echo '<div class="row">
              <div class="col-sm-3">
              <img class="profile" style="max-width: 100%;" src="'.$filepath.$row['photo'].'" alt="employee photo"/>
              </div>
              <div class="col-sm-9">
              <br>Name: '. $row['first'] .' '. $row['last'] .'
              <br>Email - ' .$row['email']. ' 
              <br>Phone - ' .$row['phone']. '
              </div>
            </div>';
    echo '</label>';
    echo '</div>';

    // CLOSE CONNECTION TO DB
    mysqli_close($dbconnection);

    ?>

      <br>
      <input type="hidden" name="photo" value="employees/<?php echo $row['photo']; ?>"/>
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      <input type="submit" name="submit" value="Delete Employee" class="btn btn-secondary row" style="margin-left: auto;"/>
      <a href="deleteEmployee.php">cancel</a>

    </form>

    <div class="filler-container">
    </div>


    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>
</html>