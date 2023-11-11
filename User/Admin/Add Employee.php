<!-- Enable less secure app configration otherwise it will not work -->
<?php
$sameuname = false;
$success = false;
$error = false;
  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'Partial/_dbconnect.php';
    $uname = $_POST["username"];
    $email = $_POST["email"];
    $cpass=$_POST["password2"];
    $pass = $_POST["password"];
    $dname = $_POST["dname"];
    $DOB = $_POST["DateOfBirth"];
    $no1 = $_POST["pno"];
    $image = $_POST["image"];
    $contry = $_POST["contry"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $exist = false;
    $sameuname = false;
    $gen=$_POST['g'];
    $sal=$_POST['salary'];
    if(($pass == $cpass) && $exist == false )
    {
      $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (`roleOfUser` , `uname` , `dname` , `pass` ,  `Gender` ,  `email` , `DOB` , `number` , `image` , `contry` , `state` , `city` , `address` , `Salary` ) VALUES ( 'employee','$uname', '$dname' ,  '$hash','$gen','$email','$DOB', '$no1' ,'$image','$contry','$state','$city','$address',$sal)";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        $success = true;
        $sameuname = false;
        mail($email,"","Hello !! $uname you are now employee at ACJ and your login password is $pass");
        echo '<script type ="text/JavaScript">';  
                echo 'alert("Employee Added Successfully")';  
                echo '</script>';
                header("Refresh:0"); 
      }
      else
      {
        $sameuname =true;
        echo mysqli_error($con);
      }
    }
    else
    {
      $error = true;
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
      html, body
{
    margin: 0px;
}


div.container a
{
    color: #ea6b00;
    text-decoration: none;
    font: 20px ;
    margin: 0px 0px 0px 50px;
    position: relative;
}
div.container a:hover
{
    color: yellow;
}
.red
{
    background: #2a3f54;
}

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
        .form-group td{
            padding: 13px;
        }
        

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body style="font-family: Times New Roman, Times, serif;">
<?php require 'Partial/_navadminscroll.html' ?>

		<center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width:1519.5px;">
            Add Employee
        </div>    
    </center>
<div class="main">
<div class="form-group">
        <form action="" method="post">
            <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Personal Information</h2><hr><br><br>
            <table>
                <tr>
                    <td><label for="">Name</label></td>
                    <td><input type="text" class="form-control" name="username" id="" placeholder="Enter First Name" required></td>
                    <td><label for="">Salary</label></td>
                    <td><input type="number" class="form-control" name="salary" id="" placeholder="Enter Salary" required></td>
                </tr>
                <tr>
                    <td><label for="">Display Name</label></td>
                    <td><input type="text" class="form-control" name="dname" id="" placeholder="Enter Display Name" required></td>
                    <td><label for="">Gender</label></td>
                    <td>
                        <input type="radio"  name="g" id="" value="Male">Male
                        <input type="radio"name="g" id="" value="Female">Female
                    </td>
                </tr>
                <tr>
                    
                    <td><label for="">Date Of Birth</label></td>
                    <td><input type="date" class="form-control" name="DateOfBirth" id="" required></td>
                    <td><label for="">Email</label></td>
                    <td><input type="email " class="form-control" name="email" id="" placeholder="Enter Email" required></td>
                </tr>
                <tr>
                    
                    <td><label for="">Password</label></td>
                    <td><input type="password" class="form-control" name="password" id="" placeholder="Enter Password" required></td>
                    <td><label for="">Confirm Password</label></td>
                    <td><input type="password" class="form-control" name="password2" id="" placeholder="Enter Confirm Password" required></td>
                </tr>
                <tr>
                   
                    <td><label for="">Mobile No</label></td>
                    <td><input type="number" class="form-control" name="pno" id="" placeholder="Enter Mobile No" required></td>
                    <td><label for="">Image</label></td>
                    <td><input type="file" class="form-control" name="image" id="" placeholder="Image" required></td>
                </tr>
                
            </table>
            <br><br><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Address Information</h2><hr>
            <table>
                <tr>
                    <td><label for="">Contry</label></td>
                    <td>
                    <input type="text" class="form-control" name="contry" id="" placeholder="Enter Contry" required>
                    </td>
                    <td><label for="">State</label></td>
                    <td><input type="text" class="form-control" name="state" id="" placeholder="Enter State" required></td>
                </tr>
                <tr>
                    <td><label for="">Town/City</label></td>
                    <td><input type="text" class="form-control" name="city" id="" placeholder="Enter Town/City" required></td>
                    <td><label for="">Address</label></td>
                    <td><input type="text" class="form-control" name="address" id="" placeholder="Enter Address" required></td>
                </tr>
                
            </table>
            <div class="change" style="margin-left:420px;"><br>
                <input type="submit" value="Submit"style="background-color: white;width: 100px;height: 30px;">
                 <input type="reset" value="Reset" style="background-color: white;width: 100px;height: 30px;">            
            </div>


        </form>
        </div>
</div>

    
</body>
</html>