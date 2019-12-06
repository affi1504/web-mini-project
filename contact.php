<?php 
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $myname = mysqli_real_escape_string($db,$_POST['name']);
    $myemail = mysqli_real_escape_string($db,$_POST['email']);
    $myphone = mysqli_real_escape_string($db,$_POST['phone']);
    $mymessage = mysqli_real_escape_string($db,$_POST['message']); 
    if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $myname) ) 
    { 
        $unsuccess = "the entered name contains numbers, please enter a valid name and try again.";
        echo "<script type='text/javascript'>alert('$unsuccess');</script>";
    } else {
    $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES ('{$myname}','{$myemail}','{$myphone}','{$mymessage}')";
    if(mysqli_query($db,$sql)){
        $success = "thankyou, we will reach out to you soon!";
        echo "<script type='text/javascript'>alert('$success');</script>";
    }else{
        $unsuccess = "Something went wrong, Please try again.";
        echo "<script type='text/javascript'>alert('$unsuccess');</script>";
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/957812a91c.js"></script>
    <link rel="stylesheet" href="style\styles.css">
    <link rel="stylesheet" href="style\navbar.css">
    <script src="js\snackbar.js"></script>
    <title>TECHNIA-a whole new technology</title>
</head>
<body id="home">
  <div class="navbar">
      <div class="container">
        <a href="index.php"> <h1 class="logo">technia</h1></a> 
                    <ul class="nav">
              <li><a href="index.php" class="btn-glow"><span></span><span></span><span></span><span></span> home</a></li>
              <li><a href="phones.php" class="btn-glow"><span></span><span></span><span></span><span></span>phones</a></li>
              <li><a href="headphones.php" class="btn-glow"><span></span><span></span><span></span><span></span>headphones</a></li>
              <li><a href="speakers.php" class="btn-glow"><span></span><span></span><span></span><span></span>speakers</a></li>
              <li><a href="about.php" class="btn-glow"><span></span><span></span><span></span><span></span>about</a></li>
              <li><a href="" class="selected btn-glow"><span></span><span></span><span></span><span></span>contact</a></li>
          </ul>
        </div>
       
    </div>

    <div class="contact-us">
        <div class="title">
            <h1>Contact us</h1>
        </div>
        <form action="" method="POST">
        <div class="form">
            <div class="form-items">
                <input type="text" class="input" name="name" placeholder="Name" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="form-items">
                <input type="text" class="input" name="email" placeholder="E-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="form-items">
                <input type="text" class="input" name="phone" placeholder="Phone number" required pattern=".{10}">
                <i class="fas fa-phone"></i>
            </div>

            <div class="form-items">
                <textarea class="input message" cols="30" rows="10" name="message" placeholder="Message..." required></textarea>
            </div>
        </div>
        <input type="submit" class="contact-btn" value="submit">

        </form>

        <div class="social-icons">
        <a href="https:\\www.facebook.com"> <div class="facebook"> <img src="icons\facebook-logo.png" class="fab fa-facebook-f"> </div></a>

         <a href="https:\\www.twitter.com"> <div class="twitter"> <img src="icons\twitter.png" class="fab fa-twitter"></div></a>

        <a href="https:\\www.google.com"> <div class="google"><img src="icons\google-plus.png" class="fab fa-google-plus-g"> </div></a>
        </div>
    </div>
    
</body>
</html>