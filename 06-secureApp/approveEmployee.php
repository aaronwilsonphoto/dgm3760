<?php


	require_once ('authorize.php');
	$page = 'approveEmployee';
	require_once('variables.php');

    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');  

    // BUILD THE QUERY TO DISPLAY ALL RECORDS
    $query = "SELECT * FROM employee_simple WHERE approved=0 ORDER BY date";

    // TALK TO DATABASE
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


  	<title>Approve Employees</title>

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
	    <h2>Approve Employees</h2>
	    <hr />
	    <br />


	    <?php

	    // DISPLAY RECORDS
	    if (mysqli_num_rows($result)== 0) {
	    echo 'All employees have been approved';	
	    } else{

	    while ($row = mysqli_fetch_array($result)) {

		    echo '<div class="delete-container list-group group-area">';
		    echo '<label>';
		    echo ' '. $row['date'] .' - '. $row['first'] .' '. $row['last'];
		    echo '<a style="float:right; margin-right: 2%; color: red;" href="deleteApproval.php?id='.$row['id'].'">[delete]</a>';
		    echo '<a style="float:right; margin-right: 2%; color: green;" href="approveEmployee2.php?id='.$row['id'].'">[approve]</a>';
		    echo '</label>';
		    echo '</div>';

	    }; // end while loop
	};

	    ?>


	    <div class="filler-container">
	    </div>

	    </div> <!-- End Container -->

	    <?php include 'footer.php';?>

  </body>

</html>