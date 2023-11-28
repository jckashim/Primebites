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
              <a href="index.html">
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

      <!--Dashboard-->
      <div>
        <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="" method="post" enctype="multipart/form-data">
               <div class="table-responsive">
                <h1 align="center">Sales Report</h1>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Date</th>
                        <th>Contact</th>
                        <th>Total</th>
                      </tr>
                      <tr>
                        <th>1</th>
                        <th>Justin Carl</th>
                        <th>Kashim</th>
                        <th>11/12/13</th>
                        <th>+639-6786-673</th>
                        <th>100.00</th>
                      </tr>
                      <tr>
                        <th>2</th>
                        <th>Johnpaul</th>
                        <th>Bancayrin</th>
                        <th>21/22/23</th>
                        <th>+639-6786-673</th>
                        <th>999.00</th>
                      </tr>
                      <tr>
                        <th>3</th>
                        <th>Dhen Dhen</th>
                        <th>Pogi</th>
                        <th>31/32/33</th>
                        <th>+639-6786-673</th>
                        <th>6969.00</th>
                      </tr>
                    </thead>
                  </table>
                
             </form>
             
             </div>
             <!-- Cart Total view -->
             
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
      </div>
      <!--/Dashboard-->

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