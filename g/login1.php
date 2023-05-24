<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'loginsystem');

// LOGIN USER
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM doctorapp WHERE email='$username' AND fname='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: main.html');
        }else {
            array_push($errors, "Wrong email/password combination");
        }
    }
  }
  
  ?>