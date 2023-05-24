

<div class="container">

	<H1>DIET PLAN</H1>

	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>DAY</th>
				<th>BREAKFAST</th>
				<th>LUNCH</th>
				<th>DINNER</th>			
			</tr>
<?php
           
$server="localhost";
$username="root";
$password="";
$database="loginsystem";

$conn=mysqli_connect($server,$username,$password,$database);

$name = $_SESSION['userid'];
$all="SELECT * FROM diet where customer_name='$name' ";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";

		echo "<td>".$row['day']."</td>";
		echo "<td>".$row['breakfast']."</td>";
		echo "<td>".$row['lunch']."</td>";
		echo "<td>".$row['dinner']."</td>";
	   echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>
			
		</table>
	</div>
</div>
