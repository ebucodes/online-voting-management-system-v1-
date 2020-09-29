  <!-- Navigation -->
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow ">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Alpha Simple Voting System</a>
    <button  class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-top-links navbar-right">
      <!-- To show the user's details on the nav bar -->
      <?php 
        require ("./config.php");

        $query = "SELECT * FROM users WHERE users_id ='$_SESSION[users_id]'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="#" style = "color:white;">
          <i class="fa fa-user"></i>  <?php echo $user_row['firstname']." ".$user_row['lastname']; ?>
        </a>
      </li>
    </ul>
    
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
      </li>
    </ul>
  </nav>
<!-- /Navigation -->