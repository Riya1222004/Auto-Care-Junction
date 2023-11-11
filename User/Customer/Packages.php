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
    <title>Document</title>
    <style>
        .extra{
            height: 2070px;

        }
        .main{
            width: max-content;
            height: max-content;
            padding: 10px 100px 10px 100px;
            box-shadow: 0px 2px 4px 8px rgb(185, 185, 185);
            margin-top: 25px;
            padding-bottom: 25px;
            margin-left: 100px;
            
        }
        h2{
            color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<?php require 'Partial/_navlogscroll.html' ?>

<div class="extra">
<div class="main">
        <br><h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            ">Package_Title1</h2><br>
        <table>
            <tr style="
            border:2px solid black;
            ">
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Package</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Servicies</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Duation</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Cost</th>
            </tr>
            <tr style="
               border:2px solid black;
               ">
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Package1</td>
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Service1,Service2,Service3</td>
                   <td style="
                       color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Time1</td>
                   <td style="
                   color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Cost1</td>
           
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package2</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time2</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost2</td>
            </tr>
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package3</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time3</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost3</td>
             <tr style="
             border:2px solid black;
             ">
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Package4</td>
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Service1,Service2,Service3</td>
                 <td style="
                     color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Time4</td>
                 <td style="
                 color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Cost4</td>
              <tr style="
              border:2px solid black;
              ">
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Package5</td>
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Service1,Service2,Service3</td>
                  <td style="
                      color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Time5</td>
                  <td style="
                  color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Cost</td>
               </table>
               <br><h2 style="color: #ea6b00;
               font-weight: bolder;
               font-size:28px;
               font-weight: bolder;
               ">Package_Title2</h2><br>
           <table>
               <tr style="
               border:2px solid black;
               ">
                   <th style="
                   color:#ea6b00;
               font-size: larger;
               background-color:#2a3f54;
               padding:10px 90px 10px 90px;
               ">Package</th>
                   <th style="
                   color:#ea6b00;
               font-size: larger;
               background-color:#2a3f54;
               padding:10px 90px 10px 90px;
               ">Servicies</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Duation</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Cost</th>
               </tr>
               <tr style="
                  border:2px solid black;
                  ">
                      <td style="
                       color:#2a3f54;
                  font-size: large;
                  font-weight: bolder;
                  padding:10px 90px 10px 90px;
                  border:2px solid black;
      
                  ">Package1</td>
                      <td style="
                       color:#2a3f54;
                  font-size: large;
                  font-weight: bolder;
                  padding:10px 90px 10px 90px;
                  border:2px solid black;
      
                  ">Service1,Service2,Service3</td>
                      <td style="
                          color:#2a3f54;
                  font-size: large;
                  font-weight: bolder;
                  padding:10px 90px 10px 90px;
                  border:2px solid black;
      
                   ">Time1</td>
                      <td style="
                      color:#2a3f54;
                  font-size: large;
                  font-weight: bolder;
                  padding:10px 90px 10px 90px;
                  border:2px solid black;
      
                   ">Cost1</td>
              
               <tr style="
               border:2px solid black;
               ">
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Package2</td>
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Service1,Service2,Service3</td>
                   <td style="
                       color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Time2</td>
                   <td style="
                   color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Cost2</td>
               </tr>
               <tr style="
               border:2px solid black;
               ">
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Package3</td>
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Service1,Service2,Service3</td>
                   <td style="
                       color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Time3</td>
                   <td style="
                   color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Cost3</td>
                <tr style="
                border:2px solid black;
                ">
                    <td style="
                     color:#2a3f54;
                font-size: large;
                font-weight: bolder;
                padding:10px 90px 10px 90px;
                border:2px solid black;
    
                ">Package4</td>
                    <td style="
                     color:#2a3f54;
                font-size: large;
                font-weight: bolder;
                padding:10px 90px 10px 90px;
                border:2px solid black;
    
                ">Service1,Service2,Service3</td>
                    <td style="
                        color:#2a3f54;
                font-size: large;
                font-weight: bolder;
                padding:10px 90px 10px 90px;
                border:2px solid black;
    
                 ">Time4</td>
                    <td style="
                    color:#2a3f54;
                font-size: large;
                font-weight: bolder;
                padding:10px 90px 10px 90px;
                border:2px solid black;
    
                 ">Cost4</td>
                 <tr style="
                 border:2px solid black;
                 ">
                     <td style="
                      color:#2a3f54;
                 font-size: large;
                 font-weight: bolder;
                 padding:10px 90px 10px 90px;
                 border:2px solid black;
     
                 ">Package5</td>
                     <td style="
                      color:#2a3f54;
                 font-size: large;
                 font-weight: bolder;
                 padding:10px 90px 10px 90px;
                 border:2px solid black;
     
                 ">Service1,Service2,Service3</td>
                     <td style="
                         color:#2a3f54;
                 font-size: large;
                 font-weight: bolder;
                 padding:10px 90px 10px 90px;
                 border:2px solid black;
     
                  ">Time5</td>
                     <td style="
                     color:#2a3f54;
                 font-size: large;
                 font-weight: bolder;
                 padding:10px 90px 10px 90px;
                 border:2px solid black;
     
                  ">Cost</td>
                  </table>
                 <br> <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            ">Package_Title3</h2><br>
        <table>
            <tr style="
            border:2px solid black;
            ">
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Package</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Servicies</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Duation</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Cost</th>
            </tr>
            <tr style="
               border:2px solid black;
               ">
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Package1</td>
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Service1,Service2,Service3</td>
                   <td style="
                       color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Time1</td>
                   <td style="
                   color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Cost1</td>
           
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package2</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time2</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost2</td>
            </tr>
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package3</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time3</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost3</td>
             <tr style="
             border:2px solid black;
             ">
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Package4</td>
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Service1,Service2,Service3</td>
                 <td style="
                     color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Time4</td>
                 <td style="
                 color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Cost4</td>
              <tr style="
              border:2px solid black;
              ">
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Package5</td>
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Service1,Service2,Service3</td>
                  <td style="
                      color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Time5</td>
                  <td style="
                  color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Cost</td>
               </table>
            <br>   <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            ">Package_Title4</h2><br>
        <table>
            <tr style="
            border:2px solid black;
            ">
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Package</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Servicies</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Duation</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Cost</th>
            </tr>
            <tr style="
               border:2px solid black;
               ">
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Package1</td>
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Service1,Service2,Service3</td>
                   <td style="
                       color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Time1</td>
                   <td style="
                   color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Cost1</td>
           
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package2</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time2</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost2</td>
            </tr>
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package3</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time3</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost3</td>
             <tr style="
             border:2px solid black;
             ">
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Package4</td>
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Service1,Service2,Service3</td>
                 <td style="
                     color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Time4</td>
                 <td style="
                 color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Cost4</td>
              <tr style="
              border:2px solid black;
              ">
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Package5</td>
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Service1,Service2,Service3</td>
                  <td style="
                      color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Time5</td>
                  <td style="
                  color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Cost</td>
               </table>
             <br>  <h2 style="color: #ea6b00;
            font-weight: bolder;
            font-size:28px;
            font-weight: bolder;
            ">Package_Title5</h2><br>
        <table>
            <tr style="
            border:2px solid black;
            ">
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Package</th>
                <th style="
                color:#ea6b00;
            font-size: larger;
            background-color:#2a3f54;
            padding:10px 90px 10px 90px;
            ">Servicies</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Duation</th>
             <th style="
             color:#ea6b00;
         font-size: larger;
         background-color:#2a3f54;
         padding:10px 90px 10px 90px;
         ">Cost</th>
            </tr>
            <tr style="
               border:2px solid black;
               ">
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Package1</td>
                   <td style="
                    color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
               ">Service1,Service2,Service3</td>
                   <td style="
                       color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Time1</td>
                   <td style="
                   color:#2a3f54;
               font-size: large;
               font-weight: bolder;
               padding:10px 90px 10px 90px;
               border:2px solid black;
   
                ">Cost1</td>
           
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package2</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time2</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost2</td>
            </tr>
            <tr style="
            border:2px solid black;
            ">
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Package3</td>
                <td style="
                 color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

            ">Service1,Service2,Service3</td>
                <td style="
                    color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Time3</td>
                <td style="
                color:#2a3f54;
            font-size: large;
            font-weight: bolder;
            padding:10px 90px 10px 90px;
            border:2px solid black;

             ">Cost3</td>
             <tr style="
             border:2px solid black;
             ">
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Package4</td>
                 <td style="
                  color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
             ">Service1,Service2,Service3</td>
                 <td style="
                     color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Time4</td>
                 <td style="
                 color:#2a3f54;
             font-size: large;
             font-weight: bolder;
             padding:10px 90px 10px 90px;
             border:2px solid black;
 
              ">Cost4</td>
              <tr style="
              border:2px solid black;
              ">
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Package5</td>
                  <td style="
                   color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
              ">Service1,Service2,Service3</td>
                  <td style="
                      color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Time5</td>
                  <td style="
                  color:#2a3f54;
              font-size: large;
              font-weight: bolder;
              padding:10px 90px 10px 90px;
              border:2px solid black;
  
               ">Cost</td>
               </table>
       
                           
               
       
    </div>
</div>
    
<?php require 'Partial/footer.html' ?>

</body>
</html>