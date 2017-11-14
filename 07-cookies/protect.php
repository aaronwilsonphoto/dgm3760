<?php

// MAKE SURE USER IS LOGGED IN

if (!isset($_COOKIE['username'])) {
  echo '<div class="alert alert-danger" role="alert">Please <a href="login.php"> log in</a> to access this page</div>';

  exit();

} // end if

?>