<?php include("./session.php"); ?>
<?php include("./header.php"); ?>
<body>
    <?php include("./nav.php");?>
    <br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
                <div class="card">
                <?php
				    require("./conn.php");
									
					$position = $_POST['position'];
                    $sort = $position;
                    $query = "SELECT * FROM candidate WHERE position = '$sort'";
                    $result = mysqli_query($conn,$query);
                    $row = mysqli_fetch_array($result);
                    if ($row) { 
                ?>
                <h4 class="card-header bg-success" align="center"><?php echo $row ["position"];?></h4>
                        <?php } else {
                            echo "<h4 class='card-header bg-danger' align='center'>You have not selected a candidate.<br>Select <strong>Back</strong> to choose a candidate</h4>";
                        }?>
                    <div class="card-body">
                        <a href="result.php" id="back" class = "btn btn-warning" ><i class="fa fa-arrow-left"></i> Back</a>
                        <button onclick="window.print();" style="margin-right:14px; margin-bottom:12px;" id="print" class="pull-right btn btn-info"><i class="fa fa-print"></i> Print</button>
                        <div class="table-responsive-lg">
                            <table class="table table-hover table-striped table-bordered">
							<thead>
                        		<tr class="table-info">
                            		<th scope="col">Name</th>
                            		<th scope="col">Details</th>
									<th scope="col">Image</th>
                            		<th scope="col">Total Votes</th>
                        		</tr>
                    		</thead>
                                <?php 
                                    require("./conn.php");
                                    $position = $_POST['position'];
		                            $sort = $position;
		                            $query = $conn->query("SELECT * FROM candidate WHERE position = '$sort'");
                                    while($fetch = $query->fetch_array()) 
                                    {
			                            $id = $fetch["candidate_id"];
			                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
                                        $fetch1 = $query1->fetch_assoc();
        
                                ?>
                                <tbody>
                                    <tr>
                                    <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
									<td>
										<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
										<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                                    <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                                    <td scope="row"><h6><?php echo $fetch1 ['total'];?></h6></td>
                                    </tr>
                                </tbody>
                                <?php
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </main>
</body>