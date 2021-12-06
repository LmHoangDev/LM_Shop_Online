<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php require '../classes/category.php'?>
<?php
    $cat = new category();
    if (isset($_GET['delId'])) {
        $id = $_GET['delId'];
        $catDel = $cat->delete_category($id);
        # code...
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách danh mục</h2>
        <div class="block">
            <?php 
                if(isset($catDel)){
                    echo $catDel;
                }
            ?>
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên danh mục</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $show_cate = $cat->show_category();
                            if($show_cate){
                                $i = 0;
                                while($result = $show_cate->fetch_assoc()){
                                    $i++;
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i ?></td>
                                <td><?php
                                    echo $result['catName']
                                ?>
                                </td>
                                <td>
                                    <a href="catedit.php?catId=<?php echo $result['catId'] ?>">Edit</a> || 
                                    <a href="?delId=<?php echo $result['catId'] ?>" onclick = "return confirm('Are you want to delete?')">Delete</a>
                                </td>
                            </tr>
                    <?php 
                    }}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    setupLeftMenu();

    $('.datatable').dataTable();
    setSidebarHeight();
});
</script>
<?php require 'inc/footer.php';?>