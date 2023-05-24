<?php     //start php tag
//include connect.php page for database connection
include('connect.php')
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']=='')
{
echo "please fill the empty field.";
}
else
{
$sql="insert into payment(mem_id,amount,upi) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."')";
$res=mysql_query($sql);
if($res)
{
echo "Record successfully inserted";
}
else
{
echo "There is some problem in inserting record";
}

}
}

?>