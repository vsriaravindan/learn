<?php
	include("filesLogic.php");
?>

<?php

	if (isset($_POST['submit']))
	{
		$mem_id = $_POST['id'];
		$amount = $_POST['amount'];
		$upi = $_POST['upi'];

		$results=mysqli_query($conn,"INSERT into payment(mem_id,amount,upi) values('$mem_id','$amount','$upi')");

		if ($results) {
			echo "<script>alert('PAID SUCCESSFULLY..Take screenshot and upload below..')</script>";
			# code...
		}
		else
		{
			echo "fail";
		}
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>

		function pay() {
			document.getElementById("succ").innerHTML="Payment Successfully..!";
			document.getElementById("succc").innerHTML=" IMPORTANT : Once payment finished. Take a screenshot. And upload the below link.";
		return false;	
		}
	</script>
</head>
<body>
	<h1>PAYMENT</h1>

	<div class="container">
		<b>IMPORTANT : Once payment finished. Take a screenshot. And upload the below link.</b>
	<br>
	<form class="mt-3 form-group" name="f1" method="post" action="client.php?info=payment" >
		<label class="mt-3">MEMBER ID</label>
		<input type="text" name="id" required="" placeholder="Enter your ID" class="form-control" />
		<label class="mt-3">AMOUNT</label>
		<input type="text" name="amount" required="" placeholder="Enter amount" class="form-control" /><br>
		<b class="mt-3">UPI PAYMENT </b><br>
		<label class="mt-3">Gpay </label>
		<input type="text" name="upi" required="" placeholder="Enter UPI" class="form-control" />
		<input class="btn btn-dark mt-3" type="submit" name="submit" value="PAY NOW"  />
	</form>

</div>
<b class="result" style="padding: 10px 40%;" id="succ"></b>
<b id="succc" style="padding: 20px 15%;"></b>


<div class="container">
      <div class="row">
        <form action="http://localhost/g/client.php?info=payment" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          Enter Username :
          <input class="form-control" type="text" name="username">
          <input class="btn btn-dark mt-3" type="file" name="myfile"> <br>
          <button class="btn btn-dark mt-3" type="submit" name="save">UPLOAD</button><br><br>
        </form>
      </div>
    </div>
</html>