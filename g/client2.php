<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>K2F/Dashboard</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="client.css"> 
</head>
<body style="background: black;">

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="client.php">DASHBOARD</a>
			<h4 ><?php echo $_SESSION['userid']; ?></h4>
			<a href="logout.php" class=" nav nav-link">LOGOUT</a>
		</div>
	</nav>

	<div>
		<img src="user.jpg" style=" width: 150px; height: 150px; border-radius: 50%; overflow:hidden; position: absolute; top: calc(150px/2); left: calc(5% - 50px);">
	</div>

	<div class="row mt-3">
		<div class="col-2">
			<div id="accordion">
				<br><br>

				<br><br><br><br><br>

				<div class="list-group">
					
					<div class="list-group-item bg-dark">
						<a class="collapsed nav-link text-light" href="client.php?info=profile">
							<i class="fas fa-user-alt"></i>  PROFILE
						</a>
					</div>

					<div class="list-group-item bg-dark">
						<a class="collapsed nav-link text-light" href="client.php?info=diet">
							<i class="fas fa-utensils"></i>  DIET PLAN
						</a>
					</div>


					<div class="list-group-item bg-dark">
						<a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseTwo">
							<i class="fas fa-dumbbell"></i>  WORKOUT
						</a>
					</div>
					<div id="collapseTwo" class="collapse" data-parent="#accordion">
						<div class="list-group-item" style="background-color: #303030;">
							<a href="client.php?info=tips" class="text-light">
							<i class="fas fa-ellipsis-h"></i>  TIPS
						</a>
						</div>
						<div class="list-group-item" style="background-color: #303030;">
							<a href="client.php?info=videos" class="text-light">
								<i class="fas fa-video"></i>  VIDEOS
							</a>
						</div>
					</div>


					<div class="list-group-item bg-dark">
						<a class="collapsed nav-link text-light" href="client.php?info=payment">
							<i class="fas fa-rupee-sign"></i>  PAYMENT
						</a>
					</div>

				</div>
			</div>
		</div> 
						
<div class="col-10">
<?php





@$info=$_GET['info'];
if ($info!=="")
{
  if ($info=="profile") {
    include('dashboard/profile.php');
  }
  else if($info=="diet"){
    include('dashboard/diet.php');
  }
  elseif ($info=="tips") {
    include ('dashboard/tips.php');
  }
  elseif ($info=="videos") {
    include ('dashboard/videos.php');
  }
  elseif ($info=="payment") {
    include ('dashboard/payment.php');
  }
}
?>

</div>
</div>
</body>
</html>