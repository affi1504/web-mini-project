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
    <link rel="stylesheet" href="style\bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/957812a91c.js"></script>
    <link rel="stylesheet" href="style\styles.css">
    <link rel="stylesheet" href="style\navbar2.css">
    <title>TECHNIA-a whole new technology</title>
</head>
<body id="home">
  <div class="my-navbar">
      <div class="my-container">
        <a href="index.php"> <h1 class="my-logo">technia</h1></a> 
        <ul class="my-nav">
              <li><a href="index.php" class="btn-glow"><span></span><span></span><span></span><span></span> home</a></li>
              <li><a href="" class="selected btn-glow"><span></span><span></span><span></span><span></span>phones</a></li>
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
            

   <div class="px-4 px-lg-0">
  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $row['pname']; ?></a></h5><span class="text-muted font-weight-normal font-italic d-block"></span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong><?php echo $row['price']; ?></strong></td>
                  <td class="border-0 align-middle"><strong>1</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-12">
        <div class="col-lg-12">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong><?php  $price = (int)$row['price'];echo $price; ?></strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong><?php $ship = 100;
              echo $ship; ?> </strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong><?php $tax = 80; echo $tax; ?></strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold"><?php $total = $price+$ship+$tax;
              echo $total;  } ?></h5>
              </li>
            </ul><a href="checkout.php" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>        
</body>
</html>