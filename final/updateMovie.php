<?php
$page = 'admin';
$movie_id = $_GET['id'];

    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect('www.aaronwilsonphoto.com', 'aaronwi4_root', '@Cages01', 'aaronwi4_dgm3760') or die ('connection failed');   

    // BUILD THE QUERY TO DISPLAY ALL RECORDS
    $query = "SELECT * FROM movies WHERE id=$movie_id";

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



  <title>Update Employee</title>

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

    <h2>Update Employee</h2>

    <hr />

    <br />



    <form action='updateDatabase.php' method='POST' enctype='multipart/form-data'>



      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Personal Information</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="first">First Name:</label>

            <input type="text" class="form-control" name="first" value="<?php echo $row['first']; ?>" required="true" />

          </div>

          <div class="form-group">

            <label for="last">Last Name:</label>

            <input type="text" class="form-control" name="last" value="<?php echo $row['last']; ?>" required="true" />

          </div>

          <div class="form-group">

            <label for="email">Email address</label>

            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>" required="true" />

          </div>

          <div class="form-group">

            <label for="phone">Phone:</label>

            <input type="tel" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" />

          </div>

        </div>

      </fieldset>



      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      <button type="submit" value="submit" class="btn btn-secondary row">Update Employee</button>

      <a href="index.php">cancel</a>

    </form>

    <div class="filler-container">

    </div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>