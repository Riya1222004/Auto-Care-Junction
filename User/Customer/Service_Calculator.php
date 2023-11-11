<?php
    session_start();
    if(!isset($_SESSION['log']) )
    {
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Service Calculator</title>
    <style>

.red
{
    background: #2a3f54;
}
	label{
          font-size:20px;
          color:#2a3f54;
          font-weight: bolder;

        }
		div.form-control
		{
			margin-top:40px;
			margin-left: 450px;
			width: 40%;
			box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
		}
		.button {
  background-color: #2a3f54;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
		footer{
  margin: 0;
  box-sizing: border-box;
  left: 0;
  bottom: 0;
  

}


.rodape {
  display: flex;
  justify-content: center;
  align-items: center;
  /*   min-height: 20vh; */
  transition: 0.5s;
  background-color: #2a3f54;
  margin-top: 100px;
  flex-shrink: 0;
}

.rodape .redes {
  position: relative;
  display: flex;
}

.rodape .redes li {
  list-style: none;
}

.rodape .redes li::before {
  content: attr(data-text);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, calc(-50% + 120px));
  font-size: 14vw;
  pointer-events: none;
  color: #fff;
  font-weight: 700;
  transition: 0.5s;
  opacity: 0;
}

.rodape .redes li:hover::before {
  opacity: 0.1;
  transform: translate(-50%, calc(-50% + 150px));
}

.rodape .redes li a {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 50px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #333;
  border-radius: 10px;
  text-decoration: none;
  margin: 0px 20px ;
  font-size:20px;
  transform-style: preserve-3d;
  perspective: 500px;
  box-shadow: 0 25px 35px rgba(0, 0, 0, 0.1);
  transition: background 0.25s;
}

.js-tilt-glare {
  border-radius: 10px;
}

.rodape .redes li a:hover.facebook {
  background: #1877f2;
}

.rodape .redes li a:hover.instagram {
  background: #e4405f;
}

.rodape .redes li a:hover.twitter {
  background: #0099ff;
}

.rodape .redes li a:hover.youtube {
  background: #ff0000;
}

.rodape .redes li a:hover.linkedin {
  background: #0e76a8;
}

.rodape .redes li a:hover.githube {
  background: #171515;
}

.rodape .redes li a:hover.codepen {
  background: #1877f2;
}

.rodape .redes li a .fa {
  transition: 0.25s;
  pointer-events: none;
}

.rodape .redes li a:hover .fa {
  color: #fff;
  transform: scale(1.75) translatez(50px);
}

    </style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
        
<body >
<?php require 'Partial/_navlogscroll.html' ?>

		<div class="form-control" style="margin-bottom:120px;width:600px;padding:50px;">
        <form action="" method="post">
		<form>
			<label> Select Services </label>
			<br>
			Monthly service schedule
        <input type="checkbox" name="service1" 
             value="Monthly_service_schedule">
        <br>
		<br>
        Annual service schedule
        <input type="checkbox" name="service2" 
            value="Annual_service_schedule">
        <br>
		<br>
        Car washing schedule
        <input type="checkbox" name="service3" 
                value="Car_washing_schedule">
        <br>
		<br>
        Air cleaner replacement
        <input type="checkbox" name="service4" 
            value="Air_cleaner_replacement">
			<br>
			<br>
		Fuel filter replacement (for diesel cars)	
		<input type="checkbox" name="service4" 
            value="Fuel_filter_replacement">
		<br>
		<br>
		<label> Select Accessories </label>
		<br>
		Accessory 1
        <input type="checkbox" name="Accessory1" 
             value="Accessory 1">
        <br>
        Accessory 2  
        <input type="checkbox" name="Accessory2" 
            value="Accessory 2">
        <br>
        Accessory 3
        <input type="checkbox" name="Accessory3" 
                value="Accessory 3">
        <br>
        Accessory 4 
        <input type="checkbox" name="Accessory4" 
            value="Accessory 4">
			<br>
		Accessory 5 	
		<input type="checkbox" name="Accessory 5" 
            value="Accessory 5">
		<br><br>
		<input type="button" class="button" value="Calculate">
		</form>
		</div>
		</div>
    
    <?php require 'Partial/footernoscroll.html' ?>
	
</body>
</html>