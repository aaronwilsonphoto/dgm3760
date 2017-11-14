<?php
$page = 'viewEmployees';
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

  <title>View Employees</title>
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
    <h2>Research Division</h2>
    <p>Employees</p>
    <hr />


    <?php
    $filepath = 'employees/';

    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');  

    // BUILD THE QUERY TO DISPLAY ALL RECORDS
    $query = "SELECT * FROM research_division order by last";

    // TALK TO DATABASE
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    // DISPLAY ALL RECORDS
    while($row = mysqli_fetch_array($result)) {
    echo '
    <div id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="'.$row['id'].'">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree'.$row['id'].'" aria-expanded="false" aria-controls="collapseThree">
              '. $row['last'] .', '. $row['first'] .'
            </a>
          </h5>
        </div>
        <div id="collapseThree'.$row['id'].'" class="collapse" role="tabpanel" aria-labelledby="'.$row['id'].'">
          <div class="card-block">
            <div class="row">
              <div class="col-sm-3">
              <img class="profile" style="max-width: 100%;" src="'.$filepath.$row['photo'].'" alt="employee photo"/>
              </div>
              <div class="col-sm-9">
              <br>Name - '. $row['first'] .' '. $row['last'] .'
              <br><a href="mailto:' .$row['email']. '">Email</a> - ' .$row['email']. ' 
              <br>Phone - ' .$row['phone']. '
              <br>Hire Date - '. $row['date'] .'
              <br>Area of Expertise - '. $row['expertise'] .'
              <br>Area of Specialization - '. $row['specialization'] .'
              <br><br><a style="color: green;" href="mailto:' .$row['email']. '">[Contact Me]</a>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
    };

    // CLOSE CONNECTION TO DB
    mysqli_close($dbconnection);
    ?>


    <div class="filler-container">
    </div>


    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>
</html>