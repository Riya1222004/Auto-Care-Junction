<?php
    if ( $_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(mail($_POST['mail'],"Exa","<img src = 'logo.png' <br>Hello !! from Riya"))
        {
            echo "Mail Send";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        Enter email : <input type="email" name="mail" id="">
        <input type="submit" value="Submit">
    </form>
</body>
</html>