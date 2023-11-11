<?php
    session_start();
    if(!isset($_SESSION['log']) )
    {
        exit;
    }
?>
<?php

  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'Partial/_dbconnect.php';
       $time   =   $_POST['time'];
       $date   =   $_POST['date'];
      $pick    =   $_POST['pick'];
       $sdesc   =   $_POST['sdesc'];
       $uname = $_POST['username'];
       $service  =   $_POST["service" ];

       $sql = "SELECT U_Id from user WHERE uname = '$uname'";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       $id=$row['U_Id'];

       $sql = "SELECT email from user WHERE uname = '$uname'";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       $email=$row['email'];

       $sql = "SELECT Service_Id from  service";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       $sid=$row['Service_Id']; 
       $sql = "SELECT P_Id from  product";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       
       $sql = "SELECT Vehicle_Id from vehicle WHERE U_Id = $id";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       $vid=$row['Vehicle_Id'];
      // $vid =1;
     
        $sql2="INSERT INTO `appoinment` ( `PickUp`, `Appoinment_Date`, `Appoinment_Time`, `Appoinment_Extra`,`U_Id`,`V_Id`,`Service_ID`) 
    VALUES ('$pick', '$date',  '$time', '$sdesc'  , $id  , $vid , $sid )";
        if(mysqli_query($con,$sql2))
        {
                $sameuname = false;
            mail($email,"Appoinment Booked","Dear $uname your appoinmnt has been booked successfully you will be notified that who will takel your apppoinment");
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Appoinment Booked Successfully!")';  
            echo '</script>'; 
        }
        else
        {
            echo mysqli_error($con);
        }
  }
  include 'Partial/_dbconnect.php';
  $un=$_SESSION['uname'];
  $sql = "SELECT U_Id from user WHERE uname = '$un'";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       $id=$row['U_Id'];
  $sql3="SELECT uname,Gender,DOB,email,number,contry,state,city,address  from user where uname='$un' ";
  $query=mysqli_query($con,$sql3);
  $raw=mysqli_fetch_array($query);
  $sqlv="SELECT Vehicle_Type,Vehicle_Brand,Vehicle_Model,Vehicle_Fuel,Vehicle_Chessis_No,Vehicle_Model_Year,Vehicle_Gear,Vehicle_Odometer,Vehicle_Gearbox_No,Vehicle_Engine_no,Vehicle_No_plate,Vehicle_MFD,Vehicle_desc from vehicle where U_Id='$id'";
  $queryv=mysqli_query($con,$sqlv);
  $rawv=mysqli_fetch_array($queryv);
  $no=mysqli_num_rows($queryv);
  if($no==0)
  {
      header('location:Add_Vehicle.php');
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
        .form-group{
            width: 1300px;
            height: 2000px;
            margin-top: 40px;
            margin-left: 300px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);

            background-color: white;
            padding:30px;

        }
        h2{
            color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

</head>
<body>
<?php require 'Partial/_navlogscroll.html' ?>

    <div class="main" style="width:200px">
    <div class="form-group"  style="width:1000px">
        <form action="" method="post">
            <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Personal Information</h2><hr><br><br>
            <table>
                <tr>
                    <td><label for=""> Name:</label></td>
                    <td><input type="text" class="form-control" name="username" 
                    value = "<?php echo $raw['uname'] ?>" id="" placeholder="Enter First Name" ></td>
                    
                </tr>
             
                <tr>
                    <td><label for="">Gender</label></td>
                    <td>
                        <input type="radio"  name="g" id="" value = "<?php echo $raw['Gender'] ?>" disabled>Male
                        <input type="radio"name="g" id="" value = "<?php echo $raw['Gender'] ?>" disabled>Female
                    </td>
                    <td><label for="">Date Of Birth</label></td>
                    <td><input type="date" class="form-control" value = "<?php echo $raw['DOB'] ?>"  name="DateOfBirth" id="" disabled></td>
                </tr>
                <tr>
                    <td><label for="">Email</label></td>
                    <td><input type="email " class="form-control" name="email" 
                    value = "<?php echo $raw['email'] ?>"  id="" placeholder="Enter Email" disabled></td>
                    <td><label for="">Mobile No</label></td>
                    <td><input type="number" class="form-control" name="pno" value = "<?php echo $raw['number'] ?>"  id="" placeholder="Enter Mobile No" disabled></td>
                </tr>
              
            </table>
            <br><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Vehicle Information</h2><hr><br><br>
            <table>
                <tr>
                    <td><label for="">Vehicle Type</label></td>
                    <td><input type="number " class="form-control" name="cno" id="" value = "<?php echo $rawv['Vehicle_Type'] ?>" placeholder="Enter Chassis Number" disabled></td>
                    <td><label for="">Vehicle Brand</label></td>
                    <td>
                    <input type="number " class="form-control" name="cno" id="" value = "<?php echo $rawv['Vehicle_Brand'] ?>" placeholder="Enter Chassis Number" disabled></td>
                </tr>
             
                <tr>
                    <td><label for="">Vehicle Model</label></td>
                    <td><input type="number " class="form-control" name="cno" id="" value = "<?php echo $rawv['Vehicle_Model'] ?>" placeholder="Enter Chassis Number" disabled></td>
                    <td><label for="">Fuel Type</label></td>
                    <td><input type="number " class="form-control" name="cno" id="" value = "<?php echo $rawv['Vehicle_Fuel'] ?>" placeholder="Enter Chassis Number" disabled> </td>
                </tr>
                <tr>
                    <td><label for="">Chassis Number</label></td>
                    <td><input type="number " class="form-control" name="cno" id="" value = "<?php echo $rawv['Vehicle_Chessis_No'] ?>" placeholder="Enter Chassis Number" disabled></td>
                    <td><label for="">Model Year</label></td>
                    <td><input type="date" class="form-control" name="myear" value = "<?php echo $rawv['Vehicle_Model_Year'] ?>" id="" disabled ></td>
                </tr>
                <tr>
                    <td><label for="">No. Of Gear</label></td>
                    <td><input type="number " class="form-control" name="nog" value = "<?php echo $rawv['Vehicle_Gear'] ?>" id="" placeholder="Enter Number Of Gear" disabled></td>
                    <td><label for="">Odometer Reading</label></td>
                    <td><input type="number" class="form-control" name="oreading" value = "<?php echo $rawv['Vehicle_Odometer'] ?>" id="" placeholder="Enter Odometer Reading" disabled></td>
                </tr>
                <tr>
                    <td><label for="">GearBox No.</label></td>
                    <td><input type="number " class="form-control" name="gno" value = "<?php echo $rawv['Vehicle_Gearbox_No'] ?>" id="" placeholder="Enter Gear Box No" disabled></td>
                    <td><label for="">Engine No</label></td>
                    <td><input type="number" class="form-control" name="eno" value = "<?php echo $rawv['Vehicle_Engine_no'] ?>" id="" placeholder="Enter Engine No" disabled ></td>
                </tr>
                <tr>
                    <td><label for="">No Plate</label></td>
                    <td><input type="number " class="form-control" name="noplate" value = "<?php echo $rawv['Vehicle_No_plate'] ?>" id="" placeholder="Enter No Plate" disabled></td>
                    <td><label for="">Manufacture Date</label></td>
                    <td><input type="date" class="form-control" name="mdate" 
                    value = "<?php echo $rawv['Vehicle_MFD']; ?>" id="" placeholder="Enter Manufacture Date" disabled></td>
                </tr>
                <tr>
                    
                    <td><label for="">Vehicle Description</label></td>
                    <td><input type="text" class="form-control" name="mdate" 
                    value = "<?php echo $rawv['Vehicle_desc']; ?>" id="" placeholder="Enter Manufacture Date" disabled></td>
                </tr>
            </table>
            <br><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Service Information</h2><hr><br><br>
            <table>
                <tr>
                    <td><label for="">Service</label></td>
                    <td><select name="service" class="form-control" required>
                        <?php
                           include 'Partial/_dbconnect.php';
                           $que = mysqli_query($con, "SELECT Service_Name  FROM service");
                           while ($row = mysqli_fetch_array($que)) 
                           { 
                        ?>
                            <option value="<?php echo $row['Service_Name'];?>"><?php echo $row['Service_Name'];}?></option>
                            
                        </select>
                    <td><label for="">Date</label></td>
                    <td><input type="date" class="form-control" name="date" id="" placeholder="Enter Date" required></td>
                </tr>
             
                <tr>
                    <td><label for="">Time</label></td>
                    <td><input type="time" class="form-control" name="time" id="" placeholder="Enter Time" required></td>
                    <td><label for="">PickUp Service</label></td>
                    <td><input type="radio" name="pick" id="">Yes
                        <input type="radio" name="pick" id="">No </td>
                </tr>
                    <td><label for="">Service Description</label></td>
                    <td><textarea name="sdesc" class="form-control" id="" cols="1050" rows="5" placeholder="Other Service Description" ></textarea></td>
                </tr>
            </table>
            <br><br><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;">Address Information</h2><hr>
            <table>
                <tr>
                    <td><label for="">Contry</label></td>
                    <td>
                    <input type="text" class="form-control" name="contry"  value = "<?php echo $raw['contry'] ?>" id="" placeholder="Enter Contry" disabled>
                    </td>
                    <td><label for="">State</label></td>
                    <td><input type="text" class="form-control" name="state" value = "<?php echo $raw['state'] ?>" id="" placeholder="Enter State"disabled></td>
                </tr>
                <tr>
                    <td><label for="">Town/City</label></td>
                    <td><input type="text" class="form-control" name="city" value = "<?php echo $raw['city'] ?>" id="" placeholder="Enter Town/City" disabled></td>
                    <td><label for="">Address</label></td>
                    <td><input type="text" class="form-control" name="address" value = "<?php echo $raw['address'] ?>" id="" placeholder="Enter Address" disabled></td>
                </tr>
                
            </table>
            <div class="change" style="margin-left:320px;"><br>
                <input type="submit" value="Submit"style="background-color: white;width: 100px;height: 30px;">
                 <input type="reset" value="Reset" style="background-color: white;width: 100px;height: 30px;">            
            </div>


        </form>
        </div>
    </div>
      <div class="ex" style="height:100px;width:2px;"> </div>

<?php require 'Partial/footer.html' ?>

</body>

</html>