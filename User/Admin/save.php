<?php
	$aid=$_POST['id'];
    $total = $_POST['total'];
    $hour = $_POST['hour'];
    include 'Partial/_dbconnect.php';
    $sid[]= $_POST['sid'];
    $pid[]= $_POST['pid'];
    $sql = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $aid";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $uid=$row['U_Id'];
    if (isset($_POST['submit'])=="submit")
    {
        $sql = "INSERT INTO bill1 (`Service_Hours`,`Service_Cost`,`Appoinment_Id`,`U_Id`) VALUES ($hour , $total , $aid , $uid)";
        $result = mysqli_query($con,$sql);

        $sql = "select Bill_Id from bill1 where Appoinment_Id= $aid";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $bid=$row['Bill_Id'];
        echo $bid;

        for($i=0; $i < count($sid); $i++){
            $sql = "INSERT INTO billservicies (`Bill_Id`, `Service_Id`) VALUES ( $bid , $sid[$i] )";
            $result = mysqli_query($con,$sql);
        }

        for($i=0; $i < count($pid); $i++){
            $sql = "INSERT INTO billproduct (`Bill_Id`, `P_Id`) VALUES ( $bid , $pid[$i] )";
            $result = mysqli_query($con,$sql);
        }

        $sql = "INSERT INTO paymentDetails (`Bill_Id`,`Payment_Status`) VALUES ($bid , 'Pending')";
        $result = mysqli_query($con,$sql);

        /*if($result)
        {
            $sql = "INSERT INTO appoinment_history  select * from appoinment where Appoinment_Id = $aid ";
            $result = mysqli_query($con,$sql);
            if($result)
            {
                $sql = "delete from appoinment where Appoinment_Id = $aid ";
                $result = mysqli_query($con,$sql);
                header('location:Appointment_Details.php');
            }
            else
            {
                echo mysqli_error($con);
            }

        }*/
    }

?>