<?php

include('db.php');
$id = $_GET['id'];
$delete = "DELETE FROM trainer WHERE Trainer_id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:trainer.php');
}else{
	echo "Do not Delete";
}


?>