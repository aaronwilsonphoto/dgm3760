<?php
require_once('variables.php');
// BUILD THE DATABASE CONNECTION
$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');  

// GET DEPARTMENT NAMES
$query = "SELECT * FROM department ORDER BY department_id ASC";
$resultDepartments = mysqli_query($dbconnection, $query) or die ('query failed');

// GET EMPLOYEE RECORDS
$query = "SELECT * FROM skills ORDER BY value ASC";
$resultSkills = mysqli_query($dbconnection, $query) or die ('query failed');

// CLOSE CONNECTION TO DB
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="addRecord.php">Add <span class="sr-only">(current)</span></a>
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
            <h5>Innova Digital Services <br><small>Add Employee Record</small></h5>
          </div>
        </div>
      </div>
    </section>


    <div class="container">
    <br />
    <h2>Add Employee Record</h2>
    <hr />

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
          
          <div class="form-check">
           
            <label for="gender">Gender: </label>
            
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="1">
              Male
            </label>
            
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="2">
              Female
            </label>
            
          </div>

          <div class="form-group">

            <label for="phone">Phone:</label>

            <input type="tel" class="form-control" name="phone" value="" placeholder="081-556-6153" />

          </div>
          
          <div class="form-group">

            <label for="email">Email address</label>

            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="true">

          </div>

        </div>

      </fieldset>
	
      <fieldset class="form-group row">
		  
        <legend class="col-form-legend col-sm-2">Department</legend>
		  
        <div class="col-sm-12">
			
          <div class="form-group">
			  
            <label for="department">Please select:</label>
			  
            <select class="form-control" name="department">
				
			  <option >Please Select...</option>
			  
				<?php
				while ($row = mysqli_fetch_array($resultDepartments)) {
					echo '<option value="'.$row['department_id'].'">'.$row['value'].'</option>';
					
				};
				
				?>
				
            </select>
			  
          </div>
			
        </div>
		  
      </fieldset>
		 
      <fieldset class="form-group row">
		  
        <legend class="col-form-legend col-sm-2">Professional Skills</legend>
        
        <div class="col-sm-12">
         
          <div class="form-check">
           
            <label for="skills">Check Skills: </label>
            
			  <?php 
			  while($row = mysqli_fetch_array($resultSkills)) {
				  echo '<br /><label><input type ="checkbox" value="'.$row['skills_id'].'" name="skills[]"> '.$row['value'].'</label>';
			  };
			  ?>

          </div>
          
        </div>
        
      </fieldset>
		 
		

      <button type="submit" value="submit" class="btn btn-secondary row">Add Employee</button>

      <a href="index.php">cancel</a>

    </form>
		
		

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