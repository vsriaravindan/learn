<?php
session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "loginsystem";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
if(isset($_POST['submit']))
{
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from doctorapp where fname = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $row1= mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);  
       // $data=mysql_fetch_row($result);
        //if($row[0]==$username){
            //$_SESSION['username']=$username;
           // header("Location:client.php");}
    
        if($count == 1){
            $_SESSION['userid']=$username;
            $_SESSION['image']= $row['image'];
            
            header("Location:client.php?info=profile");
            
        
            //echo "<script>window.open('client.php','_self')</script>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
}
?>


<html>  
<head>  
    <title>K2F/Sign in</title>   
    <link rel = "stylesheet" type = "text/css" href = "signin.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "signin.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" placeholder="Username" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" placeholder="********" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id="btn" name="submit" value = "LOGIN" />  
            </p>
            <p>  
               <a href="signup.php"> <label class="link"> Register new user   </label>   </a>  
            </p>   
        </form>  
    </div>  

    <div class="admin">
        <a href="login.php">
            <input type="button" name="admin" value="ADMIN LOGIN" />
        </a>
    </div>
  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  