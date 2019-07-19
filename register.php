<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Nikhoj shongbad</title>
	
	<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
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
          <div class="logo"> <a href="index.html"><img src="nikhoj shongbad-01.png" alt="nikhoj shongbad" height="145"></a> </div>
       
        <nav class="amado-nav">
            <ul>
              <li class="active"><a href="index.html">Lost</a></li>
              <li><a href="shop.html">Found</a></li>
            </ul>
          </nav>
          <!-- Button Group --><!-- Cart Menu -->
        <div class="cart-fav-search mb-100"> <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a> </div>
          <!-- Social Button -->
         
        </header>
        <!-- Header Area End -->

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

<form class="form-horizontal" method="post" action="register.php">
  <?php include('errors.php'); ?>
<fieldset>

<!-- Form Name -->
<legend>Sign Up!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">User Name:</label>  
  <div class="col-md-5">
  <input type="text" class="form-control input-md" name="username" value="<?php echo $username; ?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail:</label>  
  <div class="col-md-5">
 <input type="email"  class="form-control input-md"  name="email" value="<?php echo $email; ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password:</label>  
  <div class="col-md-5">
  <input type="password"  class="form-control input-md" name="password_1">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Confirm Password:</label>  
  <div class="col-md-5">
   <input type="password"  class="form-control input-md" name="password_2">
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button  type="submit" name="reg_user" class="btn btn-success">Register</button>
  </div>
</div>
<p>
      Already a member? <a href="login.php">Sign in</a>
    </p>

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

</html>