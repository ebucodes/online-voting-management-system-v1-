<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['admin_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                	<h4 class="modal-title lead" id="myModalLabel">Edit Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"SELECT * FROM admin WHERE admin_id='".$row['admin_id']."'");
					$edit_row=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form class="form-signin" method="POST" enctype="multipart/form-data" action="edit.php?admin_id=<?php echo $edit_row['admin_id']; ?>">
					<div class="form-group row">
						<label class="lead">Firstname</label>
					<input type="text" name="firstname" class="form-control" value="<?php echo $edit_row['firstname']; ?>">
					</div>

					<div class="form-group row">
						<label class="lead">Lastname</label>
						<input type="text" name="lastname" class="form-control" value="<?php echo $edit_row['lastname']; ?>">
					</div>
					
					<div class="form-group row">
						<label class="lead">Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $edit_row['username']; ?>">
					</div>

					<div class="form-group row">
						<label class="lead">Password</label>
						<input type="text" name="password" class="form-control" value="<?php echo $edit_row['password']; ?>">
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                	<button type="submit" name="editAdmin" class="btn btn-success"><i class="fa fa-save">&nbsp;</i> Update Admin</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
                    
                </div>
				</form>

            </div>
        </div>
    </div>
<!-- /.modal -->
