<!DOCTYPE html>
<html lang="en">
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bar</title>
    <title>
      Efeito Botões Rodapé - Effect Footer Social Media
    </title>
  </head>
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

.main
{
          height:1000px;
}
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
<body >
<?php require 'Partial/_navadminscroll.html' ?>

<center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width:1519.5px;">
            Appoinment Details
        </div>    
    </center>
<div class="main">
  <div class="form-group">
          <h2 style="color: #ea6b00;
              font-weight: bolder;
              font-size:28px;
              font-weight: bolder;">Appointment Details</h2><hr><br><br>
              <table>
                    <tr> 
                      <th>Name</th>
                      <th>Servicies</th>
                      <th>Pick up</th>
                      <th>Appoinmnent date</th>
                      <th>Appoinment Time</th>
                      <th>Extra Comments</th>
                      <th>Assign To</th>
                      <th>Prepare Bill</th>
                    </tr>
                    <?php
         include 'Partial/_dbconnect.php';

        $que="SELECT * from appoinment where Appoinment_Id NOT IN ( SELECT Appoinment_Id FROM bill1 )";
        $result=mysqli_query($con,$que);
        while($row=mysqli_fetch_array($result))
        {
      ?>  
      <tr><form action="View_Appointment.php" method="post">
        <td>
          <?php 
          $id = $row['U_Id'];
          $sql="SELECT uname  FROM user where U_Id  = $id";
          $x=mysqli_query($con,$sql);
          $y=mysqli_fetch_array($x);
          echo $y['uname'];
          ?>  
        </td>
        <td>
          <?php 
            $id = $row['Service_Id'];
            $sql="SELECT Service_Name  FROM service where Service_Id  = $id";
            $x=mysqli_query($con,$sql);
            $y=mysqli_fetch_array($x);
            echo $y['Service_Name'];
            ?>
        </td>
        <td><?php echo $row['PickUp']; ?></td>
        <td><?php echo $row['Appoinment_Date']; ?></td>
        <td><?php echo $row['Appoinment_Time']; ?></td>
        <td><?php echo $row['Appoinment_Extra']; ?></td>
        <td>
          <?php
            $id = $row['Appoinment_Id'];
            $sql="SELECT U_Id FROM assignment where Appoinment_Id = $id";
            $x=mysqli_query($con,$sql);
            $fetch=mysqli_fetch_array($x);
            $y=mysqli_num_rows($x);
            if($y)
            {
              $id = $fetch['U_Id'];
              $sql="SELECT uname  FROM user where U_Id = $id";
              $x=mysqli_query($con,$sql);
              $fetch=mysqli_fetch_array($x);
              $y=$fetch['uname'];
              echo $y;
            }
            else
            {
              ?>
              <input type="submit" name="submit" value="Assign" style="background-color: blue; color: white; width: 100px;height: 30px;">
              <input type="submit" name="submit" value="Delete" style="background-color: blue; color: white; width: 100px;height: 30px;">

              <?php
            }
          ?>
           
        </td>
        <td>
        <input type="hidden" name="id" value="<?php echo $row['Appoinment_Id'] ; ?>">
        <input type="submit" name="submit" value="Prepare Bill" style="background-color: blue; color: white; width: 100px;height: 30px;">
        </td>
        </form>
        </tr>
      <?php
          }
        ?>  
             
              </table><br>
    </form>
  </div>
  </div>


</body>

</html>