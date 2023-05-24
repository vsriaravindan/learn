
<!DOCTYPE html>
<head>
    <body>
<div class="container">
	<h1>PROFILE</h1>

	<div class="container" style="position: absolute;left:10%;">
		<table style="width: 70%;font-size: 30px; margin-top: 80px; padding: 20px 30px;">
			<tr>
				<td>MEMBER ID</td>
				<td><?php echo "<td>".$row['id']."</td>"; ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<?php echo "<td>".$row['id']."</td>"; ?>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>30.08.2001</td>
			</tr>
			<tr>
				<td>Package</td>
				<td>Premium</td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td>9566789661</td>
			</tr>
			<tr>
				<td>Payment</td>
				<td>Paid</td>
			</tr>
			<tr>
				<td>Trainer</td>
				<td>Ameer</td>
			</tr>


<?php
include('db.php');

if (isset($_POST['submit']))
{
$id = $_POST['id'];

$all="SELECT * FROM doctorapp";
$all_query=mysqli_query($con,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['dob']."</td>";
//		echo "<td>".$row['package']."</td>";
//		echo "<td>".$row['mobileno']."</td>";
//		echo "<td>".$row['pay_id']."</td>";
//		echo "<td>".$row['trainer_id']."</td>";
//	   echo "</tr><br>";
    }
} else {
    echo "0 results";
}


}
?>
			
		</table>
	</div>
</div>




</body>
</html>