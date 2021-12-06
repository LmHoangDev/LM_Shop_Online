<?php require 'inc/header.php';?>
<?php require 'inc/sidebar.php';?>
<?php require '../classes/brand.php'?>
<?php
    $brand = new brand();
    if (isset($_GET['delId'])) {
        $id = $_GET['delId'];
        $brandDel = $brand->delete_brand($id);
        # code...
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách thương hiệu</h2>
        <div class="block">
            <?php 
                if(isset($brandDel)){
                    echo $brandDel;
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
                        $show_brande = $brand->show_brand();
                            if($show_brande){
                                $i = 0;
                                while($result = $show_brande->fetch_assoc()){
                                    $i++;
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i ?></td>
                                <td><?php
                                    echo $result['brandName']
                                ?>
                                </td>
                                <td>
                                    <a href="brandedit.php?brandId=<?php echo $result['brandId'] ?>">Edit</a> || 
                                    <a href="?delId=<?php echo $result['brandId'] ?>" onclick = "return confirm('Are you want to delete?')">Delete</a>
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