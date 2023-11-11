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
    
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    
    .about{
        margin-left: 350px;
        width: 200px;
        height: 200px;
      
        
        
    }
    .contact{
        margin-left:350px;
        width: 200px;
        height: 200px;
       
        position: absolute;
        left: 305px;
        top: 807px;
    }
    .carer{
        margin-left: 350px;
        width: 200px;
        height: 200px;    
        position: absolute;
        left: 605px;
        top: 807px;
    }
    .about,.carer,.contact{
        box-shadow: 4px 4px 4px 4px rgb(185, 185, 185);

    }
    .about a:hover,.carer a:hover,.contact a:hover{
        animation-name: riya;
        animation-duration: 1s;
    }
    @keyframes riya{
        from{
            background-color:  burlywood;
            color: black;
        }
        to{
            background-color: #2a3f54;
            color: whitesmoke;
        }
    }



  .copyright {
    width: 50%;
    float: left;
    @media (max-width: 600px) {
      width: 100%;
    }
}
    p {
      padding-left: 10%;
      color: white;
      font-size: 0.7em;
      line-height: 70px;
      text-transform: capitalize;
      letter-spacing: 1px;
    }
  .social {
      width: 50%;
      float: right;
    @media (max-width: 600px) {
      width: 100%;
    }
}
     footer a {
      float: left;
      line-height: 70px;
      text-decoration: none;
      color: white;
      text-align: center;
      font-weight: bold; 
     }

.linked {
  background-color: #3D5B94;
  font-size: 1.2em;
  width: 20%;
}

.face {
  background-color: #3D5B94;
  font-size: 1.2em;
  width: 20%;
}

.tweet {
  background-color: #3DACDD;
  font-size: 1.2em;
  width: 20%;
}

.support {
  background-color:#6dcd9a;
  font-size: 1.8em;
  width: 40%;
}
#cf {
  position:relative;
  height:281px;
  width:450px;
  margin:0 auto;
}

#cf img {
  position:absolute;
  left:0;
  transition: opacity 1s ease-in-out;
}

 #cf img.top:hover {
  opacity:0;
}
h1 {
  margin-top: 0;
  font-size: 3rem;
  display: inline-block;
}
h1 div {
  position: relative;
  float: left;
}
h1 div:first-child {
  color: #3498db;
  margin-right: 1rem;
}
/* PROFIL */
.blog .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #ea6b00;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    margin-bottom:10px;
    
}

.blog .carousel-indicators .active {
background: #ea6b00;
margin-bottom:10px;
}

.our-team-section {
  position: relative;
  padding-top: 40px;
  padding-bottom: 40px;
}
.our-team-section:before {
  position: absolute;
  top: -0;
  left: 0;
  content: " ";
  background: url(img/service-section-bottom.png);
  background-size: 100% 100px;
  width: 100%;
  height: 100px;
  float: left;
  z-index: 99;
}
.our-team {
  padding: 0 0 40px;
  background: #f9f9f9;
  text-align: center;
  overflow: hidden;
  position: relative;
  border-bottom: 5px solid #00325a;
}
.our-team:hover {
  border-bottom: 5px solid #ea6b00;
}

.our-team .pic {
  display: inline-block;
  width: 130px;
  height: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}
.our-team .pic:before {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #00325a;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 1;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:before {
  height: 100%;
  background: #2f2f2f;
}
.our-team .pic:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #ea6b00;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:after {
  background: #ea6b00;
}
.our-team .pic img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
  position: relative;
  z-index: 2;
}
.our-team:hover .pic img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}
.our-team .team-content {
  margin-bottom: 30px;
}
.our-team .title {
  font-size: 22px;
  font-weight: 700;
  color: #4e5052;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin-bottom: 5px;
}
.our-team .post {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}
.our-team .social {
  width: 100%;
  padding-top: 10px;
  margin: 0;
  background: #2f2f2f;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}
.our-team:hover .social {
  bottom: 0;
}
.our-team .social li {
  display: inline-block;
}
.our-team .social li a {
  display: block;
  padding-top: 6px;
  font-size: 15px;
  color: #fff;
  transition: all 0.3s ease 0s;
}
.our-team .social li a:hover {
  color: #145889;
  background: #f7f5ec;
}
@media only screen and (max-width: 990px) {
  .our-team {
    margin-bottom: 10px;
  }
}

</style>
</head>
<body>

<?php require 'Partial/_navlogscroll.html' ?>
<div class="w3-content w3-display-container">
  <img src="a1.jpg" alt="" srcset="" >

 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>      <article >
           <div class="about" style="margin-top: 120px; ">
               <center>
                <a href="AboutUs.php" class="fa fa-users" style="font-size:48px;color:rgb(0, 0, 0); background-color:whitesmoke ; margin-top: 40px; border-radius: 60px; padding: 20px;text-decoration: none;" >
                   </a>
               <h3>About Us</h3>
               </center>
           </div>
           <div class="contact" style="margin-top: 100px;">
            <center>
             <a href="ContactUs.php" class="fa fa-map-marker" style="font-size:48px;color:rgb(0, 0, 0); background-color:whitesmoke ; margin-top: 40px; border-radius: 60px; padding: 20px;text-decoration: none; width: 70px;" ></a>
            <h3>Contact Us</h3>
            </center>
            </div>
            <div class="carer" style="margin-top: 100px;">
                <center>
                 <a href="#" class="fa fa-gears" style="font-size:48px;color:rgb(0, 0, 0); background-color:whitesmoke ; margin-top: 40px; border-radius: 60px; padding: 20px;text-decoration: none;" >
                    </a>
                <h3>Careers</h3>
                </center>
            </div>
        </div>
        </article>
        <div class="mv" style="margin-top: 100px;">
            <center>
                <h1 style="color: #2a3f54;font-weight: bolder;font-size: 25px;">
                    Our Mission
                </h1>
                <h3 style="font-size: 22px;" >
                    India’s premier multi-brand vehical servicing company enriching every mile of your driving experience.
                </h3>
            </center>
            <center style="margin-top: 50px;">
                <h1 style="color: #2a3f54;font-weight: bolder;font-size: 25px;">
                    Our Vision
                </h1>
                <h3 style="font-size: 22px;">
                    To be India’s best known multi-brand vehical repair and maintenance company, reputed for its professional approach, expertise and affordable service.
                </h3>
            </center>
        </div>
        <aside>
            <table style="margin-left: 55px;margin-top: 50px;margin-bottom: 50px;">
                <tr>
                    <td style="padding: 12px;">
                        <div id="cf">
                            <img class="bottom" src="11.jpg" width="100%">
                            <img class="top" src="22.jpg" width="100%">
                          </div>
                    </td>
                    <td style="padding: 12px;">
                        <div id="cf">
                            <img class="bottom" src="33.jpg" width="100%">
                            <img class="top" src="44.jpg" width="100%">
                          </div>
                    </td style="padding: 12px;">
                    <td style="padding: 12px;">
                        <div id="cf">
                            <img class="bottom" src="55.jpg" width="100%">
                            <img class="top" src="66.jfif" width="100%">
                          </div>
                    </td>
                </tr>
            </table>
        </aside>
        <br><br><br> 
        <div class="container">
    <div class="row blog">
        <h1 class="center mx-auto text-center py-4">Our Team Members</h1>
       
	   <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                <ol class="invisible carousel-indicators">
                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Dana Robins</h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">John Doe</h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Markus Baas</h3>
                                        <span class="post">Financial Expert</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Sophia Lee</h3>
                                        <span class="post">Customer Support</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Ted Robbins</h3>
                                        <span class="post">Law Expert</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Noel Flantier</h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Ernesto Appia</h3>
                                        <span class="post">Team Leader</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Rosita Jimenez</h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->

        </div>
    </div>
</div>   <br><br><br><br><br><br>
<?php require 'Partial/footer.html' ?>
        
</body>
</html>