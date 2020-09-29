<?php include("./session.php"); ?>
<?php include("./header.php"); ?>
<body>
<?php include("./nav.php"); ?>    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" >
        
    <form action="./vote.php" method="post" align="center">
            <div class="container">
                <!-- Center Forward (CF) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" >
                            <h1 class="h4 card-header text-white bg-info">Candidates For Center Forward</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Center Forward (CF)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cf" class="cf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Left Winger Forward (LWF) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Left Winger Forward (LWF)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Left Winger Forward (LWF)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="lwf" class="lwf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Right Winger Forward (RWF) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Right Winger Forward (RWF)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Right Winger Forward (RWF)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="rwf" class="rwf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Attacking Midfielder (AMF) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Attacking Midfielder (AMF)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Attacking Midfielder (AMF)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="amf" class="amf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Center Midfielder (CMF) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Center Midfielder (CMF)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Center Midfielder (CMF)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cmf" class="cmf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Defensive Midfielder (DMF) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Defensive Midfielder (DMF)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Defensive Midfielder (DMF)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="dmf" class="dmf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Center Back 1 (CB 1) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Center Back 1 (CB 1)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Center Back 1 (CB 1)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cb_1" class="cb_1" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Center Back 2 (CB 2) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Center Back 2 (CB 2)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Center Back 2 (CB 2)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cb_2" class="cb_2" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Left Back (LB) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Left Back (LB)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Left Back (LB)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="lb" class="lb" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Right Back (RB) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Right Back (RB)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Right Back (RB)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="rb" class="rb" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Goal Keeper (GK) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Goal Keeper (GK)</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Goal Keeper (GK)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>National Team: </b><?php echo $fetch["country"];?><br>
                                <b>Football Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="gk" class="gk" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" align="center">
                    <div class="col-lg-6">
                        <button class = "btn btn-success" type = "submit" name = "submitVote"> SUBMIT VOTE </button>    
                    </div>
                </div>
            </div>
        </form>
        
    </main>
    <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>