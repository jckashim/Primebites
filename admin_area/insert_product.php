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
            <div class="aa-header-top-left"> 
              <!-- start language -->
              
              <!-- / language --> 
              
              <!-- start currency -->
              
              <!-- / currency --> 
              <!-- start cellphone -->
              
              <!-- / cellphone --> 
            </div>
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
                <li><a href="products.php">MilkTea</a></li>
                <li><a href="account.php">My Account</a></li>
                <li class="hidden-xs"><a href="insert_product.php">Add Products</a></li>
                <li class="hidden-xs"><a href="history.php">Sales List</a></li>
                <li class="hidden-xs"><a href="orders.php">Orders List</a></li>
                <?php
          if(isset($_SESSION['user_email'])){
            echo "<li><a href='logout.php' >logout</a></li>" ;  
          }
          else{
            echo "<li><a href='' data-toggle='modal' data-target='#login-modal'>Login</a></li>";
 
          }
        ?>
            <li style="float:right"><a>
            <?php
        if(isset($_SESSION['user_email'])){
          echo "Welcome " . $_SESSION['user_email'];
        }
        else{
          echo "Welcome Admin";
        }
        
      ?>
      
               
      </a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 
<!-- insert_products section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
		<form method="post" action="insert_product.php" enctype="multipart/form-data">            
			<div class="row">
              <div class="col-md-8" style="margin-left: 20%">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress" align="center">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Fill form to Insert Product
                          </a>
                        </h4>
                      </div>
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="product_title" placeholder="Product Name*">                              
                              </div>                             
                            </div>
                         	</div>
                          <div class="row">
                          	<div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                 <select name="product_cat">
                	         <option>MilkTea</option>
                                </select>
                             </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select name="product_brand">
                					<option>Brand: PrimeBiteS</option>
                			         </select>
                              </div>                             
                            </div>                           
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              <input type="file" name="product_img1" placeholder="Image 1*"/>
                              </div>                             
                            </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text"  name="product_price" placeholder="Price*">
                              </div>                             
                            </div>
                          </div>
                            
						<input type="submit" name="insert_product" value="Insert"  class="aa-browse-btn"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </form>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

<?php
	
	if(isset($_POST['insert_product'])){
	
	//text data variables
		$product_title = $_POST['product_title'];
		$product_cat   = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$status = 'on';
		$product_keywords = $_POST['product_keywords'];
		
	//image names
		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];
		
	//image temp names
		$temp_img1 = $_FILES['product_img1']['tmp_name'];
		$temp_img2 = $_FILES['product_img2']['tmp_name'];
		$temp_img3 = $_FILES['product_img3']['tmp_name'];
	
	//uploading images to its folder
		move_uploaded_file($temp_img1,"product_images/$product_img1");
		move_uploaded_file($temp_img2,"product_images/$product_img2");
		move_uploaded_file($temp_img3,"product_images/$product_img3");
	
	//insert query
		$insert_product = "insert into products (cat_id,brand_id,date,product_title, price, product_desc, status,product_img1,product_img2,product_img3) values ('$product_cat','$product_brand',NOW(),'$product_title','$product_price','$product_desc','$status','$product_img1','$product_img2','$product_img3') ";
	
		$run_product= mysqli_query($conn,$insert_product); 
		
		if($run_product){
			echo "<script>alert('Product Inserted successfully')</script>";
		}
		
	}

?>

<!-- footer -->

<!-- / footer --> 

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
			
				$sel_c = "select * from customers where user_email='$c_email' AND user_pass='$c_pass'";
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
				
				$_SESSION['user_email']=$c_email;
				echo "<script>alert('Login Successful !')</script>";
				}
				
				if($check_customer>0 AND $check_cart==0){
					echo "<script>window.open('customer/myaccount.php','_self')</script>";
					
				}
				else{
					echo "<script>window.open('insert_product.php','_self')</script>";
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