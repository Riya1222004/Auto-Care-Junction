<?php
    include 'Partial/_dbconnect.php';

    $sname=array();
    $pname=array();
    $sid=array();
    $pid=array();
    $scost=0;
    $acost=0;
    $hour = 0;

    $name= $_POST['name'];
    $sql = "SELECT U_Id from user WHERE Uname = '$name'";
    $result = mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==0)
    {
        echo "User does not exists";
        exit();
    }
    $row=mysqli_fetch_array($result);
    $uid=$row['U_Id'];

    $sql = "SELECT Appoinment_Id  FROM appoinment WHERE U_Id = $uid";
    $result = mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==0)
    {
        echo "Appoinment Has Not Been Booked By User";
        exit();
    }
    $ai=0;
    while($r = mysqli_fetch_array($result))
    {
        $aid[$ai] = $r['Appoinment_Id'];
        $ai++;
    }
    $x=0;
    do
    {
        $sname=array();
        $pname=array();
        $sid=array();
        $pid=array();
        $scost=0;
        $acost=0;
        $hour = 0;
        $sql = "SELECT Bill_Id FROM bill1 WHERE Appoinment_Id   = $aid[$x]";
        $result = mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num==0)
        {
            echo "Bill is not ready";
            exit();
        }
        $r = mysqli_fetch_array($result);
        $bid = $r['Bill_Id'];
    
        $sql = "SELECT Service_Id FROM billservicies WHERE Bill_Id = $bid";
        $result = mysqli_query($con,$sql);
        $i=0;
        while($r = mysqli_fetch_array($result))
        {
            $sid[$i] = $r['Service_Id'];
            $i++;
        }
    
        $sql = "SELECT P_Id FROM billproduct WHERE Bill_Id = $bid";
        $result = mysqli_query($con,$sql);
        $i=0;
        while($r = mysqli_fetch_array($result))
        {
            $pid[$i] = $r['P_Id'];
            $i++;
        }
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    </head>
    <body>
    <?php
        if($x == 0)
        require 'Partial/_navadminscroll.html';
        $sql = "SELECT Date FROM bill1 WHERE Appoinment_Id = $aid[$x]";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $d=$row['Date'];
        $z= date('d/M/yy', strtotime($d));
        echo "<br><br><hr><hr><h4>Bill Date : $z</h4><hr><hr>";
    ?>
    <br><br>
    <div class="container-fluid">
        <div id="ui-view" data-select2-id="ui-view">
            <div>
                <div class="card">
                    <div class="card-header"><b><center style="font-size:30px;">Auto Care Junction</center></b>
                        
                        
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <h6 class="mb-3">From:</h6>
                                <div>
                                    <strong>AutoCareJunction.com</strong>
                                </div>
                                <div>42, Awesome Enclave</div>
                                <div>New York City, New york, 10394</div>
                                <div>Email: admin@bbbootstrap.com</div>
                                <div>Phone: +48 123 456 789</div>
                            </div>
                            <div class="col-sm-4">
                            <?php
                                $sql = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $aid[$x]";
                                $result = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($result);
                                $id=$row['U_Id'];
                        
                                $sql = "SELECT * FROM user WHERE U_Id = $id";
                                $result = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($result);
                            ?>
                                <h6 class="mb-3">To:</h6>
                                <div>
                                    <strong><?php echo $row['uname'] ;?></strong>
                                </div>
                                <div><?php echo $row['address'] ;?></div>
                                <div>Email: <?php echo $row['email'] ;?></div>
                                <div>Phone: <?php echo $row['number'] ;?></div>
                            </div>
                            
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Accessories</th>
                                        <th class="center">Service Hours</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            
                                        <?php
                                            $j=0;
                                                do
                                                {
                                                    $sql = "SELECT Service_Name FROM service WHERE Service_Id   = $sid[$j]";
                                                    $result = mysqli_query($con,$sql);
                                                    $r = mysqli_fetch_array($result);
                                                    echo ++$j.".  ";
                                                    $sn = $r['Service_Name'];
                                                    echo $sn."<br>";
                                                }while($j<=count($sid)-1);
                                            ?>
                                            
                                        </td>
                                        <td class="left">
                                        <?php
                                            $j=0;
                                                do
                                                {
                                                    $sql = "SELECT Product_Name FROM product WHERE P_Id   = $pid[$j]";
                                                    $result = mysqli_query($con,$sql);
                                                    $r = mysqli_fetch_array($result);
                                                    echo ++$j.".  ";
                                                    $sn = $r['Product_Name'];
                                                    echo $sn."<br>";
                                                }while($j<=count($pid)-1);
                                            ?>
                                        </td>
                                        <td class="center"><?php 
                                         $sql = "SELECT Service_Hours FROM bill1 WHERE Bill_Id = $bid";
                                         $result = mysqli_query($con,$sql);
                                         $r = mysqli_fetch_array($result);
                                         echo $r['Service_Hours'];
                                                        ?></td>
                                        <td class="right"><?php 
                                        $sql = "SELECT Service_Cost FROM bill1 WHERE Bill_Id = $bid";
                                        $result = mysqli_query($con,$sql);
                                        $r = mysqli_fetch_array($result);
                                        echo $r['Service_Cost'];
                                        ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5">
                            <?php
                                $sqlb = "SELECT Bill_Id FROM bill1 WHERE Appoinment_Id = $aid[$x]";
                                $resultb = mysqli_query($con,$sqlb);
                                $rowb=mysqli_fetch_array($resultb);
                                $bid=$rowb['Bill_Id'];
                        
                                $sqls = "SELECT Payment_Status FROM paymentdetails WHERE Bill_Id = $bid";
                                $results = mysqli_query($con,$sqls);
                                $rows=mysqli_fetch_array($results);
                                echo "Payment Status : ".$rows['Payment_Status'];
                            ?>
                            </div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        
                                            <td class="left">
                                            </td>
                                            <td class="right">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html> 
    <?php
        $x++;
      }while($x<=$ai-1);
    ?>
    