<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<html>
    <head>
        <?php
include "nav.php";
?>
<br><br><br>
<div class="container" method="POST">
    <br>
    <div class="col">
        <form action="">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input required="" type="text" name="name" class="form-control" id="name" placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label for="name">phone number</label>
                <input required="" type="tel"  name="phonenumber" class="form-control" id="tel" placeholder="Enter your phone number">
            </div>
          <a  href="thankyou.php"> <button type="submit" class="btn btn-primary">Submit</button></a> 
          </p> 
          </form>
          <br>
      
    </div>




     <?php
include "footers.php";
?>
       
<script type="text/javascript">
    // Define color variables:
red = [0, 100, 63];
orange = [40, 100, 60];
green = [75, 100, 40];
blue = [196, 77, 55];
purple = [280, 50, 60];
letterColors = [red, orange, green, blue, purple];

// This variable controls the smallest distance at which a mouse will 
mouseResponseThreshold = 60;

// This variable controls how strongly the dots will try to return to their starting position
friction = 0.9;

// This variable controls how much the dots will rotate when interacting
rotationForce = 0.01;

message = 'Change the physics!';

drawName(message, letterColors);
bounceBubbles();
</script>
    <div class="social-buttons">
      <a href="#"><i class="fab fa-teamspeak"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <p class="copyright"> &copy; <b>Life Saver System;</b>all right reserved.</p>
</p>

</div>

</body>
</html>