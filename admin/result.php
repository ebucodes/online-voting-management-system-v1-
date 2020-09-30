<?php include("./session.php"); ?>
<?php include("./header.php"); ?>
<body>
<?php include("./nav.php"); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2" style="text-align:center;"><i class="fa fa-fw fa-list-alt"></i> View Election Result</h1>
        </div>
        <div class="card">
             <h4 class="card-header bg-secondary" align="center">View Election Result</h4>
            <div class="card-body">
                <form action="sort.php" method="post">
                    <div class="form-group">
                        <select name="position" id="position" class = "form-control custom-select" style = "width:300px;">
							<option readonly> --- Select by Position --- </option>
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
                         <button id="sort" class="btn btn-warning">SORT</button>
                         <button type="button" onclick="window.print();" style="margin-right:14px;" id ="print" class="pull-right btn btn-success"><i class = "fa fa-print"></i> Print Out Result</button>
                    </div>
                </form>
                <hr>
                <div class="table-responsive">
                <!-- Center Forward -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Center Forward (CF)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Center Forward (CF)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Left Winger Forward (LWF) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Left Winger Forward (LWF)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Left Winger Forward (LWF)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Right Winger Forward (RWF) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Right Winger Forward (RWF)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Right Winger Forward (RWF)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Attacking Midfielder (AMF) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Attacking Midfielder (AMF)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Attacking Midfielder (AMF)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Center Midfielder (CMF) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Center Midfielder (CMF)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Center Midfielder (CMF)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Defensive Midfielder (DMF) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Defensive Midfielder (DMF)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Defensive Midfielder (DMF)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Center Back 1 (CB 1) -->
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Center Back 1 (CB 1)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Center Back 2 (CB 2) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Center Back 2 (CB 2)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Center Back 2 (CB 2)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Left Back (LB) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Left Back (LB)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Left Back (LB)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Right Back (RB) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Right Back (RB)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Right Back (RB)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Goal Keeper (GK) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Goal Keeper (GK)</h4>
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
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Goal Keeper (GK)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>National Team: </b><?php echo $fetch ['country'];?></p>
								<p><b>Football Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>

            </div>
            </div>
        </div>
    </div>
</main>   
</body>
</html>