<?php

include('db.php');

if(isset($_POST['submit'])){
	$u_id = $_POST['Trainer_id'];
	$u_f_name = $_POST['Name'];
	$u_qua = $_POST['qua'];
	$u_birthday = $_POST['dob'];
	$u_gender = $_POST['gender'];
	$u_email = $_POST['email'];
	$u_mobile = $_POST['phone'];
	$u_cert = $_POST['cert'];
	$u_address = $_POST['address'];
	$u_aadhar = $_POST['aadhar'];

   	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    //Certificate upload

    $cert = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "upload_images/".$cert;
    
  	$insert_data = "INSERT INTO trainer(Trainer_id,Name,phone, email,dob, qua,image,cert, address, gender, aadhar) VALUES ('$u_id','$u_f_name','$u_mobile','$u_email','$u_birthday', '$u_qua', '$image','$cert', '$u_address','$u_gender','$u_aadhar')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
      move_uploaded_file($fileTmpName,$path);
  		header('location:trainer.php');
  	}else{
  		echo "Data not insert";
  	}

}

	
?>