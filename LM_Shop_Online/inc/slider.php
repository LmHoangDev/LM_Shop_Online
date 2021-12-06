<style>
p.pro-na{
    -webkit-line-clamp:2;
   -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    word-break: break-word;
    max-height:50px;
}
</style>

<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
				$getLastestDell = $product->getLastestDell();
				if($getLastestDell){
					while($resultdell = $getLastestDell->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="admin/uploads/<?php echo $resultdell['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2><?php echo $resultdell['brandName'] ?></h2>
						<p class="pro-na"><?php echo $resultdell['productName'] ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $resultdell['productId']  ?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php
			}}
			    ?>	
			    <?php
				$getLastestSS = $product->getLastestSamsung();
				if($getLastestSS){
					while($resultss = $getLastestSS->fetch_assoc()){
				 ?>	
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="preview.php"><img src="admin/uploads/<?php echo $resultss['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2><?php echo $resultss['brandName'] ?></h2>
						  <p class="pro-na"><?php echo $resultss['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proId=<?php echo $resultss['productId']  ?>">Add to cart</a></span></div>
					</div>
				</div>
				   <?php
			}}
			    ?>
			</div>
			<div class="section group">
				 <?php
				$getLastestOp = $product->getLastestOppo();
				if($getLastestOp){
					while($resultap = $getLastestOp->fetch_assoc()){
				 ?>	
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="admin/uploads/<?php echo $resultap['image'] ?>"  alt="" /> </a>
					</div>
				    <div class="text list_2_of_1">
						<h2><?php echo $resultap['brandName'] ?></h2>
						<p class="pro-na"><?php echo $resultap['productName'] ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $resultap['productId']  ?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			      <?php
			}}
			    ?>	
			     <?php
				$getLastestHw = $product->getLastestHuawei();
				if($getLastestHw){
					while($resulthw = $getLastestHw->fetch_assoc()){
				 ?>		
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="preview.php"><img src="admin/uploads/<?php echo $resulthw['image'] ?>"  alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2><?php echo $resulthw['brandName'] ?></h2>
						  <p class="pro-na"><?php echo $resulthw['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proId=<?php echo $resulthw['productId']  ?>">Add to cart</a></span></div>
					</div>
				</div>
				      <?php
			}}
			    ?>	
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php
						$get_slider = $product->show_slider();
						if($get_slider){
							while($result_slider = $get_slider->fetch_assoc()){

						 ?>
						<li><img src="admin/uploads/<?php echo $result_slider['slider_image'] ?>" alt="<?php echo $result_slider['sliderName'] ?>"/></li>
						<?php
							}
						}
						 ?>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
 </div>