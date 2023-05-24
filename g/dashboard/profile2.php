<?php 
    include "db.php";
    
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>Profile</title>
    <style type="text/css">
        .wrapper
        {
            
            position: absolute;
            width: 800px;
            
            color: white;
        }
    </style>
 </head>
 <body>
    <div class="container">
         
        <div class="wrapper">
            <?php
 

                if(isset($_POST['submit1']))
                {
                    ?>
                        <script type="text/javascript">
                            window.location="edit_profile.php"
                        </script>
                    <?php
                }
                $q=mysqli_query($con,"SELECT * FROM doctorapp where fname='$_SESSION[userid]' ;");
            ?>
            <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2 style="margin-left: 80px;">Profile</h2>
                    </div>

            <?php
                $row=mysqli_fetch_assoc($q);

                echo "<div style='text-align: center'>
                    <img class='img-circle profile-img' height=110 width=120 src='demo/upload_images/".$_SESSION['image']."'>
                </div>";
            ?>
            <div style="text-align: center;"> <b>Welcome, </b>
                <h4>
                    <?php echo $_SESSION['userid']; ?>
                </h4>
            </div>
            <?php
                echo "<b>";
                echo "<table class='table table-bordered' cellpadding='10px' style='margin-left:10%; font-size: 16pt;'>";
                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Your ID: </b>";
                        echo "</td>";

                        echo "<td>";
                            echo $row['id'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Username: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['fname'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Email: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['email'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Trainer: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['docapp'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Date of Birth: </b>"; 
                        echo "</td>";
                        echo "<td>";
                            echo $row['dob'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Age: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['age'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Gender: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['gender'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Weight: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['weight'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Height: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['height'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Blood Group: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['bg'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Profession: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['prof'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Mobile No.: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['mobile'];
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>";
                            echo "<b> Program: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $row['prog'];
                        echo "</td>";
                    echo "</tr>";
                    
                echo "</table>";
                echo "</b>";
            ?>
        </div>
    </div>
 </body>
 </html>