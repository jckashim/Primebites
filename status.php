<?php

session_start();
include("includes/db.php");
include("funcs/funcs.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ITELEC03</title>

<!-- Font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- SmartMenus jQuery Bootstrap Addon CSS -->
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- Product view slider -->
<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="css/slick.css">
<!-- price picker slider -->
<link rel="stylesheet" type="text/css" href="css/nouislider.css">
<!-- Theme color -->
<link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

<!-- Main style sheet -->
<link href="css/style.css" rel="stylesheet">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- wpf loader Two -->
<div id="wpf-loader-two">
  <div class="wpf-loader-two-inner"> <span>Loading</span> </div>
</div>
<!-- / wpf loader Two --> 
<!-- SCROLL TOP BUTTON --> 
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a> 
<!-- END SCROLL TOP BUTTON --> 

<!-- Start header section -->
<header id="aa-header"> 
  <!-- start header top  -->
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area"> 
            <!-- start header top left -->
            
            <!-- / header top left -->
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header top  --> 
  
  <!-- start header bottom  -->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area"> 
            <!-- logo  -->
            <div class="aa-logo"> 
              <!-- Text based logo --> 
              <a href="index.php">
              <p>Prime<strong>BiteS</strong></p>
              </a> 
              <!-- img based logo --> 
              <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> --> 
            </div>
            <!-- / logo  --> 
            

            
             <!-- cart box -->
            <div class="aa-cartbox"> <a class="aa-cart-link" href="cart.php"> <span class="fa fa-shopping-basket"></span> <span class="aa-cart-title">SHOPPING CART</span> <span class="aa-cart-notify"><?php total_items(); ?></span> </a>
              
            </div>
            <!-- / cart box --> 
          
 <!-- search box -->
            
            <!-- / search box --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header bottom  --> 
</header>
<!-- / header section --> 
<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area"> 
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse"> 
          <!-- Left nav -->
          
          <?php getIp(); ?>
          <?php cart(); ?>
          <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="order.php">MilkTeas</a></li>
                <li><a href="account.php">My Account</a></li>
                <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                <li class="hidden-xs"><a href="checkout.php">Checkout</a></li>
                <li class="hidden-xs"><a href="status.php">Status</a></li>
                
                <?php
          if(isset($_SESSION['customer_email'])){
            echo "<li><a href='logout.php' >Logout</a></li>" ;  
          }
          else{
            echo "<li><a href='' data-toggle='modal' data-target='#login-modal'>Login</a></li>";
 
          }
        ?>
              
            
            <li style="float:right"><a>
            <?php
				if(isset($_SESSION['customer_email'])){
					echo "Welcome " . $_SESSION['customer_email'];
				}
				else{
					echo "Welcome Customer";
				}
				
			?></a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 

<!-- Start slider -->
<section id="aa-slider">
  <div class="aa-slider-area">
    <div id="sequence" class="seq">
      <ul class="seq-canvas">
        <!-- single slide item -->
        
        
      </ul>
      <!-- slider navigation btn --> 
      <!--
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
--> 
    </div>
  </div>
</section>
<!-- / slider --> 
<!-- Products section -->
<section id="aa-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-product-area">
            <div class="aa-product-inner"> 
              <!-- start prduct navigation -->
              <ul class="nav nav-tabs aa-products-tab">
             
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content"> 
                <!-- Start men product category -->
                <div class="tab-pane fade in active" id="men">
                  
                  
                  <ul class="aa-product-catg">
                    <!-- start single product item -->
                   <img src="img/status.png">
                    </div>
             
                <!-- / men product category --> 
                </div>
              </div>
              
              <!-- quick view modal -->
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  		<!------------------->
                  		<!------------------->
                        <!-- From modal.php-->
                        <!------------------->
                        <!------------------->
                  </div>
                  <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
              </div>
              <!-- / quick view modal --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Login or Register</h4>
        <form class="aa-login-form" action="" method="post">
          <label for="">Username or Email address<span>*</span></label>
          <input type="text" name="email" placeholder="Username or email" required>
          <label for="">Password<span>*</span></label>
          <input type="password" name="pass" placeholder="Password" required>
          <button class="aa-browse-btn" name="login" type="submit">Login</button>
          <label for="rememberme" class="rememberme">
            <input type="checkbox" id="rememberme">
            Remember me </label>
          <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
          <div class="aa-register-now"> Don't have an account?<a href="register.php">Register now!</a> </div>
        </form>
        <?php
		
			if(isset($_POST['login'])){
				
				$c_email=$_POST['email'];
				$c_pass=$_POST['pass'];
			
				$sel_c = "select * from customers where customer_email='$c_email' AND customer_pass='$c_pass'";
				$run_c = mysqli_query($conn,$sel_c);
				
				$check_customer = mysqli_num_rows($run_c);
				
				if($check_customer==0){
					echo"<script>alert('Password or Email is incorrect! plz try again')</script>";
					

				}
				else{
				$ip=getIp();
				$sel_cart ="select * from cart where ip_add='$ip'";
				$run_cart = mysqli_query($conn,$sel_cart);
				
				$check_cart = mysqli_num_rows($run_cart);
				
				$_SESSION['customer_email']=$c_email;
				echo "<script>alert('Login Successful !')</script>";
				}
				
				if($check_customer>0 AND $check_cart==0){
					echo "<script>window.open('customer/myaccount.php','_self')</script>";
					
				}
				else{
					echo "<script>window.open('index.php','_self')</script>";
				}
				
			}
		?>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>

<!-- jQuery library --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<!-- SmartMenus jQuery plugin --> 
<script type="text/javascript" src="js/jquery.smartmenus.js"></script> 
<!-- SmartMenus jQuery Bootstrap Addon --> 
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script> 
<!-- Product view slider --> 
<script type="text/javascript" src="js/jquery.simpleGallery.js"></script> 
<script type="text/javascript" src="js/jquery.simpleLens.js"></script> 
<!-- slick slider --> 
<script type="text/javascript" src="js/slick.js"></script> 
<!-- Price picker slider --> 
<script type="text/javascript" src="js/nouislider.js"></script> 

<!-- Custom js --> 
<script src="js/custom.js"></script>
</body>
</html>