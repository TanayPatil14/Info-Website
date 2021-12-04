<?php
require('connection.inc.php');
require('functions.inc.php');
$msg='';
if (isset($_POST['submit'])) {
    $username=get_safe_value($con,$_POST['username']);
    $password=get_safe_value($con,$_POST['password']);
    $password=md5($password);
    $sql="select * from admin_users where username='$username' and password='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
      $_SESSION['ADMIN_LOGIN']='yes';
      $_SESSION['ADMIN_USERNAME']=$username;
      header('location:contact_us.php');
      die();
    }else{
      $msg="invalid credentials";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tanay_Patil</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="post">
      <div class="login">
        <h1>LOGIN</h1>
        <div class="textbox">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" placeholder="username" name="username" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" placeholder="password" name="password" value="" required>
        </div>
        <input class="btn" type="submit" name="submit" value="Sign up">
        <div class="field_error"><?php echo $msg?></div>
    </div>
    </form>
  </body>
</html>
