<?php
	
	require_once('variables.php');

	$id = $_GET['id'];
	$page = 'approveEmployee';
	$filepath = "employees/";

	// BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');  

    // BUILD THE QUERY TO UPDATE RECORDS
    $query = "UPDATE employee_simple SET approved=1 WHERE id=$id";

    // TALK TO DATABASE
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    // CLOSE CONNECTION TO DB
    mysqli_close($dbconnection);

    // REDIRECT
    header("Location: /dgm3760/06-secureApp/approveEmployee.php");

    // MAKE SURE CODE DOESN'T EXECUTE ON REDIRECT
    exit;



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

  <title>Employee Approved</title>
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
    <h2>Employee Approved</h2>
    <hr />

    <?php  




    ?>

    <div class="filler-container">
    </div>


    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>
</html>