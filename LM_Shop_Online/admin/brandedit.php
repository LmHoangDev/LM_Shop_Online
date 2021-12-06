<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php require '../classes/brand.php' ?>
<?php
    if(!isset($_GET['brandId']) || $_GET['brandId']==NULL){
         echo "<script>window.lobrandion ='brandlist.php'</script>";
    }else{
        $id = $_GET['brandId'];
        
    }$brand = new brand();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $brandName = $_POST['brandName'];
            $brandUpdate = $brand->update_brand($brandName,$id);
        }
   
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Sửa thương hiệu</h2>
        <div class="block copyblock">
           <?php
                if (isset($brandUpdate)) {
                    # code..
                    echo $brandUpdate;
                }
           ?>
           <?php
                $get_brande_name = $brand->getbrandbyId($id);
                    if($get_brande_name){
                        while($result = $get_brande_name->fetch_assoc()){
                       
                        ?>
                        <form action="" method="post">
                            <table class="form">					
                                <tr>
                                    <td>
                                        <input type="text" value="<?php echo $result['brandName'] ?>" name="brandName" placeholder="Sửa thương hiệu sản phẩm..." class="medium" />
                                    </td>
                                </tr>
                                <tr> 
                                    <td>
                                        <input type="submit" class="btn" name="submit" Value="Cập nhật" />
                                    </td>
                                </tr>
                            </table>
                        </form>

                        <?php
                        }
                }
                 
                ?>
                <!-- <a href="?brandlist.php" class="btn btn-red" style="display:inline-block;">Quay lại</a> -->
        </div>
    </div>
</div>
<?php require 'inc/footer.php';?>