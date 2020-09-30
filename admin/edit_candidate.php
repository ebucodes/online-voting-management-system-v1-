<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['candidate_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                	<h4 class="modal-title h3 mb-3 font-weight-normal" id="myModalLabel">Edit Candidate</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
				$edit=mysqli_query($conn,"SELECT * FROM candidate WHERE candidate_id='".$row['candidate_id']."'");
				$edit_row=mysqli_fetch_array($edit);
				?>
				<div class="container">
				<form class="form-signin" method="POST" enctype="multipart/form-data" action="edit.php?candidate_id=<?php echo $edit_row['candidate_id']; ?>">
					<div class="form-group row">
						<label class="lead">Position</label>
						<select class="form-control" name="position" required autofocus>
							<option><?php echo $edit_row['position'];?></option>
							<option>Center Forward (CF)</option>
							<option>Left Winger Forward (LWF)</option>
							<option>Right Winger Forward (RWF)</option>
							<option>Attacking Midfielder (AMF)</option>
							<option>Center Midfielder (CMF)</option>
							<option>Defensive Midfielder (DMF)</option>
							<option>Center Back 1 (CB 1)</option>
							<option>Center Back 2 (CB 2)</option>
							<option>Left Back (LB)</option>
							<option>Right Back (RB)</option>
							<option>Goal Keeper (GK)</option>
						</select>
					</div>

					<div class="form-group row">
						<label class="lead">Firstname</label>
					<input type="text" name="firstname" class="form-control" value="<?php echo $edit_row['firstname']; ?>">
					</div>

					<div class="form-group row">
						<label class="lead">Lastname</label>
						<input type="text" name="lastname" class="form-control" value="<?php echo $edit_row['lastname']; ?>">
					</div>
					
					<div class="form-group row">
						<label class="lead">National Team</label>
						<input type="text" name="country" class="form-control" value="<?php echo $edit_row['country']; ?>">
					</div>

					<div class="form-group row">
						<label class="lead">Football Club</label>
						<input type="text" name="club" class="form-control" value="<?php echo $edit_row['club']; ?>">
					</div>

					<div class="form-group row">
						<div class="input-group mb-3">
							<div class="custom-file">
        						<input type="file" name="image" class="custom-file-input" value="<?php echo $edit_row['img']; ?>">
        				<label class="custom-file-label lead">Choose file</label>
      						</div>
						</div> 
                    </div>


                </div> 
				</div>
                <div class="modal-footer">
				<button type="submit" name="editCandidate" class="btn btn-success"><i class="fa fa-save">&nbsp;</i> Update Candidate</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
                    
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->