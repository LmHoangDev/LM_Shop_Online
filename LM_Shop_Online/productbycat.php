<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>
<?php
	if(!isset($_GET['catid']) || $_GET['catid']==NULL){
       echo "<script>window.location ='404.php'</script>";
    }else{
        $id = $_GET['catid']; 
    }
    
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //     $catName = $_POST['catName'];
    //     $updateCat = $cat->update_category($catName,$id);
        
    // }
?>
 <div class="main">
    <div class="content">
    	<?php
	     	 $name_cat = $cat->get_name_by_cat($id);
	      	 if($name_cat){
	      	 	while($result_name = $name_cat->fetch_assoc()){
	      	?>
    	<div class="content_top">
    		<div class="heading">	
    		<h3>Danh mục : <?php echo $result_name['catName'] ?></h3>
    		</div>
    		
    		<div class="clear"></div>
    	</div>
    	<?php
			}}
			?>
	      <div class="section group">
              <div class="container">
                  <div class="row">
                        <?php
                            $productbycat = $cat->get_product_by_cat($id);
                            if($productbycat){
                                while($result = $productbycat->fetch_assoc()){
                            ?>
                                <div class="col-md-3" style="min-height:400px;text-align:center;">
                                    <a href="details.php?proid=<?php echo $result['productId'] ?>" class="d-block">
                                        <img src="admin/uploads/<?php echo $result['image'] ?>" class="img-fluid" alt="" />
                                    </a>
                                    <h3 class="mt-3"><?php echo $result['productName'] ?></h3>
                                    <div class="d-flex mt-3 justify-content-around align-items-center">
                                        <p style="font-size:14px;color:red;">
                                            <?php echo $fm->format_currency($result['price'])." "."VNĐ" ?>
                                        </p>                                           
                                        <a href="details.php?proid=<?php echo $result['productId'] ?>" class="btn btn-primary d-inline-block" style="font-size:14px;">Details</a>
                                         
                                    </div>
                                   
                                </div>
                            <?php
                            }
                            }else{
                                ?>
                                <div style="min-height:400px;color:red;text-transform:uppercase;">
                                    <?php echo "Category Empty !!"; ?>
                                </div>
                                <?php
                                }
                            ?>
                </div>
              </div>
         
			</div>

	
	
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>
