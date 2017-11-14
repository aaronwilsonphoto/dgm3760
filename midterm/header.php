    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <a class="navbar-brand" href="index.php">Innova Digital</a>



      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

          <li <?php echo ($page == 'viewEmployees') ? 'class="active nav-item"' : '';?>>

            <a class="nav-link" href="viewEmployees.php">Employee Directory</a>

          </li>

          <li <?php echo ($page == 'addEmployee') ? 'class="active nav-item"' : '';?>>

            <a class="nav-link" href="addEmployee.php">Add Employee</a>

          </li>


        </ul>

        <form class="form-inline my-2 my-lg-0">

          <input class="form-control mr-sm-2" type="text" placeholder="Search">

          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

        </form>

      </div>

    </nav>