<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PROFILE</h1>

	<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
    	<tr>
    		<th>Username :</th>
        	<td><?php get_user_details(); ?></td>
        </tr>
        <tr>
    		<th>Email :</th>
        	<td><?php get_user_details(); ?></td>
        </tr> 

    </table>
     </div>
    </div>
    </div>
</body>
</html>