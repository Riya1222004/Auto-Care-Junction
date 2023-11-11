<?php
    session_start();
    echo '<pre>';
    $bid =$_COOKIE['BID'];
    $status=$_REQUEST['payment_status'];
    if($status=='Credit')
    {
        $con = mysqli_connect("localhost","root","","acj");
        $sqlc = "UPDATE paymentdetails SET Payment_Status = 'Success' where Bill_Id= $bid";
        $resultc = mysqli_query($con,$sqlc);
        echo "Payment Done Sccessfully";
    }
    else
    

?>