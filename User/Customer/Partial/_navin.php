<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Menu Bar</title>
    <style>
    ul{
        
        list-style-type: none ;
        padding-top: 20px;
        overflow: auto;
        background-color: rgb(255, 255, 255);
        height:60px;
    }
    li
    {
        float: left;
        padding-left:40px;

    }
    li a {
      color: #137DC5;
      text-align: center;
      font-size: 20px;
      text-decoration: none; 
      font-weight: bolder;   
    }
    li a:hover
    {
        color: rgb(226, 103, 144);
    }
    </style>
</head>
        
<body style="font-family: Times New Roman, Times, serif;" >
<nav style="background-color: rgb(255, 255, 255); ">
        <table style="">
            <tr>
                <td>
                    <img src="logo.PNG" alt="" >
                </td>
                <td>
                    <ul>
                        <li><a href="#help">The Company</a></li>
                        <li><a href="#help">Servicies</a></li>
                        <li><a href="#about">Book Appoinment</a></li>
                        <li><a href="#help">Service Calculator</a></li>
                        <li><a href="#about">Contract Based Servicies</a></li>
                        <li><a href="">Accessories</a></li>
                        <?php
                            if(isset($_SESSION['log']))
                              {
                                    echo '<li><a href="LogOut.php">Log Out</a></li>';

                            }
                        ?>
                    </ul>
                </td>
            </tr>
        </table>
        </nav>
        
</body>
</html>