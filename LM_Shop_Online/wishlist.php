<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>
<?php
	 if(isset($_GET['proId'])){
	 	$customer_id = Session::get('customer_id');
         $proid = $_GET['proId']; 
         $delwlist = $product->del_wlist($proid,$customer_id);
     }
?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Wishlist</h2>
			    	
						<table class="tblone">
							<tr>
								<th width="10%">ID Compare</th>
								<th width="20%">Product Name</th>
								<th width="20%">Image</th>
								<th width="15%">Price</th>
								<th width="15%">Action</th>
	
							</tr>
							<?php
							$customer_id = Session::get('customer_id');
							$get_wishlist = $product->get_wishlist($customer_id);
							if($get_wishlist){
								$i = 0;
								while($result = $get_wishlist->fetch_assoc()){
									$i++;
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?>" alt=""/></td>
								<td><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></td>

								<td>
									<a  href="?proId=<?php echo $result['productId'] ?>">Remove</a> ||
									<a  href="details.php?proId=<?php echo $result['productId'] ?>">Buy Now</a>
								</td>
							</tr>
						<?php
							
							}
						}
						?>
							
						</table>
						
						
					
					
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>