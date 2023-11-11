<?php
    include 'Partial/_dbconnect.php'; 
    $id=$_POST['id'];
    $que="DELETE FROM `service_title` WHERE Id = $id";
    $result=mysqli_query($con,$que);
    echo $result;
    header('location:Service_Title_Detail.php');
?>