<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="./images/favicon.png" type="image/gif" sizes="16x16"> 
<title>Razen Electronics-Online Electronics Store</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Custom style -->
<link href="css/index.css" rel="stylesheet">

</head>
</head>
<body>

<!--=========== Header code start here =============-->
<?php
    include ('indexheader.php');
?>
<!--=========== Header code start here =============-->


<div class="container" style="margin-top: 100px;">  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider1.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider2.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider3.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider4.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider5.jpg" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container-fluid" style="margin-top: 5%;">
  <div class="row">
    <div class="col-md-3">
    <a href="#">
      <div class="card" >
        <img src="images/thumb1.jpg" class="card-img-top" alt="...">
        <div class="overlay" style="background-image: linear-gradient(to right, #2c2c54, #5f1782); box-shadow: 0 10px 6px -6px #e8dede;">
          <div class="text-description">
            <h6 class="navbarcustom">Top Mobiles</h6><hr class="hrdeals"><br/><h6 class="navbarcustom">Fastest Delivery Guaranteed<br/><span> EXPLORE</span></h6>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3">
    <a href="#">
      <div class="card">
        <img src="images/thumb2.jpg" class="card-img-top" alt="...">
        <div class="overlay" style="background-image: linear-gradient(to right, #2c2c54, #5f1782); box-shadow: 0 10px 6px -6px #e8dede;">
          <div class="text-description">
            <h6 class="navbarcustom">Upcoming Mobiles</h6><hr class="hrdeals"><br/><h6 class="navbarcustom">Take a sneak peek<br/><span> EXPLORE</span></h6>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3">
    <a href="#">
      <div class="card">
        <img src="images/thumb3.jpg" class="card-img-top" alt="...">
        <div class="overlay" style="background-image: linear-gradient(to right, #2c2c54, #5f1782); box-shadow: 0 10px 6px -6px #e8dede;">
          <div class="text-description">
            <h6 class="navbarcustom">Tabs 10" and 8"</h6><hr class="hrdeals"><br/><h6 class="navbarcustom">Get Min of 40% discount on selected tabs<br/><span> EXPLORE</span></h6> 
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3">
    <a href="#">
      <div class="card">
        <img src="images/thumb4.jpg" class="card-img-top" alt="...">
        <div class="overlay" style="background-image: linear-gradient(to right, #2c2c54, #5f1782); box-shadow: 0 10px 6px -6px #e8dede;">
          <div class="text-description">
            <h6 class="navbarcustom">Top Laptops</h6><hr class="hrdeals"><br/><h6 class="navbarcustom">Get 3 years of extended warranty by Razen<br/><span> EXPLORE</span></h6>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div><!-- row -->
</div>

<div class="container" style="margin-top: 5%;">
    <div class="row">
        <div class="col-md-12">
            <div class="features-about">
                <h1>Features of <span class="navbarcustom">Razen Electronics</span></h1>
                <p>&#8226; Lorem ipsum&nbsp; &#8226; Lorem ipsum&nbsp; &#8226; Lorem ipsum&nbsp; &#8226; Lorem ipsum</p>
            </div>
        </div>
    </div>
</div>




<div class="container" style="margin-top: 5%;">
    <div class="col-md-12">
            <h2 class="navbarcustom" style="font-style: italic;">Latest Collection</h2>
        </div><br/>
    <!-- Product list -->
    <div class="row">

        <?php 
        // Get products from database 
        $result = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="./uploads/ <?php echo $row["image"]; ?> ">
                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo '$'.$row["price"].' USD'; ?></h6>
                    <p class="card-text"><?php echo $row["description"]; ?></p>
                    <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-outline-primary">Buy Now</a>
                    <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary" style="float:right;"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>


<div class="container" style="margin-top: 8%;">
    <div class="row">
        <div class="col-md-4">
            <div class="company-about">
                <i class="fa fa-cube"></i>
                <p class="heading-title navbarcustom">Free Shipping Mathod</p>
                <span class="heading-title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ixpsacdolor.</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="company-about">
                <i class="fa fa-lock"></i>
                <p class="heading-title navbarcustom">Secure Payment System</p>
                <span class="heading-title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ixpsacdolor.</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="company-about">
                <i class="fa fa-random"></i>
                <p class="heading-title navbarcustom">Fast Delivery</p>
                <span class="heading-title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ixpsacdolor.</span>
            </div>
        </div>
    </div>
</div>

<!--=========== footer code start here =============-->
<?php
    include ('footer.php');
?>
<!--=========== footer code ends here =============-->
<br/><br/>
</body>
</html>