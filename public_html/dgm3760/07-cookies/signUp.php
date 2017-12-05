<?php
$page = 'signUp';
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

            <h5>Innova Digital Services <br><small>Sign Up</small></h5>

          </div>

        </div>

      </div>

    </section>


    <div class="container">

    <br />

    <h2>Sign Up</h2>

    <hr />
    <?php
    // DATABASE VARIABLES
    include 'variables.php';

    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');

    if (isset($_POST['submit'])) {

      $first = mysqli_real_escape_string($dbconnection,trim($_POST['first']));

      $last = mysqli_real_escape_string($dbconnection,trim($_POST['last']));

      $username = mysqli_real_escape_string($dbconnection,trim($_POST['username']));

      $password = mysqli_real_escape_string($dbconnection,trim($_POST['password']));

      $password2 = mysqli_real_escape_string($dbconnection,trim($_POST['password2']));

      $date = date("Y-m-d");

      // DOUBLE CHECK THAT WE HAVE VALUES
      if($password != $password2) {

        echo '<div class="alert alert-danger" role="alert">
           Passwords do not match. Please Retype Password.
                </div>';

       }

      if(!empty($username) && !empty($password) && !empty($password2) && ($password == $password2)) {

       // Make sure username is not already registered
       $query = "SELECT * FROM users WHERE username = '$username'";

       $alreadyexists = mysqli_query($dbconnection, $query) or die ('query failed');

       if (mysqli_num_rows($alreadyexists) == 0) {

        // INSERT DATA
        $query = "INSERT INTO users (first, last, username, password, date) VALUES ('$first', '$last', '$username', SHA('$password'), NOW())";

        mysqli_query($dbconnection, $query) or die ('insert query failed');


        // CONFIRMATION MESSAGE
        echo '<div class="alert alert-success" role="alert">Your new account has been successfully created</div>';

        echo '<p>Return to the <a href="index.php">main page</a></p>';

        // make cookies
        setcookie('username', $username, time() + (60*60*24*30)); // expires in 30 days
        setcookie('first', $first, time() + (60*60*24*30)); // expires in 30 days
        setcookie('last', $last, time() + (60*60*24*30)); // expires in 30 days

        // CLOSE DB CONNECTION
        mysqli_close($dbconnection);

        // EXIT PAGE
        exit;



        } else {

          echo '<div class="alert alert-danger" role="alert">
           An account already exists for this username. Please use a different username.
                </div>';

        } // end of already registered check

      } // end of the empty check

    } // end isset




    ?>

<form action="signUp.php" method="POST">

      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Registration Info</legend>

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

            <label for="username">Username:</label>

            <input type="username" class="form-control" name="username" placeholder="Enter a Username" required="true" />

          </div>

          <div class="form-group">

            <label for="password">Password:</label>

            <input type="password" class="form-control" name="password" value="" placeholder="Create a New Password" required="true"/>

          </div>

          <div class="form-group">

            <label for="password2">Password (retype):</label>

            <input type="password" class="form-control" name="password2" value="" placeholder="Retype Password" required="true"/>

          </div>

        </div>

      </fieldset>


      <input type="submit" value="Sign Up" name="submit" class="btn btn-secondary row">

      <a href="index.php">cancel</a>

    </form>

    <br>

    <div class="filler-container"></div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>