<?php
	$aid=$_POST['id'];
    include 'Partial/_dbconnect.php';
    $sname=array();
    $pname=array();
    $sid=array();
    $pid=array();
    $scost=0;
    $acost=0;
    $hour = $_POST['hours'];
    
    include 'Partial/_dbconnect.php';
    $checked = $_POST['optionsService'];
    for($i=0; $i < count($checked); $i++){
        $sname[$i]=$checked[$i];
    }
    $checked = $_POST['optionsAcce'];
    for($i=0; $i < count($checked); $i++){
        $pname[$i]=$checked[$i];
    }

    for($i=0; $i < count($sname); $i++){
       $sql = "SELECT Service_Id FROM service WHERE Service_Name = '$sname[$i]'";
       $result = mysqli_query($con,$sql);
       $r = mysqli_fetch_array($result);
       $sid[$i] = $r['Service_Id'];
    }   

    for($i=0; $i < count($pname); $i++){
        $sql = "SELECT P_Id FROM product WHERE Product_Name = '$pname[$i]'";
       $result = mysqli_query($con,$sql);
       $r = mysqli_fetch_array($result);
       $pid[$i] = $r['P_Id'];
    } 

    for($i=0; $i < count($sid); $i++){
        $sql = "SELECT Service_Cost FROM service WHERE Service_Id = $sid[$i]";
        $result = mysqli_query($con,$sql);
        $r = mysqli_fetch_array($result);
        $scost += $r['Service_Cost'];
    } 

    for($i=0; $i < count($pid); $i++){
        $sql = "SELECT Product_Price FROM product WHERE P_Id = $pid[$i]";
        $result = mysqli_query($con,$sql);
        $r = mysqli_fetch_array($result);
        $acost += $r['Product_Price'];
    } 

    $sql = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $aid";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $uid=$row['U_Id'];

    $total = $scost + $acost;

    $sql = "INSERT INTO bill1 (`Service_Hours`,`Service_Cost`,`Appoinment_Id`,`U_Id`) VALUES ($hour , $total , $aid , $uid)";
        $result = mysqli_query($con,$sql);

        $sql = "select Bill_Id from bill1 where Appoinment_Id= $aid";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $bid=$row['Bill_Id'];

        for($i=0; $i < count($sid); $i++){
            $sql = "INSERT INTO billservicies (`Bill_Id`, `Service_Id`) VALUES ( $bid , $sid[$i] )";
            $result = mysqli_query($con,$sql);
        }

        for($i=0; $i < count($pid); $i++){
            $sql = "INSERT INTO billproduct (`Bill_Id`, `P_Id`) VALUES ( $bid , $pid[$i] )";
            $result = mysqli_query($con,$sql);
            $sqlp = "SELECT Stock_Quantity FROM stock WHERE P_Id = $pid[$i] ";
            $resultp = mysqli_query($con,$sqlp);
            $d = mysqli_fetch_array($resultp);
            $p = $d['Stock_Quantity'];

            if($p==0)
            {
                $tmp=false;
                break;
            }
            else if($resultp==false)
            {
                $tmp=false;
                break;
            }
            $sqlu = "UPDATE stock SET Stock_Quantity = ($p-1) WHERE P_Id = $pid[$i] ";
            $resultu = mysqli_query($con,$sqlu);
            $tmp=true;
            
        }
        if($tmp==false)
        {
            $sql = "DELETE FROM bill1 WHERE Bill_Id=$bid;";
            $result = mysqli_query($con,$sql);
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Stock Of Selected Product Does Not Exists")';  
            echo '</script>';
            header('location:Appointment_Details.php');
            die;
        }

        $sql = "INSERT INTO paymentDetails (`Bill_Id`,`Payment_Status`) VALUES ($bid , 'Pending')";
        $result = mysqli_query($con,$sql);

        $sqlm = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $aid";
        $resultm = mysqli_query($con,$sqlm);
        $rowm=mysqli_fetch_array($resultm);
        $idm=$rowm['U_Id'];

        $sqlm = "SELECT email FROM user WHERE U_Id = $idm";
        $resultm = mysqli_query($con,$sqlm);
        $rowm=mysqli_fetch_array($resultm);
        $idm=$rowm['email'];
        
        mail($idm,"Bill","Dear customer your total bill is of $total");

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
<br><br>
<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
                <div class="card-header"><b><center style="font-size:30px;">Auto Care Junction</center></b>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Print</a>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="paid2.php"  data-abc="true">
                        <i class="fa fa-print"></i> Paid</a>
                        <?php
                            session_start();
                            $_SESSION['pbid2']=$bid;
                        ?>
                    
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
                            $sql = "SELECT U_Id FROM appoinment WHERE Appoinment_Id = $aid";
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
                                        <?php for($i=0 , $j=0; $i < count($sname); $i++){
                                             echo ++$j.".  ";
                                             echo $sname[$i]."<br>";
                                        }?>
                                    </td>
                                    <td class="left">
                                        <?php for($i=0 , $j=0; $i < count($pname); $i++){
                                             echo ++$j.".  ";
                                             echo $pname[$i]."<br>";
                                        }?>
                                    </td>
                                    <td class="center"><?php echo $hour;?></td>
                                    <td class="right"><?php echo $total;?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    
                                        <td class="left">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong><?php echo $total;?></strong>
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