
<?php
    if(isset($_POST['Edit']))
    {
?>
<!DOCTYPE html>
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
            height: 500px;
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
<?php require 'Partial/_navadminscroll.html' ?>

    <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1536px;">
  Edit/View Product
      </div>    
    </center>
    <?php include 'Partial/_dbconnect.php'; 
		$id=$_POST['id'];
		$que="SELECT * FROM `service` WHERE Service_Id='$id'";
		$result=mysqli_query($con,$que);
		$r=mysqli_fetch_array($result);
        
                ?>
    <center>

        <div class="main">
        <div class="form-group">
            <form action="ChangeService.php" method="post">
        <br><br>
                <table>
                    <tr>
                    <td><label for="">Service</label></td>
                    <td><input type="text" class="form-control" id="" name="sname" placeholder="Service" value="<?php echo $r['Service_Name'];?>"></td>
                    </tr>
                    <tr>
                    <td><label for="">Cost</label></td>
                    <td><input type="text" class="form-control" name="scost" id="" placeholder="cost" value = "
                    <?php echo $r['Service_Cost'];?>"></td>
                    <td><label for="">Extra Comments</label></td>
                    <td><input type="text" class="form-control" name="ecomm" id="" placeholder="Extra Comments" value  = "<?php echo $r['Extra_Comm'];?>"></td>
                    </tr>
                    </table>
                    <div style="margin-left:20px;"><br>
                        <input type="submit" value="Change Setting"style="background-color: white;width: 150px;height: 30px;">
                                   
                    </div>
            </form> 
        </div>

    </center>

        </div>
</body>
</html>
<?php   
    }
    else
    {
        include 'Partial/_dbconnect.php'; 
		$id=$_POST['id'];

		$que="DELETE FROM service WHERE Service_Id=$id";
		$result=mysqli_query($con,$que);
        header('location:Service Details.php');
    }
?>