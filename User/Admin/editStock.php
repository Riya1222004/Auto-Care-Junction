<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST")
{
include 'Partial/_dbconnect.php';

$id=$_POST['id'];
$qty=$_POST['qty'];

$sql = "UPDATE stock SET `Stock_Quantity`  = $qty WHERE `Stock_Id`='$id'";
$result = mysqli_query($con,$sql);
if($result)
{

header('location:StockDetails.php');
}
else
{
echo mysqli_error($con);
}

}?>