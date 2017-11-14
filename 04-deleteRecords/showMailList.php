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

  <title>Remove Users</title>
  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.html">Innova Digital</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="infoRequest.html">Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailList.html">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="makeMessage.php">Send</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="showMailList.php">Delete <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>


  <div class="jumbotron">
    <div class="container">
    <h1>Innova Digital</h1>
    </div>
  </div>

    <div class="container">
    <br />
    <h2>Remove From Mailling List</h2>
    <hr />

    <form action='showMailList.php' method='POST' >

    <?php
    // BUILD THE DATABASE CONNECTION
    $dbconnection = mysqli_connect('localhost', 'root', '@Cages01', 'dgm3760') or die ('connection failed');

    // ----------------------------------- DELETE SELECTED RECORDS ---------------------------------------------
    if (isset($_POST['submit'])) {
      foreach($_POST['todelete'] as $delete_id) {
        $query = "DELETE FROM newsletter WHERE id=$delete_id";

        // TALK TO DATABASE
        $result = mysqli_query($dbconnection, $query) or die ('query failed');
        
        echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        User(s) Deleted Successfully.
        </div>';
      }; // end foreach
    }; // end if
    // -----------------------------------------------------------------------------------------------------------

    // BUILD THE QUERY TO DISPLAY ALL RECORDS
    $query = "SELECT * FROM newsletter ORDER BY first";

    // TALK TO DATABASE
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    // DISPLAY ALL RECORDS
    while($row = mysqli_fetch_array($result)) {
    echo '<div class="delete-container list-group group-area">';
    echo '<label>';
    echo '<input type="checkbox" value="'. $row['id'] .'" name="todelete[]" />';
    echo ' '. $row['first'] .' '. $row['last'] .' - '. $row['email'];
    echo '</label>';
    echo '</div>';
    };

    // CLOSE CONNECTION TO DB
    mysqli_close($dbconnection);
    ?>

      <br>
      <input type="submit" name="submit" value="Remove Users" class="btn btn-secondary row" />
      <a href="index.html">cancel</a>
    </form>

    <div class="filler-container">
    </div>


    </div> <!-- End Container -->

    <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy; 2017 | Aaron Wilson Digital</p>
      </div>
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>