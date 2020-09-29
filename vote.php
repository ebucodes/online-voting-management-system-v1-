<?php include("./session.php") ?>
<?php include("./header.php") ?>
<body>
<?php include("./nav.php"); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-auto">
		<?php
			if(isset($_POST['submitVote']))
				{
					if(!isset($_POST['cf']))
					{
						$_SESSION['cf'] = "";
					}
					else
					{
						$_SESSION['cf'] = $_POST['cf'];
					}
					if(!isset($_POST['lwf']))
					{
						$_SESSION['lwf'] = "";
					}
					else
					{
						$_SESSION['lwf'] = $_POST['lwf'];
					}
					if(!isset($_POST['rwf']))
					{
						$_SESSION['rwf'] = "";
					}
					else
					{
						$_SESSION['rwf'] = $_POST['rwf'];
					}
					if(!isset($_POST['amf']))
					{
						$_SESSION['amf'] = "";
					}
					else
					{
						$_SESSION['amf'] = $_POST['amf'];
					}
					if(!isset($_POST['cmf']))
					{
						$_SESSION['cmf'] = "";
					}
					else
					{
						$_SESSION['cmf'] = $_POST['cmf'];
					}
					if(!isset($_POST['dmf']))
					{
						$_SESSION['dmf'] = "";
					}
					else
					{
						$_SESSION['dmf'] = $_POST['dmf'];
					}
					if(!isset($_POST['cb_1']))
					{
						$_SESSION['cb_1'] = "";
					}
					else
					{
						$_SESSION['cb_1'] = $_POST['cb_1'];
					}
					if(!isset($_POST['cb_2']))
					{
						$_SESSION['cb_2'] = "";
					}
					else
					{
						$_SESSION['cb_2'] = $_POST['cb_2'];
					}
					if(!isset($_POST['lb']))
					{
						$_SESSION['lb'] = "";
					}
					else
					{
						$_SESSION['lb'] = $_POST['lb'];
					}
					if(!isset($_POST['rb']))
					{
						$_SESSION['rb'] = "";
					}
					else
					{
						$_SESSION['rb'] = $_POST['rb'];
					}
					if(!isset($_POST['gk']))
					{
						$_SESSION['gk'] = "";
					}
					else
					{
						$_SESSION['gk'] = $_POST['gk'];
					}
				}
		?>
                </div>
            </div>
        </div>
        <h4 class="card-header bg-info" align="center">YOUR POLLS</h4><br>
        <div class="container-fluid" align="center">
                <!-- Center Forward -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center"  style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Center Forward</h5>
                        <div class="card-body">
                            <?php
                                if ($_SESSION["cf"]) {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cf]'")->fetch_array();
                                    ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                    
                                <?php
                                
                                } else {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                }
                            ?>
                            </div>
                    </div>
                </div>
                <br> 
                <!-- Left Winger Forward -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Left Winger Forward</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["lwf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lwf]'")->fetch_array();
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 

                                <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                <!-- Right Winger Forward -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Right Winger Forward</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["rwf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[rwf]'")->fetch_array();
                                    ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <?php
                                 }
                            ?>
                           </div>
                    </div>
                </div>
                <br> 
                <!-- Attacking Midfielder -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Attacking Midfielder</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["amf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[amf]'")->fetch_array();
                                   ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                   
                            <?php   
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                <!-- Center Midfielder -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Center Midfielder</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["cmf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cmf]'")->fetch_array();
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                            <?php
                                }
                            ?>
                            </div>
                    </div>
                </div>
                <br> 
                <!-- Defensive Midfielder -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Defensive Midfielder</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["dmf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[dmf]'")->fetch_array();
                            ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                            
                            <?php
                                }
                            ?>
                            </div>
                    </div>
                </div>
                <br> 
                <!-- Center Back 1 -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Center Back 1</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["cb_1"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cb_1]'")->fetch_array();
                            ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                <!-- Center Back 2 -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Center Back 2</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["cb_2"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cb_2]'")->fetch_array();
                            ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                <!-- Left Back -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Left Back</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["lb"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lb]'")->fetch_array();
                            ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                            
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                <!-- Right Back -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Right Back</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["rb"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[rb]'")->fetch_array();
                            ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p>                           
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Goal Keeper -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Goal Keeper</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["gk"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[gk]'")->fetch_array();
                            ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 

                            <?php   
                            }   
                            ?>
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <?php include("./confirm_modal.php"); ?>  
    </main>
</body>
</htm>