<?php
require_once('variables.php');
// BUILD THE DATABASE CONNECTION
$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');

// BUILD QUERY
$query = "SELECT * FROM department ORDER BY value";

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
    
    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

  <title>Search Records</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="searchRecord.php">Search <span class="sr-only">(current)</span></a>
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
            <h5>Innova Digital Services <br><small>Search Employee Records</small></h5>
          </div>
        </div>
      </div>
    </section>


    <div class="container">
    <br />
    <h2>Search by Department</h2>
    <hr />
    
    <div class="group-area">
        <div class="list-group">
         <?php 
			while ($row = mysqli_fetch_array($result)) {
				echo '<a class="list-group-item" href="index.php?id='.$row['department_id'].'">';
				echo $row['value'];
				echo '</a>';	
			};
			?>
        </div>
    </div>


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
      
      	<?php 
		// CLOSE CONNECTION TO DB
		mysqli_close($dbconnection);
		?>
   
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>