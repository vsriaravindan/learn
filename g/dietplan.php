<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>Members details</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>   

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             </div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Diet Advice</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                    <label>Member ID</label>
                    <input type="text" name="mem_id" class="form-control"><br>

                    <label>Name</label>
                    <input type="text" name="customer_name" class="form-control"><br>

                    <label>Day</label>
                    <input type="text" name="day" class="form-control"><br> 
 
                    <label>Breakfast</label>
                    <input type="text" name="breakfast" class="form-control"><br>

                    <label>Lunch</label>
                    <input type="text" name="lunch" class="form-control"><br>

                    <label>Dinner</label>
                    <input type="text" name="dinner" class="form-control"><br>
                   
<input type="submit" class="btn btn-primary" name="pay_submit" value="submit">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>