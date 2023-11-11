<?php
  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'Partial/_dbconnect.php';
    $sname = $_POST['sname'];
    $pname = $_POST['pname'];
    $cname = $_POST['cname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $contry = $_POST['contry'];
    $state =  $_POST['state'];
    $address  =  $_POST['address'];
    $city = $_POST['city'];
    $sql=" UPDATE supplier SET   `Supplier_Name`  = '$sname', `Product_Name` =  '$pname',   `Company_Name` = '$cname' , `Email` = '$email', `Mob_No` = '$mob' ,  `Contry` = '$contry', `State`= '$state' , `City` = '$city' , `Address` = '$address'  WHERE `Supplier_Name`='$sname' ";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        $success = true;
        $sameuname = false;
        header('location:_supplierdetails.php');
      }
      else
      {
        $sameuname =true;
        echo mysqli_error($con);
      }
    }
  
?>