<?php
  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'Partial/_dbconnect.php';

    $sname = $_POST['sname'];
    $scost = $_POST['scost'];
    $ecomm = $_POST['ecomm']; 
    if(!empty($_POST['title']))
     {
        $title = $_POST['title'];
        $sql = "SELECT Id FROM service_title WHERE Servic_Title = '$title'";
        $result = mysqli_query($con,$sql);
        $r = mysqli_fetch_array($result);
        $id = $r['Id'];
      }

    $sql = "INSERT INTO service (`Service_Name` , `Service_Cost` , `Extra_Comm` , title_id ) VALUES ( '$sname' , '$scost' , '$ecomm' , $id)";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        $success = true;
        $sameuname = false;
        header('location:Service Details.php');
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

<title>Menu Bar</title>
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
    margin: 0px 0px 0px 25px;
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

.form-group
{
            width: 700px;
            margin-top: 40px;
            margin-left: 400px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
            background-color: white;
            padding:30px;
}
label
{
        align-content: center;
        font-size:20px;
        color:#2a3f54;
        font-weight: bolder;
}
.main td
{
            padding: 13px;
}
</style>
<body>
    <?php require 'Partial/_navadminscroll.html' ?>

    <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1536px;">
            Add Service
        </div>    
    </center>
<div class="main">
<div class="form-group">
	<form action="" method="post">
        <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Add Services</h2><hr><br><br>
            <table>
                <tr>
		            <td><label for="">Service Name</label></td>
		            <td><input type="text" class="form-control" name="sname" id="" placeholder="Enter Your Service Name" required></td>
                </tr>
                <tr>
		            <td><label for="">Service Cost</label></td>
		            <td><input type="text" class="form-control" name="scost" id="" placeholder="Enter Your Service cost here" required></td>
                </tr>
                <tr>
		            <td><label for="">Service Title</label></td>
		            <td><select name="title" class="form-control">
                        <?php
                           include 'Partial/_dbconnect.php';
                           $que = mysqli_query($con, "SELECT Servic_Title FROM service_title");
                           while ($row = mysqli_fetch_array($que)) 
                           { 
                        ?>
                            <option value="<?php echo $row['Servic_Title'];?>"><?php echo $row['Servic_Title'];}?></option>
                            
                        </select>
                    </td>
                </tr>
                
                <tr>
		            <td><label for="">Extra Comments</label></td>
		            <td><input type="text" class="form-control" name="ecomm" id="" placeholder="Extra Comments" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Add" style="background-color: white; width: 100px; height: 30px;"></td>
                    <td><input type="Reset" value="Reset" style="background-color: white; width: 100px; height: 30px;"></td>
                </tr>
            </table>
	</form>
</div>
</div>
</body>
</html>
