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

    <title>Send Message</title>
  </head>
  <body>

  <div class="jumbotron">
    <div class="container">
    <h1>Aaron Wilson Photo</h1>
    </div>
  </div>

    <div class="container">
    <br />
    <h2>Send a Message</h2>
    <hr />
    <br />

    <form action='sendMessage.php' method='POST' enctype='multipart/form-data'>

      <fieldset class="form-group row">
        <legend class="col-form-legend col-sm-2">Send to Mailing List</legend>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" name="subject" value="" placeholder="Subject" required="true" />
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <input type="textarea" class="form-control" name="message" value="" placeholder="Type your message here..." required="true" />
          </div>
        </div>
      </fieldset>

      <button type="submit" value="submit" class="btn btn-secondary form-group row">Send</button>
    </form>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </div> <!-- End Container -->

  <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">&copy; 2017 | Aaron Wilson Photo</a>
      </div>
    </div>
  </nav>

  </body>
</html>