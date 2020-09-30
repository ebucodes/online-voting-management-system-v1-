<?php include ("session.php"); ?>
<?php include ("header.php"); ?>
<body>
<?php include ("nav.php"); ?> 

  <div class="container">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2" style="text-align:center;"><i class="fa fa-users"></i> Manage Voters</h1>
      </div>

      <div class="card">
        <h4 class="card-header" align="center">Add New Voter</h4>
          <div class="card-body">
            <a href="register.php" class="btn btn-info"><i class="fa fa-plus-circle"></i> Add New Voter</a>
          </div>
      </div>
      <br>

      <div class="card table-responsive">
        <h4 class="card-header" align="center">Voters List</h4>
          <div class="card-body">
            <table id="table" class="table table-striped table-bordered">
              <thead>
                <tr class="table-primary">
                  <th scope="col">Firstname</th>
                  <th scope="col">Lastname</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">Password</th>
                </tr>
              </thead>
              <tbody>
                <tr>
              <?php 
                require ("./conn.php");
                //$bool = false;
                $query = $conn->query("SELECT * FROM users ORDER BY users_id ASC");
                while ($row = $query->fetch_array()) {
                  $user_id=$row["users_id"];
              ?>
              <td><?php echo $row ["firstname"];?></td>
              <td><?php echo $row ["lastname"];?></td>
              <td><?php echo $row ["email_address"];?></td>
              <td><?php echo $row ["password"];?></td>
            </tr>
            <?php
                }
              ?></tr>
              </tbody>
            </table>
          </div>
      </div>

    </main>
  </div>
</body>
</html>