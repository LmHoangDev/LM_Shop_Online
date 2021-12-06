<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>

<?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['creat-account'])) {
        
        $insertCustomers = $cs->insert_customers($_POST);
        
    }
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_Customers = $cs->login_customers($_POST);
        
    }
?>
<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            <?php
			if(isset($login_Customers)){
    			echo $login_Customers;
    		}
        	?>
            <form action="" method="post">
                <input type="text" name="email" class="field" placeholder="Enter Email....">
                <input type="password" name="password" class="field" placeholder="Enter Password....">

                <p class="note">If you forgot your password just enter your email and click
                    <a href="#">here</a>
                </p>
                <div class="buttons">
                    <div><input type="submit" name="login" class="grey" value="Sign In"></div>
                </div>
            </form>
        </div>
        <?php

         ?>
        <div class="register_account container" style="min-width:820px;">
            <h3>Đăng ký thành viên</h3>
            <?php
    		if(isset($insertCustomers)){
    			echo $insertCustomers;
    		}
    		?>
            <form action="" method="POST">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <input type="text" name="name" value="" placeholder="Enter Name...">
                                    </div>

                                    <div>
                                        <input type="text" name="city" value="" placeholder="Enter City...">
                                    </div>

                                    <div>
                                        <input type="text" name="zipcode" value="" placeholder="Enter Zipcode...">
                                    </div>
                                    <div>
                                        <input type="text" name="email" value="" placeholder="Enter Email...">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <input type="text" name="address" value="" placeholder="Enter Address...">
                                    </div>
                                    <div>
                                        <select id="country" name="country" style="padding:10px;width:100%;">
                                            <option value="null">Select a Country</option>

                                            <option value="hcm">TPHCM</option>
                                            <option value="na">Nghệ An</option>
                                            <option value="hn">Hà Nội</option>
                                            <option value="dn">Đà Nẳng</option>
                                        </select>
                                    </div>

                                    <div>
                                        <input type="text" name="phone" value="" placeholder="Enter Phone...">
                                    </div>
                                    <div>
                                        <input type="text" name="password" value="" placeholder="Enter Password...">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="search">
                    <div>
                        <button type="submit" name="creat-account" style="font-size:16px; padding:5px 10px;"
                            class="btn btn-danger d-inline-block">Đăng ký</button>
                    </div>
                </div>
                <!-- <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p> -->
                <div class="clear">

                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php 
	include 'inc/footer.php';
	
 ?>