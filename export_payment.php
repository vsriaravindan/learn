<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM payment order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Member ID</th>   
                         <th>Amount</th>  
                         <th>payment Type</th>
                         <th>Upi</th>  
                    </tr>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $sl = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sl.' </td>
                          
                         <td>'.$row["mem_id"].'</td>  
                         <td>'.$row["amount"].'</td>  
                         <td>'.$row["type"].'</td>  
                         <td>'.$row["upi"].'</td>  
                         
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Key2Fitness_Gym_Payment_Data.xls');
  echo $output;
 }
}
?>