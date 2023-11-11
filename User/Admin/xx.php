<?php
    include 'Partial/_dbconnect.php';

  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    
        $ename = $_POST['ename'];
        $sql = "SELECT U_Id FROM user WHERE uname = '$ename'";
        $result = mysqli_query($con,$sql);
        $r = mysqli_fetch_array($result);
		    $eid = $r['U_Id'];
        $id = $_POST['id'];
    
    $sql = "INSERT INTO assignment ( U_Id , Appoinment_Id ) VALUES ( $eid , $id )";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        $sql = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $id";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $id=$row['U_Id'];

        $sql = "SELECT email FROM user WHERE U_Id = $id";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $email=$row['email'];

        mail($email,"Appoinment Accepted","Hello !! your appoinment is handled by $ename ");

        $success = true;
        $sameuname = false;
        header('location:Appointment_Details.php');
      }
      else
      {
        $sameuname =true;
        echo mysqli_error($con);
      }
    }
  
?>