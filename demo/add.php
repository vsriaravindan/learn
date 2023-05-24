<?php

include('db.php');

if(isset($_POST['submit'])){

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

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	//medical report upload

  	$mr = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "upload_images/";
    $new_name = $path.time()."_".$mr;
    $mr = time()."_".$mr;

  	$insert_data = "INSERT INTO doctorapp(fname, password, email, docapp, dob, age, gender, weight, height, bg, prof, mobile, prog, image,mr) VALUES ('$u_f_name','$u_password','$u_email','$u_trainer','$u_birthday', '$u_age','$u_gender','$u_weight','$u_height','$u_bg','$u_prof','$u_phone','$u_prog', '$image','$mr')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		move_uploaded_file($fileTmpName,$new_name);
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>