<?php 
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $myfname = mysqli_real_escape_string($db,$_POST['fname']);
    $mylname = mysqli_real_escape_string($db,$_POST['lname']);
    $myphno = mysqli_real_escape_string($db,$_POST['phno']);
    $myadd1 = mysqli_real_escape_string($db,$_POST['add1']);
    $myadd2 = mysqli_real_escape_string($db,$_POST['add2']);
    $mypin = mysqli_real_escape_string($db,$_POST['pin']);
    $mycity = mysqli_real_escape_string($db,$_POST['city']);
    $mystate = mysqli_real_escape_string($db,$_POST['state']); 
    $mycardno = mysqli_real_escape_string($db,$_POST['cardno']);
    $myexpiry = mysqli_real_escape_string($db,$_POST['expiry']);
    $mycvv = mysqli_real_escape_string($db,$_POST['cvv']); 
    
    $sql = "INSERT INTO `checkout`(`fname`, `lname`, `phno`, `add1`, `add2`, `pin`, `city`, `state`, `cardno`, `expiry`, `cvv`) VALUES ('{$myfname}','{$mylname}','{$myphno}','{$myadd1}','{$myadd2}','{$mypin}','{$mycity}','{$mystate}','{$mycardno}','{$myexpiry}','{$mycvv}')";
   if(mysqli_query($db,$sql)){
    $success = "thankyou, Your order will be delievered soon!";
        echo "<script type='text/javascript'>alert('$success');</script>";
    }else{
        $unsuccess = "Something went wrong, Please try again.";
        echo "<script type='text/javascript'>alert('$unsuccess');</script>";
    }
}
 
    


?>



 <!DOCTYPE html>
<html lang="en" class="html">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style\navbar2.css">
    <link rel="stylesheet" href="style\checkout.css">
    <title>TECHNIA-a whole new technology</title>

</head>
<body>
<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Checkout</h2>
    <form method="POST">
    <h4>personal details</h4>
    <div class="personal">
      <input type="text" name="fname" placeholder="first name" required>
      <input type="text" name="lname" placeholder="last name" required>
    <input type="text" name="phno" placeholder="phone number" required  pattern=".{10}">
    </div>
    <h4>delivery details</h4>
    <div class="address">
    <input type="text" name="add1" placeholder="Flat, House no, Building" required>
    <input type="text" name="add2" placeholder="Area, Colony, Street" required>
    <input type="text" name="pin" placeholder="pincode" required  pattern="[0-9]{10}">
    <input type="text" name="city" placeholder="town/city" required>
    <input type="text" name="state" placeholder="state" required>
    </div>
    <h4>payment details</h4>
    <div class="payment">
      <input type="text" name="cardno" placeholder="card number" required  pattern="[0-9]{12}">
      <input type="text" name="expiry" placeholder="mm-yy" required>
      <input type="text" name="cvv" placeholder="cvv" required  pattern="[0-9]{3}">
    </div>
<a href="index.php" class="btn back-btn">go to home</a>
<input type="reset" value="clear" class="btn back-btn">
<input type="submit" value="place order" class="btn next-btn">

    </form>
</div>   
</div>
</body>
</html>