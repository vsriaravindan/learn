<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            
            <hr>
            <div class="list-group" style="height: 800px;">
              <a href="trainer.php" class="list-group-item active">Profile</a>
              <a href="trainer.php" class="list-group-item active">Diet</a>             
              <a href="trainer.php" class="list-group-item active">Workout</a>
              <a href="trainer.php" class="list-group-item active">Payment</a>
            </div>      
            
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">

    <label>first name:</label>
    <input type="text" name="fname" class="form-control"><br>

    <label>last name:</label>
    <input type="text" name="lname" class="form-control"><br> 

    <label>email</label>
    <input type="email" name="email" class="form-control"><br>

    <label>Member ID</label>
    <input type="text" name="contact" class="form-control"><br> 

    <label>Trainer </label> 
    <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>

    <label>DOB</label>
    <input type="date"  name="dob" class="form-control"><br>

    <label>Age</label>
    <input type="text" name="age" class="form-control"><br>

    <label>Gender</label>
    <input type="text" name="gender" class="form-control"><br>

    <label>Weight</label>
    <input type="text" name="weight" class="form-control"><br>

    <label>Height</label>
    <input type="number" name="height" class="form-control"><br>

    <label>Blood Group</label>
    <input type="text" name="bg" class="form-control"><br>

    <label>Profession</label>
    <input type="text" name="prof" class="form-control"><br>

    <label>Mobile No.</label>
    <input type="number" name="mobile" class="form-control"><br>

    <label>Program</label>
    <input type="text" name="program" class="form-control"><br>
                                        
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
				              <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
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