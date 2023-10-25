DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="">
</head> 
<header>
    <?php
include "nav1.php";
?>
    </header>
<body>
    <p style="float: right;"><h1 class="cancer">Hey, <p style="color: navy;"> Musau Mutie</p></h1></p>
    <!--  <div class="col-md-4 feature wow zoomIn animated" data-wow-duration="0.8s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: zoomIn;">
      <div class="feature-content">
        <h4><font color="navy"><b>Here are the credentials for the hospital; Aga Khan University Hospital</b></font></h4>
         <p>
         They offer cancer screening, diagnosis, cancer awareness, treament, chemotherapy,
        </p>
      </div>
    </div> -->
    <hr>
   
    <body style="text-items: center;">
    <div class="center">
    <div class="wrapper">
        <h1 class="header" style="font-family: Georgia;">THE AFYA SYSTEM</h1>
       
      <h4 class="login">  <p>Here is your booked Appointment:<br> Nairboi Hospital</p></h4>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="true">Doctor:1</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="Dr. Kevin Washington">
            </div>
             <div class="form-group">
                <label for="true">Date</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="12th, Janruary 2021">
            </div> 
             <div class="form-group">
                <label for="true">Time</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="12:05 a.m">
            </div>
         
  <hr>
     <div class="form-group">
                <label for="true">Doctor:2</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="Dr. June Njerii">
            </div>
             <div class="form-group">
                <label for="true">Date</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="12th, January, 2021">
            </div>
             <div class="form-group">
                <label for="true">Time</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="10:50 a.m">
            </div>
         
    </div>

    </div>
</form>
      <hr> 
     <body style="text-items: left;"> 
      <div class="center">
    <div class="wrapper">
        <h1 class="header" style="font-family: Georgia;">THE AFYA SYSTEM</h1>
       
      <h4 class="login">  <p>In case of an emergency: <br>You can visit these two hospitals:</p></h4>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <h5 style="color: black;">Nairobi Women Hospital</h5>
                <label for="true">Doctor:1</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="Dr. Elvis Duor">
            </div>
             <div class="form-group">
                <label for="true">Date</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="1st, November 2020">
            </div>
             <div class="form-group">
                <label for="true">Time</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="13.20 p.m">
            </div>
            <hr>
             <div class="form-group">
                <h5 style="color: black;">Nairobi Hospice</h5>
                <label for="true">Doctor:2</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="Dr. Sharon Omboi">
            </div>
             <div class="form-group">
                <label for="true">Date</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="18th, November 2020">
            </div>
             <div class="form-group">
                <label for="true">Time</label>
                
  <input type="text" list="yours" id="city" name="city" placeholder="10:50 a.m">
            </div>
         
    </div>
    <hr>  