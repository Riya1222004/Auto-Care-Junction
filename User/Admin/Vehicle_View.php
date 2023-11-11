<?php
include 'Partial/_dbconnect.php'; 
$id=$_POST['id'];
$que="DELETE FROM `vehicle` WHERE 	Vehicle_Id=$id";
$result=mysqli_query($con,$que);
echo $result;
header('location:_vehicaldetailscroll.php');
?>
<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> View Product </title>
</head>

<style>
    html,
    body {
        margin: 0px;
    }


    div.container a {
        color: #ea6b00;
        text-decoration: none;
        font: 20px;
        margin: 0px 0px 0px 25px;
        position: relative;
    }

    div.container a:hover {
        color: yellow;
    }

    .red {
        background: #2a3f54;
    }

    .form-group{
            width: 1000px;
            height: 700px;
            margin-top: 40px;
            margin-left: 100px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);


            background-color: white;
            padding:30px;

        }
    
        label{
          font-size:20px;
          color:#2a3f54;
          font-weight: bolder;

        }

        .main td{
            padding: 13px;
        }
        

</style>

<body>
    -->
<?php /*require 'Partial/_navadminscroll.html' ?>

    <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1519px;">
  Edit/View Vehicle
      </div>    
    </center>
    <center>
        <div class="main">
        <div class="form-group">
            <form action="" method="post">
        <br><br>
                <table>
                    <tr>
                    <td><label for="">Name</label></td>
                    <td><input type="text" class="form-control" id="" name="" ></td>
                    <td><label for="">Vehicle Type</label></td>
                    <td><input type="text" class="form-control" id="" name="" ></td>
                    </tr>
                    <tr>
                    <td><label for="">Vehicle Brand</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    <td><label for="">Vehicle Model</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                    <td><label for="">Fuel Type</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    <td><label for="">Chasis No</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                    <td><label for="">Model Year</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    <td><label for="">Gear No</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                    <td><label for="">Odometer Reading</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    <td><label for="">Gear Box</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                    <td><label for="">Engine No</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    <td><label for="">No Plate</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                    <td><label for="">MFD</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    <td><label for="">Gear Box No</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                    <td><label for="">Extra Comments</label></td>
                    <td><input type="text" class="form-control" name="" id="" ></td>
                    </tr>
                    </table>
                    <div style="margin-left:20px;"><br>
                        <input type="button" value="Change Setting"style="background-color: white;width: 150px;height: 30px;">
                                   
                    </div>
            </form> 
        </div>
        <br><br>

    </center>

        </div>
</body>*/