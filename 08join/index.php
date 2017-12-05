<?php
// BUILD THE DATABASE CONNECTION
require_once('variables.php');
$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');

// BUILD THE QUERY FOR AN INNER JOIN
$query = "SELECT * FROM employee INNER JOIN department ON (employee.department = department.department_id) ORDER BY first";

// SEND TO DATABASE
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
    
    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

  <title>Innova Digital</title>
  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Innova Digital</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
            <h5>Welcome to Innova Digital Services <br><small>A DGM Project by Aaron Wilson</small></h5>
          </div>
        </div>
      </div>
    </section>


    <div class="container">
    <br />
    <h2>Employee Records</h2>
    <hr />
    <?php
    // DISPLAY ALL RECORDS
    while($row = mysqli_fetch_array($result)) {
		
		
	echo '
		<div class="group-area">
        	<div class="list-group">';
		
	echo '<h3>&nbsp' .$row['first'] . ' ' .$row['last']. '</h3>';
		
	// Ternary Operator
	echo '<p>';
	echo ($row['gender'] == 1 ? 'Mr.':'Ms.');
	echo '&nbsp';
    echo $row['first'];
	echo '&nbsp';
	echo $row['last'];
	echo '&nbsp';
	echo 'is in the Department of ' .$row['value'];
	echo '<br />';
	echo ($row['gender'] == 1 ? 'He ':'She ');
	echo 'is competent with the following skills:</p>';
		
	// ASSIGN USER ID TO A VARIABLE
	$theid = $row['emp_id'];
		
	// BUILD ANOTHER INNER JOIN QUERY
	$query2 = "SELECT * FROM packages INNER JOIN skills ON (packages.skills_id = skills.skills_id) WHERE employee_id=$theid";
		
	// TALK TO DATABASE
	$resultPackage = mysqli_query($dbconnection, $query2) or die ('package query failed');
		
	while($row2 = mysqli_fetch_array($resultPackage)) {
		echo '<p>'.$row2['value'].'</p>';	
	} // end packages
	
		
	echo '</div>
		</div>';

	echo '<br />';
    };
	?>
    

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
    
<?php 
// CLOSE CONNECTION TO DATABSE
mysqli_close($dbconnection);
?>

  </body>
</html>