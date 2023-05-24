<?php
$con=mysqli_connect("localhost","root","","loginsystem");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	
}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $pswd=$_POST['pswd'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $bg=$_POST['bg'];
    $prof=$_POST['prof'];
    $mobile=$_POST['mobile'];
    $prog=$_POST['program'];

    //image upload

    $msg = "";
    $image = $_FILES['image']['name'];
    $target = "demo/upload_images/".basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    //medical report upload

    $mr = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "demo/upload_images/";
    $new_name = $path.time()."_".$mr;
    $mr = time()."_".$mr;

    $query="insert into doctorapp(fname,password,email,docapp,dob,age,gender,weight,height,bg,prof,mobile,prog,mr)values('$fname','$pswd','$email','$docapp','$dob','$age','$gender','$weight','$height','$bg','$prof','$mobile','$prog','$mr')";
     $result=mysqli_query($con,$query);
    if($result)
    {
        move_uploaded_file($fileTmpName,$new_name);
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    else
    {
        echo "Error";
    }
    } 

if(isset($_POST['reg_submit']))
{
    $fname=$_POST['fname'];
    $pswd=$_POST['pswd'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $bg=$_POST['bg'];
    $prof=$_POST['prof'];
    $mobile=$_POST['mobile'];
    $prog=$_POST['program'];

    //image upload

    $image = $_FILES['image']['name'];
    $target = "demo/upload_images/".basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    //medic upload
    $mr = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "demo/upload_images/".$mr;

    $query="insert into doctorapp(fname,password,email,docapp,dob,age,gender,weight,height,bg,prof,mobile,prog,image,mr)values('$fname','$pswd','$email','$docapp','$dob','$age','$gender','$weight','$height','$bg','$prof','$mobile','$prog','$image','$mr')";
     $result=mysqli_query($con,$query);
    if($result)
    {
        move_uploaded_file($fileTmpName,$path);
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('signin.php','_self')</script>";
    }
    else
    {
        echo "Error";
    }
    } 

    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 



        if(isset($_POST['pay_submit']))
        {
            $mem_id=$_POST['mem_id'];
            $customer_name=$_POST['customer_name'];
            $day=$_POST['day'];
            $breakfast=$_POST['breakfast'];
            $lunch=$_POST['lunch'];
            $dinner=$_POST['dinner'];
            $query="insert into diet(mem_id,customer_name,day,breakfast,lunch,dinner)values('$mem_id','$customer_name','$day','$breakfast','$lunch','$dinner')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Added sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
            }

            if(isset($_POST['pay_done']))
        {
            $mem_id=$_POST['mem_id'];
            $amount=$_POST['amount'];
            $type=$_POST['type'];
            $upi=$_POST['upi'];
            $query="insert into payment(mem_id,amount,type,upi) values('$mem_id','$amount','$type','$upi')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Paid sucessfull.')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
            }

 function get_patient_details(){
    global $con;
    $query="select * from doctorapp ";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
    $id=$row ['id'];
    $fname=$row ['fname'];
    $pswd=$row['password'];
    $email=$row['email'];

    $docapp=$row['docapp'];
    $dob=$row['dob'];
    $age=$row['age'];
    $gender=$row['gender'];
    $weight=$row['weight'];
    $height=$row['height'];
    $bg=$row['bg'];
    $prof=$row['prof'];
    $mobile=$row['mobile'];
    $prog=$row['prog'];
      echo "<tr>
            <td>$id</td>
            <td>$fname</td>
            <td>$pswd</td>
            <td>$email</td>

            <td>$docapp</td>
            <td>$dob</td>
            <td>$age</td>
            <td>$gender</td>
            <td>$weight</td>
            <td>$height</td>
            <td>$bg</td>
            <td>$prof</td>
            <td>$mobile</td>
            <td>$prog</td>
        </tr>";
    }
}
function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>
            
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['mem_id'];
        $Amount=$row['amount'];
        $type=$row['type'];
        $payment_type=$row['upi'];
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$type</td>
        <td>$payment_type</td>
        
            </tr>";

    }
}

function get_user_details(){
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
    $uname=$row ['fname'];
    $email=$row ['email'];
    echo "<tr>
            <td>$uname</td>
            <td>$email</td>
        </tr>";
    }
}


if (isset($_POST['upload'])){

$id = $_POST['v_id'];

$location="videos/";

$name = $_FILES['file']['name'];

$tmp = $_FILES['file']['tmp_name'];

$size=$_FILES['file']['size'];

if ($size > 104857600) {
    echo "File is too large";
}
else
{
$sql = "INSERT INTO videos VALUES ('$id','$name')";

$res =  mysqli_query($con, $sql);

move_uploaded_file($tmp, $location . $name);
}

if ($res == 1){

    echo "<h1> video inserted successfully </h1>";
}
}


?>



