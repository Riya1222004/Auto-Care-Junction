<?php //INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES (NULL, 'Thank You', 'Your Welcome');

?>
<?php
    include 'Partial/_dbconnect.php';

  if ( $_SERVER["REQUEST_METHOD"] == "POST")
  {
    $quey=$_POST['query'];
    $reply=$_POST['reply'];

    $sql = "INSERT INTO `chatbot` (`queries`, `replies`) VALUES ('$quey', '$reply')";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        $success = true;
        $sameuname = false;
        header('location:ChatDetails.php');
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
    <title> Add Chat </title>
</head>

<style>
    html,
    body {
        margin: 0px;
    }


    .container a {
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
            height: 400px;
            margin-top: 40px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);


            background-color: white;
            padding:30px;

        }
    
        label{
          font-size:20px;
          color:#2a3f54;
          font-weight: bolder;

        }
        
        .form-group  td{
            padding: 13px;
        }

        #button{
            padding-right: 30%;
        }

        #content{
            padding-right: 60%;
        }
     

</style>
<body>
<?php require 'Partial/_navadminscroll.html' ?>
    
    <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1536px;">
 Add Chat 
      </div>    
    </center>
    <center>
        <div class="form-group">
            <form action="" method="post"><br><br>
                <table id="content">
                    <tr>
                   <td><label for="">Query </label></td>
                <td> <input type="text" name="query" id=""> </td>
                   </tr>
                   <tr>
                <td><label for="">Reply </label></td>
                    <td><input type="text" name="reply" id=""> </td>
                    </tr>
                    </table>
                    <div ><br>
                        <input type="reset" value="Reset"style="background-color: white;width: 100px;height: 30px;margin-left:20px;">
                         <input type="submit" value="Add" style="background-color: white;width: 100px;height: 30px;">            
                    </div>



            </form> 
        </div>


    </center>

</body>