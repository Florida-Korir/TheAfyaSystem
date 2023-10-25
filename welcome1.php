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
       <p> <h3><b style="color: navy;"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our system.</h3></p>
    </div>
      <p>Where you health</p>
      <P>Matters</P>
<br>
      <a href="about.php"><button class="about-btn">About us</button></a>
      <a href="contact.php"><button class="blog-btn">contact us</button></a> 
       <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Account</a>
    </p>
    </div> 
    </div> 

    <div class="col pf">
      <img class="mx-auto d-block pf-panel" src="ncds.jpg" alt="NCDs Image" width="450" height="100">
    </div>
  </section>
    </div>
</div> 
<hr> 
<b><b>
 <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">The Afya <span style="color:orange"> system. <p style="color: navy;"> what do we do?</span></h2>


 <hr>
<div  style="color: black;"  class="row">

    <div class="col-md-4 feature wow zoomIn animated" data-wow-duration="0.8s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: zoomIn;">
      <div class="oca">
         <img src="1.jpg" alt="" width="350" height="200">
      </div>
      <div class="feature-content">
        <h2><font style="font-family: book antiqua;" color="green"><b>Awareness of the Non-Communicable Diseases.</b></font></h2> 
        <p>
          Our system simplifies bulk <b><font color="orange">information</font></b> to the users understanding. It gives information on the <b><font color="orange">different</font></b>  types of  <b>non-communicable diseases</b>, their effects and <b>prevention methods</b>.
           
        </p>

      </div>
    </div>

    <div class="col-md-4 feature wow zoomIn animated" data-wow-duration="0.8s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: zoomIn;">
      <div class="oc">
         <img src="3.jpg" alt="" width="350" height="200">
      </div>
      <div class="feature-content">
        <h2><font color="purple"><b>Enlightening People on<br> a healthier lifestyle</b></font></h2>
        <p>
          Ensuring  <b><font color="orange">healthier living lifestyle</font></b> for the patients. Our system gives information on the <b>types of foods</b> one should eat depending on the type of NCDs he or she has.      
        </p>
      </div>
    </div>

    <div class="col-md-4 feature wow zoomIn animated" data-wow-duration="0.8s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: zoomIn;">
      <div class="oa">
         <img src="2.jpg" alt="" width="350" height="200">
      </div>
      <div class="feature-content">
        <h2><font color="navy"><b>Linking patients to doctors $ foundations for funds</b></font></h2>
        <p>
          This platform is <b><font color="orange">user friendly</font></b>.Thus, we found it convenient for patients suffering from NCDs be linked to the doctors.This is because  <b>getting an appointment to a doctor</b> 
        </p>
      </div>
    </div>  
  </div>
  <hr>
  <p style="color: black;">
   <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Found<span style="color:orange">ers</span></h2>
   <div class="row blog-list">
            <!-- image div -->
            <div class="col col-lg-3">
                <img class="blog-image" src="7.jpg" alt="Plate Food">
            </div>


            <!-- description -->
            <div style="color: black;" class="col col-lg-8 blog-content">
                <h3 style="color: navy;">Juliet Wangoi</h3>
                 <p>She is:<br>
                 Student of Mama ngina Girls of High School<br> 
Young ambitious entprenuers<br>
• Developers <br>
                <button>Read More</button>
            </div>
        </div>
        <div   style="color: black;" class="row blog-list">
            <!-- image div -->
            <div class="col col-lg-3">
                <img class="blog-image" src="7.jpg" alt="Plate Food">
            </div>


            <!-- description -->
            <div class="col col-lg-8 blog-content">
                <h3 style="color: navy;">Florida Korir</h3>
                <p>She is:<br>
                 Student of Mama ngina Girls of High School<br> 
Young ambitious entprenuers<br>
• Developers <br>
                    </p>
                <button>Read More</button>
            </div>
        </div>
</p>
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




