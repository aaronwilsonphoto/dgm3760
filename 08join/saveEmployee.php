<?php
// LOAD post data
$date = date("Y-m-d");
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone  = $_POST['phone'];
$department = $_POST['department'];
$skills = $_POST['skills'];
$gender = $_POST['gender'];

// BUILD THE DATABASE CONNECTION
require_once('variables.php');
$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');

// BUILD THE QUERY
$query = "INSERT INTO employee (date, first, last, phone, email, department, gender) VALUES ('$date', '$first', '$last', '$phone', '$email', '$department', '$gender')";

// SEND TO DATABASE
$result = mysqli_query($dbconnection, $query) or die ('query failed');

// UPDATE SKILLS
// RECENT ID
$recent_id = mysqli_insert_id($dbconnection);

// LOOP THROUGH ARRAY OF SKILLS SELECTED
foreach($_POST['skills'] as $skills_id) {

// BUILD THE QUERY
$query = "INSERT INTO packages (employee_id, skills_id) VALUES ($recent_id, $skills_id)";

// SEND TO DATABASE
$result = mysqli_query($dbconnection, $query) or die ('query failed');
	
}; // end foreach

// CLOSE CONNECTION TO DATABSE
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
    
    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

  <title>Record Added</title>
  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Innova Digital</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addRecord.php">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="searchRecord.php">Search</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <section class="bgimage">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <br>
            <h5>Innova Digital Services <br><small>08 - Join Tables</small></h5>
          </div>
        </div>
      </div>
    </section>


    <div class="container">
    <br />
    <h2>Employee Successfully Added</h2>
    <hr />
    
    <p><?php echo $first .' '. $last ?> has been added to the Employee database</p>

    
    <div class="group-area">
        <div class="list-group">
          <a href="addRecord.php" class="list-group-item">Add Another Record</a>
          <a href="index.php" class="list-group-item">Return Home</a>
        </div>
    </div>
    <br>

    <div class="filler-container">
    </div>


    </div> <!-- End Container -->

    <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy; 2017 | Aaron Wilson Digital</p>
        <p>
        aaronwilsondigital.com
        </p>
      </div>
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>
