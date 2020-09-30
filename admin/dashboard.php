<?php include ("session.php");?>
<?php include ("header.php");?>
<body>
<?php include ("nav.php"); ?>

  <div class="container">
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="text-align:center;"><i class="fa fa-fw fa-dashboard"></i> Dashboard</h1>
      </div>
      <!-- Row -->
      <div class="row">
        <!-- Icon Card for Candidates-->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><h5>Candidates</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="candidate.php">
              <span class="float-left">View Candidates</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
            </div>
          </div>
          <!-- /Icon Card for Candidates-->

        <!-- Icon Card for Voters-->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
        <div class="mr-5"><h5>Voters</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="voters.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          <!-- /Icon Card for Voters-->

          <!-- Icon Card for Election Result-->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list-alt"></i>
              </div>
              <div class="mr-5"><h5>Election Result</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="result.php">
              <span class="float-left">View Election Result</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- /Icon Card for Election Result-->


          <!-- Icon Card for Administrators-->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><h5>Admins</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="admin.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
    </div>
    <!-- /Icon Card for Administrators-->

        </div>
        <!-- /Row -->
  </main>
  </div>
</body>
</html>