<?php

include('db.php');

if(isset($_POST['pat_submit'])){

	$u_f_name = $_POST['fname'];
	$u_password = $_POST['password'];
	$u_trainer = $_POST['docapp'];
	$u_birthday = $_POST['dob'];
	$u_gender = $_POST['gender'];
	$u_email = $_POST['email'];
	$u_phone = $_POST['mobile'];
	$u_weight = $_POST['weight'];
	$u_height = $_POST['height'];
	$u_age = $_POST['age'];
	$u_bg = $_POST['bg'];
	$u_prof = $_POST['prof'];
	$u_prog = $_POST['prog'];


	

  	$insert_data = "INSERT INTO doctorapp(fname, password, email, docapp, dob, age, gender, weight, height, bg, prof, mobile, prog) VALUES ('$u_f_name','$u_password','$u_email','$u_trainer','$u_birthday', '$u_age','$u_gender','$u_weight','$u_height','$u_bg','$u_prof','$u_phone','$u_prog')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		
  		header('location:admin-panel.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>