<?php
  include 'Partial/_dbconnect.php'; 
  $id = $_POST['id'];
  $que="DELETE FROM vehicle WHERE Vehicle_Id = $id";
  $result=mysqli_query($con,$que);
  echo mysqli_error($con);
  header('location:Vehicle.php');
?>