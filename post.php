<?php include('server.php') ?>
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
<meta name="viewport" content="idth=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                <a href="index.html"><img src="nikhoj shongbad-01.png" alt=""></a>
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
          <div class="logo"> <a href="index.html"><img src="nikhoj shongbad-01.png" alt="nikhoj shongbad" height="84"></a> </div>
       
        <nav class="amado-nav">
            <ul>
              <li class="active"><a href="index.html">Lost</a></li>
              <li><a href="shop.html">Found</a></li>
            </ul>
          </nav>
          <!-- Button Group --><!-- Cart Menu -->
        <div class="cart-fav-search mb-100"> <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a> </div>
          <!-- Social Button -->
          <div class="social-info d-flex justify-content-between"> <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
        </header>
        <!-- Header Area End -->

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

<form class="form-horizontal" method="post" action="post.php" enctype="multipart/form-data">
  <?php include('errors.php'); ?>
  <fieldset>

<!-- Form Name -->
<legend class="text-center"> Post your item!</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Title:</label>  
  <div class="col-md-5">
  <input type="text" class="form-control input-md" name="title" >
    <span class="help-block">Give an appropriate title for your belongings! </span>  
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Description:</label>  
  <div class="col-md-5">
  <input type="text" class="form-control input-md" name="description" >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Special Sign:</label>  
  <div class="col-md-5">
  <input type="text" class="form-control input-md" name="sign" >
     <span class="help-block">Anything identical things to pointing it easily!</span>  
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address:</label>  
  <div class="col-md-5">
  <input type="text" class="form-control input-md" name="address" >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Contact Number:</label>  
  <div class="col-md-5">
  <input type="text" class="form-control input-md" name="number" >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Image:</label>  
  <div class="col-md-5">
  <input type="file"  class="form-control input-md" name="image" >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Status:</label>  
  <div class="col-md-5">
  <input type="text" class="form-control input-md" name="status" >
    
  </div>
</div>
<!-- Text input-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="post_user" class="btn btn-success">Post Your Ad!</button>
  </div>
</div>

</fieldset>
</form>
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
<script>

</html>
