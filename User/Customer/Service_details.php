<?php
    session_start();
    if(!isset($_SESSION['log']) )
    {
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bar</title>
   
  </head>
<style>

.form-group
{
            width: 1000px;
            margin-top: 40px;
            margin-left: 260px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
            background-color: white;
            padding:30px;
}
table
{
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        /*align-content: center;
        font-size:20px;
        color:#2a3f54;
        font-weight: bolder; */
}
th
{
  color: #ea6b00;
  background-color: #2a3f54;
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
.main td, th
{
  border: 1px solid black;
  padding: 12px;
}
.button {
   
   border: none;
   color: white;
   padding: 10px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 4px 4px 4px;
   cursor: pointer;
 }
 .button4 {border-radius: 12px; background-color:#6699FF;}
 .button5 {border-radius: 12px; background-color:#66CCCC;}
 .button6 {border-radius: 12px; background-color:#FF0000;}
</style>
</head>

<body >
  <?php require 'Partial/_navadminscroll.html' ?>

<div class="main">
  <div class="form-group">
    <form action="" method="post">
          <h2 style="color: #ea6b00;
              font-weight: bolder;
              font-size:28px;
              font-weight: bolder;">Services Details</h2><hr><br><br>
              <table>
                    <tr> 
                      <th>Date</th>
                      <th>Service Name</th>
                      <th>Service Cost</th>
                      <th>Service Title</th>
                      <th colspan="2">Action</th>

                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>Service</td>
                        <td>Service cost</td>
                        <td>Service Title</td>
                        <td><button class="button button4">View</button>
                          <button class="button button5">Edit</button>
                          <button class="button button6">Delete</button></td>
                    </tr>
                    <tr>
                      <td>Date</td>
                      <td>Service</td>
                      <td>Service cost</td>
                      <td>Service Title</td>
                      <td><button class="button button4">View</button>
                        <button class="button button5">Edit</button>
                        <button class="button button6">Delete</button></td>
                  </tr><tr>
                    <td>Date</td>
                    <td>Service</td>
                    <td>Service cost</td>
                    <td>Service Title</td>
                    <td><button class="button button4">View</button>
                      <button class="button button5">Edit</button>
                      <button class="button button6">Delete</button></td>
                </tr>
                <tr>
                  <td>Date</td>
                  <td>Service</td>
                  <td>Service cost</td>
                  <td>Service Title</td>
                  <td><button class="button button4">View</button>
                    <button class="button button5">Edit</button>
                    <button class="button button6">Delete</button></td>
              </tr>
              <tr>
                <td>Date</td>
                <td>Service</td>
                <td>Service cost</td>
                <td>Service Title</td>
                <td><button class="button button4">View</button>
                  <button class="button button5">Edit</button>
                  <button class="button button6">Delete</button></td>
            </tr>
                  </table><br>
    </form>
  </div>
  </div>

</body>
</html>