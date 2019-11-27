<?php 
include("config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE `id`='{$id}'";
    $result = mysqli_query($db,$sql);
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
              <li><a href="contact.php" class="btn-glow"><span></span><span></span><span></span><span></span>contact</a></li>
          </ul>
      </div>
  </div>

  <?php
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_assoc($result);
?>
<div class="details-body">
  <div class="details-container">
        <div class="details-img-box">
            <img src="<?php echo $row['img_url']; ?>" alt="">
        </div>
        <div class="details-text-box">
            <h1><?php echo $row['pname']; ?></h1>
            <p><?php echo $row['details']; ?></p>
                <h2><?php echo $row['price'] ."/-";} ?></h2>
                <a href="cart.php?id=<?php echo $row['id'] ?>" class="cart-btn"> buy now</a>
        </div>
    </div>
    </div>

</body>
</html>