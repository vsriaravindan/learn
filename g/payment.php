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

             <div class="col-md-3"><h3>Payment Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Member ID </th>
            <th>Amount</th>
            <th>Payment Type</th>
            <th>UPI</th>
           <!-- <th>Customer Name</th>-->

        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>

    <div>
      <form method="post" action="export_payment.php">
     <input type="submit" name="export" class="btn btn-primary" value="Export Payment Data" />
    </form>
    </div>

    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Make new Payment</h3>
                </div> 
                <div class="card-body">
                <form class="form-group" action="func.php" method="post">
                    <label>Member ID</label>
                    <input type="text" name="mem_id" class="form-control"><br>
                    <label>Amount</label>
                    <input type="text" name="amount" class="form-control"><br>

                    <label>Payment Type:</label>
                    <select id="ddlModels" name="type" style="height: 30px; background: white; width: 200px; border:none; border-radius: 5px; ">
                    <option value="Cash">Cash</option>
                    <option value="Upi">Upi</option>
                    </select>
                    <br>

                    <label>UPI:</label>
                    <input type="text" name="upi" id="txtOther" class="form-control" disabled="disabled" /> <br>

                <!--    <label>upi</label>
                    <input type="text" name="upi" class="form-control"><br> 
                    -->
                <input type="submit" class="btn btn-primary" name="pay_done" value="PAY">
                </div> 


                <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Download Payment Copies</h3>
                </div>
                <div style="margin-left: 20px;">
                <a href="downloads.php">
                <input type="button" class="btn btn-primary" name="" value="Click Here"> 
                </a> 
                </div>

     </div>
    </div>
    </div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels").change(function () {
            if ($(this).val() == 'Upi') {
                $("#txtOther").removeAttr("disabled");
                $("#txtOther").focus();
            } else {
                $("#txtOther").attr("disabled", "disabled");
            }
        });
    });
</script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>