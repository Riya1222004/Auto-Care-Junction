<?php
    session_start();
    if(!isset($_SESSION['log']) )
    {
        exit;
    }
?>
<?php
    $name= $_SESSION['uname'];
    if(isset($_POST['submit']))
    {
        include 'Partial/_dbconnect.php';
        $vtype=$_POST['vtype'];
        $vbrand=$_POST['vbrand'];
        $vmodel=$_POST['vmodel'];
        $vfuel=$_POST['vfuel'];
        $vchass=$_POST['vchass'];
        $vmodely=$_POST['vmodely'];
        $vnoofgear=$_POST['vnoofgear'];
        $vodo=$_POST['vodo'];
        $vengine=$_POST['vengine'];
        $vnoplate=$_POST['vnoplate'];
        $vmfd=$_POST['vmfd'];
        $vgearno=$_POST['vgearno'];
        $vdesc=$_POST['vdesc'];
        $sql = "SELECT U_Id from user WHERE Uname = '$name'";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $id=$row['U_Id'];
        $sql1 = "INSERT INTO vehicle
                (
                    `Vehicle_Type` , `Vehicle_Brand` , `Vehicle_Model` , `Vehicle_Fuel` ,  `Vehicle_Chessis_No` ,  `Vehicle_Model_Year` , `Vehicle_Gear` , 
                    `Vehicle_Odometer` , `Vehicle_Gearbox_No` , `Vehicle_Engine_no` ,
                    `Vehicle_No_Plate` , `Vehicle_MFD` , `Vehicle_desc` , `U_Id`
                ) VALUES('$vtype','$vbrand', '$vmodel' ,'$vfuel','$vchass','$vmodely',$vnoofgear,$vodo , $vgearno , $vengine , '$vnoplate' , '$vmfd' , '$vdesc' , $id)
                ";
        if(mysqli_query($con,$sql1))
        {
            echo "success";
            header('location:BookAppoinment.php');
          }
        else
        {
            echo mysqli_error($con);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
  <title>Document</title>
</head>
<style>
  

        html, body
{
    margin: 0px;
}


div.con a
{
    color: #ea6b00;
    text-decoration: none;
    font: 20px ;
    margin: 0px 0px 0px 25px;
    position: relative;
}
div.con a:hover
{
    color: yellow;
}
.red
{
    background: #2a3f54;
}
        .container1 {  
          margin-left: 200px;
          margin-right: 100px;
            padding: 30px;  
          background-color:#fff;
          margin-top: 30px;
          font-size:20px;
          box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
        } 
        .title
        {
          color: #ea6b00;
          font-size:20px;
         
          font-weight: bolder;

        }  
        label
        {
          font-size:20px;
          color:#2a3f54;
          font-weight: bolder;


        }
        footer{
  margin: 0;
  box-sizing: border-box;
  left: 0;
  bottom: 0;
  

}


.rodape {
  display: flex;
  justify-content: center;
  align-items: center;
  /*   min-height: 20vh; */
  transition: 0.5s;
  background-color: #2a3f54;
  margin-top: 100px;
  flex-shrink: 0;
}

.rodape .redes {
  position: relative;
  display: flex;
}

.rodape .redes li {
  list-style: none;
}

.rodape .redes li::before {
  content: attr(data-text);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, calc(-50% + 120px));
  font-size: 14vw;
  pointer-events: none;
  color: #fff;
  font-weight: 700;
  transition: 0.5s;
  opacity: 0;
}

.rodape .redes li:hover::before {
  opacity: 0.1;
  transform: translate(-50%, calc(-50% + 150px));
}

.rodape .redes li a {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 50px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #333;
  border-radius: 10px;
  text-decoration: none;
  margin: 0px 20px ;
  font-size:20px;
  transform-style: preserve-3d;
  perspective: 500px;
  box-shadow: 0 25px 35px rgba(0, 0, 0, 0.1);
  transition: background 0.25s;
}

.js-tilt-glare {
  border-radius: 10px;
}

.rodape .redes li a:hover.facebook {
  background: #1877f2;
}

.rodape .redes li a:hover.instagram {
  background: #e4405f;
}

.rodape .redes li a:hover.twitter {
  background: #0099ff;
}

.rodape .redes li a:hover.youtube {
  background: #ff0000;
}

.rodape .redes li a:hover.linkedin {
  background: #0e76a8;
}

.rodape .redes li a:hover.githube {
  background: #171515;
}

.rodape .redes li a:hover.codepen {
  background: #1877f2;
}

.rodape .redes li a .fa {
  transition: 0.25s;
  pointer-events: none;
}

.rodape .redes li a:hover .fa {
  color: #fff;
  transform: scale(1.75) translatez(50px);
}
.form-group td{
  padding: 20px;
}   
</style>
<body>
<?php require 'Partial/_navlogscroll.html' ?>

    <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1519px;">
  Add Vehicle 
      </div>    
    </center>
  <div class="main">

  <div class="form-group">
     <form action="" method="POST">
      <div class="container1">
         <br>
         <br>
      <table cellpadding="5">

      <tr>
          <td ><label> Vehical Type:</label></td>
          <td> <input type="text" class="form-control" name="vtype" id="" placeholder="Enter Vehicle Type" required> </td>
          <td><label> Vehical Brand</label></td>
          <td> <input type="text" class="form-control" name="vbrand" id="" placeholder="Enter First Name" required> </td>
      </tr>
      <tr>
        <td ><label>Vehical Model Number:</label></td>
        <td> <input type="text" class="form-control" name="vmodel" id="" placeholder="Enter vehical Model" required> </td>
        <td><label>Fuel Type:</label></td>
        <td> <input type="text" class="form-control" name="vfuel" id="" placeholder="Enter Fuel Type" required> </td>
          
      </tr>
      <tr>
        <td ><label>Chassis no:</label></td><!--17 digit-->
        <td> <input type="number" class="form-control" name="vchass" id="" placeholder="Enter Chassis no" required> </td>
        <td><label>Model Year:</label></td>
        <td> <input type="date" class="form-control" name="vmodely" id="" placeholder="Enter Model Year" required> </td>
      </tr>
      <tr>
        <td ><label>No. of gear:</label></td>
        <td> <input type="number" class="form-control" name="vnoofgear" id="" placeholder="Enter No. of gear" required> </td>
        <td><label>Odometer Reading</label></td>
        <td> <input type="text" class="form-control" name="vodo" id="" placeholder="Enter Odometer Reading" required> </td><!-- miles a vehicle has traveled.-->
      </tr>
      <tr>
        <td><label>Engine no.</label></td>
        <td> <input type="number" class="form-control" name="vengine" id="" placeholder="Enter Engine no" required> </td> <!--(6 digit)found on the body of the car's engine-->
      </tr>
      <tr>
      <td ><label>No. plate:</label></td>
      <td> <input type="text" class="form-control" name="vnoplate" id="" placeholder="Enter No Plate" required> </td>
      <td><label>MFD:</label></td>
      <td> <input type="date" class="form-control" name="vmfd" id="" placeholder="Enter First Name" required> </td>   
    </tr>
    <tr>
      <td ><label>Gear box no.:</label></td>
      <td> <input type="number" class="form-control" name="vgearno" id="" placeholder="Enter Gear box no" required> </td>
      <td><label>Vehicle desc :</label></td>
      <td> <input type="text" class="form-control" name="vdesc" id="" placeholder="Enter Vehicle Description" required> </td>   
    </tr>
   
      <tr>
        
     
        <td>    </td>
        <td>   </td>
        <td>  <input type="submit" value="Reset">  
          <input type="submit" value="Add" name="submit">   </td>
        
    </tr>
   

  </form>
</div>
  </table>
</div>
  </div>

</body>
</html>