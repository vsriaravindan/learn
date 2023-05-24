<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "loginsystem";

$data = mysqli_connect($host,$username,$password,$db);
if($data==false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from admin where username='".$username."' AND password='".$password."' ";

	$result = mysqli_query($data,$sql);

	$row = mysqli_fetch_array($result);

	if($row["usertype"]=="user1")
	{
		header("loction:index.html");
	}
	elseif($row["usertype"]=="admin")
	{
		header('location: admin-panel.php');//header("loction:admin.php");
	}
	else
	{
		echo "username or password incorrect"; 
	}

} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Key2Fitness</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<style type="text/css">
	body{   
    margin: 0;
    padding: 0;
    background: url(bg.jpg);
    background-size: cover;
    font-family: sans-serif;
}  

.frm
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px;
    height: 420px;
    padding: 80px 40px;
    box-sizing: border-box;
    background: rgba(0,0,0,.7);
    border-radius: 20px;
    border:1pt #fff;
}

h1
{
    margin: 30px;
    padding: 0 0 20px;
    color: red;
    text-align: center;
    font-weight: bold;	
    border
}

label
{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #fff;
}

input
{
    width: 100%;
    margin-bottom: 20px;
} 
input[type="text"],
input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

::placeholder
{
    color: rgba(255,255,255,.5)
}

input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    background: #ff267e;
    cursor: pointer;
    border-radius: 20px;
}
input[type="submit"]:hover
{
    background: #efed40;
    color: #262626;
}


  </style>


	<h1>ADMIN LOGIN</h1>

	<div class="frm" >

		<form method="POST" action="#"  name="">

	<div>
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter username" required="">
	</div>

	<div>
		<label>Password</label>
		<input type="password" name="password" placeholder="***********" required="">
	</div>

	<div>
		<input type="submit" name="submit" value="Login">
	</div>

	</form>
	</div>

	
</body>
</html>