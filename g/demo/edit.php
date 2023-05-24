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
	
	

	$update = "UPDATE doctorapp SET fname = '$u_f_name', password = '$u_password', email = '$u_email', docapp = '$u_trainer', dob = '$u_birthday', age = '$u_age', gender = '$u_gender', weight = '$u_weight', height = '$u_height', bg = '$u_bg', mobile = '$u_mobile', prog = '$u_prog' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:index.php');
	}else{
		echo "Data not update";
	}
}

?>