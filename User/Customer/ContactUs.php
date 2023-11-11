<?php
if (isset($_REQUEST['submit']))
{
        $sb = $_REQUEST['subject'];
        $em =$_REQUEST['email'];
        $msg =$_REQUEST['msg'];
        $mailTo = "reeya1202@gmail.com";
        $headers = "From: ".$em;
        $txt ="You have received an email from : ".$em."\n\n"."Message : ".$msg;
        mail($mailTo,$sb, $txt,$headers);
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Your query send successfully you can get answer through mail")';  
        echo '</script>'; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
    <style>
            .Sent_Msg{
                box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);

        }
        .Sent_Msg{
            padding-left: 20px;
            padding-right: 20px;
            margin-left: 300px; 
            width: fit-content; 
            height: 410px;
            margin-top: 25px;

        }
        .Other{
            margin-top: 0px;
            width: fit-content;
            float: right;
            height: 300px;
            
        }
        
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body >
<?php require 'Partial/_navlognoscroll.html' ?>

<center>
    <h1 style="color: #ea6b00;background-color: #2a3f54;font-size: 55px; letter-spacing: 4px;">Get In Touch!!</h1>
</center> 
        <table >
            <tr>
                <td>
                <div class="form-group">
    <div class="Sent_Msg" >
        <h1  style="color: #2a3f54;font-weight: bolder;">Send Message</h1>
        <form action="" method="POST">
        <input type="text" class="form-control" name="email" id="" placeholder="Email" required><br>
            <input type="text" class="form-control" name="subject" id="" placeholder="Subject" required ><br>
          
            <textarea name="msg" class="form-control" id="" cols="50    " rows="5" placeholder="Type Your Message Here" required></textarea><br>
            <br><input type="submit" name="submit" class="form-control" value="Send" style="width: 100px;border-radius: 0px; background-color: #2a3f54; color:white;">
        </form>
    </div>
</td>
<td>
    <div class="Other" style="margin-left: 100px; " >
        <h1 style="color: #2a3f54;font-weight: bolder;">Other ways to connect</h1>
        <i class="fa fa-phone" style="font-size:36px; color: #2a3f54;"> </i><label style="font-size: 20px; margin-left: 20px;">&nbsp; 123-4567-90</label><br><br>
        <i class="fa fa-map-marker" style="font-size:36px; color: #2a3f54;"></i><label style="font-size: 20px; margin-left: 20px;">&nbsp;&nbsp;&nbsp;4671 , Sugar-Camp road , owatonna , minne sota ,55060</label><br><br>
        <i class="fa fa-envelope" style="font-size:36px; color: #2a3f54;"></i><label style="font-size: 25px; margin-left: 20px;">xyz@gmail.com</label>
    </div>
</div>
</td>


        </table>
<?php require 'Partial/footernoscroll.html' ?>

</body>
</html>