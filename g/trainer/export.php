<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM trainer order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>S.L</th>   
                         <th>Name</th>  
                         <th>Trainer ID</th>
                         <th>Email Id</th>  
                         <th>Mobile</th>  
                         <th>Birthday</th>
                         <th>Qualification</th>
                         <th>Image</th>  
                         <th>Address</th>  
                         <th>Gender</th>     
                         <th>Aadhar</th>  
                    </tr>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $sl = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sl.' </td>
                          
                         <td>'.$row["Name"].'</td>  
                         <td>'.$row["Trainer_id"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["phone"].'</td> 
                         <td>'.$row["dob"].'</td> 
                         <td>'.$row["qua"].'</td> 
                         <td>'.$row["image"].'</td> 
                         <td>'.$row["address"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["aadhar"].'</td> 
                        
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Key2Fitness_Gym_Trainer_Data.xls');
  echo $output;
 }
}
?>