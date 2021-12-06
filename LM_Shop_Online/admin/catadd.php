<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php require '../classes/category.php' ?>
<?php
    $cat = new category();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $catName = $_POST['catName'];
       
        $insertCat = $cat->insert_category($catName);
        
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm danh mục</h2>
        <div class="block copyblock">
            <?php
                if(isset($insertCat)){
                    echo $insertCat;
                }
                ?>
            <form action='catadd.php' method="POST">
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" name="catName" placeholder="Enter Category Name..." class="medium" />
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