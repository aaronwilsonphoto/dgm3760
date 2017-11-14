<?php

$page = 'deleteEmployee';

    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect('www.aaronwilsonphoto.com', 'aaronwi4_root', '@Cages01', 'aaronwi4_dgm3760') or die ('connection failed');   

    // BUILD THE QUERY TO DISPLAY ALL RECORDS
    $query = "SELECT * FROM employee_simple ORDER BY last ASC";

    // TALK TO DATABASE
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

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

  <title>Delete Employee</title>
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

    <form action='deleteEmployee.php' method='POST' >

    <?php

     // DISPLAY ALL RECORDS
    while($row = mysqli_fetch_array($result)) {
    echo '<div class="delete-container list-group group-area">';
    echo '<label>';
    echo ' '. $row['last'] .', '. $row['first'] .' - '. $row['email'];
    echo '<a style="float:right; margin-right: 2%;" href="deleteEmployee2.php?id='.$row['id'].'">[delete]</a>';
    echo '</label>';
    echo '</div>';
    };

    // CLOSE CONNECTION TO DB
    mysqli_close($dbconnection);

    ?>

    </form>

    <div class="filler-container">
    </div>


    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>
</html>