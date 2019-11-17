<!DOCTYPE html>
<html lang="en" class="html">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/957812a91c.js"></script>
    <link rel="stylesheet" href="style\navbar.css">
    <link rel="stylesheet" href="style\checkout.css">
    <title>ALTA-products of the future</title>
    <script>

    $(document).ready(function() {
 
  $('.method').on('click', function() {
    $('.method').removeClass('blue-border');
    $(this).addClass('blue-border');
  });
 
})

var $cardInput = $('.input-fields input');
 
$('.next-btn').on('click', function(e) {
 
  $cardInput.removeClass('warning');
 
  $cardInput.each(function() {    
     var $this = $(this);
     if (!$this.val()) {
       $this.addClass('warning');
     }
  })
});
    
    </script>
    <title>Document</title>
</head>
<body class="body">
<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Checkout</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active "></div>
      <div class="step "></div>
      <div class="step  "></div>
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Cardholder's Name</label>
        <input type="text" id="cardholder" />
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid thru</label>
            <input type="text" id="date" placeholder="MM / YY" />
          </div>
 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="password" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input type="password" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    <a href="index.php" class="btn back-btn"> home</a>
    <a class="btn next-btn">back</a>
    <a class="btn next-btn">Next Step</a>
  </div>
</div>
</body>
</html>