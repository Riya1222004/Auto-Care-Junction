<?php
  $id =  $_POST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .extra{
            height: 2050px;

        }
        .main{
            width: max-content;
            height: max-content;
            padding: 10px 600px 50px 60px;
            margin-left: 150px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
            margin-top: 25px;
            padding-bottom: 25px;

            
        }
        h2{
            color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
        }
        .heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require 'Partial/_navlogscroll.html' ?>
<?php
   include 'Partial/_dbconnect.php';
   $que="SELECT * FROM `service` WHERE title_id = $id ";
   $result=mysqli_query($con,$que);
   $title=mysqli_query($con,"SELECT Servic_Title FROM `service_title` WHERE Id = $id ");
   $ti=mysqli_fetch_array($title);
   $v=mysqli_query($con,"SELECT Video FROM `service_title` WHERE Id = $id ");
   $vv=mysqli_fetch_array($v);
   $name = $ti['Servic_Title'];
   $v=mysqli_query($con,"SELECT Video FROM `service_title` WHERE Id = $id ");
   $vv=mysqli_fetch_array($v);
   $video = $vv['Video'];
?>
        
<div class="extra">
<div class="main"><br>
        <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            "><?php echo $name; ?></h2><hr><br><br>
        <table>
           <tr style="
            border:2px solid black;
            ">
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Service</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Cost</th>
            </tr>
            <?php
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

            "><?php echo $row['Service_Name']; ?></td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            "><?php echo $row['Service_Cost']; ?></td>
            </tr>
            <?php
   }
   ?>
                   </table> <br><br><br><br>
        <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            ">See How It's Done</h2><hr>
            <br><br> <video src="<?php echo $video;?>" controls style="width:500px;" poster="https://websiteasset.s3.ap-south-1.amazonaws.com/New+Website/video/thumbnails/thumbnail/Sanitisation+and+Essentials2.jpg"></video>
<br><br><br>
            <span class="heading"><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            ">User's Rating</h2><hr></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>

</div>
    </div>
    
</div>

<?php require 'Partial/footer.html' ?>

</body>
</html>