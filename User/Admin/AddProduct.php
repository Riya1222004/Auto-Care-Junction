<?php
  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'Partial/_dbconnect.php';
    if(!empty($_POST['sname']))
     {
        $sname = $_POST['sname'];
        $sql = "SELECT S_Id FROM supplier WHERE Supplier_Name = '$sname'";
        $result = mysqli_query($con,$sql);
        $r = mysqli_fetch_array($result);
        $id = $r['S_Id'];
    }
    $Mdate = $_POST['Mdate'];
    $pname = $_POST['pname'];
    $mname = $_POST['mname'];

    $pimage = $_POST['pimage'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $wperiod = $_POST['wperiod'];
    $sql = "INSERT INTO product (
        `S_Id` , `P_MFD` , `Product_Name` , `Product_Image` , `Product_Color` ,  `Manufacture_Name` ,  `Product_Price` , `Product_Warrenty` ) 
        VALUES (
            $id, '$Mdate' ,'$pname', '$pimage' , '$color' , '$mname', '$price','$wperiod'
            )";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        $success = true;
        $sameuname = false;
        header('location:ProductDetails.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Add Product </title>
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
            width: 900px;
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

        .form-group td{
            padding: 13px;
        }
        

</style>

<body>
<?php require 'Partial/_navadminscroll.html' ?>
    <center>
        <div class="form-group">
            <form action="" method="post">
                <h2 style="color: #ea6b00; font-weight: bolder; font-size:28px; text-align: left; font-weight: bolder;">Add Product</h2>
                <hr><br><br>
                <table>
                    <tr>
                    <td><label for="">Supplier Name</label></td>
                    <td><select name="sname" class="form-control">
                        <?php
                           include 'Partial/_dbconnect.php';
                           $que = mysqli_query($con, "SELECT Supplier_Name FROM supplier");
                           while ($row = mysqli_fetch_array($que)) 
                           { 
                        ?>
                            <option value="<?php echo $row['Supplier_Name'];?>"><?php echo $row['Supplier_Name'];}?></option>
                            
                        </select></td>
                    <td><label for="">Manufacturer Date</label></td>
                    <td><input type="Date" class="form-control" id="" name="Mdate"></td>
                    </tr>
                    <tr>
                    <td><label for="">Product Name</label></td>
                    <td><input type="text" class="form-control" name="pname" id="" placeholder="Enter Product Name"></td>
                    </tr>
                    <tr>
                    <td><label for="">Product Image</label></td>
                    <td><input type="file" class="form-control" name="pimage" id=""></td>
                    <td><label for="">Manufacturer Name</label></td>
                    <td><input type="text" class="form-control" name="mname" id="" placeholder="Enter Manufacturer Name"></td>
                    </tr>
                    <tr>
                    <td><label for="">Price</label></td>
                    <td><input type="number" class="form-control" name="price" id="" placeholder="Enter Price"></td>
                    <td><label for="">Colour</label></td>
                    <td><input type="color" class="form-control" name="color" id=""></td>
                    </tr>
                    <tr>
                    <td><label for="">Warranty Period(In Years)</label></td>
                    <td><input type="number" class="form-control" value="0" name="wperiod" id="" placeholder="Enter Warranty Period"></td>
                    
                    </tr>
                    </table>
                    <div ><br>
                    <input type="submit" value="Add" style="background-color: white;width: 100px;height: 30px;">          
                        <input type="reset" value="Reset"style="background-color: white;width: 100px;height: 30px;margin-left:20px;">
                           
                    </div>



            </form> 
        </div>


    </center>

</body>