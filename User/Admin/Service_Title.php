<?php
$sameuname = false;
$success = false;
$error = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'Partial/_dbconnect.php';
    
    $image = $_FILES['image']['name'];
    $st = $_POST['servicetitle'];
    $vd = $_FILES['t']['name'];
  
        $target = basename($image);
  
        $sql = "INSERT INTO service_title ( `Servic_Title` , image , `Video`) VALUES ('$st' , '$image', '$vd')";
        if(mysqli_query($con, $sql))
            header('location:Service_Title_Detail.php');
        else    
            echo mysqli_error($con);
  
        //image
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
        echo $msg;

        //video
        if (move_uploaded_file($_FILES['t']['tmp_name'], $target)) {
            $msg = "video uploaded successfully";
        }else{
            $msg = "Failed to upload video";
        }

        echo $msg;
  
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.main
{
          height:1000px;
}
.form-group
{
            width: 700px;
            height: 450px;
            margin-top: 40px;
            margin-left: 260px;
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
.form-group td
{
            padding: 13px;
}
</style>
<body>
<?php require 'Partial/_navadminscroll.html' ?>

<div class="main">
<div class="form-group">
<form method="POST" action="" enctype="multipart/form-data">
        <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;"> Add Service Title </h2><hr><br><br>
            <table>
                <tr>
		            <td><label for="">Service Title</label></td>
		            <td><input type="dropdown" class="form-control" name="servicetitle" id="" placeholder="Select Your Service Title here" required></td>
                </tr>
                <tr>
		            <td><label for="">Image</label></td>
		            <td><input type="file" name="image" required></td>
                </tr>
                <tr>
		            <td><label for="">Video</label></td>
		            <td><input type="file" name="t" required></td>
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