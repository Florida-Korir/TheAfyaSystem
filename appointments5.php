<!DOCTYPE html>
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
    
    <h1 class="cancer"> First time appointment</h1>
    <hr>
    
<body style="text-items: center;">
    <div class="center">
    <div class="wrapper">
        <h1 class="header" style="font-family: Georgia;">THE AFYA SYSTEM</h1>
       
      <h4 class="login">  <p>Book Appointments.</p></h4>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="true">Yours or Sombebody else?</label>
                
  <input type="text" list="yours" id="city" name="city">
  <datalist id="yours">
    <option value="Mine"></option>
      <option value="Somebody else"></option>
    </datalist> 
            </div>
             <p>If yours: proceed. If not,<a href="appointments2.php">Please proceed here</a>.</p>   
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Your name</label>
                <input type="text" name="email" class="form-control">
               
            </div>  
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
               </div>
        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Age</label>
                <input type="text" name="email" class="form-control">
               
            </div>  
<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Phone number 1</label>
                <input type="text" name="email" class="form-control">
               
            </div>  
             <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Phone number 2</label>
                <input type="text" name="email" class="form-control">
               
            </div> 
<div class="form-group">
                <label for="city">Have you ever received any treatment of any NCDs at any hospital in the country?</label>
  <input type="text" list="cities" id="city" name="city">
  <datalist id="cities">
    <option value="yes"></option>
      <option value="no"></option>
    </datalist>
           <p>If so: proceed. If not,<a href="appointments5.php">Please proceed here</a>.</p>     
            </div> 
                 <div class="form-group">
                <label for="disease">Type of NCDs to be treated</label>
  <input type="text" list="disease" id="dis" name="dis">

  <datalist id="disease">
    <option value="Cancer"></option>
    <option value="Diabetes"></option>
    <option value="Cardiovascular Diseases"></option>
    <option value="Chronic Respiratory illness"></option>
    </datalist>
               
            </div> 
                 <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <label for="city">Current Location of treatment</label>
  <input type="text" list="towns" id="town" name="town">
                <datalist id="towns">
               <option value="Samburu"></option>
    <option value="Bungoma"></option>
    <option value="Nairobi"></option>
    <option value="Eldoret"></option>
    <option value="Kiambu"></option>
    <option value="Kericho"></option>
    <option value="Vihiga"></option>
    <option value="Kisumu"></option>
    <option value="Kitui"></option>
    <option value="Nakuru"></option>
    <option value="Bomet"></option>
    <option value="Kwale"></option>
    <option value="Kissi"></option>
    <option value="Kilif"></option>
    <option value="Mombasa"></option>
    <option value="Meru"></option>
    <option value="Cancer"></option>
    <option value="Diabetes"></option>
    <option value="Kirinyaga"></option>
    <option value="Nyamira"></option>
    <option value="Cancer"></option>
    <option value="Nandi"></option>
    <option value="Narok"></option>
    <option value="Busia"></option>
</datalist>
               
            </div> 
                 <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label for="city">Hospital at that current location</label>
                <input type="text" list="hospital" id="hosp" name="hosp"> 
                <datalist id="hospital">
                <input type="text" name="email" class="form-control">
              
    <option value="Zambezi General Hospital"></option>
    <option value="M.P shah Hospital"></option>
    <option value="Coast Genearal Hospital"></option>
    <option value="Aga Khan University Hospital"></option>
</datalist>
            </div> 
           
            
        </form>
         <a href="appointments4.php">   <button class="btn-primary"> <input type="submit"  class="btn-primary" value="Submit"></button></a>
    </div>  
    </div>  
</body>
   
</html>