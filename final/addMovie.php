<?php
$page = 'admin';
require_once('authorize.php');
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



  <title>Add Movie</title>

  </head>

  <body>

  <?php include 'header.php';?>


  <div class="jumbotron">

    <div class="container">

    <h1>ok.com</h1>

    </div>

  </div>



    <div class="container">

    <br />

    <h2>Add New Movie</h2>

    <hr />

    <br />



    <form action='saveMovie.php' method='POST' enctype='multipart/form-data'>



      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Movie Information</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="title">Title:</label>

            <input type="text" class="form-control" name="title" value="" placeholder="Movie Name" required="true" />

          </div>

        <legend class="col-form-legend col-sm-2">Rating</legend>
		  
        <div class="col-sm-12">
			
          <div class="form-group">
			  
            <label for="department">1-5 stars</label>
			  
            <select class="form-control" name="rating">
				
			  <option >Please Select...</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
				
            </select>
			  
          </div>
			
        </div>

          <div class="form-group">

            <label for="description">Description</label>

            <input type="text" class="form-control" name="description" value="" placeholder="Enter short description" required="true">

          </div>

        </div>

      </fieldset>

      <fieldset class="form-group row">

        <legend class="col-form-legend col-sm-2">Image:</legend>

        <div class="col-sm-12">

          <div class="form-group">

            <label for="photo">Choose movie photo</label>

            <input type="file" class="form-control" name="photo" required="true" />


            <span><small><em>File must be .jpg or .png</em></small></span><br>

            <span><small><em>Image must be smaller than 900KB</em></small></span>

          </div>

        </div>

      </fieldset>




      <button type="submit" value="submit" class="btn btn-secondary row">Add Movie</button>

      <a href="index.php">cancel</a>

    </form>

    <div class="filler-container">

    </div>

    </div> <!-- End Container -->

    <?php include 'footer.php';?>

  </body>

</html>