<?php
    session_start();
    if(!isset($_SESSION['log']) )
    {
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .extra{
            height: 800px;

        }
        .main{
            width: max-content;
            height: max-content;
            padding: 10px 100px 10px 100px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
            margin-top: 25px;
            padding-bottom: 25px;
            margin-bottom: 2005px;
            margin-left: 400px;
            
        }
        h2{
            color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<?php require 'Partial/_navlogscroll.html'
?>

<div class="extra">
<div class="main">
        <br><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            ">Accessories</h2><br>
        <table>
            <tr style="
            border:2px solid black;
            ">
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Accessory</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Cost</th>
             
            </tr>
            <?php
                include 'Partial/_dbconnect.php';
                $que="SELECT * FROM `product`";
                $result=mysqli_query($con,$que);
                while($row=mysqli_fetch_array($result))
                {
            ?>  
            <tr style="
               border:2px solid black;
               ">
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               "><?php echo $row['Product_Name']; ?></td>
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               "><?php echo $row['Product_Price']; ?></td>

                </tr>
                <?php
          }
        ?>
               </table>
       
                           
               
       
    </div>
</div>
<?php require 'Partial/footer.html' ?>
    

</body>
</html>