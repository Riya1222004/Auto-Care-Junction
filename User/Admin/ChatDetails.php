<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Employee Details</title>
    <style>

.red
{
    background: #2a3f54;
}
.detail th{
  padding:20px;'
  border:2px solid #2a3f54;
}
.detail tr{
  padding:20px;
  border:2px solid #2a3f54;

}
.detail td{
  padding:20px;
  border:2px solid #2a3f54;

}
.detail table{
  padding:20px;
  border:2px solid #2a3f54;

}
</style>
</head>

<body >
  <?php require 'Partial/_navadminscroll.html' ?>
  <center>
        <div style=" background-color: #ea6b00; padding: 5px;color: 2a3f54;font-size: larger;width: 1536px;">
            Chat Boat Details
        </div>    
    </center>
  <br><br><br>
  <a href="Add_Chat.php" style="margin-left:220px;text-decoration:none;color:#ea6b00;"><i class="fa fa-plus" style="font-size:24px"> Add Chat</i></a><br><br>
  <div class="detail" style="margin-left:220px;">
  
  <table >
    <tr style="background-color:#2a3f54;color:#ea6b00;">
      <th>Query</th>
      <th>Reply</th>
    </tr>
      <?php
         include 'Partial/_dbconnect.php';
        $que="SELECT * FROM `chatbot` ";
        $result=mysqli_query($con,$que);
        while($row=mysqli_fetch_array($result))
        {
      ?>  
      <tr>
        <td><?php echo $row['queries']; ?></td>
        <td><?php echo $row['replies']; ?></td>
        </tr>
        </form>
 <?php
          }
        ?>    
  </table>
 
  </div>
</body>
</html>