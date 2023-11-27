<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Evara shop - register form</title>
  <!-- favicon for evara  -->
  <link rel="icon" href="../images/favicon.jpg" type="image/x-icon" />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="../style.css">

</head>
<body>
<section id="header">
<a href="../index.html"><img src="../images/logo.svg" class="logo" alt="logo"></a>
          <div>
              <ul id="navbar">
                  <li><a  href="../index.html">Home</a></li>
                  <li><a href="../shop.html">Shop</a></li>
                  <li><a href="../about.html">Support</a></li>
                  <li><a href="../contact.html">Contact</a></li>
                  <li><a class="active" href="./login_form.php">Login </a></li>
                  <li id="lg-bag"><a href="../cart.html"><i class="far fa-shopping-bag"></i></a></li>
                  <a href="#" id="close"><i class="far fa-times"></i></a>
              </ul>
          </div>
          <div id="mobile">
              <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
              <i id="bar" class="fas fa-outdent"></i>
          </div>
      </section>

<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>
<footer class="section-p1">
        <div class="col">
            <img class="logo" src="./images/logo.svg" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Ashulia Model town, Savar,Dhaka</p>
            <p><strong>Phone:</strong>+8801704355496</p>
            <p><strong>Mail:</strong>tarek@gmail.com</p>
            <div class="icon">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            
                
            </div>
        </div>
    </div>

        <div class="col">
            <h4>About</h4>
            <a href="../about.html">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="./contact.html">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="./login_form.php">Login</a>
            <a href="../cart.html">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="../cart.html">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row ">
                <img src="../images/app-store.png" alt="">
                <img src="../images/play-store.png" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <div class="payment-row">
                <img src="../images/payment-method.png" alt="">
            </div>
        </div class="copyright">
            <p>2023 Website made by Tarek, Shahriar and Sohan <br> <br>
                ©Coppyright : all rights reserved
            </p>
        <div>

        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>