<?php include ("session.php"); ?>
<?php include ("header.php"); ?>
<body>
<?php include ("nav.php"); ?>

  <div class="container">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      
      <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="text-align:center;"><i class="fa fa-users"></i> Administrators</h1>
      </div>

      <div class="card">
        <h4 class="card-header" align="center">Add New Administrators</h4>
        <div class="card-body">
          <button data-target="#addAdmin" class="btn btn-info" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add Administrators</button>
          <?php include("add_admin.php"); ?>
        </div>
      </div>
      <br>

      <div class="card table-responsive">
        <h4 class="card-header" align="center"> Manage Administrators</h4>
        <table id="table" class="table table-striped table-bordered">
          <thead>
            <tr class="table-primary">
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php 
                require ("./conn.php");
                //$bool = false;
                $query = $conn->query("SELECT * FROM admin ORDER BY admin_id DESC");
                while ($row = $query->fetch_array()) {
                  $admin_id=$row["admin_id"];
              ?>
              <td><?php echo $row ["firstname"];?></td>
              <td><?php echo $row ["lastname"];?></td>
              <td><?php echo $row ["username"];?></td>
              <td><?php echo $row ["password"];?></td>
              <td align="center">
              <a rel="tooltip"  title="Edit Administrators"  href="#edit<?php echo $row["admin_id"]; ?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a>
            <?php include ("edit_admin.php");?>
            <a rel="tooltip"  title="Delete Administrators" href="#del<?php echo $row["admin_id"]; ?>" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
            <?php include ("delete_admin.php");?> 
            </td>
            </tr>
            <?php
                }
              ?>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</body>
</html>