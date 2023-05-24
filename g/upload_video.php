<!DOCTYPE html >
<html>
<head>
<title>video upload</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>

<div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             </div></div>
             <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
         	<div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
    <h3><a style="color: white; font-size: 40px;" href="video.php">UPLOAD VIDEOS</a></h3>
    </div> 
        <div class="card-body"></div>

<form  action="upload_video.php" method="post" enctype="multipart/form-data">
<label>Member Name</label>
<input type="text" name="v_id" class="form-control" /><br><br><br>
<input type="file" name="file" class="btn btn-primary" />
<input type="submit" class="btn btn-primary" value=	"UPLOAD" name="upload" />
</form>

 </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>

</body>
</html>

<?php

include ('db.php');

if (isset($_POST['upload'])){

$id = $_POST['v_id'];

$location='C:/xampp/htdocs/g/videos/';

$name = $_FILES['file']['name'];

$tmp = $_FILES['file']['tmp_name'];

$size=$_FILES['file']['size'];

if ($size > 104857600) {
	echo "File is too large";
}
else
{
$sql = "INSERT INTO video(id,name) VALUES ('$id','$name')";

$res =  mysqli_query($con, $sql);

move_uploaded_file($tmp, $location . $name);
}

if ($res == 1){

    echo "<h1> video inserted successfully </h1>";
}
}
?>
