<?php
include("connection.php");
$sql = "SELECT * FROM `services`";
$result = mysqli_query($con,$sql);
//$num = mysqli_num_rows($result);
//while ($row = mysqli_fetch_assoc($result)) {
  //echo $row['name'];
  //echo "<br>";
//}

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>services</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <img src="headlogo.png" alt="vishwa it Solution">
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="index.php" data-after="HOME">HOME</a></li>
            <li><a href="services.php" data-after="OUR SERVICES">OUR SERVICES</a></li>
            <li><a href="mission.php" data-after="MISSION">MISSION</a></li>
            <li><a href="contactus.php" data-after="CONTACT US">CONTACT US</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- End Header -->


<!-- Hero Section  -->
<section id="hero">
  <div class="hero container">
    <div>
      <h1>Our<span></span></h1>
      <h1>Services <span></span></h1>
      <a href="contactus.php" type="button" class="cta">BOOK APPOINTMENT</a>
    </div>
  </div>
</section>
<!-- End Hero Section  -->

<section id="contact">
  <div class="contactcontainer">
    <div><h1 class="section-title"> <span></span></h1></div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects">
  <div class="projects container">
    <div class="projects-header">
      <h1 class="section-title">O<span>U</span>R Serv<span>i</span>ces</h1>
      <p>Vishwa IT Solutions is a IT solution provider. Here we provide all services related to</p>
    </div>
    <?php
        while($row=mysqli_fetch_assoc($result)){
    ?>
    <div class="all-projects">
      <div class="project-item">
        <div class="project-info">
          <div class="icon"><img src="<?php echo $row['icon_url']?>"/></div>
          <h2><?php echo $row['name']?></h2>
          <p><?php echo $row['description']?></p>
          <a href="contactus.php" type="button" class="cta">Get Service</a>
        </div>
        <div class="project-img">
          <img src="<?php echo $row['image_url']?>" alt="img">
        </div>
      </div>
    </div>
    <?php
        }
     ?>
  </div>
</section>
<!-- End Projects Section -->

<!-- Footer -->
<section id="footer">
  <div class="footer container">
    <div class="brand"><h1>vishwa<span> IT</span> solutions</h1></div>
    <h2>Your Complete IT Solution</h2>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-youtube"></a>
    <p>Copyright © 2020 Vishwa IT SOLUTIONS. All rights reserved</p>
  </div>
</section>
<!-- End Footer -->
<script src="./app.js"></script>
