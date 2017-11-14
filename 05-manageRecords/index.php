<?php
$page = '';
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


  <title>Innova Digital</title>

  </head>

  <body>

  <?php include 'header.php';?>


    <section class="bgimage">

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <br>

            <h5>Welcome to Innova Digital Services <br><small>A DGM Project by Aaron Wilson</small></h5>

          </div>

        </div>

      </div>

    </section>


    <div class="container">

    <br />

    <h2>Home</h2>

    <hr />

    <div class="group-area">

        <div class="list-group">
          <a href="viewEmployees.php" class="list-group-item">View Employees</a>

          <a href="addEmployee.php" class="list-group-item">Add Employees</a>

          <a href="deleteEmployee.php" class="list-group-item">Delete Employees</a>

        </div>

    </div>

    <br>

    <div class="filler-container"></div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>