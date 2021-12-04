<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- adding font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- adding style css -->
  <link rel="stylesheet" href="style2.css">
  <title>contact_us</title>
</head>
<body>

  <?php
  include("connection.php");
  error_reporting(0);
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Website</title>
  </head>
  <body1>
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


  </body1>
</html>


  <section id="fancy-form">
   <div class="container">
    <div class="form-sections">
      <!-- Form left -->
      <div class="Form-left">
        <h1>Get In Touch</h1>
        <div class="line"></div> <!--border-bottom line-->
        <p>Contact us for latest news and updates. subscribe our news letter :)</p><br>

        <!--first Heading -->
        <h4>ADDRESS</h4>
         <span>123, Main Street, New York 1001</span>
         <hr><br><br>

         <!--second Heading -->
        <h4>PHONE</h4>
         <span>(+1)123 456 7890</span>
         <hr><br><br>

       <!--third Heading -->
        <h4>EMAIL</h4>
         <span>Jhondoe@gmail.com</span>
         <hr> <br>

         <!-- social media icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
      </div>

      <!-- form right -->
      <div class="Form-right">
        <h1>Contact Us</h1>
        <div class="line"></div>
        <!-- form -->
        <form method="post">
          <h5>NAME</h5>
          <input type="text" name="name" id="name"><br><br>
          <h5>EMAIL</h5>
          <input type="email" name="email" id="email"><br><br>
          <h5>PHONE</h5>
          <input type="number" name="phone" id="phone"><br><br>
          <h5>YOUR MESSAGE</h5>
          <textarea name="message" id="message" cols="50" rows="7"></textarea><br>
          <a href ="contactus.php"><input type="submit" onclick="send_message()" name="submit" value="submit">
            <?php
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $message=$_POST['message'];
            $added_on=date('Y-m-d h:i:s');
            if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)){
              $query="INSERT INTO users(name,email,phone,message,added_on) VALUES ('$name','$email','$phone','$message','$added_on')";
              $data=mysqli_query($con,$query);
              if($data){
                //echo "inserted";
              }else{
                //echo "not inserted";
              }
            }
             ?>
        </form>
      </div>
    </div>
    </div>
  </section>


      <section id="contact">
        <div class="contactcontainer">
          <div><h1 class="section-title"> <span></span></h1></div>
          </div>
      </section>

  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1>vishwa<span> IT</span> solutions</h1></div>
      <h2>Your Complete IT Solution</h2>

      <p>Copyright © 2020 Vishwa IT SOLUTIONS. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>



</body>
</html>
