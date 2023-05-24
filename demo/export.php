<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM doctorapp order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>S.L</th>   
                         <th>Name</th>  
                         <th>Member ID</th>
                         <th>Email Id</th>  
                         <th>Mobile</th>  
                         <th>Program</th>  
                         <th>Profession</th>
                         <th>Trainer</th>
                         <th>Gender</th>  
                         <th>Birthday</th>
                         <th>Weight</th>  
                         <th>Height</th>
                         <th>Age</th>  
                         <th>Blood Group</th>

                    </tr>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $sl = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sl.' </td>
                          
                         <td>'.$row["fname"].'</td>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["mobile"].'</td>  
                         <td>'.$row["prog"].'</td> 
                         <td>'.$row["prof"].'</td> 
                         <td>'.$row["docapp"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["dob"].'</td> 
                         <td>'.$row["weight"].'</td>
                         <td>'.$row["height"].'</td>
                         <td>'.$row["age"].'</td>
                         <td>'.$row["bg"].'</td>  
                        
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Key2Fitness_Gym_Data.xls');
  echo $output;
 }
}
?>