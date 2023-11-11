<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
    .form-group
{
            width: 1200px;
            height: 1050px;
            margin-top: 40px;
            margin-left: 230px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
            background-color: white;
            padding:30px;
}
		.form-group table
{
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        /*align-content: center;
        font-size:20px;
        color:#2a3f54;
        font-weight: bolder; */
}
.form-group th
{
  color: #ea6b00;
  background-color: #2a3f54;
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
.form-group td, th
{
  border: 1px solid black;
}
.main tr,td,th{
  padding: 0px 20px 0px 20px;
}
	</style>
</head>
<body>
<?php require 'Partial/_navadminscroll.html' ?>

<?php
	if($_REQUEST['submit']=='Assign')
	{
	$id = $_REQUEST['id'];
  echo $id;

		include 'Partial/_dbconnect.php';
        $que="SELECT * from appoinment where Appoinment_Id=$id";
        $result=mysqli_query($con,$que);
		?>

		<table>
                    <tr> 
                      <th>Name</th>
                      <th>Servicies</th>
                      <th>Pick up</th>
                      <th>Appoinmnent date</th>
                      <th>Appoinment Time</th>
                      <th>Extra Comments</th>
                      <th>Assign To</th>
                    </tr>
      <tr><form action="xx.php" method="post" class="form-control">
        <td>
          <?php 
		      $row=mysqli_fetch_array($result);
          $idn = $row['U_Id'];
          $sql="SELECT uname  FROM user where U_Id  = $idn";
          $x=mysqli_query($con,$sql);
          $y=mysqli_fetch_array($x);
          echo $y['uname'];
          ?>  
        </td>
        <td>
          <?php 
            $ids = $row['Service_Id'];
            $sql="SELECT Service_Name  FROM service where Service_Id = $ids";
            $x=mysqli_query($con,$sql);
            $y=mysqli_fetch_array($x);
            echo $y['Service_Name'];
            ?>
        </td>
        <td><?php echo $row['PickUp']; ?></td>
        <td><?php echo $row['Appoinment_Date']; ?></td>
        <td><?php echo $row['Appoinment_Time']; ?></td>
        <td><?php echo $row['Appoinment_Extra']; ?></td>
		<td><select name="ename">
                        <?php
                           include 'Partial/_dbconnect.php';
                           $que = mysqli_query($con, "SELECT * FROM user where roleOfUser='employee'");
                           while ($row = mysqli_fetch_array($que)) 
                           { 
                        ?>
                            <option value="<?php echo $row['uname'];?>"><?php echo $row['uname'];}?></option>
                            
        </select></td>
        <input type="hidden" name="id" value="<?php echo $id ; ?>">
<input type="submit" value="Submit">
        </form>
        </tr>
             
    </table><br>
    </form>
<?php
	}
  else if($_REQUEST['submit']=='Delete')
	{
		include 'Partial/_dbconnect.php'; 
		$aid=$_REQUEST['id'];
    echo $aid;

		$sql = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $aid";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $id=$row['U_Id'];

        $sql = "SELECT email FROM user WHERE U_Id = $id";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $email=$row['email'];

        mail($email,"Appoinment Declined","Hello !! your appoinment is denied ");

		$que="DELETE FROM `appoinment` WHERE Appoinment_Id = $aid";

		$result=mysqli_query($con,$que);
      echo mysqli_error($con);
		header('location:Appointment_Details.php');
	}
  else if($_REQUEST['submit']=='Prepare Bill')
  {
		include 'Partial/_dbconnect.php'; 
    $aid=$_REQUEST['id'];
    ?>
    <div class="exa">
      <br><h1>Personal Details</h1><br><br>
      <table >
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone No</th>
        <tr>
          <?php
        		$sql = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $aid";
            $result = mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
            $id=$row['U_Id'];
    
            $sql = "SELECT * FROM user WHERE U_Id = $id";
            $result = mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo $row['uname'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['address'];?></td>
          <td><?php echo $row['number'];?></td>

        </tr>
      </table>

      <br><h1>Service Details</h1><br><br>
      <form action="bill.php" method="post">
        <h2>
          Select Service
        </h2><br>
                <?php
                  include 'Partial/_dbconnect.php';
                  $que = mysqli_query($con, "SELECT Service_Name  FROM service");
                  while ($row = mysqli_fetch_array($que)) 
                  { 
                ?>
                <input type="checkbox"  name="optionsService[]" value="<?php echo $row['Service_Name'];?>"/> <?php echo $row['Service_Name'];}?>
        <br><br><h2>
          Select Accessories
        </h2><br>
                <?php
                  include 'Partial/_dbconnect.php';
                  $que = mysqli_query($con, "SELECT Product_Name  FROM product");
                  while ($row = mysqli_fetch_array($que)) 
                  { 
                ?>
                <input type="checkbox"  name="optionsAcce[]" value="<?php echo $row['Product_Name'];?>"/> <?php echo $row['Product_Name'];}?>
      <br>
      <br><h2>Enter Service Hour</h2><br>
      <input type="number" name="hours" id="" placeholder="Service Hours" class="form-control" style="width:200px;">

      <br><br>
      <input type="submit" class="form-control" value="Prepare Bill"style="width:200px;" ><br><br>
      <input type="hidden" name="id" value="<?php echo $aid ; ?>"> 
      </form>
    </div>
<?php
  }
?>
	</body>

	
</html>