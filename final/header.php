    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <a class="navbar-brand" href="index.php">ok.com</a>



      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

          <li <?php echo ($page == 'index') ? 'class="active nav-item"' : '';?>>

            <a class="nav-link" href="index.php">Movies</a>

          </li>

          <li <?php echo ($page == 'searchMovies') ? 'class="active nav-item"' : '';?>>

            <a class="nav-link" href="searchMovies.php">Search</a>

          </li>
          
          <li <?php echo ($page == 'review') ? 'class="active nav-item"' : '';?>>

            <a class="nav-link" href="review.php">Review</a>

          </li>

          <li <?php echo ($page == 'admin') ? 'class="active nav-item"' : '';?>>

            <a class="nav-link" href="admin.php">Admin</a>

          </li>

        </ul>

        <form class="form-inline my-2 my-lg-0">

          <p class="login1">Hello,

          <?php 

          if (isset($_COOKIE["username"])) {
			  
            echo $_COOKIE["first"].' '.$_COOKIE["last"];

            echo ' | <a href="logout.php" class="login">Logout</a>';


          } else {

			echo '<a href="login.php" class="login">Login</a>'; 

          } // end if

          ?>

          </p>

        </form>

      </div>

    </nav>