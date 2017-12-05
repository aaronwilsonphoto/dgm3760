<?php

$page ='login';
require_once('variables.php');
// default message to user
$feedback = '<p>Not registered? <a style="text-decoration: underline;" href="signUp.php">Create an account</a></p>';

// If the user isn't logged in, try to log them in
if (isset($_POST['submit'])) {
// BUILD THE DATABASE CONNECTION

$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');

// GRAB USER LOG IN DATA

$username = mysqli_real_escape_string($dbconnection,trim($_POST['username']));

$password = mysqli_real_escape_string($dbconnection,trim($_POST['password']));

// LOOK UP USERNAME AND PASSWORD IN DATABASE

$query = "SELECT * FROM users WHERE username = '$username' AND password = SHA('$password')";

$data = mysqli_query($dbconnection, $query) or die ('query failed');

if (mysqli_num_rows($data) == 1) {

$row = mysqli_fetch_array($data);

// save cookies
setcookie('username', $row['username'], time() + (60*60*24*30), '/', '.aaronwilsonphoto.com'); // expires in 30 days
setcookie('first', $row['first'], time() + (60*60*24*30), '/', '.aaronwilsonphoto.com'); // expires in 30 days
setcookie('last', $row['last'], time() + (60*60*24*30), '/', '.aaronwilsonphoto.com'); // expires in 30 days
header('Location: index.php');

    } else {

      $feedback = '<div class="alert alert-danger" role="alert">Could not find an account for '.$_POST['username'].'. Would you like to <a style="text-decoration: underline;" href="signUp.php">create a new account</a></div>';


    } // end if

  } // end isset

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

    <h2>Log In</h2>

    <hr />

    <form action="login.php" method="POST">

      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-3">Log in to an existing account</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="username">Username:</label>

            <input type="username" class="form-control" name="username" placeholder="Enter a Username" required="true" />

          </div>

          <div class="form-group">

            <label for="password">Password:</label>

            <input type="password" class="form-control" name="password" value="" placeholder="Create a New Password" required="true"/>

          </div>

          <?php echo $feedback; ?>

        </div>

      </fieldset>

      <input type="submit" value="Log In" name="submit" class="btn btn-secondary row">

      <a href="index.php">cancel</a>

    </form>

    <br>

    <div class="filler-container"></div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>