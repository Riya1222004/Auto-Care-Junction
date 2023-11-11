<?php

$login = false;
$error = false;
  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    $con = mysqli_connect("localhost","root","","acj");
    if(!$con)
    {
      echo "Unsuccess";
    }
    $uname = $_POST["username"];
    $pass = $_POST["password"];
      $sql = "SELECT * FROM `user` WHERE Uname='$uname' and roleOfUser='user'";
      $result = mysqli_query($con,$sql);
      $num = mysqli_num_rows($result);
      if($num==1)
      {
        $row1 = mysqli_fetch_assoc($result);
          $a= $row1['pass'];
          if(password_verify($pass, $a))
          {
              $login = true;
              session_start();
              $_SESSION['log']=true;
              $_SESSION['uname']=$uname;
              if($uname == "Admin")
              {
                header('location:Admin/Welcome_admin.php');       
              }
              else
              {
                header('location:Customer/Welcome_user.php');       
              }
          }
      }
    else
    {
      $sql = "SELECT * FROM `user` WHERE Uname='$uname'  and roleOfUser
      ='employee'";
       $result = mysqli_query($con,$sql);
      $num = mysqli_num_rows($result);
      if($num==1)
      {
        $row1 = mysqli_fetch_assoc($result);
          $a= $row1['pass'];
          if(password_verify($pass, $a))
          {
              $login = true;
              session_start();
              $_SESSION['log']=true;
              $_SESSION['uname']=$uname;
           
                header('location:Employee/Welcome_Employee.html
                ');
          }
        
      }
      else
      {
        $error = true;
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
          height:100px;
        }
        .form-group{
            width: 500px;
            height: 400px;
            margin-top: 30px;
            margin-left: 50px;
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
<body >

<nav style="background-color: #2a3f54; ">
        </table>
        </nav>
        <table style="background-color: #2a3f54;width: 1536px;">
        
    <tr>
      <td>
  <img src="Customer/logog.png" alt="nop[" >
      </td>
      <td>
        <div class="container red topBotomBordersOut">
        <font size=4px>
            <a href="">The Company</a>
          <a href="Customer/Service.php">Servicies</a>
          <a href="">Book Appoinment</a>
          <a href="#help">Service Calculator</a>
          <a href="Customer/Accessories.php">Accessories</a>
          
            </font>
      </div>
      </td>      
    </tr>
  
  </table>
       
<?php require 'Customer/Partial/_nav3.html' ?>
<?php
   if($error)
   {
       echo '
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>Awwwwww!</strong> Please enter correct data.
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
       
     </div>
     ';
   }
   
 
?>
<center> 
<div class="main">
<div class="form-group">
        <form action="" method="post">
          <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Log In</h2><br>
                    <input type="text" class="form-control" name="username" id="" placeholder="Enter User Name" required>
                    <br><br><input type="password" class="form-control" name="password" id="" placeholder="Enter Password" required>
                  <div class="change" style="margin: left 200px;0px;"><br>
              <br>  <input type="submit" value="Submit"style="background-color: white;width: 100px;height: 30px;">
                 <input type="reset" value="Reset" style="background-color: white;width: 100px;height: 30px;">            
            </div>


        </form>
        </div>
</div>
<?php require 'Customer/Partial/footernoscroll.html' ?>

</body>
</html>