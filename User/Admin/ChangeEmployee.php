<?php
    $sameuname = false;
    $success = false;
    $error = false;
      if ( $_SERVER["REQUEST_METHOD"] == "POST")
      {
        include 'Partial/_dbconnect.php';
        $uname = $_POST["username"];
        $email = $_POST["email"];
        $dname = $_POST["dname"];
        $DOB = $_POST["DateOfBirth"];
        $no1 = $_POST["pno"];
        $contry = $_POST["contry"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $address = $_POST["address"];
        $exist = false;
        $sameuname = false;
        $sal=$_POST['salary'];
        $sql=" UPDATE user SET   `uname`  = '$uname', `dname` =  '$dname',   `email` = '$email' , `DOB` = '$DOB', `number` = '$no1' ,  `contry` = '$contry', `state`= '$state' , `city` = '$city' , `address` = '$address' , `Salary` = $sal WHERE `Uname`='$uname' ";
          $result = mysqli_query($con,$sql);
          if($result)
          {
            $success = true;
            $sameuname = false;
            
            header('location:Employee Details.php');
      }
      else
      {
        echo mysqli_error($con);

      }
    }

?>