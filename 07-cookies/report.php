<?php
$page ='report';
include_once ('protect.php')
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


    <section class="bgimage2">

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <br>

          </div>

        </div>

      </div>

    </section>


    <div class="container">

    <br />

    <h2>Report an Outage</h2>

    <hr />

<form action="report.php" method="POST">

      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Your Information</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="first">First Name:</label>

            <input type="text" class="form-control" name="first" value="" placeholder="First Name" />

          </div>

          <div class="form-group">

            <label for="last">Last Name:</label>

            <input type="text" class="form-control" name="last" value="" placeholder="Last Name" />

          </div>

          <div class="form-group">

            <label for="account">Customer Account Number:</label>

            <input type="text" class="form-control" name="account" placeholder="#####-###" required="true" />

          </div>

      </fieldset>

            <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Outage Details</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="location">Location:</label>

            <input type="text" class="form-control" name="location" value="" placeholder="Location" required="true" />

          </div>

          <div class="form-group">

            <label for="date1">Date:</label>

            <input type="text" class="form-control" name="date1" value="" placeholder="mm-dd-yy" required="true" />

          </div>

          <div class="form-group">

            <label for="time">Time:</label>

            <input type="text" class="form-control" name="time" value="" placeholder="12:30pm" required="true" />

          </div>

        </div>

      </fieldset>


      <input type="submit" value="Report Outage" name="submit" class="btn btn-secondary row">

      <a href="index.php">cancel</a>

    </form>

    <br>

    <div class="filler-container"></div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>