<?php 
    include 'Calendar.php';
    $calendar = new Calendar(date('Y/m/d'));
    $con = mysqli_connect("localhost","root","","acj");
    $que="SELECT * from appoinment where Appoinment_Id NOT IN ( SELECT Appoinment_Id FROM bill1 )";
    $result=mysqli_query($con,$que);
    while($row=mysqli_fetch_array($result))
    {
        $x=$row['Appoinment_Id'];
        $qued="SELECT Appoinment_Date from appoinment where Appoinment_Id = $x";
        $resultd=mysqli_query($con,$qued);
        $rowd=mysqli_fetch_array($resultd);
    
        $quei="SELECT U_Id  from appoinment where Appoinment_Id = $x";
        $resulti=mysqli_query($con,$quei);
        $rowi=mysqli_fetch_array($resulti);
        $id=$rowi['U_Id'];
    
        $quen="SELECT uname from user where U_Id = $id";
        $resultn=mysqli_query($con,$quen);
        $rown=mysqli_fetch_array($resultn);
        $n=$rown['uname'];
    
        $calendar->add_event('Apponment Of '.$n, $rowd['Appoinment_Date'],1, 'red');
    }
    $que="SELECT * from appoinment where Appoinment_Id IN ( SELECT Appoinment_Id FROM bill1 )";
    $result=mysqli_query($con,$que);
    while($row=mysqli_fetch_array($result))
    {
        $x=$row['Appoinment_Id'];
        $qued="SELECT Appoinment_Date from appoinment where Appoinment_Id = $x";
        $resultd=mysqli_query($con,$qued);
        $rowd=mysqli_fetch_array($resultd);
    
        $quei="SELECT U_Id  from appoinment where Appoinment_Id = $x";
        $resulti=mysqli_query($con,$quei);
        $rowi=mysqli_fetch_array($resulti);
        $id=$rowi['U_Id'];
    
        $quen="SELECT uname from user where U_Id = $id";
        $resultn=mysqli_query($con,$quen);
        $rown=mysqli_fetch_array($resultn);
        $n=$rown['uname'];
    
        $calendar->add_event('Apponment Of '.$n." Is Completed", $rowd['Appoinment_Date'], 1, 'green');
    }	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
    </head>
<body>
<div class="content home" >
			<?=$calendar?>
		</div>
        <br><br>
    
    
    
        
</body>
</html>