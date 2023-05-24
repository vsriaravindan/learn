<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
      
   
       
 <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active"
                   >Members</a>
                <a href="demo/index.php" class="list-group-item">Member details</a>
                <a href="demo/report.php" class="list-group-item">Medical Report</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="trainer/trainer.php" class="list-group-item active">Trainer</a>
              <a href="trainer/trainer.php" class="list-group-item">Trainer details</a>     
              <a href="trainer/trainer.php" class="list-group-item">Add new Trainer</a>
              <a href="trainer/certificate.php" class="list-group-item">Certificates</a>
            </div>
            <hr>
            <div>
              <a href="payment.php" class="list-group-item active">Payments</a>
              <a href="package.php" class="list-group-item">Package details</a>
              <a href="dietplan.php" class="list-group-item">Diet Plan</a>
              <a href="upload_video.php" class="list-group-item">Video</a>
            </div>      
            
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="add.php" method="post">

    <label>Username :</label>
    <input type="text" name="fname" class="form-control" required=""><br>

    <label>Password :</label>
    <input type="password" name="password" class="form-control" required=""><br> 

    <label>Email :</label>
    <input type="email" name="email" class="form-control" required=""><br> 

    <label>Trainer :</label> 
    <select class="form-control" name="docapp" required="">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>

    <label>DOB :</label>
    <input type="date"  name="dob" class="form-control" required=""><br>

    <label>Age :</label>
    <input type="text" name="age" class="form-control" required=""><br>

    <label>Gender :</label>
    <select name="gender" class="form-control" required="">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
    </select><br>

    <label>Weight :</label>
    <input type="text" name="weight" class="form-control" required=""><br>

    <label>Height :</label>
    <input type="number" name="height" class="form-control" required=""><br>

    <label>Blood Group :</label>
    <input type="text" name="bg" class="form-control" required=""><br>

    <label>Profession :</label>
    <input type="text" name="prof" class="form-control" required=""><br>

    <label>Mobile No. :</label>
    <input type="text" name="mobile" class="form-control" required=""><br>

    <label>Program :</label>
    <select name="prog" class="form-control" required="">
    <option value="Body Building">Body Building</option>
    <option value="Weight Gain">Weight Gain</option>
    <option value="Weight Gain">Weight Loss</option>
    </select><br>

                                        
  <input type="submit" class="btn btn-primary" name="pat_submit" value="Register">                  <a href="func.php" class="btn btn-light"></a>
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="signin.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   