<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding:0px 8px 0px 10px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.about-section {
  padding: 50px;
  text-align: center;
  color: #2a3f54;
  font-size: large;
  font-weight: bold;
  
}

.container {
  padding: 0 16px 0px 0px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}



.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 150px) {
  .column {
    width: 100%;
    display: block;
  }
}

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<?php require 'Partial/_navlogscroll.html' ?>

<body>
<center>
      <h1 style="color: #ea6b00;background-color: #2a3f54;font-size: 55px; letter-spacing: 4px;padding-top:20px;">About Us</h1>
</center>
    <div class="about-section">
    
       <p> Founded in 2016 in India’s Silicon Valley Bangalore. Auto Care Junction offers one stop solution for all automobile Services.  Auto Care Junction has taken a completely innovative and disruptive approach to build trust,transparancy&HasselFree for its customers. Its intention to reduce the ownership cost of the car with reduced TAT for service

       <br><br> With its technology driven & 360 degrees approach,  Auto Care Junction enables the best of the experience by bringing transparency, building trust, and mitigating information asymmetry. It connects the car owners with most competent Garages/technicians with its AI rule engine system.
        
       <br><br>  Auto Care Junction is among the fastest growing after sales service companies in India with partnered over 500+Multi Brand Workshop's, Handled 100k+ Orders, 4.9+ ratings in FB (highest for any automobile Service Companies in India) and over 4.7+ ratings in Google
        
       <br><br>  Auto Care Junction has a very strong and proven founding team with 40 years of combined experience in technology, Internet, E- Commerce and FMCG including 12 years in Silicon Valley.  Auto Care Junction has a team of 60+ and is funded by some of the leading Indian Investors.
        
       <br><br> Currently  Auto Care Junction is present in Bangalore, Hyderabad, Delhi-NCR, Pune, Guwahati and Kolkata.</p>


      </div>
      
      <h2 style="text-align:center; color: #2a3f54;
  font-size: 50px;
  ">Our Team</h2>
      <div class="main" style="width:1500px;">
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="https://www.w3schools.com/w3images/team1.jpg" alt="Jane" >
            <div class="container">
              <h2>Salena</h2>
              <p class="title">CEO & Founder</p>
              <p>Salena is an engineer by profession and has 12 years of experience in software industry and has his passion in automobiles.</p>
              <p>salena@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Mike" >
            <div class="container">
              <h2>Chinmay</h2>
              <p class="title">Co-Founder & Head of Finance & HR</p>
              <p>&nbsp;&nbsp;Chinmay&nbsp;&nbsp;has&nbsp;&nbsp;around&nbsp;&nbsp;12+&nbsp;&nbsp;years&nbsp;&nbsp;of&nbsp;&nbsp;industry&nbsp;&nbsp;experience&nbsp;&nbsp;&nbsp;in&nbsp;&nbsp;India&nbsp;&nbsp;and&nbsp;&nbsp;USA.&nbsp;&nbsp; </p>
              <br><p>chinmay@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="https://www.w3schools.com/w3images/team3.jpg  " alt="John" >
            <div class="container">
              <h2>Raman</h2>
              <p class="title">Co-Founder & Chief Business Officer</p>
              <p>MBA, Great Lakes Inst of Mgmt, Ex-Droom, Extensive experience in pre- owned car industry. IoT implementation and product design</p>
              <p>rman@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="ex" style="height:100px;width:2px;"> </div>
      <?php require 'Partial/footer.html' ?>

</body>
</html>