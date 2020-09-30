<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['candidate_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-3 font-weight-normal" id="myModalLabel">NOTICE!!!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <form class="form-signin" method="POST" enctype="multipart/form-data" action="delete.php?candidate_id=<?php echo $row['candidate_id']; ?>">
                 <?php
                    $del=mysqli_query($conn,"SELECT * FROM candidate WHERE candidate_id='".$row['candidate_id']."'");
                    $delete_row=mysqli_fetch_array($del);
                 ?>
            <div class="container-fluid">
                <p class="lead">
                Are you sure you want to delete <b style="text-transform: uppercase;"><?php echo $delete_row['firstname']." ".$delete_row['lastname']; ?></b> from the Candidates list?
                </p>              
             </div> 
                
             <div class="modal-footer">
               <button type="submit" class="btn btn-danger" name="deleteCandidate"><i class="fa fa-trash"></i> Delete</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close">&nbsp;</i> Cancel</button>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->
