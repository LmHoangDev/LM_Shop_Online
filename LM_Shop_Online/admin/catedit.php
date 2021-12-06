<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php require '../classes/category.php' ?>
<?php
    if(!isset($_GET['catId']) || $_GET['catId']==NULL){
         echo "<script>window.location ='catlist.php'</script>";
    }
    else{
        $id = $_GET['catId'];
    }
    $cat = new category();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $catName = $_POST['catName'];
       
        $catUpdate = $cat->update_category($catName,$id);
        
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Sửa danh mục</h2>
        <div class="block copyblock">
           <?php
                if (isset($catUpdate)) {
                    # code..
                    echo $catUpdate;
                }
           ?>
           <?php
                    $get_cate_name = $cat->getcatbyId($id);
                    if($get_cate_name){
                        while($result = $get_cate_name->fetch_assoc()){
                       
                ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['catName'] ?>" name="catName" placeholder="Sửa danh mục sản phẩm..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" class="btn" name="submit" Value="Cập nhật" />
                            </td>
                            <td>
                        <a href="?catlist.php" class="btn btn-red" style="display:inline-block;">Quay lại</a>
                    </td>
                        </tr>
                    </table>
                </form>

                <?php
                }
            }
                ?>
        </div>
    </div>
</div>
<?php require 'inc/footer.php';?>