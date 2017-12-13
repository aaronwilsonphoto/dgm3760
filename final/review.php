<?php
$page = 'review';
require_once('variables.php');
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


  <title>ok.com</title>

  </head>

  <body>

  <?php include 'header.php';?>


    <div class="container">

    <br />

    <h2>Review Movies</h2>

    <hr />

	<?php
    $filepath = 'movies/';

    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed');  

    // BUILD THE QUERY TO DISPLAY ALL RECORDS
    $query = "SELECT * FROM movies";

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
              '. $row['title'] .'
            </a>
          </h5>
        </div>
        <div id="collapseThree'.$row['id'].'" class="collapse" role="tabpanel" aria-labelledby="'.$row['id'].'">
          <div class="card-block">
            <div class="row">
              <div class="col-sm-3">
              <img class="profile" style="width: 155px;" src="'.$filepath.$row['photo'].'" alt="movie photo"/>
              </div>
              <div class="col-sm-9">
              <br>Title - '. $row['title'] .'
              <br>Rating - ' .$row['rating']. ' 
              <br>Description - ' .$row['description']. '
			  <br><a style="color: green;" href="reviewMovie.php?id='.$row['id'].'">[leave review]</a>
              <a style="color: red;" href="index.php">[cancel]</a>
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


    <br>

    <div class="filler-container"></div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>