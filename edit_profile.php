<?php include('db.php'); ?> 

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
<!----edit Data--->

<?php

$q=mysqli_query($con,"SELECT * FROM doctorapp where fname='$_SESSION[userid]' ;");

$row=mysqli_fetch_assoc($q);

                
	$id = $row['id'];
	$name = $row['fname'];
	$password = $row['password'];
	$gender = $row['gender'];
	$email = $row['email'];
	$Bday = $row['dob'];
	$Weight = $row['weight'];
	$Height = $row['height'];
	$mobile = $row['mobile'];
	$age = $row['age'];
	$bg = $row['bg'];
	$trainer = $row['docapp'];
	$prog = $row['prog'];
	
	$image = $row['image'];
	echo "

<div id='edit$id'  role='dialog'>
  <div class=>

    <!-- Modal content-->
    <div >
      <div >
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='#' method='post' enctype='multipart/form-data'>

		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='firstname'>Name</label>
		<input type='text' class='form-control' name='fname' placeholder='Enter First Name' value='$name'>
		</div>
		<div class='form-group col-md-6'>
		<label for='firstname'>Password</label>
		<input type='text' class='form-control' name='password' placeholder='Enter First Name' value='$password'>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>Mobile No.</label>
		<input type='phone' class='form-control' name='mobile' placeholder='Enter 10-digit Mobile no.' maxlength='10' value='$mobile' required>
		</div>
		<div class='form-group col-md-6'>
		<label for='email'>Email Id</label>
		<input type='email' class='form-control' name='email' placeholder='Enter Email id' value='$email'>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='weight'>Weight</label>
		<input type='text' class='form-control' name='weight' placeholder='Enter First Name' value='$Weight'>
		</div>
		<div class='form-group col-md-6'>
		<label for='height'>Height</label>
		<input type='text' class='form-control' name='height' placeholder='Enter Last Name' value='$Height'>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='fathername'>Age</label>
		<input type='text' class='form-control' name='age' placeholder='Enter First Name' value='$age'>
		</div>
		<div class='form-group col-md-6'>
		<label for='mothername'>Blood Group</label>
		<input type='text' class='form-control' name='bg' placeholder='Enter Last Name' value='$bg'>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputState'>Gender</label>
		<select id='inputState' name='gender' class='form-control' value='$gender'>
		  <option selected>$gender</option>
		  <option>Male</option>
		  <option>Female</option>
		  <option>Other</option>
		</select>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>Date of Birth</label>
		<input type='date' class='form-control' name='dob' placeholder='Date of Birth' value='$Bday'>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputState'>Trainer</label>
		<input type='text' class='form-control' name='docapp' placeholder='Date of Birth' value='$trainer'>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>Program</label>
		<select id='inputState' name='prog' class='form-control' value='$prog'>
		  <option selected>$prog</option>
		  <option>Body Building</option>
		  <option>Weight Gain</option>
		  <option>Weight Loss</option>
		</select>
		</div>
		</div>


        	<div class='form-group'>
        		<label>Image</label>
        		<input type='file' name='image' class='form-control'>
        		<img src = 'demo/upload_images/.$image' style='width:50px; height:50px'>
        	</div>

        	
        	
			 <div class='modal-footer'>
			 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
			 <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		 </div>


        </form>
      </div>

    </div>

  </div>
</div>


	";
 


?>





<?php
include('db.php');

$id = $_GET['id'];

if(isset($_POST['submit']))
{
	
	$u_f_name = $_POST['fname'];
	$u_password = $_POST['password'];
	$u_trainer = $_POST['docapp'];
	$u_birthday = $_POST['dob'];
	$u_gender = $_POST['gender'];
	$u_email = $_POST['email'];
	$u_mobile = $_POST['mobile'];
	$u_weight = $_POST['weight'];
	$u_height = $_POST['height'];
	$u_age = $_POST['age'];
	$u_bg = $_POST['bg'];
	$u_prog = $_POST['prog'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "demo/upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE doctorapp SET fname = '$u_f_name', password = '$u_password', email = '$u_email', docapp = '$u_trainer', dob = '$u_birthday', age = '$u_age', gender = '$u_gender', weight = '$u_weight', height = '$u_height', bg = '$u_bg', mobile = '$u_mobile', prog = '$u_prog', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		echo "Data updated";
	}else{
		echo "Data not update";
	}
}

?>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

</body>
</html>
