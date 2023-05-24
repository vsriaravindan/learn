<?php include('login1.php') ?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tansparent</title>

<link href="style11.css" rel="stylesheet">
<script type="text/javascript" src="js.js"></script>

</head>

<body>

<div class="loginBox">

<img src="user.jpg" class="user">

<h2>Log In Here</h2>

<form method="post" action="logg.php"  	">
	<?php include('errors.php'); ?>

<p>Email</p>
<input type="text" name="email" placeholder="Enter Email" required="">
<div id="email_error" class="errorbox"></div>

<p>Password</p>
<input type="text" name="password" placeholder="*********" required="">
<div id="password_error" class="errorbox"></div>

        <input type="submit" name="submit" value="LOGIN"><br>

    <a href="#">Forget Password</a><br>

    <a href="regg.php">Register a new account!</a>

</form>
</div>
</body>
</html>
       
