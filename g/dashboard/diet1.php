

<div class="container">

	<H1>DIET PLAN</H1>

	<div class="container">
		<table class="table table-bordered table-hover">

			<thead>
				<th>MEMBER ID</th>
				<th>NAME</th>
				<th>DAY</th>
				<th>BREAKFAST</th>
				<th>LUNCH</th>
				<th>DINNER</th>			
			</thead>

<?php
          
$server="localhost";
$username="root";
$password="";
$database="loginsystem";

$conn=mysqli_connect($server,$username,$password,$database);

$q=mysqli_query($conn,"SELECT * FROM diet where customer_name='$_SESSION[userid]' ;");

$row=mysqli_fetch_array($q);
echo "<tbody>";
echo "<tr>";
		echo "<td>".$row['mem_id']."</td>";
		echo "<td>".$row['customer_name']."</td>";
		echo "<td>".$row['day']."</td>";
		echo "<td>".$row['breakfast']."</td>";
		echo "<td>".$row['lunch']."</td>";
		echo "<td>".$row['dinner']."</td>";
	   echo "</tr><br>";
	echo "</tbody>";

?>
			
		</table>
	</div>
</div>
<?php

?>