<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href=>
</head>

<body style="background-color: powderblue;">
  </a>
  <?php
include "nav.php";
  ?> 
  <section class="row">
    <div class=" col text-panel" style="color: black;">
      <p>Hello</p>
      <div >
       <p> <h3><b style="color: navy;"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Thank you for registering to FIMA</h3></p>
    </div>
<br>
      <a href="contact.php"><button class="blog-btn">Contact us</button></a> 
       <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Account</a>
    </p>
    </div> 
    </div> 
  </section>
    
<?php
include "footers.php";
?>

            <!-- description -->
<script src="https://kit.fontawesome.com/6374ade89f.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>




