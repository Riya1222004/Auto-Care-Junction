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
    
        $calendar->add_event('Apponment Of '.$n, $rowd['Appoinment_Date'], 1, 'red');
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
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
    <style>
    
 ul{
        
        list-style-type: none ;
        overflow: auto;
        background-color: rgb(255, 255, 255);
        height: max-content;
        
    }
    li
    {
        float: left;
        padding-left:30px;
        

    }
    li a {
      color: #137DC5;
      text-align: center;
      font-size: 20px;
      text-decoration: none; 
      font-weight: bolder;   
    }
    li a:hover
    {
        color: rgb(226, 103, 144);
    }
    .employee{
    width:200px;
    height:170px;
    padding-top:15px;
    margin-top:20px;
    background-color:#5fce9b;
    color:white;
    font-size:20px;
    margin-left:80px;
}
    .customer{
        width:200px;
    height:170px;
    padding-top:15px;
        margin-top:20px;
        color:white;
        font-size:20px;
    background-color:#66B5D6;

    }
    .suplier{
        width:200px;
    height:170px;
    padding-top:15px;
        margin-top:20px;
        color:white;
        font-size:20px;
    background-color:#E87352;

    }
    .product{
        width:200px;
    height:170px;
    padding-top:15px;
        margin-top:20px;
        color:white;
        font-size:20px;
    background-color:#EECA5A;

    }
    .servicies{
        width:200px;
    height:170px;
    padding-top:15px;
        margin-top:20px;
        color:white;
        font-size:20px;
    background-color:#66B5D6;

    }
    .riya td{
        padding-left:50px;
    }
</style>
</head>
<body>
<?php require 'Partial/_navadminscroll.html' ?><br><br>
<table class="riya">
    <tr>
        <td><div class="employee" >
    <center>
    <img src="http://localhost/php_practicle/garage/public/img/dashboard/team.png" class="dashboard_background" alt="">	
							 <div class="info-box-stats">
								<p class="counter">
								<?php
                                    $que="SELECT * FROM user WHERE roleOfUser = 'employee'";
                                    $result=mysqli_query($con,$que);
                                    $r=mysqli_num_rows($result);
                                    echo $r;
                                ?>
                                </p>
		<span class="info-box-title">Employee</span>
    </center>
    </div></td>
    <td><div class="customer">
    <center>
    <img src="http://localhost/php_practicle/garage/public/img/dashboard/client.png" alt="">	
							 <div class="info-box-stats">
								<p class="counter">
								<?php
                                    $que="SELECT * FROM user WHERE roleOfUser = 'user'";
                                    $result=mysqli_query($con,$que);
                                    $r=mysqli_num_rows($result);
                                    echo $r;
                                ?>
                                </p>
		<span class="info-box-title">Customer</span>
    </center>
    </div></td>
    <td><div class="suplier">
    <center>
    <img src="http://localhost/php_practicle/garage/public/img/dashboard/telemarketer.png" alt="">	
							 <div class="info-box-stats">
								<p class="counter">
								<?php
                                    $que="SELECT * FROM supplier";
                                    $result=mysqli_query($con,$que);
                                    $r=mysqli_num_rows($result);
                                    echo $r;
                                ?>
                                </p>
		<span class="info-box-title">Suppliers</span>
    </div>
    </center></td>
    <td><div class="product">
    <center>
    <img src="http://localhost/php_practicle/garage/public/img/dashboard/industrial-robot.png" alt="">	
							 <div class="info-box-stats">
								<p class="counter">
								<?php
                                    $que="SELECT * FROM product";
                                    $result=mysqli_query($con,$que);
                                    $r=mysqli_num_rows($result);
                                    echo $r;
                                ?>
                                </p>
		<span class="info-box-title">Product</span>
    </center>
    </div></td>
    <td><div class="servicies">
    <center>
    <img src="http://localhost/php_practicle/garage/public/img/dashboard/tasks.png" alt="">	
							 <div class="info-box-stats">
								<p class="counter">
								<?php
                                    $que="SELECT * FROM service";
                                    $result=mysqli_query($con,$que);
                                    $r=mysqli_num_rows($result);
                                    echo $r;
                                ?>
                                </p>
		<span class="info-box-title">Services</span>
    </center>
    </div></td>
    </tr>

</table>
    <br><br>
<div class="content home" >
			<?=$calendar?>
		</div>
        <br><br>
    
    
    
        
</body>
</html>