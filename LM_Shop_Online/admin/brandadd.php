<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php require '../classes/brand.php' ?>
<?php
    $brand = new brand();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $brandName = $_POST['brandName'];
       
        $insertbrand = $brand->insert_brand($brandName);
        
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm thương hiệu</h2>
        <div class="block copyblock">
            <?php
                if(isset($insertbrand)){
                    echo $insertbrand;
                }
                ?>
            <form action='brandadd.php' method="POST">
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" name="brandName" placeholder="Enter brand Name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-info" name="submit" Value="Thêm mới" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php require 'inc/footer.php';?>