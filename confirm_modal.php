<!-- Modal to confirm your vote -->
<center>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">SUBMIT VOTE
</button>
</center>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" >
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Confirm Your Vote</h4>
				<button type="button" class="close" data-dismiss="modal" aria-labelledby="Close"><span aria-hidden="true">&times;</span></button>
				
			</div>
			<div class="modal-body">
				Do you want to confirm this polls as your vote?
			</div>

			<div class="modal-footer">
				<a href = "submit_vote.php">
					<button type="button" class="btn btn-success">Yes</button>
				</a>
				<a href = "vote.php">
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				</a>		
			</div>
		</div>
	</div>	
</div>

<script src="./assets/js/bootstrap/bootstrap.min.js"></script>