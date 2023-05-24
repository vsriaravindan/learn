<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body style=" background: url(hero2.png); background-repeat: no-repeat; background-color: black;">
<!-- Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2 >VIDEOS</h2>
                    </div>
                </div>
            </div>
<form action="" method="post">
				<label style="font-size: 40px; color: white; font-weight: bold; position: absolute; left: 5%; ">ENTER Name:</label>
				<input style="height:40px; position: absolute; left: 25%; border: black solid 2px; " type="text" name="id"/>
				<input style="height: 40px; position: absolute; left: 40%; " type="submit" name="submit"/>
				</form>
		<hr/>

				
<br><br><br><br><br><br>
		<div class="row">
				<?php
				include("db.php");

				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					
				$q = "SELECT * FROM video where id='$id'";

				$query = mysqli_query($con,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
					?>

					<div class="col-md-4">
						<video width="500px" height="300px" controls>
<source src="<?php echo 'videos/'.$name;?>">
</video>
					</div>

				<?php }}
?>
</div>
				</div>
</body>
</html>