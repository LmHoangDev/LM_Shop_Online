<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php'; ?>
<?php include_once '../helpers/format.php'; ?>
<?php
   $pd = new Product();
   $product_list = $pd->show_product();
   $fm= new Format();
   if(isset($_GET['productid'])){
        $id = $_GET['productid']; 
        $delpro = $pd->del_product($id);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách sản phẩm</h2>
        <div class="block">
			<?php 
				if (isset($delpro)) {
					# code...
					echo $delpro;
				}
			?>
			<div class="table-responsive">
            <table class="data display datatable table" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Image</th>
					<th>Category</th>
					<th>Brand</th>
					<!-- <th>Description</th> -->
					<th>Type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if($product_list){
					$i = 0;
					while($result = $product_list->fetch_assoc()){
						$i++;
				?>
				<tr class="odd gradeX">
					<td><?php echo $i ?></td>
					<td><?php
					 if(strlen($result['productName']) > 20){
						 echo $fm->textShorten($result['productName'],20);
					 }else{
						echo $result['productName'];
					 }?>
					</td>
					<td><?php echo $result['price'] ?></td>
					<td><img src="uploads/<?php echo $result['image'] ?>" width="50" height="50"></td>
					<td><?php echo $result['catName'] ?></td>
					<td><?php echo $result['brandName'] ?></td>
					<!-- <td><?php 
						if($result['product_desc'] != NULL ){
							echo $fm->textShorten(htmlentities($result['product_desc']),20);
						}
					 ?></td> -->
					<td><?php 
						if($result['type']==0){
							echo 'Nổi bật';
						}else{
							echo 'Không nổi bật';
						}

					?></td>
					<td><a href="productedit.php?productid=<?php echo $result['productId'] ?>">Edit</a> || <a href="?productid=<?php echo $result['productId'] ?>" onclick = "return confirm('Are you want to delete?')">Delete</a></td>
				</tr>
				<?php
					}
				}
				?>
				
			</tbody>
		</table>
			</div>
       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php require 'inc/footer.php';?>
