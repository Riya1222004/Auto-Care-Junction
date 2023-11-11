<?php
    session_start();
    echo '<pre>';
    $bid =$_SESSION['pbid2'];
    {
        $con = mysqli_connect("localhost","root","","acj");
        $sqlc = "UPDATE paymentdetails SET Payment_Status = 'Success' where Bill_Id= $bid";
        $resultc = mysqli_query($con,$sqlc);
        echo $bid;
        if($resultc)
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Payment Done Successfully!")';  
            echo '</script>'; 
        }
        else
        {
            echo mysqli_error($con);
        }
    }

?>