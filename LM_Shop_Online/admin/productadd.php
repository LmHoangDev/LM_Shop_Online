<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php'; ?>
<?php
    $pd = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertProduct = $pd->insert_product($_POST,$_FILES);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm sản phẩm</h2>
        <div class="block">
            <?php 
                if(isset($insertProduct)){
                    echo $insertProduct;
                }
            ?>  
         <form action="productadd.php" method="post" enctype="multipart/form-data" style="font-size:16px;">
                <div class="form-group row">
                    <label for="productName" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input type="text" id="productName" name="productName" placeholder="Enter Product Name..." class="medium form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select_cat" class="col-md-2 col-form-label">Category</label>
                    <div class="col-md-10">
                        <select id="select_cat" name="category" class="form-control input-sm">
                            <option>--------Select Category--------</option>
                            <?php
                            $cat = new category();
                            $catlist = $cat->show_category();

                            if($catlist){
                                while($result = $catlist->fetch_assoc()){
                            ?>

                            <option value="<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>

                            <?php
                                }
                            }
                        ?>
                        </select>
                    </div>
                   
                </div>
                <div class="form-group row">
                    <label for="select_brand" class="col-md-2 col-form-label">Brand</label>
                    <div class="col-md-10">
                       <select id="select_brand" name="brand" class="form-control">
                            <option>--------Select Brand-------</option>
                            <?php
                            $brand = new brand();
                            $brandlist = $brand->show_brand();

                            if($brandlist){
                                while($result = $brandlist->fetch_assoc()){
                             ?>

                            <option value="<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>

                               <?php
                                  }
                              }
                           ?>
                        </select>
                    </div>
                   
                </div>
                <div class="form-group row">
                 <label for="pro_decs" class="col-md-2 col-form-label">Description</label>
                  <div class="col-md-10">
                      <textarea name="product_desc" id="pro_decs" class="tinymce form-control"></textarea>
                  </div>
                  
                </div>
                <div class="form-group row">
                    <label for="price" class="col-md-2 col-form-label">Price</label>
                    <div class="col-md-10">
                    <input type="text" id="price" name="price" placeholder="Enter Price..." class="medium form-control" />
                    </div>
                </div>
                <div class="form-group row">
                 <label for="image_pro" class="col-md-2 col-form-label">Upload Image</label>
                 <div class="col-md-10">
                    <input type="file" name="image" id="image_pro" class="form-control"/>
                 </div>
                 
                </div>
                <div class="form-group row">
                 <label for="pro_type" class="col-md-2 col-form-label">Product Type</label>
                 <div class="col-md-10">
                    <select id="pro_type" name="type" class="form-control">
                            <option>Select Type</option>
                            <option value="0">Featured</option>
                            <option value="1">Non-Featured</option>
                  </select>         
                 </div>
                </div>
                 <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-blue">Thêm mới</button>
                </div>

        </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php require 'inc/footer.php';?>


