<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Div Shopify | Online Shopping Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">"Discover. Shop. Thrive."</h3>
          <hr />
          <img
            src="https://feelmyworth.com/wp-content/uploads/2021/06/outlet-shopping.jpg"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">Welcome to Div Shopify – Your Ultimate Destination for a Seamless 
            Shopping Experience!At Div Shopify, we redefine the way you shop online, offering
             a curated selection of premium products coupled with a user-friendly interface 
             designed to make your shopping journey effortless and enjoyable. 
             Whether you're searching for the latest fashion trends, 
             or unique lifestyle essentials, we've got you covered.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">Why Choose Div Shopify?</h1>
          </span>
          <hr>
          <p><br><b>1.Curated Collections:</b></br> Discover handpicked products from top brands and emerging designers, ensuring a selection that reflects the latest trends and timeless classics.

          <br><b>2.User-Friendly Interface:</b></br> Our website is intuitively designed for a hassle-free browsing and shopping experience. Easily navigate through categories, filter options, and find exactly what you're looking for.

<br><b>3.Fast and Reliable Delivery:</b></br> We understand the excitement of receiving your purchases promptly. Our streamlined logistics ensure that your orders are processed quickly and delivered to your doorstep with care.

<br><b>4.Exceptional Customer Support:</b></br> Our dedicated customer support team is ready to assist you with any queries or concerns.

<br><b>5.Exclusive Deals and Discounts:</b></br> Enjoy special promotions, exclusive deals, and seasonal discounts that make your shopping experience even more rewarding.

<br><b>Div Shopify</b> is not just a marketplace; it's an online destination where style, technology, and convenience converge. Happy Shopping!</br>
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
