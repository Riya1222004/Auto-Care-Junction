
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Home Page</title>
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
            background-color: #137DC5;
            color: whitesmoke;
        }
    }



</style>
</head>
<body>

<?php require 'Partial/_navin.php' ?>
<?php require 'Partial/_nav2.html' ?>
  
        <div class="image">
            <img src="a1.jpg" alt="" width="1511px" style="margin-top:5px" >
        </div>
        <article >
           <div class="about" style="margin-top: 75px; ">
               <center>
                <a href="#" class="fa fa-users" style="font-size:48px;color:rgb(0, 0, 0); background-color:whitesmoke ; margin-top: 40px; border-radius: 60px; padding: 20px;text-decoration: none;" >
                   </a>
               <h3>About Us</h3>
               </center>
           </div>
           <div class="contact" style="margin-top: 100px;">
            <center>
             <a href="#" class="fa fa-map-marker" style="font-size:48px;color:rgb(0, 0, 0); background-color:whitesmoke ; margin-top: 40px; border-radius: 60px; padding: 20px;text-decoration: none; width: 50px;" ></a>
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
                <h1 style="color: #137DC5;font-size: 25px;">
                    Our Mission
                </h1>
                <h3 style="font-size: 22px;" >
                    India’s premier multi-brand vehical servicing company enriching every mile of your driving experience.
                </h3>
            </center>
            <center style="margin-top: 50px;">
                <h1 style="color: #137DC5;font-size: 25px;">
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
<?php require 'Partial/footer.html' ?>
        
</body>
</html>