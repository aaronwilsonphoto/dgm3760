<?php
  $page = 'addEmployee';
  require_once ('authorize.php');
  require_once('variables.php');
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



  <title>Add Employee</title>

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

    <h2>Add Employee</h2>

    <hr />

    <br />



    <form action='saveEmployee.php' method='POST' enctype='multipart/form-data'>



      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Personal Information</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="first">First Name:</label>

            <input type="text" class="form-control" name="first" value="" placeholder="First Name" required="true" />

          </div>

          <div class="form-group">

            <label for="last">Last Name:</label>

            <input type="text" class="form-control" name="last" value="" placeholder="Last Name" required="true" />

          </div>

          <div class="form-group">

            <label for="email">Email address</label>

            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="true">

          </div>

          <div class="form-group">

            <label for="phone">Phone:</label>

            <input type="tel" class="form-control" name="phone" value="" placeholder="081-556-6153" />

          </div>

        </div>

      </fieldset>

            <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Qualifications</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="expertise">Area of Expertise:</label>

            <input type="text" class="form-control" name="expertise" value="" placeholder="Area of Expertise" required="true" />

          </div>

          <div class="form-group">

            <label for="specialization">Area of Specialization:</label>

            <input type="text" class="form-control" name="specialization" value="" placeholder="Area of Specialization" required="true" />

          </div>

        </div>

      </fieldset>

      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Photo</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="photo">Choose employee photo</label>

            <input type="file" class="form-control" name="photo" required="true" />


            <span><small><em>File must be .jpg or .png</em></small></span><br>

            <span><small><em>Image must be smaller than 500KB</em></small></span>

          </div>

        </div>

      </fieldset>




      <button type="submit" value="submit" class="btn btn-secondary row">Add Employee</button>

      <a href="index.php">cancel</a>

    </form>

    <div class="filler-container">

    </div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>