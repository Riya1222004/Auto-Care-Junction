<?php   
        include 'Partial/_dbconnect.php'; 
		$id=$_POST['id'];
        if(isset($_POST['Delete']))
        {
            $que="DELETE FROM `stock` WHERE Stock_Id = $id ";
            $result=mysqli_query($con,$que);
            echo $result;
            header('location:StockDetails.php');
        }
        else
        {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            </head>
            <body><?php require 'Partial/_navadminscroll.html' ?>

                        <center>
                            <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1536px;">
                        Edit Stock
                        </div>    
                        </center>
                <form action="editStock.php" method="post">
                    <?php
                        $que="SELECT P_Id FROM `stock` WHERE Stock_Id='$id'";
                        $result=mysqli_query($con,$que);
                        $r=mysqli_fetch_array($result);
                        $pid = $r['P_Id'];

                        $que="SELECT Product_Name FROM `Product` WHERE P_Id='$pid'";
                        $result=mysqli_query($con,$que);
                        $r=mysqli_fetch_array($result);
                        $Product_Name = $r['Product_Name'];

                    ?>
                    <table>
                    <tr>
                    <td><label for="">Stock</label></td>
                    <td><input type="text" class="form-control" id="" name="" placeholder="Service" value="<?php echo $Product_Name;?>" disabled></td>
                    </tr>
                    <tr>
                    <td><label for="">Quantity</label></td>
                    <td><input type="text" class="form-control" name="qty" id="" placeholder="Quantity"></td>
                    </tr>
                    </table>
                    <div style="margin-left:20px;"><br>
                        <input type="submit" value="Change Setting"style="background-color: white;width: 150px;height: 30px;">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"   >      
                    </div>
                </form>
            </body>
            </html>
            <?php
        }
		
?>