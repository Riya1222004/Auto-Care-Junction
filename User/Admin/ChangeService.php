<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST")
{
include 'Partial/_dbconnect.php';

$sname = $_POST['sname'];
$scost = $_POST['scost'];
$ecomm = $_POST['ecomm']; 

$sql = "UPDATE service SET   `Service_Name`  = '$sname', `Service_Cost` =  '$scost',   `Extra_Comm` = '$ecomm'  WHERE `Service_Name`='$sname'";
$result = mysqli_query($con,$sql);
if($result)
{
$success = true;
$sameuname = false;
header('location:Service Details.php');
}
else
{
$sameuname =true;
echo mysqli_error($con);
}

}?>