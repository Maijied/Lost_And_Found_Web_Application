<?php 

 include('server.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Nikhoj shongbad</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Favicon  -->
    <link rel="icon" href="nikhoj shongbad-01.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
   
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
      <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="home.php"><img src="nikhoj shongbad-01.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
      <header class="header-area clearfix">
          <!-- Close Icon -->
          <div class="nav-close"> <i class="fa fa-close" aria-hidden="true"></i> </div>
          <!-- Logo -->
          <div class="logo"> <a href="home.php"><img src="nikhoj shongbad-01.png" alt="nikhoj shongbad" height="84"></a> </div>
       
        <nav class="amado-nav">
            <ul>
              <li ><a href="index.html">Lost</a></li>
              <li><a href="shop.html">Found</a></li>
              <?php  if (isset($_SESSION['username'])) : ?>
              <li><a href="#">Hello <?php echo $_SESSION['username']; ?></a></li>
               <?php endif ?>
              
            </ul>
          </nav>
          <!-- Button Group -->
          <div class="amado-btn-group mt-30 mb-100"> <a href="index.php?logout='1'" class="btn amado-btn mb-15">Log out</a> <a href="post.php" class="btn amado-btn success">Post Your Ad!</a> </div>
          <!-- Cart Menu -->
          <div class="cart-fav-search mb-100"> <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a> </div>
          <!-- Social Button -->
          <div class="social-info d-flex justify-content-between"> <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
        </header>
        <!-- Header Area End -->

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products --
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex right-align">
                                <div class="sort-by-date d-flex align-items-center mr-15">
						
                                </div>
                                <div class="view-product d-flex align-items-center">
                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                   if ($re->num_rows > 0) {
    // output data of each row
    while($row = $re->fetch_assoc()) {?>
      
  
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="image/<?php echo $row["image"] ?>" alt="">
                                <!-- Hover Thumb -->
                               
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
									<a href="#" class="btn btn-primary btn-success"><?php echo $row["status"] ?></a>
									<br>
                                    <div class="line"></div>
                                    <p class="#">Title :<?php echo $row["title"] ?></p>
                                    <a href="#">
                                        <h6>Description :<?php echo $row["description"] ?></h6>
                                    </a>
                                     <p class="#">Sign : <?php echo $row["sign"] ?></p>
                                      <p class="#">Address : <?php echo $row["address"] ?></p>
                                       <p class="#">Contact : <?php echo $row["number"] ?></p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
  <?php }
} else {
    echo "0 results";
}
                    ?>
                    <!-- Single Product Area -->
                   

                 
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
								<li class="page-item"><a class="page-link" href="#">>></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
          </div>
      </div>
    </div>
   
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>