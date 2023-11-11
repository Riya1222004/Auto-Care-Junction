<?php
  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'Partial/_dbconnect.php';
    $sname = $_POST['sname'];
    $pname = $_POST['pname'];
    $cname = $_POST['cname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $contry = $_POST['contry'];
    $state =  $_POST['state'];
    $address  =  $_POST['address'];
    $city = $_POST['city'];
    $sql = "INSERT INTO supplier (`Supplier_Name` , `Product_Name` , `Company_Name` , `Email` ,  `Mob_No` ,  `Contry` , `State` , `City` , `Address` ) VALUES ( '$sname','$pname', '$cname' ,  '$email','$mob','$contry', '$state' ,'$city','$address')";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        $success = true;
        $sameuname = false;
        header('location:_supplierdetails.php');
      }
      else
      {
        $sameuname =true;
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
.form-group  .container {  
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

        
</style>
<body>
<?php require 'Partial/_navadminscroll.html' ?>
    <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1536px;">
  Add Supplier
      </div>    
    </center>
  <div class="form-group">
     <form action="" method="POST">
      <div class="container">
 
         <br>
         <br>
      <table cellpadding="5">
  <tr>
          <td > <label for=""> Supplier Name:</label></td>
         <td>  <input type="text" class="form-control" name="sname" id="" placeholder="Enter Name">

          </td>
        
          
      </tr>
      <tr>
          <td ><label>Product Name</label></td>
          <td> <input type="text" class="form-control" name="pname" id="" placeholder="Enter Product Name"> </td>
          <td><label>Company Name:</label></td>
          <td> <input type="text" class="form-control" name="cname" id="" placeholder="Enter Company Name"> </td>
      </tr>
      <tr>
        <td ><label>Email:</label></td>
        <td> <input type="email" class="form-control" name="email" id="" placeholder="Enter Email"> </td>
        <td><label>Mob No.:</label></td>
        <td> <input type="number" class="form-control" name="mob" id="" placeholder="Enter Mob No."> </td>
          
      </tr>
      <tr>
        <td ><label>Country:</label></td>
        <td> <input type="text" class="form-control" name="contry" id="" placeholder="Enter Country"> </td>
        <td><label>State:</label></td>
        <td> <input type="text" class="form-control" name="state" id="" placeholder="Enter State"> </td>
      </tr>
      <tr>
      <td><label>City:</label></td>
        <td> <input type="text" class="form-control" name="city" id="" placeholder="Enter city"> </td>
        <td ><label> Address :</label></td>
        <td><textarea cols="19" rows="2" placeholder="Current Address" value="address" required name="address">  
        </textarea>  </td>
        
        </tr>
      
      <tr>
        
     
        <td>    </td>
        <td>   </td>
        <td>  <input type="submit" value="Add" name="Submit">  
          <input type="submit" value="Reset">   </td>
        
    </tr>
   

  </form>
</div>
  </table>
</div>
</body>
</html>