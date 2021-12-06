<?php
	include 'inc/header.php';
	include 'inc/slider.php';
?>
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Feature Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <?php
	      		$product_feathered = $product->getproduct_feathered();
	      		if($product_feathered){
	      			while($result = $product_feathered->fetch_assoc()){
	      	?>
                <div class="col-md-3" style="align-content:space-between;">
                    <a href="details.php?proid=<?php echo $result['productId'] ?>" class="d-block">
                        <img src="admin/uploads/<?php echo $result['image'] ?>" class="img-fluid"
                            alt="<?php echo $result['productName'] ?>" />
                    </a>

                    <h3 class="product-name"><?php echo $result['productName'] ?></h3>
                    <div class="mt-1 text-center">
                        <p>
                            <span class="price-feathered"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?>
                            </span>
                        </p>
                        <div class="mt-1">
                            <span>
                                <a href="details.php?proId=<?php echo $result['productId'] ?>"
                                    class="details">Details</a>
                            </span>
                        </div>
                    </div>
                </div>
                <?php
				}
			}
				?>
            </div>
        </div>
        <div class="content_bottom">
            <div class="heading">
                <h3>New Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <?php
	      		$product_new = $product->getproduct_new();
	      		if($product_new){
	      			while($result = $product_new->fetch_assoc()){
	      	?>
                <div class="col-md-3" style="align-content:space-between;">
                    <a href="details.php?proId=<?php echo $result['productId'] ?>" class="d-block">
                        <img src="admin/uploads/<?php echo $result['image'] ?>" class="img-fluid"
                            alt="<?php echo $result['productName'] ?>" />
                    </a>

                    <h3 class="product-name"><?php echo $result['productName'] ?></h3>
                    <div class="mt-1 text-center">
                        <p>
                            <span class="price-feathered"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?>
                            </span>
                        </p>
                        <div class="mt-1">
                            <span>
                                <a href="details.php?proId=<?php echo $result['productId'] ?>"
                                    class="details">Details</a>
                            </span>
                        </div>
                    </div>
                </div>
                <?php
				}
			}
				?>
            </div>
        </div>
         <!-- <style type="text/css">
				a.phantrang {
				    border: 1px solid #ddd;
				    padding: 10px;
				    background: #414045;
				    color: #fff;
				    cursor: pointer;
				   
				}
				a.phantrang:hover {
				    background: blue;
				}
			</style> -->
			<!-- <div class="container">
				<?php
				if(isset($_GET['trang'])){
					$trang = $_GET['trang'];
				}else{
					$trang = 1;
				}
				$product_all = $product->get_all_product(); 
				$product_count = mysqli_num_rows($product_all);
				$product_button = ceil($product_count/4);
				$i = 1;
				echo '<p>Trang : </p>';
				for($i=1;$i<=$product_button;$i++){
					?>
					<a class="phantrang" <?php if($i==$trang){ echo 'style="background:orange"';} ?> style="margin:0 10px;" href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>	
					<?php
					
				}
				?>
			</div> -->
    </div>
</div>
<?php
	include 'inc/footer.php';
?>