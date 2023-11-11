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

    <title>Career</title>
    <style>

.red
{
    background: #2a3f54;
}
.pic
{
	width: 100%;
	background-image: url("careerpic.jfif");
	height: 30%; 
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
} 
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("careerpic.jfif");

  /* Full height */
  height: 50%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
div.p
{
	font-size: 25px;
	font-family: High Tower Text;
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

<div class="bg"></div>
<div class="p">
<font font-size:"50">
<p>	<b> &nbsp;Our love for your car is intimate...we know we suffer from OCDD(Obsessive Compulsive Detailing Disorder) </b><br>
&nbsp; We all love our cars. Our proudest moment is when the car is new and looks its best. The car is however subjected to all sorts of abuses including <br>&nbsp;the sun,
dirt and smog, all of which can affect the best kept piece of art. We can however restore it to all conditions. </p> </font>
</div>
<footer class="rodape" id="rodape" style="position: fixed;width: 1519.5px;height: 90px;">
    <ul class="redes">
      <li data-text="Facebook"><a target="blanck" class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li data-text="Instagram"><a target="blanck" class="instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li data-text="Twitter"><a target="blanck" class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li data-text="Youtube"><a target="blanck" class="youtube" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
      <li data-text="Linkedin"><a target="blanck" class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      <li data-text="Githube"><a target="blanck" class="githube" href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
      <li data-text="Codepen"><a target="blanck" class="codepen" href="#"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
    </ul>
  </footer>
</body>

</html>