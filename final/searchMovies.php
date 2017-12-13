<?php
$page = 'searchMovies';
require_once('variables.php');
// BUILD THE DATABASE CONNECTION
$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');

// BUILD QUERY
$query = "SELECT * FROM movies ORDER BY id";

// TALK TO DATABASE
$result = mysqli_query($dbconnection, $query) or die ('sorry, query failed');
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



  <title>Search Movies</title>

  </head>

  <body>

  <?php include 'header.php';?>


  <div class="jumbotron">

    <div class="container">

    <h1>ok.com</h1>

    </div>

  </div>



    <div class="container">

    <br />

    <h2>Search Movie Database</h2>

    <hr />
    <div class="group-area">
        <div class="list-group">
         <?php 
			while ($row = mysqli_fetch_array($result)) {
				echo '<a class="list-group-item" href="index.php?id='.$row['id'].'">';
				echo $row['title'];
				echo '</a>';	
			};
			?>
        </div>
    </div>
    

    <br />



    <div class="filler-container">

    </div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>