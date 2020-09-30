<?php include ("session.php"); ?>
<?php include ("header.php"); ?>
<body>
<?php include ("nav.php"); ?>

  <div class="container-fluid">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      
      <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="text-align:center;"><i class="fa fa-users"></i> Manage Candidates</h1>
      </div>

      <div class="card">
        <h4 class="card-header" align="center">Add New Candidate</h4>
        <div class="card-body">
        <button type="button" href="#addCandidate" data-toggle="modal" class="btn btn-info"><i class="fa fa-plus-circle"></i> Add New Candidate</button>
        <?php include("add_candidate.php"); ?>
        </div>
      </div>
      <br>

      <div class="card table-responsive">
        <h4 class="card-header" align="center"> Manage Candidates </h4>
        <div class="card-body">
        <table id="table" class="table table-bordered table-striped table-sm">
          <thead>
            <tr class="table-primary">
              <th scope="col">Position</th>
              <th scope="col">Firstname</th>
              <th scope="col">Lastname</th>
              <th scope="col">Country</th>
              <th scope="col">Club</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php 
                  require ("./conn.php");
                  //$bool = false;
                  $query = $conn->query("SELECT * FROM candidate ORDER BY candidate_id ASC");
                  while ($row = $query->fetch_array()) {
                    $candidate_id=$row["candidate_id"];
                ?>
                <td> <?php echo $row["position"]; ?> </td>
                        <td> <?php echo $row["firstname"]; ?> </td>
                        <td> <?php echo $row["lastname"]; ?> </td>
                        <td> <?php echo $row["country"]; ?> </td>
                        <td> <?php echo $row["club"]; ?> </td>
                        <td> <img src="<?php echo $row["img"]; ?>" width="100" height="100" class="img-rounded"></td>
                        <td width="180">
                          <button type="button" rel="tooltip"  title="Edit Candidate"  href="#edit<?php echo $row["candidate_id"]; ?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</button>
                          <?php include ("edit_candidate.php"); ?>
                          <button type="button" rel="tooltip"  title="Delete Candidate" href="#del<?php echo $row["candidate_id"]; ?>" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></button>
                          <?php include 'delete_candidate.php'; ?>
                        </td>
              </tr>
              <?php
                  }
                ?>
            </tr>
          </tbody>
        </table>
        </div>
      </div>

    </main>
  </div>
</body>
</html>