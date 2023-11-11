<?php
    session_start();
    if(!isset($_SESSION['log']) )
    {
        exit;
    }
    include 'Partial/_dbconnect.php'; 
		$n=$_SESSION['uname'];
		$que="SELECT * FROM `user` WHERE Uname='$n'";
		$result=mysqli_query($con,$que);
		$r=mysqli_fetch_array($result);
?>
<?php
    if ( $_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST['submit']=='Log Out')
        {
            header('location:LogOut.php');
        }
        elseif($_POST['submit']=='Save Setting')
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
            $sql=" UPDATE user SET   `uname`  = '$uname', `dname` =  '$dname',   `email` = '$email' , `DOB` = '$DOB', `number` = '$no1' ,  `contry` = '$contry', `state`= '$state' , `city` = '$city' , `address` = '$address'  WHERE `Uname`='$uname' ";
            $result = mysqli_query($con,$sql);
            if($result)
            {
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Profile Updated Successfully")';  
                echo '</script>';
                header("Refresh:0"); 
            }
        }
        elseif($_POST['submit']=='Change Password')
        {
            $cpass=$_POST["cpassword"];
            $pass = $_POST["npassword"];
            if(($pass == $cpass) )
            {
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql=" UPDATE user SET `pass`  = '$hash'  WHERE `Uname`='$n' ";
                
                $que="SELECT email FROM `user` WHERE Uname='$n'";
                $result1=mysqli_query($con,$que);
                $r1=mysqli_fetch_array($result1);
                $email=$r1['email'];

                $result = mysqli_query($con,$sql);
                if($result)
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Password Updated Successfully")';  
                    echo '</script>'; 
                    header("Refresh:0"); 

                }

            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .main{
          height:1050px;
        }
        .form-group{
            width: 1000px;
            height: 900px;
            margin-top: 40px;
            margin-left: 260px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);


            background-color: white;
            padding:30px;

        }
        h2{
            color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;

        }
        label{
          font-size:20px;
          color:#2a3f54;
          font-weight: bolder;

        }
        td{
            padding: 13px;
        }
        

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
</head>
<body>
<?php require 'Partial/_navlogscroll.html' ?>

    <form action="" method="post">
    <div class="main">
        <table>
            <tr>
                <td>
                
        <div class="form-group">
                <form action="" method="post">
                    <h2 style="color: #ea6b00;
                    font-weight: bolder;
                    font-size:28px;
                    font-weight: bolder;">User Setting</h2><hr><br><br>
                    <table>
                        <tr>
                        <td><label for="">Name</label></td>
                    <td><input type="text" class="form-control" name="username" id="" value="<?php echo $r['uname'];?>"></td>
                        </tr>
                        <tr>
                        <td><label for="">Display Name</label></td>
                    <td><input type="text" class="form-control" name="dname" id="" placeholder="Enter Display Name" value="<?php echo $r['dname'];?>"></td>
                            <td><label for="">Gender</label></td>
                            <td>
                                <input type="radio"  name="g" id="">Male
                                <input type="radio"name="g" id="">Female
                            </td>
                        </tr>
                        <tr>
                            
                        <td><label for="">Date Of Birth</label></td>
                    <td><input type="date" class="form-control" name="DateOfBirth" id="" value="<?php echo $r['Date'];?>"></td>
                    <td><label for="">Email</label></td>
                    <td><input type="email " class="form-control" name="email" id="" placeholder="Enter Email" value="<?php echo $r['email'];?>"></td>
                        </tr>
                        
                        <tr>
                            
                        <td><label for="">Mobile No</label></td>
                    <td><input type="number" class="form-control" name="pno" id="" placeholder="Enter Mobile No" value="<?php echo $r['number'];?>"></td>
                        </tr>
                        <tr>
                        <td><label for="">Contry</label></td>
                    <td>
                    <input type="text" class="form-control" name="contry" id="" placeholder="Enter Contry" value="<?php echo $r['contry'];?>">
                    </td>
                    <td><label for="">State</label></td>
                    <td><input type="text" class="form-control" name="state" id="" placeholder="Enter State" value="<?php echo $r['state'];?>"></td>
                        </tr>
                        <tr>
                        <td><label for="">Town/City</label></td>
                    <td><input type="text" class="form-control" name="city" id="" placeholder="Enter Town/City "value="<?php echo $r['city'];?>"></td>
                    <td><label for="">Address</label></td>
                    <td><input type="text" class="form-control" name="address" id="" placeholder="Enter Address" value="<?php echo $r['address'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Save Setting"style="background-color: white;width: 100%;height: 30px;"></td>
                            <td><input type="submit" name="submit" value="Log Out"style="background-color: white;width: 100%;height: 30px;"></td>
                        </tr>
                    </table>
                    <br><br><h2 style="color: #ea6b00;
                    font-weight: bolder;
                    font-size:28px;
                    font-weight: bolder;">Change Password</h2><hr>
                    <table>
                        <tr>
                            
                            <td><label for="">New Password</label></td>
                            <td><input type="password" class="form-control" name="npassword" id="" placeholder="Enter New Password"></td>
                            <td><label for="">Confirm Password</label></td>
                            <td><input type="password" class="form-control" name="cpassword" id="" placeholder="Enter Confirm Password"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="submit" value="Change Password"style="background-color: white;width: 150px;height: 30px;">  
                            </td>
                            
                        </tr>
                        
                    </table>
                    
        
        
                </form>
                </div>
                </td>
            </tr>
        </table>
        </div>
    </form>
        <div class="ex" style="width:1000px;height:5px;"></div>
<?php require 'Partial/footer.html' ?>

</body>
</html>