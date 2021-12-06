<?php
    include 'lib/session.php';
    ob_start();
    Session::init();
?>
<?php
	
	include 'lib/database.php';
	include 'helpers/format.php';

	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
		

	$db = new Database();
	$fm = new Format();
	$ct = new cart();
	$us = new user();
	$br = new brand();
	$cat = new category();
	$cs = new customer();
	$product = new product();
		
	      	 	
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE HTML>
<head>
    <title>Thế giới công nghệ</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquerymain.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/nav-hover.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script type="text/javascript">
    $(document).ready(function($) {
        $('#dc_mega-menu-orange').dcMegaMenu({
            rowItems: '4',
            speed: 'fast',
            effect: 'fade'
        });
    });
    </script>
</head>

<body>
    <div class="wrap">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="index.php"><img src="images/iT1.png" alt="" style="width:150px;height:140px;"  class="img-fluid rounded-circle"/></a>
                    </div>
                    <div class="col-md-9">
                        <div class="row mt-4">
                            <div class="col-md-6">
                                    <form action="search.php" method="POST" class="d-flex">
                                        <input name="tukhoa" type="text" placeholder="Search for Products" class="form-control mr-1" style="font-size:16px;"/>
                                        <button type="submit" name="search_product" class="btn btn-info" style="font-size:16px;">SEARCH</button>
                                    </form>
                                    <!-- <form action="search.php" method="post">
                                        <input type="text" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                                        <input type="submit" name="search_product" value="Tìm kiếm"> 
                                    </form> -->
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                            <img src="images/header_cart.png" class="img-fluid mr-1"/>
                            <a href="cart.php" title="View my shopping cart" rel="nofollow" class="d-block mt-1">
                                    <span style="font-size:14px;color:red;">
                                        <?php
                                        $check_cart = $ct->check_cart();
                                            if($check_cart){
                                                $sum = Session::get("sum");
                                                $qty = Session::get("qty");
                                                echo '('.$qty.')'.$fm->format_currency($sum).' '.'đ' ;
                                                }else{
                                                echo 'Empty';
                                            }
                                        ?>
                                    </span>
                                </a>
                            </div>
                            <?php 
                                if(isset($_GET['customer_id'])){
                                    $customer_id = $_GET['customer_id'];
                                    $delCart = $ct->del_all_data_cart();
                                    $delCompare = $ct->del_compare($customer_id);
                                    Session::destroy();
                                }
                            ?>
                            <div class="col-md-2">
                                 <?php
                                        $login_check = Session::get('customer_login'); 
                                        if($login_check==false){
                                            echo '<a href="login.php" class="login-user d-block text-uppercase btn btn-danger" style="font-size:14px;">Login</a>';
                                        }else{
                                         echo '<a href="?customer_id='.Session::get('customer_id').'" class="login-user d-block text-uppercase btn btn-danger" style="font-size:14px;">Đăng xuất</a>';
                                        // echo '<a href="?customer_id='.Session::get('customer_id').'">Đăng xuất</a></div>';
                                        }
                                    ?>
                               
                            </div>
                        </div>
                        </div> 
                    </div>
                </div>
            </div>
           
            
        <div class="menu" style=" position: -webkit-sticky; position: sticky;top: 0;z-index:100;width:100%">
            <ul id="dc_mega-menu-orange" class="dc_mm-orange">
                <li><a href="index.php">Home</a></li>
                <?php
                    $login_check = Session::get('customer_login');

                    if($login_check==false){
                        echo '';
                    }else{
                        echo '<li><a href="profile.php">Profile</a></li>';
                    }
                    ?>
                <?php
                    $login_check = Session::get('customer_login');
                    
                    if($login_check==false){
                        echo '';
                    }else{
                        echo '<li><a href="orderdetails.php">Ordered</a></li>';
                    }
                    ?>
                    <?php
                
                        $login_check = Session::get('customer_login'); 
                        if($login_check){
                            echo '<li><a href="compare.php">Compare</a> </li>';
                        }
                            
                    ?>
                    <?php
                
                        $login_check = Session::get('customer_login'); 
                        if($login_check){
                            echo '<li><a href="wishlist.php">Hobbies</a></li>';
                        }
                    ?>
                <li><a href="contact.php">Contact</a> </li>
                <div class="clear"></div>
            </ul>
        </div>