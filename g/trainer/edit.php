<?php
include('db.php');

$id = $_GET['Trainer_id'];

if(isset($_POST['submit']))
{
	$u_id = $_POST['Trainer_id'];
	$u_f_name = $_POST['Name'];
	$u_qua = $_POST['qua'];
	$u_birthday = $_POST['dob'];
	$u_gender = $_POST['gender'];
	$u_email = $_POST['email'];
	$u_mobile = $_POST['phone'];

	$u_address = $_POST['address'];
	$u_aadhar = $_POST['aadhar'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE trainer SET Trainer_id = '$u_id', Name = '$u_f_name', phone = '$u_mobile',email = '$u_email', dob = '$u_birthday', qua = '$u_qua', address = '$u_address', gender = '$u_gender',aadhar = '$u_aadhar',image = '$image' WHERE Trainer_id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:trainer.php');
	}else{
		echo "Data not update";
	}
}

?>