<!-- Add New Admin -->
    <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                	<h4 class="modal-title lead" id="myModalLabel">Add New Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form class="form-signin" method="POST" enctype="multipart/form-data">

					<div class="form-group row">
						<label class="lead">Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please New Administrator's Firstname" required autofocus>
					</div>
					
					<div class="form-group row">
						<label class="lead">Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please Enter  New Administrator's Lastname" required autofocus>
					</div>
											
					<div class="form-group row">
						<label class="lead">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Please Enter  New Administrator's Username" required autofocus>
					</div>
															
					<div class="form-group row">
						<label class="lead">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Please Enter  New Administrator's Password" required autofocus>
					</div>	
                </div> 
				</div>
                <div class="modal-footer">
                	<button type="submit" name="add" class="btn btn-success"><i class="fa fa-save">&nbsp;</i> Add New Admin</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
                    
                </div>
				</form>
				<?php 
				if (isset($_POST['add'])) {
				$firstname=$_POST['firstname'];
				$lastname=$_POST['lastname'];
				$username=$_POST['username'];
				$password=$_POST['password'];

		$sql = "SELECT username FROM admin WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		if (mysqli_num_rows($result) == 1) {

		echo'<script> alert("Username already taken.");</script>';
		}

		else{
			$query =mysqli_query($conn,"INSERT INTO admin (firstname, lastname, username, password) VALUES('$firstname', '$lastname','$username','$password')");

		if ($query) { 
				header('location:admin.php');

		}
	}

}

				?>
            </div>
        </div>
    </div>
<!-- /.modal -->
