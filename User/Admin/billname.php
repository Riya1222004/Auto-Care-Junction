<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .main{
          height:1050px;
        }
        .form-group{
            width: 1000px;
            height: 400px;
            margin-top: 40px;
            margin-left: 260px;
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
</head>
<body>
    <?php require 'Partial/_navadminscroll.html'; ?>
    
    <div class="main">
    <div class="form-group">
    <form action="billhistory.php" method="post">
            <br><br> <label for="">Enter Name</label> <br><br> <input type="text" name="name" id="" class="form-control" style="width:320px;" placeholder="Enter Name whoes bill you want to show"><br>
            <input type="submit" value="submit" class="form-control" style="width:120px;">
        </form>
            </div>
    </div>
</body>
</html>