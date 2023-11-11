<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ._1-50w{
            font-weight: 100;
    line-height: 1.15;
    font-size: 16px!important;
    font-family: Gilroy,sans-serif;
    color: black;
    user-select: none;
    box-shadow: 0 .25rem .3125rem -.15rem rgba(0,0,0,.12);
    background-color: hsla(0,0%,91.8%,.56);
    justify-content: center;
    box-sizing: border-box;
    min-height: 7.18rem;
    border-radius: .125rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    grid-row-gap: 1.5625rem;
    padding: 1.375rem 2.75rem;
    margin-right: 1.5625rem;
    margin-top: 1.5625rem;
    max-width: 11.55rem;
    min-width: 11.25rem;
    height: 19.25rem;
        }
       .x td{
            padding: 30px;
            padding-left: 140px;
        }
        span{
    color:black;
    text-decoration:none;

        }
    </style>
</head>
<body>
<?php require 'Partial/_navlogscroll.html' ?>
<br><br>
<center>
<h2 style="color: #2a3f54;
            font-weight: bolder;
            font-size:50px;
            font-weight: bolder;
            ">Services Available</h2><br>
</center>
<div class="x">
            
<table style="margin-left:100px;" >
<?php 
    include 'Partial/_dbconnect.php';
    $que = mysqli_query($con, "SELECT * FROM service_title");
    while ($row = mysqli_fetch_array($que)) 
    {
        $d=$row['Image'];
?>
    <tr>
        <form action="Serviceview.php" method="post">
            <td>
                <div class="_1-50w">
                        <img  src="<?php echo $d;?>">
                        <span itemprop="name">
                        </span>
                    <input type="hidden" name="id" value="<?php echo $row['Id'];?>">
                    <input type="submit" value="<?php echo $row['Servic_Title'];?>" name="submit">
                </div>
            </td>
    </tr>
</form>

<?php
}
?>
</table>
</div>
<br><br><br><br>
<?php require 'Partial/footer.html' ?>
</body>
</html>