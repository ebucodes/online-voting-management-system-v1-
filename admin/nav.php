  <!-- Navigation -->
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Alpha Voting System</a>
    <button  class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- Welcome user session -->
    <ul class="nav navbar-top-links navbar-right">
      <?php 
        include ("conn.php");

        $query = "SELECT * FROM admin WHERE admin_id ='$_SESSION[admin_id]'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="#" style = "color:white;">
          <i class="fa fa-user"></i> Welcome : <?php echo $admin_row['firstname']." ".$admin_row['lastname']; ?>
        </a>
      </li>
    </ul>
<!-- /Welcome user session -->

<!-- Sign out -->    
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Sign out
        </a>
      </li>
    </ul>
<!-- /Sign out -->
</nav>
<!-- /Navigation -->

<!-- Side bar -->
  <div class="container-fluid">
    <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-fw fa-dashboard"></i>
              Dashboard 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="candidate.php">
              <i class="fa fa-users"></i>
              Candidates
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="voters.php">
              <i class="fa fa-users"></i>
              Voters
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="result.php">
              <i class="fa fa-list-alt"></i>
              Result
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <i class="fa fa-users"></i>
              Administrators
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  </div>
<!-- /Side bar -->
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Sign out" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="index.php">Sign Out</a>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
      </div>
    </div>