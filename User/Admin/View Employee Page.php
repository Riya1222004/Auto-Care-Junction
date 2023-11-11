<?php
    if(isset($_POST['View']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>View Employee page</title>
    <style>

.red
{
    background: #2a3f54;
}
div.form-control
		{
			font-family: serif;
			font-size: 18px;
			margin-top:40px;
			margin-left: 400px;
			width: 50%;
			box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
		}
label{
          font-size:30px;
          color:#ea6b00;
          font-weight: bolder;
		  font-family: Serif;
        }
		.button {
  background-color: #2a3f54;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: auto;
  margin-right: auto;
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
        .form-control td{
            padding: 13px;
        }
    </style>
</head>
        
<body >
  <?php require 'Partial/_navadminscroll.html' ?>
  <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width:1519.5px;">
	Employee's all information
	</div>    
    </center>
	<?php include 'Partial/_dbconnect.php'; 
		$n=$_POST['name'];
		$que="SELECT * FROM `user` WHERE Uname='$n'";
		$result=mysqli_query($con,$que);
		$r=mysqli_fetch_array($result);
	?>

  <div class="form-control">
  <form action="ChangeEmployee.php" method="post">
            <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Personal Information</h2><hr><br><br>
            <table>
                <tr>
                    <td><label for="">Name</label></td>
                    <td><input type="text" class="form-control" name="username" id="" value="<?php echo $r['uname'];?>"></td>
                    <td><label for="">Salary</label></td>
                    <td><input type="number" class="form-control" name="salary" id="" value="<?php echo $r['Salary'];?>"></td>
                    
                </tr>
                <tr>
                    <td><label for="">Display Name</label></td>
                    <td><input type="text" class="form-control" name="dname" id="" placeholder="Enter Display Name" value="<?php echo $r['dname'];?>"></td>
                    <td><label for="">Gender</label></td>
                    <td>
                   <?php echo $r['Gender'];?>
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
                
            </table>
            <br><br><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Address Information</h2><hr>
            <table>
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
                
            </table>
            <div class="change" style="margin-left:300px;"><br>
                <input type="Submit" value="Change Data"style="background-color: white;width: 120px;height: 30px;">
            </div>
<br><br>

        </form>
			</div>
		</div>
		<br><br>

</body>
</html>

<?php   
    }
    else
    {
        include 'Partial/_dbconnect.php'; 
		$n=$_POST['name'];
		$que="DELETE FROM `user` WHERE uname='$n' and roleOfUser='employee'";
		$result=mysqli_query($con,$que);
        echo $result;
        header('location:Employee Details.php');
    }
?>