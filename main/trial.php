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
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
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
        <h1>VISHWA IT SOLUTIONS<span><h1><span></span></h1></span></h1>
        <a href="contactus.php" type="button" class="cta">BOOK APPOINTMENT</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

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

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">why<span>choose</span>us ?</h1>
        <p>Vishwa IT Solutions is a IT solution provider. Here we provide all services related to</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/planner.png"/></div>
          <h2>Extremely Punctual</h2>
          <p>We complete our work in the given deadline. Our clients never have to worry about work being delayed.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/chat.png"/></div>
          <h2>Timely Updates</h2>
          <p>Complete reports of particular period is submiited to the client, so that it is easy to keep track of work done.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/500/000000/dropbox.png"/></div>
          <h2>Desirable Customizations</h2>
          <p>For any project, after the demo completion, we provide some extra customizations according to the likes of client.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/500/000000/comments.png"/></div>
          <h2>Feedback</h2>
          <p>We help client to get feedback on our work for them, so that they get to know about the audience reaction.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->
  <section id="contact">
    <div class="contactcontainer">
      <div><h1 class="section-title"> <span></span></h1></div>
      </div>
  </section>

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <img src="headlogo2.png" alt="img">

      <div class="col-right">
        <h1 class="section-title">About <span>us</span></h1>
        <h2>IT Solutions</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
        <a href="contactus.php" class="cta">Book APPOINTMENT</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
 <section id="contact">
   <div class="contactcontainer">
     <div><h1 class="section-title"> <span></span></h1></div>
     </div>
 </section>
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
   <link rel="stylesheet" href="style.css">
   <title>Fancy Form</title>
 </head>
 <body1>

   <section id="fancy-form">
    <div class="container1">
     <div class="form-sections">
       <!-- Form left -->
       <div class="Form-left">
         <h1>Get In Touch</h1>
         <div class="line"></div> <!--border-bottom line-->
         <br>
         <br

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
          <span>abcdwg@gmail.com</span>
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
           <input type="text" name="name"><br><br>
           <h5>EMAIL</h5>
           <input type="email" name="email"><br><br>
           <h5>PHONE</h5>
           <input type="number" name="phone"><br><br>
           <h5>YOUR MESSAGE</h5>
           <textarea name="message" id="" cols="50" rows="7"></textarea><br>
           <a href ="index.php"><input type="submit" onclick="send_message()" name="submit" value="submit">
         </form>
       </div>
     </div>
     </div>
   </section>
 </body>
 </html>
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
    echo "inserted";
  }else{
    echo "not inserted";
  }
}
 ?>
  <!-- End Contact Section -->

  <!-- Footer -->
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
