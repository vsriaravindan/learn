<?php
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Crud Operation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
    <h1>Trainer Details</h1><br><br>
    <a href="#" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back</a>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i> Add new Trainer
  </button>
  <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</a>
  <hr>
<table class="table table-hover" id="myTable">
        <thead>
            <tr>
                <th class="text-center" scope="col">S.l</th>
                <th class="text-center" scope="col">Name</th>
                <th class="text-center" scope="col">Trainer ID</th>
                <th class="text-center" scope="col">Phone</th>
                <th class="text-center" scope="col">View</th>
                <th class="text-center" scope="col">Edit</th>
                <th class="text-center" scope="col">Delete</th>
            </tr>
        </thead>
            <?php

            $get_data = "SELECT * FROM trainer order by 1 desc";
            $run_data = mysqli_query($con,$get_data);
            $i = 0;
            while($row = mysqli_fetch_array($run_data))
            {
                $sl = ++$i;
                $u_f_name = $row['Name'];
                $id = $row['Trainer_id'];
                $u_phone = $row['phone'];

                echo "

                <tr>
                <td class='text-center'>$sl</td>
                <td class='text-center'>$u_f_name</td>
                <td class='text-center'>$id</td>
                <td class='text-center'>$u_phone</td>
            
                <td class='text-center'>
                    <span>
                    <a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$id' title='Prfile'><i class='fa fa-address-card-o' aria-hidden='true'></i></a>
                    </span>
                    
                </td>
                <td class='text-center'>
                    <span>
                    <a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>    
                    </span>
                </td>
                <td class='text-center'>
                    <span>
                    
                        <a href='#' class='btn btn-danger deleteuser' title='Delete'>
                             <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
                        </a>
                    </span>
                    
                </td>
            </tr>


                ";
            }

            ?>

            
            
        </table>
        
        <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export Data" />
    </form>
    </div>


    <!---Add in modal---->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><img src="logo.png" width="300px" height="80px" alt=""></center>
        <h4 class="modal-title text-center">Add new member</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
            
            <!-- This is test for New Card Activate Form  -->
            <!-- This is Address with email id  -->
            
            <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='firstname'>Name</label>
        <input type='text' class='form-control' name='fname' placeholder='Enter Name'>
        </div>
        <div class='form-group col-md-6'>
        <label for='firstname'>Qualification</label>
        <input type='text' class='form-control' name='qua' placeholder='Enter Qualification'>
        </div>
        </div>
        
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='inputPassword4'>Mobile No.</label>
        <input type='phone' class='form-control' name='mobile' placeholder='Enter 10-digit Mobile no.' maxlength='10' required>
        </div>
        <div class='form-group col-md-6'>
        <label for='email'>Email Id</label>
        <input type='email' class='form-control' name='email' placeholder='Enter Email id' >
        </div>
        </div>
        
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='fathername'>Weight</label>
        <input type='text' class='form-control' name='weight' placeholder='Enter Weight' >
        </div>
        <div class='form-group col-md-6'>
        <label for='mothername'>Height</label>
        <input type='text' class='form-control' name='height' placeholder='Enter Height'>
        </div>
        </div>
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='fathername'>Age</label>
        <input type='text' class='form-control' name='age' placeholder='Enter Age'>
        </div>
        <div class='form-group col-md-6'>
        <label for='mothername'>Blood Group</label>
        <input type='text' class='form-control' name='bg' placeholder='Enter Blood Group' >
        </div>
        </div>
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='inputState'>Gender</label>
        <select id='inputState' name='gender' class='form-control'>
          <option selected>--Choose--</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
        </div>
        <div class='form-group col-md-6'>
        <label for='inputPassword4'>Date of Birth</label>
        <input type='date' class='form-control' name='dob' placeholder='Date of Birth' >
        </div>
        </div>

            <div class="form-group">
                <div class='form-group col-md-12'>
                <label>Image</label>
                <input type="file" name="image" class="form-control" >
            </div>
            </div>

            <div class="form-group">
                <div class='form-group col-md-12'>
                <label>Certificates</label>
                <input type="file" name="cert" class="form-control" >
            </div>
            </div>
            
             <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
            
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!------DELETE modal---->




<!-- Modal -->
<?php

$get_data = "SELECT * FROM doctorapp";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
    $id = $row['id'];
    echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Are you want to sure??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


    ";
    
}


?>


<!-- View modal  -->
<?php 

// <!-- profile modal start -->
$get_data = "SELECT * FROM doctorapp";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
    $id = $row['id'];

    $name = $row['fname'];

    $prog = $row['prog'];
    $prof = $row['prof'];
    $gender = $row['gender'];
    $email = $row['email'];
    $trainer = $row['docapp'];
    $Bday = $row['dob'];

    $phone = $row['mobile'];
    $weight = $row['weight'];
    $height = $row['height'];
    $bg = $row['bg'];
    $age = $row['age'];

    
    $image = $row['image'];
    echo "

        <div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Profile <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
            <div class='container' id='profile'> 
                <div class='row'>
                    <div class='col-sm-4 col-md-2'>
                        <img src='upload_images/$image' alt='' style='width: 150px; height: 150px;' ><br>
        
                        <i class='fa fa-id-card' aria-hidden='true'></i> ID : $id<br>
                        <i class='fa fa-phone' aria-hidden='true'></i> $phone  <br>
                        <i class='fa fa-envelope-o' aria-hidden='true'></i> $email
                        <br />
                        <i class='fa fa-venus-mars' aria-hidden='true'></i> $gender
                        <br />
                    
                    </div>
                    <div class='col-sm-3 col-md-6'>
                        <h3 class='text-primary'>$name</h3>
                        <p class='text-secondary'>
                        <strong>Program :</strong> $prog <br>
                        <strong>Profession :</strong>$prof <br>
                        <strong>Trainer :</strong> $trainer <br>
                        <strong>DOB :</strong> $Bday <br>
                        <strong>Weight :</strong> $weight kg <br>
                        <strong>Height :</strong> $height cm <br>
                        <strong>Age :</strong> $age <br>
                        <strong>Blood :</strong> $bg <br>
                        
                        </p>
                        <!-- Split button -->
                    </div>
                </div>

            </div>   
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
            </div>
            </form>
            </div>
        </div>
        </div> 


    ";
}


// <!-- profile modal end -->


?>





<!----edit Data--->

<?php

$get_data = "SELECT * FROM doctorapp";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
    $id = $row['id'];
    $name = $row['fname'];
    $password = $row['password'];
    $gender = $row['gender'];
    $email = $row['email'];
    $Bday = $row['dob'];
    $Weight = $row['weight'];
    $Height = $row['height'];
    $mobile = $row['mobile'];
    $age = $row['age'];
    $bg = $row['bg'];
    $trainer = $row['docapp'];
    $prog = $row['prog'];
    $prof = $row['prof'];
    $image = $row['image'];
    echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='firstname'>Name</label>
        <input type='text' class='form-control' name='fname' placeholder='Enter First Name' value='$name'>
        </div>
        <div class='form-group col-md-6'>
        <label for='firstname'>Password</label>
        <input type='text' class='form-control' name='password' placeholder='Enter First Name' value='$password'>
        </div>
        </div>
        
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='inputPassword4'>Mobile No.</label>
        <input type='phone' class='form-control' name='mobile' placeholder='Enter 10-digit Mobile no.' maxlength='10' value='$mobile' required>
        </div>
        <div class='form-group col-md-6'>
        <label for='email'>Email Id</label>
        <input type='email' class='form-control' name='email' placeholder='Enter Email id' value='$email'>
        </div>
        </div>
        
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='fathername'>Weight</label>
        <input type='text' class='form-control' name='weight' placeholder='Enter First Name' value='$weight'>
        </div>
        <div class='form-group col-md-6'>
        <label for='mothername'>Height</label>
        <input type='text' class='form-control' name='height' placeholder='Enter Last Name' value='$height'>
        </div>
        </div>
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='fathername'>Age</label>
        <input type='text' class='form-control' name='age' placeholder='Enter First Name' value='$age'>
        </div>
        <div class='form-group col-md-6'>
        <label for='mothername'>Blood Group</label>
        <input type='text' class='form-control' name='bg' placeholder='Enter Last Name' value='$bg'>
        </div>
        </div>
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='inputState'>Gender</label>
        <select id='inputState' name='gender' class='form-control' value='$gender'>
          <option selected>$gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
        </div>
        <div class='form-group col-md-6'>
        <label for='inputPassword4'>Date of Birth</label>
        <input type='date' class='form-control' name='dob' placeholder='Date of Birth' value='$Bday'>
        </div>
        </div>
        
        <div class='form-row'>
        <div class='form-group col-md-6'>
        <label for='inputState'>Trainer</label>
        <input type='text' class='form-control' name='docapp' placeholder='Date of Birth' value='$trainer'>
        </div>
        <div class='form-group col-md-6'>
        <label for='inputPassword4'>Program</label>
        <input type='text' class='form-control' name='prog' placeholder='Date of Birth' value='$prog'>
        </div>
        </div>


            <div class='form-group'>
                <label>Image</label>
                <input type='file' name='image' class='form-control'>
                <img src = 'upload_images/$image' style='width:50px; height:50px'>
            </div>

            
            
             <div class='modal-footer'>
             <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
             <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
         </div>


        </form>
      </div>

    </div>

  </div>
</div>


    ";
}


?>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

</body>
</html>